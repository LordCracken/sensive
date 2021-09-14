<?php
class Bootstrap_Walker_Comment extends Walker
{
  public $tree_type = 'comment';
  public $db_fields = array(
    'parent' => 'comment_parent',
    'id'     => 'comment_ID',
  );

  public function start_lvl(&$output, $depth = 0, $args = array())
  {
    $GLOBALS['comment_depth'] = $depth + 1;

    switch ($args['style']) {
      case 'div':
        break;
      case 'ol':
        $output .= '<ol class="children">' . "\n";
        break;
      case 'ul':
      default:
        $output .= '<ul class="children">' . "\n";
        break;
    }
  }

  public function end_lvl(&$output, $depth = 0, $args = array())
  {
    $GLOBALS['comment_depth'] = $depth + 1;

    switch ($args['style']) {
      case 'div':
        break;
      case 'ol':
        $output .= "</ol><!-- .children -->\n";
        break;
      case 'ul':
      default:
        $output .= "</ul><!-- .children -->\n";
        break;
    }
  }

  public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
  {
    if (!$element) {
      return;
    }

    $id_field = $this->db_fields['id'];
    $id       = $element->$id_field;

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);

    if ($max_depth <= $depth + 1 && isset($children_elements[$id])) {
      foreach ($children_elements[$id] as $child) {
        $this->display_element($child, $children_elements, $max_depth, $depth, $args, $output);
      }

      unset($children_elements[$id]);
    }
  }

  public function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0)
  {
    $depth++;
    $GLOBALS['comment_depth'] = $depth;
    $GLOBALS['comment']       = $comment;

    if (!empty($args['callback'])) {
      ob_start();
      call_user_func($args['callback'], $comment, $args, $depth);
      $output .= ob_get_clean();
      return;
    }

    if ('comment' === $comment->comment_type) {
      add_filter('comment_text', array($this, 'filter_comment_text'), 40, 2);
    }

    if (('pingback' === $comment->comment_type || 'trackback' === $comment->comment_type) && $args['short_ping']) {
      ob_start();
      $this->ping($comment, $depth, $args);
      $output .= ob_get_clean();
    } elseif ('html5' === $args['format']) {
      ob_start();
      $this->html5_comment($comment, $depth, $args);
      $output .= ob_get_clean();
    } else {
      ob_start();
      $this->comment($comment, $depth, $args);
      $output .= ob_get_clean();
    }

    if ('comment' === $comment->comment_type) {
      remove_filter('comment_text', array($this, 'filter_comment_text'), 40);
    }
  }

  public function end_el(&$output, $comment, $depth = 0, $args = array())
  {
    if (!empty($args['end-callback'])) {
      ob_start();
      call_user_func($args['end-callback'], $comment, $args, $depth);
      $output .= ob_get_clean();
      return;
    }
    if ('div' === $args['style']) {
      $output .= "</div><!-- #comment-## -->\n";
    } else {
      $output .= "</li><!-- #comment-## -->\n";
    }
  }

  public function filter_comment_text($comment_text, $comment)
  {
    $commenter          = wp_get_current_commenter();
    $show_pending_links = !empty($commenter['comment_author']);

    if ($comment && '0' == $comment->comment_approved && !$show_pending_links) {
      $comment_text = wp_kses($comment_text, array());
    }

    return $comment_text;
  }

  protected function comment($comment, $depth, $args)
  {
    if ('div' === $args['style']) {
      $tag       = 'div';
      $add_below = 'comment';
    } else {
      $tag       = 'li';
      $add_below = 'div-comment';
    }

    $commenter          = wp_get_current_commenter();
    $show_pending_links = isset($commenter['comment_author']) && $commenter['comment_author'];

    if ($commenter['comment_author_email']) {
      $moderation_note = __('Your comment is awaiting moderation.', 'band_digital');
    } else {
      $moderation_note = __('Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'band_digital');
    }
?>
    <<?php echo $tag; ?> <?php comment_class($this->has_children ? 'parent' : '', $comment); ?> id="comment-<?php comment_ID(); ?>">
      <?php if ('div' !== $args['style']) : ?>
        <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
          <?php
          if (0 != $args['avatar_size']) {
            echo get_avatar($comment, $args['avatar_size']);
          }
          ?>
          <?php
          $comment_author = get_comment_author_link($comment);

          if ('0' == $comment->comment_approved && !$show_pending_links) {
            $comment_author = get_comment_author($comment);
          }

          printf(
            /* translators: %s: Comment author link. */
            __('%s <span class="says">says:</span>'),
            sprintf('<cite class="fn">%s</cite>', $comment_author)
          );
          ?>
        </div>
        <?php if ('0' == $comment->comment_approved) : ?>
          <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
          <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata">
          <?php
          printf(
            '<a href="%s">%s</a>',
            esc_url(get_comment_link($comment, $args)),
            sprintf(
              __('%1$s at %2$s'),
              get_comment_date('', $comment),
              get_comment_time()
            )
          );

          edit_comment_link(__('(Edit)'), ' &nbsp;&nbsp;', '');
          ?>
        </div>

        <?php
        comment_text(
          $comment,
          array_merge(
            $args,
            array(
              'add_below' => $add_below,
              'depth'     => $depth,
              'max_depth' => $args['max_depth'],
            )
          )
        );
        ?>

        <?php
        $additional_class = 'btn-reply text-uppercase';
        echo preg_replace(
          '/comment-reply-link/',
          'comment-reply-link ' . $additional_class,
          get_comment_reply_link(
            array_merge(
              $args,
              array(
                'add_below' => $add_below,
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
                'before'    => '<div class="reply">',
                'after'     => '</div>',
              )
            )
          ),
          1
        );
        ?>

        <?php if ('div' !== $args['style']) : ?>
        </div>
      <?php endif; ?>
    <?php
  }

  protected function html5_comment($comment, $depth, $args)
  {
    $tag = ('div' === $args['style']) ? 'div' : 'li';

    $commenter          = wp_get_current_commenter();
    $show_pending_links = !empty($commenter['comment_author']);

    if ($commenter['comment_author_email']) {
      $moderation_note = __('Your comment is awaiting moderation.', 'band_digital');
    } else {
      $moderation_note = __('Your comment is awaiting moderation. This is a preview; your comment will be posted after review.', 'band_digital');
    }
    ?>
      <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($this->has_children ? 'parent' : '', $comment); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-list">
          <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
              <div class="thumb">
                <?php
                if (0 != $args['avatar_size']) {
                  echo get_avatar($comment, $args['avatar_size'], 'mm', '');
                }
                ?>
              </div>
              <div class="desc">
                <?php
                $comment_author = get_comment_author_link($comment);

                if ('0' == $comment->comment_approved && !$show_pending_links) {
                  $comment_author = get_comment_author($comment);
                }

                printf(
                  __('%s'),
                  sprintf('<h5>%s</h5>', $comment_author)
                );
                ?>

                <p class="date">
                  <?php
                  printf(
                    '%s',
                    sprintf(
                      __('%1$s at %2$s'),
                      get_comment_date('j F, Y', $comment),
                      get_comment_time('')
                    )
                  );
                  ?>
                </p>

                <?php if ('0' == $comment->comment_approved) : ?>
                  <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
                <?php endif; ?>

                <p class="comment">
                  <?php echo get_comment_text(); ?>
                </p>
              </div>
            </div>
            <?php
            if ('1' == $comment->comment_approved || $show_pending_links) {
              $additional_class = 'btn-reply text-uppercase';
              echo preg_replace(
                '/comment-reply-link/',
                'comment-reply-link ' . $additional_class,
                get_comment_reply_link(
                  array_merge(
                    $args,
                    array(
                      'add_below' => 'div-comment',
                      'depth'     => $depth,
                      'max_depth' => $args['max_depth'],
                      'before'    => '<div class="reply-btn">',
                      'after'     => '</div>',
                    )
                  )
                ),
                1
              );
            }
            ?>
          </div><!-- .comment-meta -->

        </article><!-- .comment-body -->
    <?php
  }
}

function enqueue_comment_reply()
{
  if (is_singular())
    wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'enqueue_comment_reply');
