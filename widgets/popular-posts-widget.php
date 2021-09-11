<?php
// Register and load the widget
function sensive_popular_posts_load_widget()
{
  register_widget('sensive_popular_posts');
}
add_action('widgets_init', 'sensive_popular_posts_load_widget');

// Creating the widget 
class sensive_popular_posts extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_popular_posts',

      // Widget name will appear in UI
      __('Sensive Popular Posts', 'sensive'),

      // Widget description
      array('description' => __('Popular posts widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $posts_list = '';

    $query = new WP_Query([
      'posts_per_page' => 3,
      'post_type'      => 'post',
      'orderby'        => 'comment_count'
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $text = get_the_date('M j');
        $url  = get_the_date('/Y/m/d');

        $posts_list .=
          '<div class="single-post-list">
            <div class="thumb">
              <div class="aspect-ratio-box">
                <img class="card-img rounded-0" src="' . get_the_post_thumbnail_url() . '" alt="">
              </div>
              <ul class="thumb-info">
                <li><a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author() . '</a></li>
                <li>' . get_archives_link($url, $text, '') . '</li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="' . get_permalink() . '">
                <h6>' . get_the_title() . '</h6>
              </a>
            </div>
          </div>';
      }
    } else {
      $posts_list .= '<p>' . __('No posts yet.', 'sensive') . '</p>';
    }

    wp_reset_postdata();

    echo
    '<div class="single-sidebar-widget popular-post-widget">
      <h4 class="single-sidebar-widget__title">' . __('Popular Post', 'sensive') . '</h4>
      <div class="popular-post-list">';
    echo $posts_list;
    echo '</div>
    </div>';
  }
} // Class sensive_search ends here