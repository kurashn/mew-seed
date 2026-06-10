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
            <div class="schedule-table-wrapper">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>時間</th>
                            <th>仕事内容</th>
                            <th>担当</th>
                            <th>出勤時間</th>
                            <th>退勤時間</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="time">6:00</td>
                            <td class="task">オムツ交換　トイレ介助</td>
                            <td>夜勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">7:00</td>
                            <td class="task">起床介助</td>
                            <td>夜勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">7:30〜</td>
                            <td class="task">朝食　見守り・介助</td>
                            <td>夜勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">8:00</td>
                            <td class="task">服薬介助　下膳　食後口腔ケア　誘導・介助</td>
                            <td>夜勤 日勤</td>
                            <td>日勤1出勤</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">8:30</td>
                            <td class="task">体温　バイタルチェック</td>
                            <td>夜勤 日勤</td>
                            <td>日勤2出勤</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">8:50〜</td>
                            <td class="task">朝礼</td>
                            <td>夜勤 日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="3">9:00</td>
                            <td class="task">ラジオ体操</td>
                            <td>日勤</td>
                            <td>日勤3出勤</td>
                            <td>夜勤退勤</td>
                        </tr>
                        <tr>
                            <td class="task">身体介護・生活援助・夢みサービス実施</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="task">レクレーション</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">11:45</td>
                            <td class="task">口腔体操</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="2">12:00</td>
                            <td class="task">昼食</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="task">食事セッティング　見守り・介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="2">12:30〜</td>
                            <td class="task">服薬介助　下膳　食後口腔ケア　誘導・介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="task">居室移動介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="2">12:30〜</td>
                            <td class="task">適宜休憩（1時間）</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="task">身体介護・生活援助・夢みサービス実施</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">15:00</td>
                            <td class="task">食堂誘導・移動介助・レクレーション</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">16:00</td>
                            <td class="task"></td>
                            <td></td>
                            <td>夜勤出勤</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">16:45</td>
                            <td class="task">口腔体操</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">17:00</td>
                            <td class="task">夕食　見守り・介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td>日勤1退勤</td>
                        </tr>
                        <tr>
                            <td class="time" rowspan="2">17:30</td>
                            <td class="task">服薬介助　下膳　食後口腔ケア　誘導・介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td>日勤2退勤</td>
                        </tr>
                        <tr>
                            <td class="task">居室誘導　移動介助</td>
                            <td>日勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">18:00</td>
                            <td class="task">就寝介助</td>
                            <td>夜勤</td>
                            <td></td>
                            <td>日勤3退勤</td>
                        </tr>
                        <tr>
                            <td class="time">18:00〜</td>
                            <td class="task">身体介護　巡視2時間おき（起床時まで）</td>
                            <td>夜勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="time">20:00</td>
                            <td class="task">眠前薬介助</td>
                            <td>夜勤</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
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
            <div class="recruit-tabs">
                <button class="recruit-tab-btn active" data-target="tab-higashinanamatsu">東七松</button>
                <button class="recruit-tab-btn" data-target="tab-oshokita">大庄北</button>
                <button class="recruit-tab-btn" data-target="tab-daimotsu">だいもつ</button>
            </div>
            <!-- 東七松 -->
            <div class="recruit-tab-content active" id="tab-higashinanamatsu">
                <div class="company-table-wrapper" style="background:#fff;border-radius:8px;box-shadow:0 4px 10px rgba(0,0,0,0.05);padding:30px;margin-bottom:25px;">
                    <div class="recruit-detail-content">
                        <div class="rd-header">
                            <h4 class="rd-catchphrase">JR立花駅より徒歩約7分！ブランクOK/高齢者向け住宅/賞与年2回・昇給年1回/年間休日約110日/資格取得支援ありでスキルUP可能な環境</h4>
                            <p>穏やかな雰囲気でスタッフ同士の会話が多く笑顔の多い職場です。<br>
                            会社負担にて資格取得も可能で未経験、ブランクがある方、キャリアアップを希望されている方には絶好の環境です。<br>
                            職員増員の為夜勤専門スタッフを募集致します。</p>
                        </div>
                        <div class="rd-section">
                            <h5>「夢み寮 東七松」について</h5>
                            <p>高齢者が"施設"ではなく、自宅に近い自由で安心できる暮らしを送れるように——<br>
                            そんな想いから生まれた「寮型」の新しい住まいです。<br>
                            定員31名の落ち着いた環境で、一人ひとりと丁寧に関われます。</p>
                        </div>
                        <div class="rd-section">
                            <h5>スタッフの声</h5>
                            <div class="rd-voice-box">
                                <p>◆「一度他施設へ転職しましたが、仕事で悩んでいた際に相談したところ、快くカムバックを受け入れていただきました。改めて、この職場の環境の良さを実感しています。」</p>
                                <p>◆「様々な職種の方と関わる機会が多く、自然とスキルアップにつながる環境です。スタッフ同士はもちろん、上司とのコミュニケーションも活発で、相談しやすい雰囲気があります。」</p>
                            </div>
                            <p style="margin-top:15px;">共通しているのは、施設内の雰囲気の良さと日々の業務を通じて多くの学びが得られる点です。<br>
                            また、会社負担での資格取得支援制度もあり個々のスキルアップを積極的に応援しています！</p>
                        </div>
                        <div class="rd-grid">
                            <div class="rd-section">
                                <h5>働く環境について</h5>
                                <ul class="rd-list">
                                    <li>家庭的で穏やかな雰囲気</li>
                                    <li>スタッフ同士の会話が多く、笑顔の多い職場</li>
                                    <li>上司にも相談しやすく、風通し◎</li>
                                    <li>季節感を大切にした温かい施設づくり</li>
                                </ul>
                            </div>
                            <div class="rd-section">
                                <h5>ここがポイント</h5>
                                <ul class="rd-list rd-list-check">
                                    <li>未経験・ブランクOK</li>
                                    <li>資格取得は全額会社負担</li>
                                    <li>パートも賞与あり</li>
                                    <li>週休2日制/年間休日約110日で働きやすい</li>
                                    <li>希望休は月3日まで取得可能</li>
                                </ul>
                            </div>
                            <div class="rd-section" style="grid-column:1/-1;">
                                <h5>こんな方におすすめ</h5>
                                <ul class="rd-list">
                                    <li>人間関係の良い職場で働きたい方</li>
                                    <li>利用者様とゆっくり関わりたい方</li>
                                    <li>キャリアアップを目指したい方</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">正社員</span>
                            <h4>介護職/ヘルパー（正職員）</h4>
                            <div class="job-highlight">月給 239,000円〜267,000円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としてのサービス業務全般（定員：31床）<br><span style="font-size:0.9em;color:#666;">身体介護・生活援助</span></td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※未経験・ブランクOK／年齢：60歳迄</span></td></tr>
                                <tr><th>勤務時間</th><td>シフト制<br>8:00～17:00 / 9:00～18:00 / 10:00～19:00<br>【夜勤】15:00～翌8:00</td></tr>
                                <tr><th>休日</th><td>週休2日制／年間休日：約110日／希望休月3日まで</td></tr>
                                <tr><th>給与</th><td>月給 239,000円〜267,000円<br><span style="font-size:0.9em;color:#666;">※資格手当・業務手当・夜勤4回分（7,000円/回）・処遇改善手当 含む<br>※試用期間：6ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回（7月）／賞与年2回（4月・10月）<br>年間 25万～110万</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給・資格取得支援（全額受講費負担）・ハラスメント相談窓口あり・自転車/バイク通勤OK</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">夜勤正社員</span>
                            <h4>夜勤メイン介護スタッフ（正職員）</h4>
                            <div class="job-highlight">月給 267,000円〜288,000円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としての業務全般（定員：31床）</td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※ブランクOK／年齢：60歳迄</span></td></tr>
                                <tr><th>勤務時間</th><td>【夜勤】15:00～翌8:00（休憩120分）<br><span style="font-size:0.9em;color:#666;">※残業ほぼなし</span></td></tr>
                                <tr><th>休日</th><td>週休2日制／年間休日：約110日／希望休月3日まで</td></tr>
                                <tr><th>給与</th><td>月給 267,000円〜288,000円<br><span style="font-size:0.9em;color:#666;">※資格手当・業務手当・夜勤8回分（7,000円/回）・処遇改善手当等 含む<br>※試用期間：6ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回／賞与年2回（4月・10月）<br>年間 25万～110万</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給・資格取得支援（全額受講費負担）・ハラスメント相談窓口あり・バイク/車通勤応相談</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">パート・バイト</span>
                            <h4>介護職/ヘルパー（パート・バイト）</h4>
                            <div class="job-highlight">時給 1,260円〜1,460円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としてのサービス業務全般（定員：31床）</td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※未経験・ブランクOK／65歳まで</span></td></tr>
                                <tr><th>勤務時間</th><td>8:00～17:00 / 9:00～18:00 / 10:00～19:00<br><span style="font-size:0.9em;color:#666;">※短時間相談可／残業ほぼなし</span></td></tr>
                                <tr><th>休日</th><td>週2～5日のシフト制<br><span style="font-size:0.9em;color:#666;">有給消化率ほぼ100%</span></td></tr>
                                <tr><th>給与</th><td>時給 1,260円〜1,460円<br><span style="font-size:0.9em;color:#666;">※経験・スキルを考慮して決定致します。<br>※試用期間：3ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回／パート賞与年2回（4月・10月）<br>年間 約10万～55万</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給・扶養控除内考慮・資格取得支援（全額受講費負担）・ハラスメント相談窓口あり・正職員登用あり</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 大庄北 -->
            <div class="recruit-tab-content" id="tab-oshokita">
                <div class="company-table-wrapper" style="background:#fff;border-radius:8px;box-shadow:0 4px 10px rgba(0,0,0,0.05);padding:30px;margin-bottom:25px;">
                    <div class="recruit-detail-content">
                        <div class="rd-header">
                            <h4 class="rd-catchphrase">JR立花駅より徒歩約12分！ブランクOK/高齢者向け住宅/賞与年2回・昇給年1回/年間休日約110日/資格取得支援ありでスキルUP可能な環境</h4>
                            <p>阪神バス「今北」バス停横<br>
                            JR立花駅より徒歩12分 ／ 立花駅から自転車5分（自転車貸与制度あり）<br>
                            阪急「武庫之荘」駅から10分（自転車貸与制度あり）</p>
                            <p>「夢み寮大庄北」でぜひあなたのスキルを活かして働きませんか？<br>
                            職員増員の為、新規スタッフを募集致します。</p>
                        </div>
                        <div class="rd-section">
                            <h5>当施設「夢み寮」について</h5>
                            <p>高齢者がより自然な形で、共同生活を送る場を提供したいという想いから「寮」という形での施設運営をスタート致しました。<br>
                            自宅に近い自由と安心の空間で、自分らしい生活を楽しむ新しいサービスの形を提供しております。<br>
                            定員は19床。私たちと楽しく一緒に仕事しませんか？</p>
                        </div>
                        <div class="rd-section">
                            <h5>当社で働く魅力について</h5>
                            <div class="rd-grid">
                                <div class="rd-section">
                                    <h5>昇給年1回・賞与年2回と好待遇</h5>
                                    <p>当社では正社員に限らず、パートの方も含め賞与支給を行っております。</p>
                                </div>
                                <div class="rd-section">
                                    <h5>資格取得支援あり — キャリアUP可</h5>
                                    <p>実務にて経験・スキルを積んでいただき、全額会社負担にて資格取得も可能。<br>
                                    未経験、ブランクがある方、キャリアアップの為、資格取得を希望されている方には絶好の環境です。</p>
                                </div>
                                <div class="rd-section" style="grid-column:1/-1;">
                                    <h5>週休2日制/年間休日約110日で働きやすい</h5>
                                    <p>希望休は月3日まで取得可能。夏季休暇、冬期休暇もあり！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">正社員</span>
                            <h4>介護職/ヘルパー（正職員）</h4>
                            <div class="job-highlight">月給 235,000円〜263,000円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としてのサービス業務全般（定員：19床）</td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※未経験・ブランクOK／年齢：60歳迄</span></td></tr>
                                <tr><th>勤務時間</th><td>シフト制<br>8:00～17:00 / 9:00～18:00 / 10:00～19:00<br>【夜勤】15:00～翌8:00</td></tr>
                                <tr><th>休日</th><td>週休2日制／年間休日：約110日／希望休月3日まで</td></tr>
                                <tr><th>給与</th><td>月給 235,000円〜263,000円<br><span style="font-size:0.9em;color:#666;">※資格手当・業務手当・夜勤4回分（6,000円/回）・処遇改善金 含む<br>※試用期間：6ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回／賞与年2回（4月・10月）<br>年間 25万～110万</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給（規定通り）・資格取得支援（全額受講費負担）・ハラスメント相談窓口あり・自転車/バイク通勤OK</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">夜勤正社員</span>
                            <h4>夜勤メイン介護スタッフ（正職員）</h4>
                            <div class="job-highlight">月給 259,000円〜281,000円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としての業務全般（定員：19床）</td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※ブランクOK／年齢：60歳迄</span></td></tr>
                                <tr><th>勤務時間</th><td>【夜勤】16:00～翌9:00（休憩120分）<br><span style="font-size:0.9em;color:#666;">※残業ほぼなし</span></td></tr>
                                <tr><th>休日</th><td>週休2日制／年間休日：約110日／希望休月3日まで</td></tr>
                                <tr><th>給与</th><td>月給 259,000円〜281,000円<br><span style="font-size:0.9em;color:#666;">※資格手当・業務手当・夜勤8回分（6,000円/回 ※回数調整あり）・処遇改善手当 含む<br>※試用期間：6ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回／賞与年2回（4月・10月）<br>年間 25万～110万</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給・資格取得支援（受講費負担）・ハラスメント相談窓口あり・車通勤応相談</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="job-accordion">
                    <div class="job-accordion-header">
                        <div class="job-accordion-summary">
                            <span class="job-type-badge">パート・バイト</span>
                            <h4>介護職/ヘルパー（パート・バイト）</h4>
                            <div class="job-highlight">時給 1,260円〜1,460円</div>
                        </div>
                        <div class="job-accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                    </div>
                    <div class="job-accordion-body">
                        <div class="company-table-wrapper">
                            <table class="company-table"><tbody>
                                <tr><th>仕事内容</th><td>介護職員としてのサービス業務全般（定員：19床）</td></tr>
                                <tr><th>資格</th><td>初任者研修以上<br><span style="font-size:0.9em;color:#666;">※未経験・ブランクOK／65歳まで</span></td></tr>
                                <tr><th>勤務時間</th><td>8:00～17:00 / 9:00～18:00<br><span style="font-size:0.9em;color:#666;">※短時間相談可（例：9:00～13:00 / 14:00～18:00）／残業ほぼなし</span></td></tr>
                                <tr><th>休日</th><td>週2日～のシフト制</td></tr>
                                <tr><th>給与</th><td>時給 1,260円〜1,460円<br><span style="font-size:0.9em;color:#666;">※経験・スキルを考慮して決定致します。<br>※試用期間：3ヵ月（同条件）</span></td></tr>
                                <tr><th>賞与・昇給</th><td>昇給年1回／賞与年2回（4月・10月）</td></tr>
                                <tr><th>待遇</th><td>社保完備・交通費支給・扶養控除内考慮・資格取得支援（受講費負担）・ハラスメント相談窓口あり・正職員登用あり</td></tr>
                                <tr><th>応募方法</th><td>お電話、または採用フォームよりご応募いただけます。<br>まずはお気軽にご連絡下さい。<br><span style="font-size:1.25em;font-weight:bold;display:block;margin:8px 0;"><i class="fa-solid fa-phone" style="color:#666;"></i> 06-6415-6888</span>受付：平日10:00～17:00<div style="margin-top:15px;"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-primary" style="padding:10px 25px;font-size:0.95em;"><i class="fa-regular fa-envelope"></i> 採用フォームはこちら</a></div></td></tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- だいもつ -->
            <div class="recruit-tab-content" id="tab-daimotsu">
                <div class="recruit-stopped">
                    <span class="stopped-badge">募集停止中</span>
                    <p>現在、だいもつでは募集を行っておりません。<br>募集再開時にはこちらに掲載いたします。</p>
                </div>
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