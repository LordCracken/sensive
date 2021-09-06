<?php
add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');
function theme_styles_and_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri() . 'css/style.css');
  wp_enqueue_style('main', get_stylesheet_uri() . 'css/main.css');

  wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array(), '1.0.0', true);
  wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '1.0.0', true);
  wp_enqueue_script('form', get_template_directory_uri() . '/js/jquery.form.js', array(), '1.0.0', true);
  wp_enqueue_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.0.0', true);
  wp_enqueue_script('mail-script', get_template_directory_uri() . '/js/mail-script.js', array(), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
