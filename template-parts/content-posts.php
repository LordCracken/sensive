<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php
        function output_info($type)
        {
          global $post;
          $cur_terms = get_the_terms($post->ID, $type);
          if (is_array($cur_terms)) {
            $links_array = [];
            foreach ($cur_terms as $cur_term) {
              array_push($links_array, '<a href="' . get_term_link($cur_term->term_id, $cur_term->taxonomy) . '">' . $cur_term->name . '</a>');
            }
            echo implode(', ', $links_array);
          }
        }

        $query = new WP_Query([
          'posts_per_page' => $args['count'],
          'post_type'      => $args['type']
        ]);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $text = '<i class="ti-notepad"></i>' . get_the_date('j M Y');
            $url  = get_the_date('/Y/m/d');

        ?>
            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid post-img" src="<?php the_post_thumbnail_url() ?>" alt="">
                <ul class="thumb-info">
                  <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><i class="ti-user"></i><?php the_author() ?></a></li>
                  <li><?php echo get_archives_link($url, $text, ''); ?></li>
                  <li><a href="<?php echo get_the_permalink() ?>/#comments"><i class="ti-themify-favicon"></i><?php comments_number('Пусто') ?></a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="<?php echo get_the_permalink() ?>">
                  <h3><?php the_title() ?></h3>
                </a>
                <?php if ($args['taxes']) : ?>
                  <p class="tag-list-inline"><?php echo __('Category:', 'sensive') ?> <?php output_info('category') ?></p>
                  <p class="tag-list-inline"><?php echo __('Tag:', 'sensive') ?> <?php output_info('post_tag') ?></p>
                <?php endif ?>
                <p><?php the_excerpt() ?></p>
                <a class="button" href="<?php echo get_the_permalink() ?>"><?php echo __('Read More', 'sensive') ?> <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          <?
          }
        } else {
          ?>
          <p><? echo __('No posts yet.', 'sensive') ?></p>
        <?
        }

        wp_reset_postdata(); // Сбрасываем $post
        ?>
        <?php if ($args['pagination']) : ?>
          <div class="row">
            <div class="col-lg-12">
              <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                  <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                      <span aria-hidden="true">
                        <i class="ti-angle-left"></i>
                      </span>
                    </a>
                  </li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="ti-angle-right"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <?php endif ?>
      </div>

      <?php dynamic_sidebar('sidebar_blog') ?>
      
    </div>
  </div>
</section>
<!--================ End Blog Post Area =================-->