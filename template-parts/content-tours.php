<!--================ Blog slider start =================-->
<section>
  <div class="container">
    <div class="owl-carousel owl-theme blog-slider">
      <?php
      $query = new WP_Query([
        'posts_per_page' => 5,
        'post_type'      => 'tour',
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="blog__slide__content">
              <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
              <p><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . __(' ago', 'sensive'); ?></p>
            </div>
          </div>
        <?
        }
      } else {
        ?>
        <p><? echo __('No tours yet.', 'sensive') ?></p>
      <?
      }

      wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>
<!--================ Blog slider end =================-->