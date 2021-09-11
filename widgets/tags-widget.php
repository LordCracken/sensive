<?php
// Register and load the widget
function sensive_tags_load_widget()
{
  register_widget('sensive_tags');
}
add_action('widgets_init', 'sensive_tags_load_widget');

// Creating the widget 
class sensive_tags extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_tags',

      // Widget name will appear in UI
      __('Sensive Tags', 'sensive'),

      // Widget description
      array('description' => __('Tags widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $tags_list = '';

    foreach (get_terms(['taxonomy' => 'post_tag', 'hide_empty'   => 1]) as $tag) {
      $tags_list .=
        '<li>
          <a href="' . get_term_link($tag->term_id, 'post_tag') . '">' . $tag->name . '</a>
        </li>';
    }

    echo '<div class="single-sidebar-widget tag_cloud_widget">
            <h4 class="single-sidebar-widget__title">' . __('Tags', 'sensive') . '</h4>
            <ul class="list">' . $tags_list . '</ul>
          </div>';
  }
}
