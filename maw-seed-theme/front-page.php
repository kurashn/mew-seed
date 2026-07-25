<?php get_header(); ?>


<main>
    <section class="hero">
        <div class="hero-bg">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <p class="hero-intro">高齢化していく社会の中で<br>本当に大切なことが、必要なもの・・・</p>
            <p class="hero-desc">13年間福祉の現場を経験した私たちが<br>たどり着いた答え。</p>
            <h1 class="hero-title">それは「寮」という<br>かたちでした。</h1>
            <a href="#guide" class="btn-primary">私たちの「寮」を見る</a>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,197.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="philosophy section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Philosophy</span>
                <h3>私たちの想い</h3>
            </div>

            <div class="philosophy-grid">
                <div class="philosophy-card">
                    <div class="card-icon">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-thoughts.png"
                            alt="考え">
                    </div>
                    <h4>私たちの「考え」</h4>
                    <p>「数人の認知症の高齢者が住まいを共にし、同じ空間で生きる。」そんなことが簡単にできないだろうか？そこには寮母さんがいて、必要であれば医療サポートもある。そんな「普通の生き方」を大切にしています。
                    </p>
                </div>
                <div class="philosophy-card">
                    <div class="card-icon">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-noticing.png"
                            alt="気づき">
                    </div>
                    <h4>私たちの「気づき」</h4>
                    <p>施設でも高齢者住宅でもない。規制の多い生活ではなく、若い頃に経験した「寮生活」のような、自然で懐かしい共同生活の形こそが、新しい認知症ケアの形だと気づきました。</p>
                </div>
                <div class="philosophy-card">
                    <div class="card-icon">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-strengths.png"
                            alt="強み">
                    </div>
                    <h4>私たちの「強み」</h4>
                    <p>「夢み寮」は、住宅機能と介護機能を併せ持ちながら、福祉施設並みの費用で利用できるのが特徴です。安心安全な環境で、自分らしい生活をサポートします。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Moved Here -->
    <section id="news" class="news section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">News</span>
                <h3>お知らせ</h3>
            </div>
            <div class="news-grid">
                <?php
                // 最新のお知らせ3件（アイキャッチ未設定はブランドのデフォルト画像）
                $maw_news = new WP_Query(array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 3,
                    'ignore_sticky_posts' => true,
                ));
                if ($maw_news->have_posts()):
                    while ($maw_news->have_posts()):
                        $maw_news->the_post(); ?>
                        <article class="news-card">
                            <div class="news-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium_large', array('loading' => 'lazy', 'decoding' => 'async')); ?>
                                    <?php else: ?>
                                        <img loading="lazy" decoding="async"
                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/news-default.jpg"
                                            alt="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="news-content">
                                <span class="date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                                <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p class="text-center">お知らせは現在ありません。</p>
                <?php endif; ?>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="btn-secondary">一覧を見る</a>
            </div>
        </div>
    </section>

    <!-- Our People Section Added Here -->
    <section id="people" class="people section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Our People</span>
                <h3>夢みの人</h3>
            </div>
            <div class="people-grid">
                <div class="person-card">
                    <div class="person-img">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/staff1.JPEG"
                            alt="山田">
                    </div>
                    <div class="person-info">
                        <h4>山田</h4>
                        <div class="role-list">
                            <span class="role">夢み寮 東七松</span>
                            <span class="role">サービス提供責任者</span>
                            <span class="role">勤務歴：7年6ヶ月</span>
                        </div>
                        <p class="desc">
                            利用者様と介護士という関係の枠に囚われず、人間同士の触れ合い中で仕事していることを忘れず、おじいちゃんおばあちゃんとは親愛なる隣人とて接し、大きいことから小さいことまで、困っていることがあれば気が付き、助け、より善い生活が送れるようやり過ぎ程度にお節介を焼きたいです。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="guide" class="dormitory section bg-cream">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Our Facilities</span>
                <h3>「夢み寮」のご案内</h3>
            </div>

            <div class="dorm-list">
                <article class="dorm-card">
                    <div class="dorm-img">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu3.jpg"
                            class="dorm-thumb" alt="夢み寮 だいもつ">
                    </div>
                    <div class="dorm-info">
                        <h4><span class="nobr">住宅型有料老人ホーム</span> <span class="nobr">夢み寮 だいもつ</span></h4>
                        <p class="address">〒660-0828 <br>兵庫県尼崎市東大物町1-5-27</p>
                        <p class="tel">TEL：06-6439-7070</p>
                        <a href="<?php echo esc_url(home_url('/daimotsu/')); ?>" class="btn-secondary">詳細を見る</a>
                    </div>
                </article>

                <article class="dorm-card">
                    <div class="dorm-img">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oshokita4.JPG"
                            class="dorm-thumb" alt="夢み寮 大庄北">
                    </div>
                    <div class="dorm-info">
                        <h4>夢み寮 大庄北</h4>
                        <p class="address">〒660-0063 <br>兵庫県尼崎市大庄北3-1-23</p>
                        <p class="tel">TEL：06-6412-3444</p>
                        <a href="<?php echo esc_url(home_url('/taisho/')); ?>" class="btn-secondary">詳細を見る</a>
                    </div>
                </article>

                <article class="dorm-card">
                    <div class="dorm-img">
                        <img loading="lazy" decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/higashinanamatsu3.jpg"
                            class="dorm-thumb" alt="夢み寮 東七松">
                    </div>
                    <div class="dorm-info">
                        <h4>夢み寮 東七松</h4>
                        <p class="address">〒660-0051 <br>兵庫県尼崎市東七松町1-8-8</p>
                        <p class="tel">TEL：06-6415-6888</p>
                        <a href="<?php echo esc_url(home_url('/higashinanamatsu/')); ?>"
                            class="btn-secondary">詳細を見る</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Old News Section Removed (it was here) -->

    <section id="contact" class="cta-contact section">
        <div class="container text-center">
            <h3>お問い合わせ・ご相談</h3>
            <p>入居に関するご質問や見学のお申し込みなど、<br>お気軽にお問い合わせください。</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">お問い合わせフォームへ</a>
        </div>
    </section>

    <section id="recruit" class="cta-recruit section">
        <div class="recruit-overlay"></div>
        <div class="container text-center recruit-content">
            <h3>一緒に働く仲間を<br class="sp-br">募集しています</h3>
            <p>私たちと一緒に、新しい認知症ケアの形を作りませんか？</p>
            <!-- Updated Link to recruit.html -->
            <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="btn-primary btn-lg">採用情報を見る</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>