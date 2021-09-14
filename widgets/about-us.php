<?php
// Register and load the widget
function sensive_about_load_widget()
{
  register_widget('sensive_about');
}
add_action('widgets_init', 'sensive_about_load_widget');

// Creating the widget 
class sensive_about extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_about',

      // Widget name will appear in UI
      __('Sensive About Us', 'sensive'),

      // Widget description
      array('description' => __('About us widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $title = apply_filters('widget_title', $instance['title']);
    $text = apply_filters('widget_title', $instance['text']);

    $about_info =
      '<div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>' . $title . '</h6>
            <p>' . $text .  '</p>
          </div>
        </div>';

    echo $about_info;
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
    $title = @$instance['title'] ?: 'О нас';
    $text = @$instance['text'] ?: 'Напишите о себе';

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
} // Class sensive_search ends here