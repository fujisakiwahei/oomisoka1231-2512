<?php get_header(); ?>

<section class="thanks">
    <div class="thanks__inner fade-up">
        <figure class="thanks__image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/thanks-image.webp"
                width="400"
                height="600"
                alt="立ち絵の女の子のイラスト"
                loading="lazy"
                decoding="async" />
        </figure>
        <div class="thanks__text-area">
            <h1 class="thanks__title">Thank You!</h1>
            <p class="thanks__description">
                お問い合わせありがとうございます。<br>
                通常3~7日以内に返信させていただきます。<br>
                お急ぎの場合は<a href="mailto:oomisoka1231.0@gmail.com">oomisoka1231.0@gmail.com</a>までご連絡をお願いします。
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--works-link">
                <span>トップページへ戻る</span>
                <span class="material-symbols-rounded">link</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>