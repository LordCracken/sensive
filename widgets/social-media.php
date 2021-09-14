<?php
// Register and load the widget
function sensive_social_load_widget()
{
  register_widget('sensive_social');
}
add_action('widgets_init', 'sensive_social_load_widget');

// Creating the widget 
class sensive_social extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_social',

      // Widget name will appear in UI
      __('Sensive Social', 'sensive'),

      // Widget description
      array('description' => __('Social widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $title = apply_filters('widget_title', $instance['title']);
    $text = apply_filters('widget_title', $instance['text']);

    $social =
      '<div class="col-lg-2 col-md-6 col-sm-6">
      <div class="single-footer-widget">
        <h6>' . $title . '</h6>
        <p>' . $text . '</p>
        <div class="footer-social d-flex align-items-center">
          <a href="' . get_field('facebook', get_option('page_on_front')) . '">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="' . get_field('twitter', get_option('page_on_front')) . '">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="' . get_field('dribbble', get_option('page_on_front')) . '">
            <i class="fab fa-dribbble"></i>
          </a>
          <a href="' . get_field('behance', get_option('page_on_front')) . '">
            <i class="fab fa-behance"></i>
          </a>
        </div>
      </div>
    </div>';

    echo $social;
  }

  // Сохранение настроек виджета (очистка)
  function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['text'] = (!empty($new_instance['text'])) ? strip_tags($new_instance['text']) : '';

    return $instance;
  }

  function form($instance)
  {
    $title = @$instance['title'] ?: 'Следите за нами';
    $text = @$instance['text'] ?: 'Наши соц. сети';

?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo esc_attr($text); ?>">
    </p>
<?php
  }
} // Class sensive_social ends here