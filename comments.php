<?
if (post_password_required()) {
  return;
}
?>

<?
// You can start editing here -- including this comment!
if (have_comments()) :
?>
  <? the_comments_navigation(); ?>

  <div class="comments-area" id="comments">
    <h4><?php comments_count() ?></h4>
    <?
    wp_list_comments(
      array(
        'walker'            => new Bootstrap_Walker_Comment(),
        'max_depth'         => '2',
        'style'             => 'div',
        'type'              => 'all',
        'reply_text'        => __('Reply', 'sensive'),
        'per_page'          => '10',
        'avatar_size'       => 60,
        'format'            => 'html5',
        'echo'              => true,
      )
    );
    ?>
  </div><!-- .comment-list -->

  <?
  the_comments_navigation();

  // If comments are closed and there are comments, let's leave a little note, shall we?
  if (!comments_open()) :
  ?>
    <p class="no-comments"><? esc_html_e('Comments are closed.', 'band-digital'); ?></p>
<?
  endif;

endif; // Check for have_comments().

$name_placeholder = __('Enter Name', 'sensive');
$email_placeholder = __('Enter Email Address', 'sensive');
$comment_placeholder = __('Message', 'sensive');

$defaults = [
  'fields'               => [
    'author' => '<div class="form-group form-inline"><div class="form-group col-lg-6 col-md-6 name">
        <input id="author" class="form-control" name="author" type="text" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'' . $name_placeholder . '\'" value="' . esc_attr($commenter['comment_author']) . '" placeholder="' . $name_placeholder . '" />
      </div>',
    'email'  => '<div class="form-group col-lg-6 col-md-6 email">
        <input id="email" class="form-control" name="email" type="email" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'' . $email_placeholder . '\'" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="' . $email_placeholder . '" />
      </div></div>',
    'cookies' => ''
  ],
  'comment_field'        => '<div class="form-group mb-3">
      <textarea id="comment" class="form-control" name="comment" cols="30" rows="6" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'' . $comment_placeholder . '\'" aria-required="true" required="required" placeholder="' . $comment_placeholder . '"></textarea>
    </div>',
  'must_log_in'          => '<p class="must-log-in">' .
    sprintf(__('You must be <a href="%s">logged in</a> to post a comment.', 'sensive'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '
     </p>',
  'logged_in_as'         => null,
  'comment_notes_before' => null,
  'comment_notes_after'  => '',
  'id_form'              => 'commentform',
  'id_submit'            => 'submit',
  'class_form'           => null,
  'class_submit'         => 'button submit_btn',
  'name_submit'          => 'submit',
  'title_reply'          => __('Leave a Reply', 'sensive'),
  'title_reply_to'       => __('Reply ', 'sensive') . '%s',
  'title_reply_before'   => '<h4 id="reply-title" class="d-flex justify-content-between">',
  'title_reply_after'    => '</h4>',
  'cancel_reply_before'  => '<div class="cancel-reply-btn comment-reply-link text-uppercase">',
  'cancel_reply_after'   => '</div>',
  'cancel_reply_link'    => __('Cancel reply', 'sensive'),
  'label_submit'         => __('Post comment', 'sensive'),
  'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button>',
  'submit_field'         => '%1$s %2$s',
  'format'               => 'html5',
]; ?>

<?php
add_filter('comment_form_fields', 'kama_reorder_comment_fields');
function kama_reorder_comment_fields($fields)
{
  // die(print_r( $fields )); // посмотрим какие поля есть

  $new_fields = array(); // сюда соберем поля в новом порядке

  $myorder = array('author', 'email', 'url', 'comment'); // нужный порядок

  foreach ($myorder as $key) {
    $new_fields[$key] = $fields[$key];
    unset($fields[$key]);
  }

  // если остались еще какие-то поля добавим их в конец
  if ($fields)
    foreach ($fields as $key => $val)
      $new_fields[$key] = $val;

  return $new_fields;
}
?>

<div class="comment-form">
  <?php comment_form($defaults) ?>
</div>