<?php
/*
 * Template Name: 大庄北
 */
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 300px;">
        <div class="page-header-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/hero_bg.png');">
        </div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(203, 221, 0, 0.5) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h2 class="page-title">夢み寮 大庄北<span class="ja">Oshokita Facility</span></h2>
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
                <li>大庄北</li>
            </ul>
        </div>
    </nav>

    <!-- Facility Intro Section -->
    <section class="facility-intro section">
        <div class="container">
            <div class="intro-content text-center">
                <h3 class="facility-catchphrase">阪急神戸線「園田駅」より徒歩15分。<br>安心とあたたかさに包まれた暮らしを提供します。</h3>
                <p class="mt-4">
                    「夢み寮 大庄北」は、認知症対応・24時間介護付きの安心な住環境を提供する住宅型有料老人ホームです。<br>
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
            <!-- 仮の写真または元サイトの画像を使用 -->
            <div class="gallery-grid mt-4">
                <div class="gallery-item">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oshokita1.JPG"
                        alt="夢み寮 大庄北 施設写真1">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oshokita3.JPG"
                        alt="夢み寮 大庄北 施設写真2" style="object-position: center top;">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oshokita4.JPG"
                        alt="夢み寮 大庄北 施設写真3">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oshokita5.JPG"
                        alt="夢み寮 大庄北 施設写真4">
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
                            <td>夢み寮 大庄北</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒660-0063 兵庫県尼崎市大庄北3-1-23</td>
                        </tr>
                        <tr>
                            <th>TEL / FAX</th>
                            <td>TEL：06-6412-3444 &nbsp;&nbsp; FAX：06-6415-6889</td>
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
                            <td>平成29年11月1日</td>
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
                <p class="access-train"><i class="fa-solid fa-train-subway"></i> 阪急神戸線「園田駅」より徒歩15分</p>
            </div>

            <div class="map-wrapper mt-4">
                <!-- Google Maps Iframe for 兵庫県尼崎市大庄北3-1-23 -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4326581977114!2d135.39702221276066!3d34.744577481109406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e88ba97f1f0b%3A0xc3105fd9c8eb44c2!2z44CSNjYwLTAwNjMg5YW15bqr55yM5bC85bSO5bSO5biC5aSn5bqE5YyX77yT5LiB55uu77yR4oiS77yS77yT!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
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
            <p>「夢み寮 大庄北」に関するご相談や見学のお申し込みなど、<br>お気軽にお問い合わせください。</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">お問い合わせフォームへ</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>