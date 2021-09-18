<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <?php
          $current = absint(
            max(
              1,
              get_query_var('paged') ? get_query_var('paged') : get_query_var('page')
            )
          );

          $query = new WP_Query(['s' => get_search_query(), 'sentence' => true, 'paged' => $current, 'posts_per_page' => 8]);
          if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <div class="col-md-6">
                <div class="single-recent-blog-post card-view">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : 'https://sensive.vladislav-yakimovskiy.ru/wp-content/uploads/2021/09/hero-banner.png' ?>" alt="">
                    <ul class="thumb-info">
                      <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><i class="ti-user"></i><?php the_author() ?></a></li>
                      <li><a href="<?php echo get_the_permalink() ?>#comments"><i class="ti-themify-favicon"></i><?php comments_number(__('Empty', 'sensive'), __('1 Comment', 'sensive'), __('% Comments', 'sensive')) ?></a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="<?php echo get_permalink() ?>">
                      <h3><?php the_title() ?></h3>
                    </a>
                    <p><?php the_excerpt() ?></p>
                    <a class="button" href="<?php echo get_permalink() ?>"><?php echo  __('Read More', 'sensive') ?> <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
          <?php endwhile;
          else : echo  __('No posts.', 'sensive');
          endif ?>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <?php
            global $wp_query;
            $restore_wp_query = $wp_query;
            $wp_query         = $query;
            the_posts_pagination(array(
              'before_page_number' => '<li class="page-item"><span class="page-link">',
              'after_page_number'  => '</span></li>',
              'prev_text'          => '<li class="page-item">
                                          <span class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                              <i class="ti-angle-left"></i>
                                            </span>
                                          </span>
                                        </li>',
              'next_text'          => '<li class="page-item">
                                          <span class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                              <i class="ti-angle-right"></i>
                                            </span>
                                          </span>
                                        </li>'
            ));
            $wp_query = $restore_wp_query;
            ?>
          </div>
        </div>
      </div>

      <?php dynamic_sidebar('sidebar_home') ?>
    </div>
  </div>
</section>
<!--================ End Blog Post Area =================-->