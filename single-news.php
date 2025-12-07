<?php get_header(); ?>

<section class="single-news-section">
    <div class="single-news__inner">
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="single-news__back-button fade-up"><span>&lt;</span> Back to News</a>
        <div class="single-news__information fade-up">
            <time datetime="<?php the_time('Y-m-d'); ?>" class="single-news__date"><?php the_time('Y.m.d'); ?></time>
            <div class="separator"></div>
            <p class="single-news__category">
                <?php
                $cats = get_the_category();
                if (! empty($cats)) {
                    $cat = $cats[0];
                    echo esc_html($cat->name);
                }
                ?>
            </p>
        </div>
        <h1 class="single-news__title fade-up"><?php the_title(); ?></h1>
        <div class="single-news__content-separator fade-up"></div>
        <div class="single-news__content fade-up">
            <?php the_content(); ?>
        </div>
        <nav class="single-news__nav fade-up">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="button button--under440">
                <span>Back to List</span>
                <span class="material-symbols-rounded">breaking_news</span>
            </a>
            <div class="single-news__nav-wrapper">
                <?php $prev_post = get_previous_post(); ?>
                <?php if (!empty($prev_post)) : ?>
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="single-news__nav-link__prev"><span>&lt;</span> Prev</a>
                <?php else: ?>
                    <p class="single-news__nav-link__prev disabled"><span>&lt;</span> Prev</p>
                <?php endif; ?>
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="button button--over440">
                    <span>Back to List</span>
                    <span class="material-symbols-rounded">breaking_news</span>
                </a>
                <?php $next_post = get_next_post(); ?>
                <?php if (!empty($next_post)) : ?>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="single-news__nav-link__next">Next <span>&gt;</span></a>
                <?php else: ?>
                    <p class="single-news__nav-link__next disabled">Next <span>&gt;</span></p>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</section>

<?php get_footer(); ?>