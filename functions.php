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

remove_filter('the_content', 'wpautop');

add_action('phpmailer_init', 'my_phpmailer_example');
function my_phpmailer_example($phpmailer)
{

  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.timeweb.ru';
  $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
  $phpmailer->Port = 25;
  $phpmailer->Username = 'info@vladislav-yakimovskiy.ru';
  $phpmailer->Password = 'khB3c28D';

  // Additional settings…
  //$phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
  $phpmailer->From = "info@vladislav-yakimovskiy.ru";
  $phpmailer->FromName = "Sensive";
}
