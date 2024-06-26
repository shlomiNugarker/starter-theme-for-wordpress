<?php
function your_theme_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'your-theme-text-domain'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'your-theme-text-domain'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'your_theme_widgets_init');

function your_theme_posted_on()
{
    echo '<span class="posted-on">' . get_the_date() . '</span>';
}

function your_theme_posted_by()
{
    echo '<span class="byline">' . esc_html__('Posted by', 'your-theme-text-domain') . ' ' . get_the_author() . '</span>';
}

function your_theme_entry_footer()
{
    // Example: Display categories and tags.
    $categories_list = get_the_category_list(esc_html__(', ', 'your-theme-text-domain'));
    if ($categories_list) {
        echo '<span class="cat-links">' . esc_html__('Categories: ', 'your-theme-text-domain') . $categories_list . '</span>';
    }
    $tags_list = get_the_tag_list('', esc_html__(', ', 'your-theme-text-domain'));
    if ($tags_list) {
        echo '<span class="tags-links">' . esc_html__('Tags: ', 'your-theme-text-domain') . $tags_list . '</span>';
    }

    // Example: Display comments link.
    if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
        echo '<span class="comments-link">';
        comments_popup_link(esc_html__('Leave a comment', 'your-theme-text-domain'), esc_html__('1 Comment', 'your-theme-text-domain'), esc_html__('% Comments', 'your-theme-text-domain'));
        echo '</span>';
    }
}

function enqueue_my_styles()
{
    wp_enqueue_style('my-theme-styles', get_stylesheet_uri(), array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');


function enqueue_my_scripts()
{
    wp_enqueue_script('main.js', get_template_directory_uri() . '/assets/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

function enqueue_bootstrap()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Enqueue Bootstrap JavaScript (requires jQuery)
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


