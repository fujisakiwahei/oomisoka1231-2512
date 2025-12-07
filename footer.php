</main>

<footer>
    <div class="footer__inner">
        <div class="footer__name-area">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__name-area__name">oomisoka1231</a>
            <p class="footer__name-area__copyright">© oomisoka1231 All rights reserved.</p>
            <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="footer__name-area__privacy-policy-link">
                Privacy Policy
            </a>
        </div>
        <nav class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="footer__nav-link">Top</a></li>
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="footer__nav-link">Works</a></li>
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/news')); ?>" class="footer__nav-link">News</a></li>
                <!-- <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/about')); ?>" class="footer__nav-link">About</a></li> -->
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer__nav-link">Contact</a></li>
            </ul>
        </nav>
        <div class="footer__sns-area">
            <a href="https://instagram.com/_oomisoka1231" class="footer__sns-link" target="_blank">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/instagram-icon.svg"
                    width="24"
                    height="24"
                    alt="Instagram"
                    loading="lazy"
                    decoding="async" />
            </a>
            <a href="https://x.com/oomisoka1231_" class="footer__sns-link" target="_blank">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/x-icon.svg"
                    width="24"
                    height="24"
                    alt="X"
                    loading="lazy"
                    decoding="async" />
            </a>
            <a href="https://jp.pinterest.com/oomisoka1231/" class="footer__sns-link" target="_blank">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/pinterest-icon.svg"
                    width="24"
                    height="24"
                    alt="Pinterest"
                    loading="lazy"
                    decoding="async" />
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>