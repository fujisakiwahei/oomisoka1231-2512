<?php get_header(); ?>

<section class="first-view">
    <div class="first-view__inner">
        <hgroup class="first-view__title-area">
            <h1 class="first-view__title fade-up">oomisoka1231</h1>
            <p class="first-view__copy fade-up">
                「なりたい私」を描く。<br>
                ファッションや表情、仕草を通して、<br>
                「可愛い」と「憧れ」の物語を紡ぎます。
            </p>
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="button button--view-works fade-up">
                <span>View Works</span>
                <span class="material-symbols-rounded">wall_art</span>
            </a>
        </hgroup>
        <figure class="first-view__image first-view__image--1 fade-up">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl1.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl1.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/girl1@2x.webp 2x"
                width="286"
                height="792"
                alt="カラフルな服を着た女の子のイラスト"
                decoding="async" />
        </figure>
        <figure class="first-view__image first-view__image--2 fade-up">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl3.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl3.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/girl3@2x.webp 2x"
                width="355"
                height="644"
                alt="ガーリーな服を着た女の子のイラスト"
                decoding="async" />
        </figure>
        <figure class="first-view__image first-view__image--3 fade-up">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl2.webp"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/girl2.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/front/girl2@2x.webp 2x"
                width="234"
                height="523"
                alt="青髪の女の子が座っているイラスト"
                decoding="async" />
        </figure>
        <div class="scroll">
            <span>Scroll</span>
        </div>
    </div>
</section>

<section class="front-news">
    <div class="front-news__inner">
        <div class="front-news__title-area fade-up">
            <h2 class="front-news__title">Latest News</h2>
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="button pc-only">
                <span>View All</span>
                <span class="material-symbols-rounded">breaking_news</span>
            </a>
        </div>
        <div class="front-news__list">
            <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php $categories = get_the_category(); ?>
                    <a href="<?php the_permalink(); ?>" class="front-news__item fade-up">
                        <div class="front-news__item__information">
                            <time datetime="<?php the_time('Y-m-d'); ?>" class="front-news__date"><?php the_time('Y.m.d'); ?></time>
                            <p class="front-news__category">
                                <?php if (!empty($categories)) : ?>
                                    <?php echo $categories[0]->cat_name; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <h3 class="front-news__title"><?php the_title(); ?></h3>
                    </a>
                <?php endwhile;
                wp_reset_postdata(); // クエリをリセット
                ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="button under-tablet-only">
            <span>View All</span>
            <span class="material-symbols-rounded">breaking_news</span>
        </a>
    </div>
</section>

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
        <div class="works__list">
            <?php
            $args = array(
                'post_type' => 'works',
                'posts_per_page' => 3,
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
        <a href="<?php echo esc_url(home_url('/works')); ?>" class="button button--view-works fade-up">
            <span>View All</span>
            <span class="material-symbols-rounded">wall_art</span>
        </a>
    </div>
</section>

<section class="form-area">
    <hgroup class="section-title fade-up">
        <h2 class="section-title__en">Contact</h2>
        <h2 class="section-title__jp">お問い合わせ</h2>
    </hgroup>
    <p class="form__description fade-up">お仕事のご依頼やご相談など、お気軽にご連絡ください。</p>
    <div class="form__main-area fade-up">
        <figure class="form__image">
            <?php
            $args = array(
                'post_type' => 'edit',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php $form_image = get_field('form-image'); ?>
                    <?php if ($form_image) : ?>
                        <img
                            src="<?php echo esc_url($form_image); ?>"
                            width="600"
                            height="734"
                            loading="lazy"
                            decoding="async" />
                    <?php else : ?>
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/form/form-image-default.webp"
                            width="600"
                            height="734"
                            loading="lazy"
                            decoding="async" />
                    <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata(); // クエリをリセット
                ?>
            <?php endif; ?>
        </figure>
        <div class="form__form-area">
            <?php echo do_shortcode('[contact-form-7 id="7375759" title="問い合わせフォーム"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>