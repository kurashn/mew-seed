<?php
/*
 * Template Name: だいもつ
 */
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 300px;">
        <div class="page-header-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-bg.jpg');">
        </div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(203, 221, 0, 0.5) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h1 class="page-title">住宅型有料老人ホーム 夢み寮 だいもつ<span class="ja">Daimotsu Facility</span></h1>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="<?php echo esc_url(home_url('/#guide')); ?>">寮案内</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>だいもつ</li>
            </ul>
        </div>
    </nav>

    <!-- Facility Intro Section -->
    <section class="facility-intro section">
        <div class="container">
            <div class="intro-content text-center">
                <h3 class="facility-catchphrase">阪神電車『大物駅』より徒歩1分。<br>令和7年4月、新しい夢み寮がオープンしました。</h3>
                <p class="mt-4">
                    「夢み寮 だいもつ」は、認知症対応・24時間介護付きの安心な住環境を提供する住宅型有料老人ホームです。<br>
                    全室個室のプライベート空間と、アットホームな共用リビング、そして夢みカフェを併設。<br>
                    利用者様一人ひとりが自分らしく、笑顔で暮らせるサポートを全力で行います。
                </p>
            </div>
        </div>
    </section>

    <!-- Facility Photo Gallery -->
    <section class="facility-gallery section">
        <div class="container container-narrow">
            <div class="section-title text-center">
                <span class="subtitle">Gallery</span>
                <h3>施設写真</h3>
            </div>
            <div class="gallery-grid mt-4">
                <div class="gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu1.jpg"
                        alt="夢み寮 だいもつ 施設写真1">
                </div>
                <div class="gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu2.jpg"
                        alt="夢み寮 だいもつ 施設写真2" style="object-position: center 30%;">
                </div>
                <div class="gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu3.jpg"
                        alt="夢み寮 だいもつ 施設写真3">
                </div>
                <div class="gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu4.jpg"
                        alt="夢み寮 だいもつ 施設写真4" style="object-position: center 30%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Details Table Section -->
    <section class="facility-details section bg-light">
        <div class="container container-narrow">
            <div class="section-title text-center">
                <span class="subtitle">Overview</span>
                <h3>施設概要</h3>
            </div>

            <div class="facility-table-wrapper mt-5">
                <table class="facility-table">
                    <tbody>
                        <tr>
                            <th>施設名称</th>
                            <td>住宅型有料老人ホーム 夢み寮 だいもつ</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒660-0828 兵庫県尼崎市東大物町1-5-27</td>
                        </tr>
                        <tr>
                            <th>TEL / FAX</th>
                            <td>TEL：06-6439-7070 &nbsp;&nbsp; FAX：06-6439-7088</td>
                        </tr>
                        <tr>
                            <th>居室数</th>
                            <td>19室（全室個室）トイレ完備</td>
                        </tr>
                        <tr>
                            <th>定員</th>
                            <td>19名</td>
                        </tr>
                        <tr>
                            <th>共用設備</th>
                            <td>食堂・リビング・浴室・トイレ 夢みカフェ併設</td>
                        </tr>
                        <tr>
                            <th>開設日</th>
                            <td>令和7年4月1日</td>
                        </tr>
                        <tr>
                            <th>入居条件</th>
                            <td>要介護1～5</td>
                        </tr>
                        <tr>
                            <th>備考</th>
                            <td>ヘルパーステーション事業所番号：2873010983</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Facility Access Section -->
    <section class="facility-access section">
        <div class="container container-narrow">
            <div class="section-title text-center">
                <span class="subtitle">Access</span>
                <h3>アクセス</h3>
            </div>

            <div class="access-info text-center mt-4">
                <p class="access-train"><i class="fa-solid fa-train-subway"></i> 阪神電車『大物駅』より徒歩1分</p>
            </div>

            <div class="map-wrapper mt-4">
                <!-- Google Maps Iframe for 兵庫県尼崎市東大物町1-5-27 -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.790937617631!2d135.42435741275988!3d34.71044458284534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e8fca7f7f3bd%3A0xeab4e1ee7c9dcacc!2z44CSNjYwLTA4Mjgg5YW15bqr55yM5bC85bSO5bSO5biC5p2x5aSn54mp55S677yR5LiB55uu77yV4oiS77yS77yX!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- CTA Contact -->
    <section id="contact" class="cta-contact section">
        <div class="container text-center">
            <h3>お問い合わせ・ご見学</h3>
            <p>「夢み寮 だいもつ」に関するご相談や見学のお申し込みなど、<br>お気軽にお問い合わせください。</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">お問い合わせフォームへ</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>