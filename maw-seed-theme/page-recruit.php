<?php
/*
 * Template Name: 採用情報
 */
get_header(); ?>


<main>
    <!-- Hero Section -->
    <section class="rb-hero">
        <div class="rb-hero-bg-grid">
            <div class="rb-hero-panel panel-1"></div>
            <div class="rb-hero-panel panel-2"></div>
            <div class="rb-hero-panel panel-3"></div>
        </div>
        <div class="rb-hero-overlay"></div>
        <div class="container text-center rb-hero-content">
            <p class="rb-hero-sub">その優しさが、誰かの支えになる</p>
            <h2 class="rb-hero-title">「ありがとう」が<br>仕事になる。</h2>
            <div class="rb-hero-cta">
                <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary btn-lg btn-round">話を聞いてみる
                    <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="rb-philosophy section">
        <div class="container text-center">
            <h3 class="rb-section-title">基本理念<br><small>Philosophy</small></h3>
            <p class="rb-section-desc">
                利用者様にも、スタッフにも、<br>
                「居心地の良い場所」でありたい。
            </p>
            <div class="rb-philo-list">
                <div class="rb-philo-item">
                    <div class="philo-circle">透</div>
                    <h4>透明性</h4>
                    <p>隠し事のないクリアな運営</p>
                </div>
                <div class="rb-philo-item">
                    <div class="philo-circle">笑</div>
                    <h4>笑顔</h4>
                    <p>いつも笑顔が絶えない職場</p>
                </div>
                <div class="rb-philo-item">
                    <div class="philo-circle">誠</div>
                    <h4>誠実</h4>
                    <p>人として誠実に向き合う</p>
                </div>
                <div class="rb-philo-item">
                    <div class="philo-circle">夢</div>
                    <h4>夢</h4>
                    <p>夢を語り合える仲間たち</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruit Blog Section -->
    <section class="rb-blog section bg-cream">
        <div class="container">
            <h3 class="rb-section-title text-center">採用ブログ<br><small>Recruit Blog</small></h3>
            <div class="news-grid">
                <article class="news-card"
                    onclick="window.location.href='<?php echo esc_url(home_url('/news-detail/')); ?>';"
                    style="cursor: pointer;">
                    <div class="news-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/image5.jpeg"
                            alt="社内研修の様子">
                    </div>
                    <div class="news-content">
                        <div style="display: flex; gap: 10px; margin-bottom: 8px; align-items: center;">
                            <span class="date" style="margin-bottom: 0;">2026.12.10</span>
                            <span class="category cat-recruit">採用ブログ</span>
                        </div>
                        <span class="news-title"
                            style="display: block; font-weight: bold;">未経験でも安心！<br>充実の新人研修レポート</span>
                    </div>
                </article>
                <article class="news-card"
                    onclick="window.location.href='<?php echo esc_url(home_url('/news-detail/')); ?>';"
                    style="cursor: pointer;">
                    <div class="news-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/image3.jpeg"
                            alt="スタッフインタビュー">
                    </div>
                    <div class="news-content">
                        <div style="display: flex; gap: 10px; margin-bottom: 8px; align-items: center;">
                            <span class="date" style="margin-bottom: 0;">2026.11.25</span>
                            <span class="category cat-recruit">採用ブログ</span>
                        </div>
                        <span class="news-title"
                            style="display: block; font-weight: bold;">【スタッフインタビュー】<br>私がこの職場を選んだ理由</span>
                    </div>
                </article>
                <article class="news-card"
                    onclick="window.location.href='<?php echo esc_url(home_url('/news-detail/')); ?>';"
                    style="cursor: pointer;">
                    <div class="news-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/image1.jpeg"
                            alt="クリスマス会">
                    </div>
                    <div class="news-content">
                        <div style="display: flex; gap: 10px; margin-bottom: 8px; align-items: center;">
                            <span class="date" style="margin-bottom: 0;">2026.11.01</span>
                            <span class="category cat-recruit">採用ブログ</span>
                        </div>
                        <span class="news-title" style="display: block; font-weight: bold;">笑顔あふれる<br>クリスマス会の準備中！</span>
                    </div>
                </article>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="btn-secondary">ブログ一覧を見る</a>
            </div>
        </div>
    </section>

    <!-- Staff Voices Section -->
    <section class="rb-voice section bg-light">
        <div class="container">
            <h3 class="rb-section-title text-center">スタッフのリアルな声<br><small>Staff Voice</small></h3>

            <div class="rb-voice-card">
                <div class="rb-voice-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/image2.jpg"
                        alt="Staff Voice">
                </div>
                <div class="rb-voice-text">

                    <h4>笑顔や「ありがとう」を沢山得られる仕事です。</h4>
                    <p>
                        介護は人と人とが面と向かい合い、直接触れ合いって行われる仕事です。しんどいことも大変なことも、もちろん沢山あります。しかし、それ以上にお互いの笑顔やありがとうをもっと沢山得られ、とても満足感を感じることができる仕事です。<br>
                        介護の仕事の極意はどうやって、楽しく仕事ができるか考えることにあると思います。これからも楽しく仕事ができるように、色々勉強していきたいです。
                    </p>
                </div>
            </div>


        </div>
    </section>

    <!-- One Day Flow Section -->
    <section class="rb-oneday section bg-cream">
        <div class="container">
            <h3 class="rb-section-title text-center">ある1日の流れ<br><small>One Day Schedule</small></h3>
            <div class="timeline-container">
                <div class="timeline-item">
                    <div class="time-circle">9:00</div>
                    <div class="timeline-content">
                        <h4>出社・申し送り</h4>
                        <p>夜勤スタッフからの引き継ぎを行い、その日の利用者の体調を確認します。</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-circle">10:00</div>
                    <div class="timeline-content">
                        <h4>入浴介助・レクリエーション</h4>
                        <p>午前中は入浴のサポートや、体操などのレクリエーションを行います。</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-circle">12:00</div>
                    <div class="timeline-content">
                        <h4>昼食・休憩</h4>
                        <p>利用者様と一緒に食事を楽しみ、その後はスタッフ交代で休憩を取ります。</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-circle">15:00</div>
                    <div class="timeline-content">
                        <h4>おやつタイム・記録作成</h4>
                        <p>おやつを提供しながら、利用者様のリラックスタイム。並行して介護記録を作成。</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-circle">18:00</div>
                    <div class="timeline-content">
                        <h4>退社</h4>
                        <p>夜勤スタッフへ申し送りをして業務終了。お疲れ様でした！</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Style Cards Section -->
    <section class="rb-workstyle section">
        <div class="container">
            <h3 class="rb-section-title text-center">夢み寮での働きやすさ<br><small>Benefits</small></h3>
            <div class="rb-card-grid">
                <div class="rb-info-card">
                    <i class="fa-solid fa-clock"></i>
                    <h4>残業ほぼなし</h4>
                    <p>時間管理を徹底しており、プライベートの時間もしっかり確保できます。</p>
                </div>
                <div class="rb-info-card">
                    <i class="fa-solid fa-calendar-check"></i>
                    <h4>有給をしっかり取得</h4>
                    <p>スタッフ同士で協力し合い、有給休暇が取得しやすい環境を作っています。</p>
                </div>
                <div class="rb-info-card">
                    <i class="fa-solid fa-baby-carriage"></i>
                    <h4>産休・育休実績</h4>
                    <p>ライフステージが変わっても長く働き続けられるよう、制度を整えています。</p>
                </div>
                <div class="rb-info-card">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h4>資格取得支援</h4>
                    <p>介護福祉士などの資格取得にかかる費用を会社が全額・一部負担します。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Currently Recruiting Roles Section -->
    <section class="rb-roles section bg-cream">
        <div class="container container-narrow">
            <h3 class="rb-section-title text-center">採用中の職種<br><small>Recruitment</small></h3>
            <div class="company-table-wrapper"
                style="background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); padding: 30px; margin-top: 2rem;">
                <table class="company-table">
                    <tbody>
                        <tr>
                            <th>募集職種</th>
                            <td>ヘルパー</td>
                        </tr>
                        <tr>
                            <th>職種形態</th>
                            <td>パート</td>
                        </tr>
                        <tr>
                            <th>資格</th>
                            <td>ヘルパー2級（初任者研修）以上</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>
                                A) 7：00～16：00<br>
                                B) 8：00～17：00<br>
                                C) 11：00～20：00<br>
                                D) 13：00～22：00<br>
                                <span
                                    style="display: block; margin-top: 8px; font-size: 0.9em; color: #666;">※パートは、A)～D)のうち、2シフト以上可能な方</span>
                            </td>
                        </tr>
                        <tr>
                            <th>休日</th>
                            <td>
                                週2日～勤務OK<br>
                                <span
                                    style="display: block; margin-top: 8px; font-size: 0.9em; color: #666;">※勤務日数などご相談ください。</span>
                            </td>
                        </tr>
                        <tr>
                            <th>給与</th>
                            <td>時給：950～1100円（経験・能力による）</td>
                        </tr>
                        <tr>
                            <th>待遇・福利厚生</th>
                            <td>交通費支給・各種保険完備・車通勤（要相談）</td>
                        </tr>
                        <tr>
                            <th>応募方法</th>
                            <td>
                                まずはお気軽にご連絡下さい。<br>
                                <span style="font-size: 1.25em; font-weight: bold; display: block; margin: 8px 0;">
                                    <i class="fa-solid fa-phone" style="color: #666;"></i> 06-6415-6888
                                </span>
                                受付：平日10:00～17:00<br>
                                <span
                                    style="display: block; margin-top: 8px; font-size: 0.9em; color: #666;">※採用係まで</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section id="entry" class="rb-bottom-cta section">
        <div class="rb-cta-overlay"></div>
        <div class="container text-center rb-cta-content">
            <p>誰かの人生に寄り添う仕事は、<br>自分の人生も、少し誇らしくしてくれる。<br>介護は、想像よりずっと温かい仕事です。</p>
            <div class="rb-cta-box">
                <h3>職場見学やカジュアル面談も受け付けています！</h3>
                <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary btn-xl btn-round">担当者とつながる
                    <i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>