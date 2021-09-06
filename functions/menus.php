<?php
function sensive_menus()
{

  $locations = array('header'  => 'header-menu');

  register_nav_menus($locations);
}

add_action('init', 'sensive_menus');

class bootstrap_4_walker_nav_menu extends Walker_Nav_menu
{

  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $output .= "<ul class=\"nav navbar-nav menu_nav justify-content-center\">";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
    $classes[] = 'nav-item';

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $output .= '<li ' . $value . $class_names . '>';


    $attributes = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
    $attributes .= ' class="nav-link"';

    $item_output = '<a' . $attributes . '>';
    $item_output .= apply_filters('the_title', $item->title, $item->ID);
    $item_output .= '</a>';

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
