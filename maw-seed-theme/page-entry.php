<?php
/*
 * Template Name: エントリーフォーム
 */
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 250px;">
        <div class="page-header-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/recruit_bg_new.jpg');">
        </div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(203, 221, 0, 0.4) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h1 class="page-title">エントリー<span class="ja">Entry</span></h1>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>エントリーフォーム</li>
            </ul>
        </div>
    </nav>

    <section class="section contact-section">
        <div class="container container-narrow">
            <div class="section-title">
                <span class="subtitle">Recruitment Entry</span>
                <h3>エントリーフォーム</h3>
                <p class="mt-4">
                    私たちと一緒に新しい介護の形を作りませんか？<br>
                    以下のフォームより必要事項をご記入の上、ご応募ください。<br>
                    まずは職場見学をしてみたい、という方も大歓迎です！（お電話 06-4950-4565 でも承っております）
                </p>
            </div>

            <div class="contact-form-wrapper mt-5">
                <?php
                // Contact Form 7「エントリーフォーム」をタイトルで解決して出力（SETUP.md参照）。
                echo maw_seed_render_cf7( 'エントリーフォーム' );
                ?>

                <!-- 
                Reference Original HTML structure for CF7 UI mapping:
                <div class="form-group row">
                    <label class="form-label col">お名前 <span class="required">必須</span></label>
                    <div class="form-control-wrap col">
                        [text* your-name class:form-control placeholder "例：山田 太郎"]
                    </div>
                </div>
                ...
                -->
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>