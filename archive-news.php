<?php get_header(); ?>

<section class="archive-news">
    <div class="archive-news__inner">
        <hgroup class="section-title fade-up">
            <h2 class="section-title__en">News</h2>
            <h2 class="section-title__jp">お知らせ</h2>
        </hgroup>
        <div class="archive-news__category-list fade-up">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="archive-news__category-item is-active">All</a>
            <?php $args = array(
                'hide_empty' => 1,
                'exclude' => 1
            ); ?>
            <?php $categories = get_categories($args); ?>
            <?php foreach ($categories as $category) : ?>
                <a
                    href="<?php echo esc_url(home_url('/category/' . $category->slug)); ?>"
                    class="archive-news__category-item <?php if ($category->slug === get_query_var('category_name')) : ?>is-active<?php endif; ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="archive-news__list">
            <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 8,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="archive-news__item fade-up">
                        <div class="archive-news__item__information">
                            <time datetime="<?php the_time('Y-m-d'); ?>" class="archive-news__item__date"><?php the_time('Y.m.d'); ?></time>
                            <p class="archive-news__item__category">
                                <?php
                                $cats = get_the_category();
                                if (! empty($cats)) {
                                    $cat = $cats[0];
                                    echo esc_html($cat->name);
                                }
                                ?>
                            </p>
                        </div>
                        <h3 class="archive-news__item__title"><?php the_title(); ?></h3>
                        <p class="archive-news__item__excerpt"><?php echo nl2br(esc_html(get_the_excerpt())); ?></p>
                    </a>
                <?php endwhile;
                wp_reset_postdata(); // クエリをリセット
                ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
        <div class="news-pagination fade-up">
            <?php
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'format' => '?paged=%#%',
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => false,
            ));
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>