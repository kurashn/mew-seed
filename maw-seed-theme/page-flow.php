<?php
/*
 * Template Name: ご入居の流れ
 */
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 250px;">
        <div class="page-header-bg" style="background-image: url('images/image3.jpeg');"></div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(203, 221, 0, 0.4) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h1 class="page-title">ご入居の流れ<span class="ja">Flow Guide</span></h1>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>ご入居の流れ</li>
            </ul>
        </div>
    </nav>

    <section class="section flow-section">
        <div class="container container-narrow">
            <div class="section-title">
                <span class="subtitle">Process</span>
                <h3>ご入居までの流れ</h3>
                <p class="mt-4">
                    夢み寮での新しい生活を始めるためのステップをご案内します。<br>
                    疑問点やご不安があれば、いつでもお気軽にご相談ください。
                </p>
            </div>

            <div class="flow-timeline">
                <!-- Step 1 -->
                <div class="flow-step">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h4>お問い合せ</h4>
                        <p>まずは、お気軽にお電話ください。<br>
                            06-4950-4565</p>
                        <div class="step-action mt-3">
                            <p class="text-small mt-2">受付時間：平日 9:00〜18:00</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flow-step">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h4>ご見学</h4>
                        <p>お近くの夢み寮へお越しください。<br>実際の雰囲気や設備をご覧いただけます。</p>
                        <div class="step-action mt-4">
                            <a href="<?php echo esc_url(home_url('/#guide')); ?>" class="btn-secondary">寮案内を見る</a>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flow-step">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h4>ご入居前面談</h4>
                        <p>ご本人様とご家族様と一緒に、ご面談させていただきます。<br>生活上のご希望や、必要なサポートについてお伺いします。</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flow-step">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h4>申込書記入・審査</h4>
                        <p>入居申込書をご記入いただきます。<br>その後、簡単な入居審査をさせていただきます。</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="flow-step">
                    <div class="step-number">05</div>
                    <div class="step-content">
                        <h4>ご契約・スケジュール調整</h4>
                        <p>ご契約手続きをさせていただきます。<br>お引越し日とスケジュールの確認・調整をいたします。</p>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="flow-step">
                    <div class="step-number">06</div>
                    <div class="step-content">
                        <h4>ご入居・生活スタート</h4>
                        <p>夢み寮での新しい暮らしがスタートします。<br>私たちが全力でサポートいたします。</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Contact -->
    <section id="contact" class="cta-contact section">
        <div class="container text-center">
            <h3>お問い合わせ・ご相談</h3>
            <p>入居に関するご質問や見学のお申し込みなど、<br>お気軽にお問い合わせください。</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">お問い合わせフォームへ</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>