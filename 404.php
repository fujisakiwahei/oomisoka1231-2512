<?php get_header(); ?>

<section class="error-404">
    <div class="error-404__inner">
        <figure class="error-404__image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/404/404-image.webp"
                width="400"
                height="600"
                alt="女の子の立ち絵イラスト"
                loading="lazy"
                decoding="async" />
        </figure>
        <div class="error-404__text-area">
            <h1 class="error-404__title">Error 404</h1>
            <p class="error-404__description">ページが見つかりません</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--works-link">
                <span>トップページへ戻る</span>
                <span class="material-symbols-rounded">link</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>