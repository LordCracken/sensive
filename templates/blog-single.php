<?php
/*
Template Name: Single Post
Template Post Type: post, tour
*/
__('Single Post', 'sensive');

$breadcrumbs_page_name = __('Blog Details', 'sensive');
$sidebar_type = 'sidebar_blog';

$post_type = get_post_type();

if ($post_type === 'tour') {
  $breadcrumbs_page_name = __('Tour Details', 'sensive');
  $sidebar_type = 'sidebar_tours';
}
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
    <li class="breadcrumb-item active" aria-current="page">' . $breadcrumbs_page_name . '</li>
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

        <? while (have_posts()) : the_post();
          get_template_part('template-parts/content', get_post_type());

          if (comments_open() || get_comments_number()) : comments_template();
          endif;
        endwhile; ?>
      </div>

      <?php dynamic_sidebar($sidebar_type) ?>
    </div>
  </div>
</section>
<!--================ End Blog Post Area =================-->

<? get_footer() ?>