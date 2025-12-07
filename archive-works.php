<?php get_header(); ?>

<section class="works">
    <figure class="works__deco-circle">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/front/deco-circle.svg"
            width="300"
            height="300"
            loading="lazy"
            decoding="async" />
    </figure>
    <figure class="works__deco-star works__deco-star--1">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/front/deco-star.svg"
            width="24"
            height="24"
            loading="lazy"
            decoding="async" />
    </figure>
    <figure class="works__deco-star works__deco-star--2">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/front/deco-star.svg"
            width="24"
            height="24"
            loading="lazy"
            decoding="async" />
    </figure>
    <figure class="works__deco-star works__deco-star--3">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/front/deco-star.svg"
            width="24"
            height="24"
            loading="lazy"
            decoding="async" />
    </figure>
    <div class="works__inner">
        <hgroup class="section-title fade-up">
            <h2 class="section-title__en">Works</h2>
            <h2 class="section-title__jp">作品一覧</h2>
        </hgroup>
        <div class="works__category-list fade-up">
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="works__category-item is-active">All</a>
            <?php $args = array(
                'hide_empty' => 1,
                'exclude' => 1
            ); ?>
            <?php $categories = get_terms('works-category', $args); ?>
            <?php foreach ($categories as $category) : ?>
                <a
                    href="<?php echo esc_url(home_url('/works-category/' . $category->slug)); ?>"
                    class="works__category-item <?php if ($category->slug === get_query_var('category_name')) : ?>is-active<?php endif; ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="works__list">
            <?php
            $args = array(
                'post_type' => 'works',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php $link = get_field('external_link'); ?>
                    <?php $description = get_field('description'); ?>
                    <?php $works_terms = get_the_terms(get_the_ID(), 'works-category'); ?>
                    <div class="works__item fade-up">
                        <p class="works__image">
                            <img
                                src="<?php echo get_the_post_thumbnail_url(); ?>"
                                width="355"
                                height="644"
                                alt="<?php the_title(); ?>"
                                loading="lazy"
                                decoding="async" />
                        </p>
                        <div class="works__text-area">
                            <h3 class="works__title"><?php the_title(); ?></h3>
                            <div class="works__information">
                                <time datetime="<?php the_time('Y-m-d'); ?>" class="works__date"><?php the_time('Y.m.d'); ?></time>
                                ・
                                <?php if (!empty($works_terms)) : ?>
                                    <p class="works__category">
                                        <?php echo $works_terms[0]->name; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <?php if ($description) : ?>
                                <p class="works__description-title">Description</p>
                                <p class="works__description"><?php echo nl2br(esc_html($description)); ?></p>
                            <?php endif; ?>
                            <?php if ($link) : ?>
                                <a href="<?php echo esc_url($link); ?>" class="button button--works-link" target="_blank">
                                    <span>View Work</span>
                                    <span class="material-symbols-rounded">open_in_new</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); // クエリをリセット
                ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>