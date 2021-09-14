<?php
if (!function_exists('sensive_setup')) {
  function sensive_setup()
  {
    load_theme_textdomain('sensive', get_template_directory() . '/languages');
    add_theme_support('custom-logo', [
      'height'      => 26,
      'width'       => 122,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => '',
      'unlink-homepage-logo' => true,
    ]);
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
      'script',
      'style',
    ));
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'sensive_setup');
}
