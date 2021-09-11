<?php
// Register and load the widget
function sensive_category_load_widget()
{
  register_widget('sensive_category');
}
add_action('widgets_init', 'sensive_category_load_widget');

// Creating the widget 
class sensive_category extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_category',

      // Widget name will appear in UI
      __('Sensive Category', 'sensive'),

      // Widget description
      array('description' => __('Category widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $args = [
      'title_li'   => '',
      'show_count' => 1
    ];

    $category_list = '';

    foreach (get_categories(['hide_empty'   => 1]) as $category) {
      $category_count = $category->count > 9 ? $category->count : 0 . $category->count;
      $category_list .=
        '<li>
          <a href="' . get_category_link($category->term_id) . '" class="d-flex justify-content-between">
            <p>' . $category->name . '</p>
            <p>(' . $category_count . ')</p>
          </a>
        </li>';
    }

    echo '<div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">' . __('Category', 'sensive') . '</h4>
            <ul class="cat-list mt-20">' . $category_list . '</ul>
          </div>';
  }
}
