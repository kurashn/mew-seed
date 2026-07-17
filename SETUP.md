# mew-seed.com WordPress化・本番公開手順

株式会社ミュウシード公式サイトのWordPress公開手順書。
テーマは `maw-seed-theme/`、対象ドメインは **https://mew-seed.com/**。

---

## 【本番環境の現状】さくらインターネット・既存WPのリニューアル（2026-07-17調査）

- 本番: https://mew-seed.com/ は**稼働中のWordPress**（さくら／nginx）
- **WP本体は `/wp/` サブディレクトリ設置**（サイトURLはルート）。テーマの設置先は
  `（ドキュメントルート）/wp/wp-content/themes/`
- 現行テーマのディレクトリ名は `mew-seed` → 新テーマは `maw-seed-theme` なので**FTPアップしても現行サイトには一切影響しない**（有効化するまで不活性）
- 現行サイトのSEO状態: OGPなし／sitemapなし（404）／robots.txt実質なし／
  meta descriptionが旧施設構成（けま・深江北）のまま。**noindexは無し＝インデックスされている**ので、リニューアル時も絶対にnoindexにしないこと

### さくらでのリニューアル手順（FTP起点）

1. **FTPでテーマをアップロード**
   - 接続情報: さくらのコントロールパネル「サーバー情報」記載のFTPサーバー・アカウント
   - `maw-seed-theme/` フォルダごと `（ドキュメントルート）/wp/wp-content/themes/` へアップ
   - この時点では何も起きない（安全）
2. **管理アクセスの回復**（テーマ有効化・ページ作成に必須。いずれか一つ）
   - **方法A（推奨・さくらコンパネのみで完結）**: FTPで `/wp/wp-config.php` をダウンロード→DB名・ユーザー・パスワードを確認→さくらコントロールパネルの**phpMyAdmin**にそのDB情報でログイン→ `wp_users` テーブルの管理者行の `user_pass` を新パスワードのMD5値に更新（phpMyAdminの関数欄でMD5を選択）→ `https://mew-seed.com/wp/wp-login.php` からログイン
   - **方法B（SSHが使える場合）**: さくらはFTPと同じアカウントでSSH可能（プラン要確認）。WP-CLIを設置し `wp user list` → `wp user update <ID> --user_pass=新パスワード`。以後 `setup-wp.sh` も実行できて最速
   - **方法C**: 現行サイトの制作会社・前任者にログイン情報を確認
3. **切り替え作業**（管理画面またはWP-CLI）
   - 外観 > テーマ >「Maw Seed」を有効化
   - 固定ページ11枚をスラッグ通りに作成（§3の表）、表示設定でフロント=home・投稿=news
   - カテゴリ4種作成、既存の古い投稿は整理（下書きに戻す等）、新2記事を投稿
   - CF7フォーム2種作成（§4）
   - **設定 > 表示設定「検索エンジンでの表示」にチェックが入っていないことを確認**（現行サイトはインデックスされているため、チェックすると検索から消える）
4. **旧テーマの温存**: 現行テーマ `mew-seed` は削除せず残す（問題発生時に外観>テーマから即時切り戻せる）
5. robots.txt / llms.txt（リポジトリ直下のもの）をFTPでドキュメントルートへ設置（任意・推奨）

> ⚠️ 現行テーマ `mew-seed` のフォルダに新テーマのファイルを**上書きする方法は厳禁**。
> ページ・フォームが未作成のまま即時切り替わり、本番が壊れる。

---

## 全体の流れ（新規構築の場合）

1. サーバーにWordPressをインストール
2. テーマ `maw-seed-theme` をアップロード
3. `setup-wp.sh` を実行（ページ・カテゴリ・記事・設定を自動投入）
4. Contact Form 7 のフォーム2種を作成（下記定義を貼り付け）
5. 動作確認 → DNS切り替え → 公開設定

---

## 1. WordPressインストール

- サーバーの簡単インストール機能（エックスサーバー等）またはWP-CLIで導入
- **URL**: `https://mew-seed.com/`（SSL必須。サーバー側で無料SSLを有効化）
- サイトタイトル: `株式会社ミュウシード`
- **インストール直後に「設定 > 表示設定 > 検索エンジンでの表示」にチェックを入れる**（構築中の誤インデックス防止。公開時に外す）

## 2. テーマ配置

```bash
# リポジトリの maw-seed-theme/ をそのままテーマディレクトリへ
scp -r maw-seed-theme/ サーバー:/path/to/wp-content/themes/
```

またはローカルで `maw-seed-theme` をzip圧縮し、管理画面「外観 > テーマ > 新規追加 > テーマのアップロード」から。

## 3. 自動セットアップ（WP-CLI）

```bash
# WordPressルートで実行
bash setup-wp.sh
```

これで以下が完了する:

| 項目 | 内容 |
|---|---|
| テーマ有効化 | maw-seed-theme |
| 基本設定 | サイト名／タイムゾーンAsia/Tokyo／日付形式 Y.m.d／パーマリンク `/%postname%/` |
| カテゴリ | お知らせ(info)・イベント(event)・ブログ(blog)・採用ブログ(recruit) ※スラッグはテーマのバッジ色クラス cat-* と対応 |
| 固定ページ11枚 | home / news / company / daimotsu / higashinanamatsu / taisho / flow / contact / recruit / entry / privacy — スラッグ一致で `page-<slug>.php` テンプレートが自動適用 |
| 表示設定 | フロントページ=home、投稿ページ=news |
| 投稿2件 | 「ホームページをリニューアルしました」（お知らせ）／「採用ページをリニューアルしました」（採用ブログ） |
| CF7 | プラグインをインストール・有効化 |
| 掃除 | Hello World等の初期コンテンツ削除 |

> WP-CLIが使えない場合は、上記の表と同じ内容を管理画面から手動で設定する。
> 固定ページは「タイトル＋スラッグ」を正確に作れば、テンプレートは自動で当たる（テンプレート選択は不要）。

## 4. Contact Form 7 フォーム作成

管理画面「お問い合わせ > 新規追加」で以下の**2つ**を作成。
**フォームのタイトルは完全一致必須**（テーマがタイトルでフォームを探すため。IDは何番でもよい）。

### 4-1. タイトル: `お問い合わせフォーム`

「フォーム」タブに貼り付け:

```
<div class="form-group row">
    <label class="form-label col">お名前 <span class="required">必須</span></label>
    <div class="form-control-wrap col">[text* your-name class:form-control placeholder "例：山田 太郎"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">ふりがな <span class="required">必須</span></label>
    <div class="form-control-wrap col">[text* your-kana class:form-control placeholder "例：やまだ たろう"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">メールアドレス <span class="required">必須</span></label>
    <div class="form-control-wrap col">[email* your-email class:form-control placeholder "例：info@example.com"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">電話番号</label>
    <div class="form-control-wrap col">[tel your-tel class:form-control placeholder "例：090-1234-5678"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">お問い合わせ種別 <span class="required">必須</span></label>
    <div class="form-control-wrap col">
        <div class="select-wrapper">[select* your-subject class:form-control first_as_label "選択してください" "入居に関するご相談" "見学のお申し込み" "その他のお問い合わせ"]</div>
    </div>
</div>
<div class="form-group row">
    <label class="form-label col">お問い合わせ内容 <span class="required">必須</span></label>
    <div class="form-control-wrap col">[textarea* your-message class:form-control placeholder "ご質問やご相談内容をご記入ください。"]</div>
</div>
<div class="form-consent text-center">
    [acceptance your-consent] <a href="/privacy/" target="_blank" class="policy-link">プライバシーポリシー</a>に同意します [/acceptance]
</div>
<div class="form-submit text-center">
    [submit class:btn-primary "送信する"]
</div>
```

「メール」タブ:
- 送信先: `info@mew-seed.com`（※実際の受信用アドレスに変更）
- 題名: `【HPお問い合わせ】[your-subject]（[your-name]様）`
- メッセージ本文:

```
ホームページからお問い合わせがありました。

■お名前: [your-name]（[your-kana]）
■メール: [your-email]
■電話番号: [your-tel]
■種別: [your-subject]

■内容:
[your-message]
```

### 4-2. タイトル: `エントリーフォーム`

「フォーム」タブに貼り付け:

```
<div class="form-group row">
    <label class="form-label col">お名前 <span class="required">必須</span></label>
    <div class="form-control-wrap col">[text* your-name class:form-control placeholder "例：山田 太郎"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">ふりがな <span class="required">必須</span></label>
    <div class="form-control-wrap col">[text* your-kana class:form-control placeholder "例：やまだ たろう"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">メールアドレス <span class="required">必須</span></label>
    <div class="form-control-wrap col">[email* your-email class:form-control placeholder "例：info@example.com"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">電話番号 <span class="required">必須</span></label>
    <div class="form-control-wrap col">[tel* your-tel class:form-control placeholder "例：090-1234-5678"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">応募種別 <span class="required">必須</span></label>
    <div class="form-control-wrap col">
        <div class="select-wrapper">[select* your-entry-type class:form-control first_as_label "選択してください" "正社員希望" "パート希望" "まずは見学したい" "その他（ご質問など）"]</div>
    </div>
</div>
<div class="form-group row">
    <label class="form-label col">保有資格など</label>
    <div class="form-control-wrap col">[text your-license class:form-control placeholder "例：初任者研修、介護福祉士 など"]</div>
</div>
<div class="form-group row">
    <label class="form-label col">自己PR・ご希望など</label>
    <div class="form-control-wrap col">[textarea your-message class:form-control placeholder "志望動機、希望シフト、またはご質問などをご記入ください。"]</div>
</div>
<div class="form-consent text-center">
    [acceptance your-consent] <a href="/privacy/" target="_blank" class="policy-link">プライバシーポリシー</a>に同意します [/acceptance]
</div>
<div class="form-submit text-center">
    [submit class:btn-primary "応募する"]
</div>
```

「メール」タブ:
- 送信先: 採用担当アドレス（例: `recruit@mew-seed.com`）※要確認
- 題名: `【採用エントリー】[your-entry-type]（[your-name]様）`
- 本文は上記と同様に全フィールドを列挙

> フォーム未作成の間は、contact/entryページに自動で「電話案内」のフォールバックが表示される（サイトが壊れることはない）。

## 5. 動作確認チェックリスト

- [ ] トップ: ヒーロー・お知らせ2件（投稿から取得）・寮案内3施設・スタッフ紹介
- [ ] お知らせ一覧（/news/）: 2記事、カテゴリフィルタ、記事クリックで個別ページ
- [ ] 記事詳細: タイトル・日付・カテゴリバッジ・デフォルトアイキャッチ表示
- [ ] 施設3ページ: ヘッダー背景画像・写真ギャラリー・概要表・Googleマップ
- [ ] 採用ページ: タブ切替（3施設）・アコーディオン開閉・1日の流れタイムライン
- [ ] お問い合わせ/エントリー: フォーム表示・テスト送信・受信確認
- [ ] スマホ表示: バーガーメニュー・タイムライン縦積み・表の横スクロール
- [ ] 各ページの meta description / OGP / JSON-LD 出力（ソース表示で確認）

## 6. 公開（DNS切り替え後）

1. **設定 > 表示設定 >「検索エンジンでの表示」のチェックを外す**（最重要）
2. 外観 > カスタマイズ > サイト基本情報 > **サイトアイコン** にテーマ内 `favicon.png`（またはロゴの正方形版）を設定
3. Google Search Console にプロパティ登録 → サイトマップ `https://mew-seed.com/wp-sitemap.xml` を送信
4. `https://mew-seed.com/robots.txt`（WPが自動生成）にサイトマップが載ることを確認
5. OGP確認: [https://developers.facebook.com/tools/debug/](https://developers.facebook.com/tools/debug/) でトップURLをチェック
6. リポジトリ直下の `llms.txt` をドキュメントルートに設置（AI対策・任意）

## 補足

- 旧静的HTML（リポジトリ直下の *.html）はプレビュー用。本番はWordPressに一本化する
- 記事投稿の運用: カテゴリは4種（お知らせ/イベント/ブログ/採用ブログ）から選択。アイキャッチ未設定でもブランドのデフォルト画像が自動表示される
- 電話番号・住所を変更する場合: 固定ページ系はテーマ内 `page-*.php`、SEO情報は `functions.php` の該当箇所を修正
