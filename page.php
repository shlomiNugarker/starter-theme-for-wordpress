<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since 1.0
 */

get_header(); // Include header.php
?>

<main id="primary" class="site-main">
    <div id="content" role="main">

        <button id="myButton">Click me</button>

        <?php
        /* Start the Loop */
        while (have_posts()):
            the_post();

            get_template_part('template-parts/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </div><!-- #content -->
</main><!-- #primary -->

<?php
get_sidebar(); // Include sidebar.php
get_footer(); // Include footer.php
