<?php
/*
 * Template Name: 投稿マニュアル
 *
 * クライアント向けブログ投稿マニュアル（スラッグ posting-manual の固定ページに自動適用）。
 * サイトの見た目とは独立したスタンドアロンページとして出力する。
 * 検索エンジンには載せない（noindex + functions.php でサイトマップからも除外）。
 */
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>ブログ記事のつくりかた｜夢み寮ホームページ かんたんマニュアル</title>
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png">
<style>
  :root {
    --green: #A8B800;
    --green-light: #f4f7e0;
    --pink: #F19EC2;
    --ink: #333;
    --gray: #777;
    --red: #e5484d;
  }
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body {
    font-family: "Hiragino Maru Gothic ProN", "Hiragino Sans", "Yu Gothic", sans-serif;
    color: var(--ink);
    line-height: 1.9;
    background: #fff;
    font-size: 17px;
  }
  .page { max-width: 860px; margin: 0 auto; padding: 30px 24px 80px; }

  /* 表紙 */
  .cover { text-align: center; padding: 60px 20px 40px; border-bottom: 4px solid var(--green); margin-bottom: 40px; }
  .cover .lead { color: var(--gray); font-size: 15px; letter-spacing: 2px; }
  .cover h1 { font-size: 34px; margin: 10px 0 6px; }
  .cover h1 span { color: var(--green); }
  .cover .sub { font-size: 16px; color: var(--gray); }

  .notice {
    background: var(--green-light); border-radius: 12px; padding: 20px 26px; margin: 26px 0;
  }
  .notice strong { color: #6d7a00; }

  .memo {
    border: 2px dashed #bbb; border-radius: 12px; padding: 20px 26px; margin: 20px 0;
  }
  .memo table { width: 100%; border-collapse: collapse; table-layout: fixed; }
  .memo td { padding: 10px 6px; border-bottom: 1px solid #ddd; }
  .memo td:first-child { width: 11em; font-weight: bold; }
  .memo .blank { color: #bbb; letter-spacing: 3px; word-break: break-all; }

  /* ステップ */
  .step { margin: 55px 0; page-break-inside: avoid; }
  .step-head { display: flex; align-items: center; gap: 16px; margin-bottom: 14px; }
  .step-num {
    flex-shrink: 0; width: 64px; height: 64px; border-radius: 50%;
    background: var(--green); color: #fff; font-weight: bold;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    font-size: 24px; line-height: 1.1;
  }
  .step-num small { font-size: 11px; font-weight: normal; }
  .step h2 { font-size: 26px; }
  .step img {
    width: 100%; height: auto; border: 1px solid #ddd; border-radius: 10px;
    margin: 14px 0; box-shadow: 0 3px 10px rgba(0,0,0,.06);
  }
  ol.marks { list-style: none; margin: 10px 0; }
  ol.marks li { padding: 6px 0 6px 48px; position: relative; }
  ol.marks li::before {
    content: attr(data-n); position: absolute; left: 0; top: 8px;
    width: 32px; height: 32px; border-radius: 50%; background: var(--red); color: #fff;
    font-weight: bold; display: flex; align-items: center; justify-content: center; font-size: 17px;
  }
  .tip {
    background: #fff8e6; border-left: 5px solid #f0c040; border-radius: 0 10px 10px 0;
    padding: 14px 20px; margin: 14px 0; font-size: 15.5px;
  }
  .tip::before { content: "💡 ワンポイント　"; font-weight: bold; }
  .safe {
    background: #edf7ed; border-left: 5px solid #2da44e; border-radius: 0 10px 10px 0;
    padding: 14px 20px; margin: 14px 0; font-size: 15.5px;
  }
  .safe::before { content: "😊 あんしん　"; font-weight: bold; color: #1a7f37; }

  /* カテゴリ表 */
  table.cat { width: 100%; border-collapse: collapse; margin: 14px 0; font-size: 16px; }
  table.cat th, table.cat td { border: 1px solid #ddd; padding: 12px 14px; text-align: left; }
  table.cat th { background: var(--green-light); white-space: nowrap; }
  .badge { display: inline-block; padding: 2px 14px; border-radius: 20px; color: #fff; font-size: 14px; font-weight: bold; white-space: nowrap; }
  .b-info { background: #CBDD00; } .b-event { background: #F19EC2; }
  .b-blog { background: #7ec4e8; } .b-recruit { background: #e8608a; }

  /* FAQ */
  .faq { margin: 55px 0; }
  .faq h2 { font-size: 26px; border-bottom: 3px solid var(--green); padding-bottom: 8px; margin-bottom: 20px; }
  .qa { margin: 18px 0; page-break-inside: avoid; }
  .qa .q { font-weight: bold; font-size: 17px; padding-left: 34px; position: relative; }
  .qa .q::before { content: "Q"; position: absolute; left: 0; top: 0; color: var(--pink); font-size: 20px; font-weight: bold; }
  .qa .a { padding-left: 34px; position: relative; color: #444; margin-top: 4px; }
  .qa .a::before { content: "A"; position: absolute; left: 0; top: 0; color: var(--green); font-size: 20px; font-weight: bold; }

  .footer-note { margin-top: 60px; padding: 24px; background: #f7f7f7; border-radius: 12px; font-size: 15px; color: var(--gray); }

  /* スマホ対応 */
  @media (max-width: 600px) {
    body { font-size: 15px; overflow-wrap: break-word; }
    .page { padding: 16px 14px 60px; }
    .cover { padding: 32px 6px 22px; }
    .cover .lead { font-size: 12px; letter-spacing: 1px; }
    .cover h1 { font-size: 25px; }
    .cover .sub { font-size: 13.5px; }
    .notice, .memo { padding: 14px 16px; }
    .memo table { table-layout: auto; }
    .memo tr { display: block; padding: 8px 0; border-bottom: 1px solid #ddd; }
    .memo td { display: block; width: auto !important; padding: 2px 0; border-bottom: none; }
    .memo .blank { letter-spacing: 2px; }
    .step { margin: 40px 0; }
    .step-head { gap: 10px; }
    .step-num { width: 48px; height: 48px; font-size: 18px; }
    .step-num small { font-size: 9px; }
    .step h2 { font-size: 19px; }
    ol.marks li { padding: 5px 0 5px 38px; }
    ol.marks li::before { width: 27px; height: 27px; font-size: 14px; top: 8px; }
    .tip, .safe { font-size: 13.5px; padding: 12px 14px; }
    table.cat { font-size: 13.5px; }
    table.cat th, table.cat td { padding: 8px 10px; }
    table.cat th { white-space: normal; }
    .badge { font-size: 12px; padding: 2px 10px; }
    .faq h2 { font-size: 20px; }
    .qa .q { font-size: 15px; }
    .qa .a { font-size: 14.5px; }
  }

  @media print {
    body { font-size: 13px; }
    .page { max-width: none; padding: 10mm; }
    .step { margin: 30px 0; }
    .cover { padding: 30px 10px 20px; }
  }
</style>
</head>
<body>
<div class="page">

  <!-- ================= 表紙 ================= -->
  <div class="cover">
    <p class="lead">夢み寮ホームページ　かんたん操作マニュアル</p>
    <h1>ブログ記事の<span>つくりかた</span></h1>
    <p class="sub">はじめてでも大丈夫です。この1冊のとおりに進めるだけで記事を公開できます。</p>
  </div>

  <div class="notice">
    <strong>このマニュアルでできること</strong><br>
    ホームページの「お知らせ」に、日々のできごとやイベントの記事を、写真つきで自分で投稿できるようになります。
    パソコンが苦手でも大丈夫です。ひとつずつ、画面の絵と一緒に説明します。
  </div>

  <div class="memo">
    <strong>🔑 はじめに、この3つをメモしておきましょう</strong>（管理担当者からお伝えしています）
    <table>
      <tr><td>ログインページのURL</td><td class="blank">https://mew-seed.com/____________</td></tr>
      <tr><td>ユーザー名</td><td class="blank">________________</td></tr>
      <tr><td>パスワード</td><td class="blank">________________</td></tr>
    </table>
    <small>※ログインページはお気に入り（ブックマーク）に登録しておくと便利です。</small>
  </div>

  <!-- ================= STEP 1 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>1</div>
      <h2>ログインする</h2>
    </div>
    <p>メモしたログインページのURLをひらくと、この画面が出ます。</p>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/01-login.png" alt="ログイン画面">
    <ol class="marks">
      <li data-n="1"><strong>ユーザー名</strong>を入力します</li>
      <li data-n="2"><strong>パスワード</strong>を入力します</li>
      <li data-n="3">左の画像に書かれている<strong>「ひらがな」をそのまま入力</strong>します（いたずら防止のしくみです）</li>
      <li data-n="4"><strong>「ログイン」ボタン</strong>を押します</li>
    </ol>
    <div class="tip">ひらがなを打ちまちがえてもあわてなくて大丈夫です。新しいひらがなが表示されるので、もう一度入力すればOKです。</div>
  </div>

  <!-- ================= STEP 2 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>2</div>
      <h2>「新しい記事」の画面をひらく</h2>
    </div>
    <p>ログインすると、管理画面（ダッシュボード）が表示されます。</p>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/02-menu.png" alt="投稿メニュー">
    <ol class="marks">
      <li data-n="1">左のメニューの<strong>「投稿」</strong>にマウスをのせます</li>
      <li data-n="2">出てきた<strong>「新規投稿を追加」</strong>をクリックします</li>
    </ol>
  </div>

  <!-- ================= STEP 3 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>3</div>
      <h2>タイトルと本文を書く</h2>
    </div>
    <p>まっしろな編集画面がひらきます。手紙を書くのと同じ感覚でOKです。</p>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/03-editor.png" alt="記事の編集画面">
    <ol class="marks">
      <li data-n="1">いちばん上の大きな欄に<strong>タイトル</strong>を書きます（例：「節分の豆まきをしました」）</li>
      <li data-n="2">その下をクリックして、<strong>本文</strong>を書きます。Enterキーで改行できます</li>
      <li data-n="3">写真を入れたいときは<strong>「＋」ボタン</strong>を使います（くわしくは次のステップ）</li>
    </ol>
    <div class="tip">本文は2〜4行くらいの短い文章でも十分です。「いつ・どこで・なにをした・どんな様子だった」が書けたら立派な記事です。</div>
  </div>

  <!-- ================= STEP 4 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>4</div>
      <h2>写真を入れる</h2>
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/04-image.png" alt="画像の挿入">
    <ol class="marks">
      <li data-n="1">本文の下にある<strong>「＋」ボタン</strong>をクリックします</li>
      <li data-n="2">出てきた一覧から<strong>「画像」</strong>を選びます</li>
      <li data-n="3"><strong>「アップロード」</strong>を押して、パソコンに保存してある写真を選びます</li>
    </ol>
    <div class="tip">写真は1〜3枚あると記事がぐっと華やかになります。入居者様が写っている写真は、ご本人・ご家族の同意があるものだけを使いましょう。</div>
  </div>

  <!-- ================= STEP 5 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>5</div>
      <h2>カテゴリを選ぶ</h2>
    </div>
    <p>記事の「種類」を選びます。画面の右側を見てください。</p>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/05-category.png" alt="カテゴリ選択">
    <ol class="marks">
      <li data-n="1">右上の<strong>設定ボタン</strong>を押すと右側にパネルがひらきます（最初からひらいていることもあります）</li>
      <li data-n="2"><strong>「カテゴリー」</strong>の中から、あてはまるものに<strong>1つチェック</strong>を入れます</li>
      <li data-n="3">「アイキャッチ画像」は記事の顔になる写真です（設定しなくてもOK）</li>
    </ol>
    <table class="cat">
      <tr><th>カテゴリ</th><th>こんな記事のときに選ぶ</th></tr>
      <tr><td><span class="badge b-info">お知らせ</span></td><td>営業案内・重要なご連絡など、かしこまった内容</td></tr>
      <tr><td><span class="badge b-event">イベント</span></td><td>節分・クリスマス会・お誕生日会などの行事の様子</td></tr>
      <tr><td><span class="badge b-blog">ブログ</span></td><td>日々のできごと・スタッフの気づきなど、気軽な話題</td></tr>
      <tr><td><span class="badge b-recruit">採用ブログ</span></td><td>採用・求人に関する話題（研修の様子・スタッフ紹介など）</td></tr>
    </table>
    <div class="safe">アイキャッチ画像を設定しなくても、「夢み寮」デザインのきれいな画像が自動で表示されます。迷ったら未設定のままでOKです。</div>
  </div>

  <!-- ================= STEP 6 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>6</div>
      <h2>公開する（ボタンを2回押します）</h2>
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/06-publish.png" alt="公開ボタン">
    <ol class="marks">
      <li data-n="1">右上の青い<strong>「公開」ボタン</strong>を押します</li>
      <li data-n="2">「公開してもよいですか？」と聞かれるので、<strong>もう一度「公開」</strong>を押します</li>
    </ol>
    <p>「公開しました！」と表示されたら完了です🎉 「投稿を表示」を押すと、実際のホームページで記事を確認できます。</p>
    <div class="safe">まちがえて公開してしまっても、あとから何度でも直せます（STEP 7へ）。とりかえしのつかない失敗はありませんので、安心して押してください。</div>
  </div>

  <!-- ================= STEP 7 ================= -->
  <div class="step">
    <div class="step-head">
      <div class="step-num"><small>STEP</small>7</div>
      <h2>あとから記事を直す・消す</h2>
    </div>
    <p>左メニューの「投稿」→「投稿一覧」をひらくと、これまでの記事が並んでいます。</p>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manual/07-edit.png" alt="投稿一覧">
    <ol class="marks">
      <li data-n="1">直したい記事のタイトルにマウスをのせると出てくる<strong>「編集」</strong>をクリック → 内容を直して、右上の「更新」ボタンを押せば反映されます</li>
    </ol>
    <p>記事を消したいときは、同じ場所の<strong>「ゴミ箱へ移動」</strong>を押します（ゴミ箱からは30日間もとに戻せます）。</p>
  </div>

  <!-- ================= FAQ ================= -->
  <div class="faq">
    <h2>こまったときは（よくある質問）</h2>

    <div class="qa">
      <p class="q">書いている途中で保存したい（まだ公開したくない）</p>
      <p class="a">右上の「公開」の左にある<strong>「下書き保存」</strong>を押してください。公開されずに保存され、続きは「投稿一覧」からいつでも書けます。</p>
    </div>

    <div class="qa">
      <p class="q">まちがえて公開してしまった！</p>
      <p class="a">あわてなくて大丈夫です。記事をひらいて右側パネルの「表示状態：公開」→「非公開」に変えるか、内容を直して「更新」すればOKです。</p>
    </div>

    <div class="qa">
      <p class="q">ログインできない</p>
      <p class="a">①ユーザー名・パスワードの打ちまちがい（大文字・小文字にご注意）②ひらがな画像認証の入力ミス、が多いです。何度やってもだめな場合は、無理せず下記の担当者までご連絡ください。</p>
    </div>

    <div class="qa">
      <p class="q">写真が大きすぎ・小さすぎに見える</p>
      <p class="a">そのままで大丈夫です。ホームページ側が自動でちょうどよい大きさに整えます。</p>
    </div>

    <div class="qa">
      <p class="q">このマニュアルと違う画面が出てきた</p>
      <p class="a">WordPressの更新で見た目が少し変わることがありますが、「投稿」→「新規投稿を追加」→「タイトル・本文」→「公開」という流れは同じです。分からなくなったら担当者へお気軽にどうぞ。</p>
    </div>
  </div>

</div>
</body>
</html>
