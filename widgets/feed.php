<?php
// Register and load the widget
function sensive_feed_load_widget()
{
  register_widget('sensive_feed');
}
add_action('widgets_init', 'sensive_feed_load_widget');

// Creating the widget 
class sensive_feed extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_feed',

      // Widget name will appear in UI
      __('Sensive Feed', 'sensive'),

      // Widget description
      array('description' => __('Feed widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $title = apply_filters('widget_title', $instance['title']);
?>
    <div class="col-lg-3  col-md-6 col-sm-6">
      <div class="single-footer-widget mail-chimp">
        <h6 class="mb-20"><?php echo $title ?></h6>
        <ul class="instafeed d-flex flex-wrap">
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i1.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i2.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i3.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i4.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i5.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i6.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i7.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri() ?>/img/instagram/i8.jpg" alt=""></li>
        </ul>
      </div>
    </div>

  <?php
  }


  // Сохранение настроек виджета (очистка)
  function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

    return $instance;
  }

  function form($instance)
  {
    $title = @$instance['title'] ?: 'Instagram-лента';

  ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
    </p>
<?php
  }
} // Class sensive_search ends here