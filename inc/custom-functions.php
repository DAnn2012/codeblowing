<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Custom callback function for Bootstrap comment styling
function codeblowing_comment_callback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class('media border-bottom mb-4 pb-3'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="media-body d-flex gap-4">
            <div class="comment-author vcard">
                <?php
                if ($args['avatar_size'] != 0) {
                    echo get_avatar($comment, $args['avatar_size'], '', '', array('class' => 'rounded-circle mr-3'));
                }
                
                ?>
            </div>
            <div class="comment-info">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em class="comment-awaiting-moderation text-muted"><?php _e('Your comment is awaiting moderation.', 'code-blowing'); ?></em>
                    <br />
                <?php endif; ?>

                <div class="comment-meta commentmetadata">
                    <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="text-muted">
                        <time datetime="<?php comment_time('c'); ?>">
                            <?php
                            printf(__('<cite class="fn">%s</cite>'), get_comment_author_link());
                            printf(__('%1$s at %2$s', 'code-blowing'), get_comment_date(), get_comment_time()); ?>
                        </time>
                    </a>
                    <?php edit_comment_link(__('(Edit)', 'code-blowing'), '  ', ''); ?>
                </div>

                <div class="comment-text">
                    <?php comment_text(); ?>
                </div>

                <div class="reply">
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'class'     => 'btn btn-sm btn-outline-secondary',
                    )));
                    ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}

function codeblowing_pagination($query = null) {
    global $wp_query;

    if (!$query) $query = $wp_query;

    $big = 999999999; // need an unlikely integer

    $paginate_links = paginate_links([
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $query->max_num_pages,
        'type'      => 'array',
        'prev_text' => __('« Previous'),
        'next_text' => __('Next »'),
    ]);

    if (is_array($paginate_links)) {
        echo '<nav aria-label="Page navigation"><ul class="pagination justify-content-center">';

        foreach ($paginate_links as $link) {
            // Add active class for current page
            if (strpos($link, 'current') !== false) {
                echo '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
            } elseif (strpos($link, 'dots') !== false) {
                echo '<li class="page-item disabled"><span class="page-link">…</span></li>';
            } else {
                echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
            }
        }

        echo '</ul></nav>';
    }
}