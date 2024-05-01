<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since 1.0
 */

get_header(); // Include header.php
?>

<main id="main" class="site-main">

    <?php
    if (have_posts()):

        // Start the Loop.
        while (have_posts()):
            the_post();

            /*
             * Include the Post-Type-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
             */
            get_template_part('template-parts/content', get_post_type());

        endwhile;

        // Previous/next page navigation.
        the_posts_pagination(
            array(
                'prev_text' => __('Previous page', 'your-text-domain'),
                'next_text' => __('Next page', 'your-text-domain'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'your-text-domain') . ' </span>',
            )
        );

    else:
        // If no content, include the "No posts found" template.
        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- .site-main -->

<?php
get_sidebar(); // Include sidebar.php
get_footer(); // Include footer.php
?>