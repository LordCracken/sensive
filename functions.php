<?php
require('functions/styles-and-scripts.php');
require('functions/theme-support.php');
require('functions/menus.php');
require('functions/post-types.php');
require('functions/widgets.php');
require('functions/pagination.php');
require('functions/comments.php');

require('widgets/search-widget.php');
require('widgets/category-widget.php');
require('widgets/popular-posts-widget.php');
require('widgets/tags-widget.php');
require('widgets/about-us.php');
require('widgets/newsletter.php');
require('widgets/feed.php');
require('widgets/social-media.php');

remove_filter('the_content', 'wpautop');

add_action('phpmailer_init', 'my_phpmailer_example');
function my_phpmailer_example($phpmailer)
{

  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.timeweb.ru';
  $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
  $phpmailer->Port = 25;
  $phpmailer->Username = 'your@email.site';
  $phpmailer->Password = 'password';

  // Additional settings…
  //$phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
  $phpmailer->From = "info@vladislav-yakimovskiy.ru";
  $phpmailer->FromName = "Sensive";
}



/** количество постов выводимых на стр. архивов - и произвольный тип записей **/
function change_pagecount($query)
{
  if (is_search() || is_archive()) {
    // Выводим только 8 постов на странице поиска и т.д.
    $query->set('posts_per_page', 8);
    return;
  }
}
add_action('pre_get_posts', 'change_pagecount', 1);
/** количество постов выводимых на стр. архивов **/
