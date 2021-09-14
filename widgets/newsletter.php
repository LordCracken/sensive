<?php
// Register and load the widget
function sensive_newsletter_load_widget()
{
  register_widget('sensive_newsletter');
}
add_action('widgets_init', 'sensive_newsletter_load_widget');

// Creating the widget 
class sensive_newsletter extends WP_Widget
{

  function __construct()
  {
    parent::__construct(

      // Base ID of your widget
      'sensive_newsletter',

      // Widget name will appear in UI
      __('Sensive Newsletter', 'sensive'),

      // Widget description
      array('description' => __('About us widget for Sensive theme', 'sensive'),)
    );
  }

  // Creating widget front-end

  public function widget($args, $instance)
  {
    $email_placeholder = __('Enter Email', 'sensive');

    $title = apply_filters('widget_title', $instance['title']);
    $text = apply_filters('widget_title', $instance['text']); ?>

    <form target="_blank" novalidate="true" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post" class="col-lg-4  col-md-6 col-sm-6">
      <div class="single-footer-widget">
        <h6><?php echo $title ?></h6>
        <p><?php echo $text ?></p>
        <div class="" id="mc_embed_signup">

          <div class="form-inline">
            <div class="d-flex flex-row">
              <input class="form-control" name="email" placeholder="<?php echo $email_placeholder ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $email_placeholder ?> '" required="" type="email">
              <input type="hidden" name="campaign_token" value="on2Td" />
              <button type="submit" class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>
            </div>
            <div class="info"></div>
          </div>
        </div>
    </form>
    </div>
  <?php

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
    $title = @$instance['title'] ?: 'Рассылка';
    $text = @$instance['text'] ?: 'Подпишитесь на нас!';

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