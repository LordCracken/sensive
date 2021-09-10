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
                <?php if ($args['type'] === 'post') : ?>
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

      <!-- Start Blog Post Siddebar -->
      <div class="col-lg-4 sidebar-widgets">
        <div class="widget-wrap">
          <div class="single-sidebar-widget newsletter-widget">
            <form action="#">
              <div class="d-flex flex-row">
                <input class="form-control" name="q" placeholder="Search" required="" type="text" value="">
                <button class="click-btn btn btn-default bbtns"><i class="ti-search"></i></button>
              </div>
            </form>
          </div>

          <!-- <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div> -->

          <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">Category</h4>
            <ul class="cat-list mt-20">
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Technology</p>
                  <p>(03)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Software</p>
                  <p>(09)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Lifestyle</p>
                  <p>(12)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Shopping</p>
                  <p>(02)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Food</p>
                  <p>(10)</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Popular Post</h4>
            <div class="popular-post-list">
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb1.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Accused of assaulting flight attendant miktake alaways</h6>
                  </a>
                </div>
              </div>
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb2.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Tennessee outback steakhouse the
                      worker diagnosed</h6>
                  </a>
                </div>
              </div>
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb3.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Tennessee outback steakhouse the
                      worker diagnosed</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="single-sidebar-widget tag_cloud_widget">
            <h4 class="single-sidebar-widget__title">Tags</h4>
            <ul class="list">
              <li>
                <a href="#">project</a>
              </li>
              <li>
                <a href="#">love</a>
              </li>
              <li>
                <a href="#">technology</a>
              </li>
              <li>
                <a href="#">travel</a>
              </li>
              <li>
                <a href="#">software</a>
              </li>
              <li>
                <a href="#">life style</a>
              </li>
              <li>
                <a href="#">design</a>
              </li>
              <li>
                <a href="#">illustration</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Post Siddebar -->
  </div>
</section>
<!--================ End Blog Post Area =================-->