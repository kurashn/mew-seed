<?php
get_header(); ?>

<main>
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" style="padding-top: 100px; background-color: var(--color-bg);">
        <div class="container container-narrow">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <!-- Usually, post type archive links are used here -->
                <li><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">お知らせ</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <!-- WP: Post Title Snippet -->
                <li>
                    <?php the_title(); ?>
                </li>
            </ul>
        </div>
    </nav>

    <section class="section article-section">
        <div class="container container-narrow">

            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                        <!-- WP: The Content Area -->
                        <header class="post-header text-center">
                            <div class="news-meta-date mb-2">
                                <span class="date">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </span>
                            </div>
                            <div class="news-meta-category mb-4">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $cat = $categories[0];
                                    $cat_slug = esc_attr($cat->slug);
                                    if (in_array($cat_slug, ['info', 'event', 'blog', 'recruit'])) {
                                        $cat_class = 'cat-' . $cat_slug;
                                    } else {
                                        $cat_class = 'cat-info'; // Fallback
                                    }
                                    echo '<span class="category ' . $cat_class . '">' . esc_html($cat->name) . '</span>';
                                }
                                ?>
                            </div>
                            <h1 class="post-title mt-4 mb-5">
                                <?php the_title(); ?>
                            </h1>
                        </header>

                        <div class="post-content">
                            <!-- WP: Thumbnail（未設定時はブランドのデフォルト画像） -->
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid mb-4 rounded shadow-sm w-100 article-eyecatch')); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/news-default.jpg'); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="img-fluid mb-4 rounded shadow-sm w-100 article-eyecatch">
                            <?php endif; ?>

                            <!-- WP: the_content() starts here -->
                            <?php the_content(); ?>
                            <!-- WP: the_content() ends here -->
                        </div>

                        <div class="post-footer mt-5 pt-4 border-top text-center d-flex justify-content-between align-items-center flex-wrap"
                            style="display: flex; justify-content: space-between; align-items: center; gap: 20px;">
                            <div class="prev-post" style="flex: 1; text-align: left;">
                                <?php previous_post_link('%link', '&laquo; 前の記事へ'); ?>
                            </div>
                            <div class="archive-link" style="flex: 1;">
                                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>"
                                    class="btn-primary mt-3 mb-3 d-inline-block">一覧へ戻る</a>
                            </div>
                            <div class="next-post" style="flex: 1; text-align: right;">
                                <?php next_post_link('%link', '次の記事へ &raquo;'); ?>
                            </div>
                        </div>
                        <!-- /WP: The Content Area -->
                    </article>
                <?php endwhile; endif; ?>

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