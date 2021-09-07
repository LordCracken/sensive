<?php
add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');
function theme_styles_and_scripts()
{
  // styles
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/bootstrap.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendors/fontawesome/css/all.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendors/fontawesome/css/all.min.css');
  wp_enqueue_style('linericon', get_template_directory_uri() . '/vendors/linericon/style.css');
  wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/vendors/owl-carousel/owl.theme.default.min.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.css');
  wp_enqueue_style('themify', get_template_directory_uri() . '/vendors/themify-icons/themify-icons.css');

  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('additional', get_template_directory_uri() . '/css/additional.css');

  // scripts
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/vendors/jquery/jquery-3.2.1.min.js', array(), '3.2.1', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/bootstrap.bundle.min.js', array(), '1.0.0', true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', array(), '1.0.0', true);

  wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '1.0.0', true);
  wp_enqueue_script('mail-script', get_template_directory_uri() . '/js/mail-script.js', array(), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
