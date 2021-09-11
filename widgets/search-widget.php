<?php
// Register and load the widget
function sensive_search_load_widget()
{
  register_widget('sensive_search');
}
add_action('widgets_init', 'sensive_search_load_widget');

// Creating the widget 
class sensive_search extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_search',

      // Widget name will appear in UI
      __('Sensive Search', 'sensive'),

      // Widget description
      array('description' => __('Search widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $search_form =
      '<div class="single-sidebar-widget newsletter-widget">
        <form action="' . home_url("/") . '">
          <div class="d-flex flex-row">
            <input class="form-control" name="s" id="s" placeholder="' . __("Search", "sensive") . '" required type="search" value="' . get_search_query() . '">
            <button class="click-btn btn btn-default bbtns"><i class="ti-search"></i></button>
          </div>
        </form>
      </div>';

    echo $search_form;
  }
} // Class sensive_search ends here