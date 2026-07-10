<?php
/*
 * Template Name: 会社概要
 */
get_header(); ?>

<!-- Page Header -->
<section class="page-header" style="height: 250px;">
    <div class="page-header-bg"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/higashinanamatsu1.JPG');">
    </div>
    <div class="page-header-overlay"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(203, 221, 0, 0.4) 100%);"></div>
    <div class="container text-center" style="z-index: 1;">
        <h1 class="page-title">会社概要<span class="ja">Company Profile</span></h1>
    </div>
</section>

<!-- Breadcrumbs -->
<nav class="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li>></li>
            <li>会社概要</li>
        </ul>
    </div>
</nav>

<!-- Company Information -->
<section class="section company-section">
    <div class="container container-narrow">
        <div class="section-title">
            <span class="subtitle">About Us</span>
            <h3>企業情報</h3>
        </div>

        <div class="company-table-wrapper">
            <table class="company-table">
                <tbody>
                    <tr>
                        <th>社名</th>
                        <td>株式会社ミュウシード</td>
                    </tr>
                    <tr>
                        <th>本社所在地</th>
                        <td>
                            〒660-0051<br>
                            兵庫県尼崎市東七松町1-8-8
                        </td>
                    </tr>
                    <tr>
                        <th>TEL・FAX</th>
                        <td>
                            TEL：06-4950-4565<br>
                            FAX：06-4950-4514
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>平成22年10月</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>990万円</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>
                            <ul>
                                <li>高齢者向け寮の運営・管理</li>
                                <li>訪問介護事業</li>
                                <li>保育事業</li>
                            </ul>
                            <div class="related-facility mt-4">
                                <strong>[関連施設]</strong><br>
                                夢み けま デイサービスセンター：<br>
                                <a href="http://yumemi-day.trinity.gr.jp" target="_blank"
                                    rel="noopener noreferrer">http://yumemi-day.trinity.gr.jp</a><br>
                                夢みKIDS：<br>
                                <a href="https://yumemi-kids.com/" target="_blank"
                                    rel="noopener noreferrer">https://yumemi-kids.com/</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>役員</th>
                        <td>代表取締役 大島慎司</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Google Maps Embed for Headquarters -->
        <div class="map-wrapper mt-5"
            style="border-radius: var(--border-radius); overflow: hidden; box-shadow: var(--box-shadow-soft);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.69741217036!2d135.39578051276023!3d34.73749718118225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e8f33d7b819f%3A0xc6cb557ab4a6c8e9!2z44CSNjYwLTAwNTEg5YW15bqr55yM5bC85bSO5bSO5biC5p2x5LiD5p2-55S677yR5LiB55uu77yY4oiS77yY!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<section id="contact" class="cta-contact section">
    <div class="container text-center">
        <h3>お問い合わせ・ご相談</h3>
        <p>入居に関するご質問や見学のお申し込みなど、<br>お気軽にお問い合わせください。</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">お問い合わせフォームへ</a>
    </div>
</section>
</main>

<?php get_footer(); ?>