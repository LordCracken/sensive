<?php
/*
Template Name: Single Post
Template Post Type: post, tour
*/
__('Single Post', 'sensive');
?>
<?php
function comments_count()
{
  if (get_comments_number() < 10 && get_comments_number() > 0) echo '0';
  comments_number();
}
$hero_content = '
<h1>' . get_the_title() . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">' . __('Home', 'sensive') . '</a></li>
    <li class="breadcrumb-item"><a href="' . get_permalink(get_option('page_for_posts')) . '">' . __('Blog', 'sensive') . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]) ?>

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main_blog_details">
          <div class="user_details">
            <div class="float-left">
              <?php
              $tags = wp_get_post_tags($post->ID);
              foreach ($tags as $tag) : ?>
                <a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
              <? endforeach ?>
            </div>
            <div class="float-right mt-sm-0 mt-3">
              <div class="media">
                <div class="media-body">
                  <h5><?php the_author() ?></h5>
                  <p><?php the_time('j M Y, H:i') ?></p>
                </div>
                <div class="d-flex">
                  <img width="42" height="42" src="<? echo get_avatar_url(get_the_author_meta('ID')) ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <?php the_content() ?>
          <div class="news_d_footer flex-column flex-sm-row">
            <span class="mr-2"><i class="ti-themify-favicon"></i></span>
            <?php comments_count() ?>
            <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
              <a href="<?php the_field('facebook', get_option('page_on_front')) ?>"><i class="fab fa-facebook-f"></i></a>
              <a href="<?php the_field('twitter', get_option('page_on_front')) ?>"><i class="fab fa-twitter"></i></a>
              <a href="<?php the_field('dribbble', get_option('page_on_front')) ?>"><i class="fab fa-dribbble"></i></a>
              <a href="<?php the_field('behance', get_option('page_on_front')) ?>"><i class="fab fa-behance"></i></a>
            </div>
          </div>
        </div>

        <div class="comments-area" id="comments">
          <h4><?php comments_count() ?></h4>
          <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="<? echo get_template_directory_uri() ?>/img/blog/c1.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Emilly Blunt</a></h5>
                  <p class="date">December 4, 2017 at 3:12 pm </p>
                  <p class="comment">
                    Never say goodbye till the end comes!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">reply</a>
              </div>
            </div>
          </div>
          <div class="comment-list left-padding">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="<? echo get_template_directory_uri() ?>/img/blog/c2.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Elsie Cunningham</a></h5>
                  <p class="date">December 4, 2017 at 3:12 pm </p>
                  <p class="comment">
                    Never say goodbye till the end comes!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">reply</a>
              </div>
            </div>
          </div>
          <div class="comment-list left-padding">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="<? echo get_template_directory_uri() ?>/img/blog/c3.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Annie Stephens</a></h5>
                  <p class="date">December 4, 2017 at 3:12 pm </p>
                  <p class="comment">
                    Never say goodbye till the end comes!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">reply</a>
              </div>
            </div>
          </div>
          <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="<? echo get_template_directory_uri() ?>/img/blog/c4.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Maria Luna</a></h5>
                  <p class="date">December 4, 2017 at 3:12 pm </p>
                  <p class="comment">
                    Never say goodbye till the end comes!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">reply</a>
              </div>
            </div>
          </div>
          <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="<? echo get_template_directory_uri() ?>/img/blog/c5.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Ina Hayes</a></h5>
                  <p class="date">December 4, 2017 at 3:12 pm </p>
                  <p class="comment">
                    Never say goodbye till the end comes!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">reply</a>
              </div>
            </div>
          </div>
        </div>
        <div class="comment-form">
          <h4>Leave a Reply</h4>
          <form>
            <div class="form-group form-inline">
              <div class="form-group col-lg-6 col-md-6 name">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
              </div>
              <div class="form-group col-lg-6 col-md-6 email">
                <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
            </div>
            <div class="form-group">
              <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
            </div>
            <a href="#" class="button submit_btn">Post Comment</a>
          </form>
        </div>
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

<? get_footer() ?>