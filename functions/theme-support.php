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
  }
  add_action('after_setup_theme', 'sensive_setup');
}