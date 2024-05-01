<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <?php
            if (has_custom_logo()):
                the_custom_logo();
            else:
                ?>
                <div class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </div>
                <div class="site-description"><?php bloginfo('description'); ?></div>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle btn-outline-danger" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e('Menu', 'your-theme-text-domain'); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->