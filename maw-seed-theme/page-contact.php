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
                <?php
                // Contact Form 7「お問い合わせフォーム」をタイトルで解決して出力。
                // 管理画面でこのタイトルのフォームを作成すると自動で表示される（SETUP.md参照）。
                echo maw_seed_render_cf7( 'お問い合わせフォーム' );
                ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>