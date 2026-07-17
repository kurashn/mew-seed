#!/usr/bin/env bash
# =============================================================
# 株式会社ミュウシード（mew-seed.com）WordPress 初期セットアップ
# -------------------------------------------------------------
# 前提:
#   - WordPress本体がインストール・DB接続済みであること
#   - WP-CLI が使えること（サーバーのSSH上で実行）
#   - このリポジトリの maw-seed-theme/ を wp-content/themes/ に配置済みであること
# 使い方:
#   WordPressのルートディレクトリで  bash setup-wp.sh
#   （wp コマンドにパスが必要なら WP="php wp-cli.phar" などに変更）
# 冪等性: 既存のスラッグ/タイトルがあれば作成をスキップする
# =============================================================
set -euo pipefail
WP="${WP:-wp}"

echo "=== 1. テーマ有効化 ==="
$WP theme activate maw-seed-theme

echo "=== 2. 基本設定 ==="
$WP option update blogname "株式会社ミュウシード"
$WP option update blogdescription "尼崎市の住宅型有料老人ホーム「夢み寮」"
$WP option update timezone_string "Asia/Tokyo"
$WP option update date_format "Y.m.d"
# パーマリンク: 投稿名ベース
$WP option update permalink_structure "/%postname%/"
$WP rewrite flush --hard

echo "=== 3. カテゴリ作成（スラッグはテーマのCSSクラスと対応） ==="
create_cat() { # name slug
  if ! $WP term get category "$2" --by=slug >/dev/null 2>&1; then
    $WP term create category "$1" --slug="$2"
  else
    echo "skip category: $2"
  fi
}
create_cat "お知らせ"   "info"
create_cat "イベント"   "event"
create_cat "ブログ"     "blog"
create_cat "採用ブログ" "recruit"   # カテゴリURLは /category/recruit/ のため固定ページ /recruit/ と衝突しない
# 未分類は使わないため既定カテゴリを「お知らせ」に
INFO_ID=$($WP term get category info --by=slug --field=term_id)
$WP option update default_category "$INFO_ID"

echo "=== 4. 固定ページ作成（page-<slug>.php テンプレートが自動適用される） ==="
create_page() { # title slug
  if [ -z "$($WP post list --post_type=page --name="$2" --field=ID)" ]; then
    $WP post create --post_type=page --post_status=publish --post_title="$1" --post_name="$2"
  else
    echo "skip page: $2"
  fi
}
create_page "トップ"                 "home"
create_page "お知らせ"               "news"
create_page "会社概要"               "company"
create_page "夢み寮 だいもつ"        "daimotsu"
create_page "夢み寮 東七松"          "higashinanamatsu"
create_page "夢み寮 大庄北"          "taisho"
create_page "ご入居の流れ"           "flow"
create_page "お問い合わせ"           "contact"
create_page "採用情報"               "recruit"
create_page "エントリーフォーム"     "entry"
create_page "プライバシーポリシー"   "privacy"

echo "=== 5. フロントページ／投稿ページ設定 ==="
HOME_ID=$($WP post list --post_type=page --name=home --field=ID)
NEWS_ID=$($WP post list --post_type=page --name=news --field=ID)
$WP option update show_on_front "page"
$WP option update page_on_front "$HOME_ID"
$WP option update page_for_posts "$NEWS_ID"

echo "=== 6. 公開中の2記事を投稿として作成 ==="
if [ -z "$($WP post list --post_type=post --name=site-renewal --field=ID)" ]; then
  $WP post create --post_type=post --post_status=publish \
    --post_title="ホームページをリニューアルしました" \
    --post_name="site-renewal" \
    --post_date="2026-07-16 10:00:00" \
    --post_category="$INFO_ID" \
    --post_content="$(cat <<'HTML'
<p>いつも夢み寮をご利用いただき、誠にありがとうございます。</p>
<p>本日より、株式会社ミュウシード「夢み寮」の公式ホームページを全面リニューアルいたしました。</p>
<p>今回のリニューアルでは、各寮のご案内やご入居までの流れをより見やすく整理し、スマートフォンからも快適にご覧いただけるようになりました。施設の写真も新しくなっておりますので、ぜひ「寮案内」のページからご覧ください。</p>
<p>今後は、このお知らせ欄で各寮での日々の様子やイベントの情報などを発信してまいります。どうぞお楽しみに。</p>
<p>引き続き、株式会社ミュウシード・夢み寮をどうぞよろしくお願いいたします。</p>
HTML
)"
else
  echo "skip post: site-renewal"
fi

RECRUIT_CAT_ID=$($WP term get category recruit --by=slug --field=term_id)
if [ -z "$($WP post list --post_type=post --name=recruit-page-renewal --field=ID)" ]; then
  $WP post create --post_type=post --post_status=publish \
    --post_title="採用ページをリニューアルしました" \
    --post_name="recruit-page-renewal" \
    --post_date="2026-07-16 11:00:00" \
    --post_category="$RECRUIT_CAT_ID" \
    --post_content="$(cat <<'HTML'
<p>夢み寮の採用ページをリニューアルいたしました。</p>
<p>今回のリニューアルでは、スタッフの「ある1日の流れ」を日勤・夜勤それぞれのタイムラインでご紹介し、募集要項も見やすく整理しました。夢み寮で働くイメージが、より具体的に伝わる内容になっています。</p>
<p>夢み寮では現在、一緒に働く仲間を募集しています。介護のお仕事が初めての方やブランクのある方も、先輩スタッフが丁寧にサポートしますのでご安心ください。資格取得にかかる費用は会社が全額負担しており、働きながらキャリアアップを目指せる環境です。</p>
<p>「まずは職場を見てみたい」という方も大歓迎です。少しでもご興味をお持ちいただけましたら、採用情報ページからお気軽にお問い合わせください。皆さまからのご応募を心よりお待ちしています。</p>
HTML
)"
else
  echo "skip post: recruit-page-renewal"
fi

echo "=== 7. Contact Form 7 導入 ==="
$WP plugin install contact-form-7 --activate || echo "CF7の自動導入に失敗（管理画面から手動でインストールしてください）"
echo "※ フォーム2種（お問い合わせフォーム／エントリーフォーム）の作成は SETUP.md の定義を貼り付けてください"

echo "=== 8. 不要な初期コンテンツを削除 ==="
$WP post delete 1 --force 2>/dev/null || true   # Hello World
$WP post delete 2 --force 2>/dev/null || true   # サンプルページ
$WP post delete 3 --force 2>/dev/null || true   # プライバシーポリシー（下書き）

echo "=== 9. 表示確認用サマリ ==="
$WP option get show_on_front
$WP post list --post_type=page --fields=ID,post_title,post_name
$WP post list --post_type=post --fields=ID,post_title,post_name

echo ""
echo "✅ セットアップ完了。残りの手動作業は SETUP.md を参照:"
echo "   - CF7フォーム2種の作成（定義はSETUP.mdに記載）"
echo "   - 外観 > サイトアイコン に favicon 設定（テーマ内 favicon.png 利用可）"
echo "   - 公開時: 設定 > 表示設定 >「検索エンジンでの表示」のチェックを外す"
