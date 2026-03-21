<?php
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header" style="height: 250px;">
        <div class="page-header-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/daimotsu3.jpg');">
        </div>
        <div class="page-header-overlay"
            style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(203, 221, 0, 0.4) 100%);"></div>
        <div class="container text-center" style="z-index: 1;">
            <h2 class="page-title">お知らせ<span class="ja">News & Blog</span></h2>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>お知らせ</li>
            </ul>
        </div>
    </nav>

    <section class="section news-archive-section">
        <div class="container container-narrow">

            <!-- Category Filter UI (Using WordPress Categories) -->
            <div class="category-filters">
                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>"
                    class="filter-btn <?php if (!is_category())
                        echo 'active'; ?>">すべて</a>
                <?php
                $categories = get_categories(array(
                    'hide_empty' => 1,
                ));
                foreach ($categories as $category) {
                    $cat_class = 'cat-' . esc_attr($category->slug);
                    $active_class = (is_category($category->term_id)) ? ' active' : '';
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="filter-btn ' . $active_class . '" data-category="' . $cat_class . '">' . esc_html($category->name) . '</a>';
                }
                ?>
            </div>

            <!-- WP: Archive Loop Start -->
            <ul class="news-list archive-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <li>
                            <div class="news-meta">
                                <span class="date">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </span>
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $cat = $categories[0];
                                    $cat_slug = esc_attr($cat->slug);
                                    // Map specific slugs to CSS classes if needed, or use a generic one
                                    $cat_class = 'cat-' . $cat_slug;
                                    // Default mapping if generic class is needed, though style.css uses specific ones
                                    // like cat-info, cat-event, cat-blog, cat-recruit
                                    if (in_array($cat_slug, ['info', 'event', 'blog', 'recruit'])) {
                                        $cat_class = 'cat-' . $cat_slug;
                                    } else {
                                        $cat_class = 'cat-info'; // Fallback
                                    }
                                    echo '<span class="category ' . $cat_class . '">' . esc_html($cat->name) . '</span>';
                                }
                                ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="news-title">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <li>
                        <p>現在、記事はありません。</p>
                    </li>
                <?php endif; ?>
            </ul>
            <!-- WP: Archive Loop End -->

            <!-- WP: Pagination Options -->
            <div class="pagination mt-5 text-center">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '&laquo; 前へ',
                    'next_text' => '次へ &raquo;',
                ));
                ?>
            </div>
            <!-- /WP: Pagination -->

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