</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(
            esc_html__('Copyright © %1$s %2$s. All Rights Reserved.', 'your-theme-text-domain'),
            date('Y'),
            esc_html(get_bloginfo('name'))
        );
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>