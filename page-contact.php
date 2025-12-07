<?php get_header(); ?>

<section class="form-area">
    <hgroup class="section-title fade-up">
        <h2 class="section-title__en">Contact</h2>
        <h2 class="section-title__jp">お問い合わせ</h2>
    </hgroup>
    <p class="form__description fade-up">
        お仕事のご依頼やご相談など、<br class="sp-only" />お気軽にご連絡ください。<br>
        お急ぎの方は、<a href="mailto:oomisoka1231.0@gmail.com">oomisoka1231.0@gmail.com</a>までご連絡をお願いいたします。
    </p>
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