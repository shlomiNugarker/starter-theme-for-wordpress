<?php
/*
 * If the current post is protected by a password and the visitor has not yet entered the password, return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()): ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ('1' === $comments_number) {
                /* translators: %s: Post title. */
                printf(esc_html__('One thought on &ldquo;%s&rdquo;', 'your-theme-text-domain'), esc_html(get_the_title()));
            } else {
                printf(
                    /* translators: 1: Number of comments, 2: Post title. */
                    esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'your-theme-text-domain')),
                    esc_html(number_format_i18n($comments_number)),
                    esc_html(get_the_title())
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 42,
                ));
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_pagination(
            array(
                'prev_text' => esc_html__('Previous', 'your-theme-text-domain'),
                'next_text' => esc_html__('Next', 'your-theme-text-domain'),
            ));
        ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')):
        ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'your-theme-text-domain'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div><!-- #comments -->