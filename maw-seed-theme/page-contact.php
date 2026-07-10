<?php
/*
 * Template Name: お問い合わせ
 */
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 250px;">
        <div class="page-header-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/image5.jpeg');">
        </div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(203, 221, 0, 0.4) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h1 class="page-title">お問い合わせ<span class="ja">Contact Us</span></h1>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>お問い合わせ</li>
            </ul>
        </div>
    </nav>

    <section class="section contact-section">
        <div class="container container-narrow">
            <div class="section-title">
                <span class="subtitle">Contact</span>
                <h3>お問い合わせフォーム</h3>
                <p class="mt-4">
                    入居に関するご相談や見学のお申し込み、その他ご質問など、<br>
                    下記フォームよりお気軽にお問い合わせください。<br>
                    お電話（06-4950-4565 / 平日 9:00〜18:00）でも承っております。
                </p>
            </div>

            <div class="contact-form-wrapper">
                <!-- 
                        このフォーム内の構造は Contact Form 7（CF7）で出力される標準的なHTMLを想定しています。
                        WordPress組み込み時は、この <form> タグの内側をそっくりそのままCF7の管理画面の「フォーム」欄に貼り付け、
                        <input> や <textarea> などをCF7のショートコード（[text* your-name] など）に置き換えてください。
                    -->
                <form action="#" method="post" class="wpcf7-form">

                    <div class="form-group row">
                        <label class="form-label col">お名前 <span class="required">必須</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [text* your-name class:form-control placeholder "例：山田 太郎"] -->
                            <input type="text" name="your-name" class="form-control" placeholder="例：山田 太郎" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col">ふりがな <span class="required">必須</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [text* your-kana class:form-control placeholder "例：やまだ たろう"] -->
                            <input type="text" name="your-kana" class="form-control" placeholder="例：やまだ たろう" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col">メールアドレス <span class="required">必須</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [email* your-email class:form-control placeholder "例：info@example.com"] -->
                            <input type="email" name="your-email" class="form-control" placeholder="例：info@example.com"
                                required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col">電話番号 <span class="optional">任意</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [tel your-tel class:form-control placeholder "例：090-1234-5678"] -->
                            <input type="tel" name="your-tel" class="form-control" placeholder="例：090-1234-5678">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col">お問い合わせ種別 <span class="required">必須</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [select* your-subject class:form-control "入居に関するご相談" "見学のお申し込み" "その他のお問い合わせ"] -->
                            <div class="select-wrapper">
                                <select name="your-subject" class="form-control" required>
                                    <option value="">選択してください</option>
                                    <option value="入居に関するご相談">入居に関するご相談</option>
                                    <option value="見学のお申し込み">見学のお申し込み</option>
                                    <option value="その他のお問い合わせ">その他のお問い合わせ</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col">お問い合わせ内容 <span class="required">必須</span></label>
                        <div class="form-control-wrap col">
                            <!-- CF7: [textarea* your-message class:form-control placeholder "ご質問やご相談内容をご記入ください。"] -->
                            <textarea name="your-message" class="form-control" rows="8" placeholder="ご質問やご相談内容をご記入ください。"
                                required></textarea>
                        </div>
                    </div>

                    <div class="form-group text-center mt-5">
                        <div class="privacy-policy-acceptance mb-5">
                            <!-- CF7: [acceptance your-consent] プライバシーポリシーに同意します [/acceptance] -->
                            <label>
                                <input type="checkbox" name="your-consent" required>
                                <a href="<?php echo esc_url(home_url('/privacy/')); ?>" target="_blank"
                                    class="policy-link">プライバシーポリシー</a>に同意します
                            </label>
                        </div>
                        <!-- CF7: [submit class:btn-primary class:btn-submit "送信する"] -->
                        <button type="submit" class="btn-primary btn-submit">送信する</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>