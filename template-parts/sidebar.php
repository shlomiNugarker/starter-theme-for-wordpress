<aside id="secondary" class="widget-area" role="complementary">
    <?php if (is_active_sidebar('sidebar-1')): ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div><!-- #primary-sidebar -->
    <?php else: ?>
        <p><?php esc_html_e('Add widgets here.', 'your-theme-text-domain'); ?></p>
    <?php endif; ?>
</aside><!-- #secondary -->