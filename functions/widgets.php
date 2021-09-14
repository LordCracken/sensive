<?php
function sensive_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Home Sidebar', 'sensive'),
    'id'            => 'sidebar_home',
    'before_widget' => '',
    'after_widget'  => '',
    'before_sidebar' => '<div class="col-lg-4 sidebar-widgets %2$s"><div class="widget-wrap">',
    'after_sidebar'  => '</div></div>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar(array(
    'name'          => __('Blog Sidebar', 'sensive'),
    'id'            => 'sidebar_blog',
    'before_widget' => '',
    'after_widget'  => '',
    'before_sidebar' => '<div class="col-lg-4 sidebar-widgets %2$s"><div class="widget-wrap">',
    'after_sidebar'  => '</div></div>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar(array(
    'name'          => __('Tours Sidebar', 'sensive'),
    'id'            => 'sidebar_tours',
    'before_widget' => '',
    'after_widget'  => '',
    'before_sidebar' => '<div class="col-lg-4 sidebar-widgets %2$s"><div class="widget-wrap">',
    'after_sidebar'  => '</div></div>',
    'before_title'  => '',
    'after_title'   => '',
  ));

  register_sidebar(array(
    'name'          => __('Footer Sidebar', 'sensive'),
    'id'            => 'sidebar_footer',
    'before_widget' => '',
    'after_widget'  => '',
    'before_sidebar' => '<div class="row">',
    'after_sidebar'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
add_action('widgets_init', 'sensive_widgets_init');
