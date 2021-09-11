<?php
if (is_category()) {
  $archive_heading = __('Rubric: ', 'sensive') . get_queried_object()->name;
}
if (is_tag()) {
  $archive_heading = __('Posts by tag: ', 'sensive') . get_queried_object()->name;
}
if (is_author()) {
  $archive_heading = __('Author\'s notes: ', 'sensive') . get_the_author_meta('display_name');
}
if (is_date()) {
  $archive_heading = __('Archive by date: ', 'sensive') . get_the_date('d.m.Y');
}

$hero_content = '
<h1>' . $archive_heading . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">' . __('Home', 'sensive') . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">' . __('Archive Page', 'sensive') . '</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]) ?>

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-md-6">
                <div class="single-recent-blog-post card-view">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="<? the_post_thumbnail_url() ?>" alt="">
                    <ul class="thumb-info">
                      <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><i class="ti-user"></i><?php the_author() ?></a></li>
                      <li><a href="<?php echo get_the_permalink() ?>/#comments"><i class="ti-themify-favicon"></i><?php comments_number(__('Empty', 'sensive'), __('1 Comment', 'sensive'), __('% Comments', 'sensive')) ?></a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="blog-single.html">
                      <h3><?php the_title() ?></h3>
                    </a>
                    <p><?php the_excerpt() ?></p>
                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
          <?php endwhile;
          else : echo  __('No posts.', 'sensive');
          endif ?>
        </div>
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
      </div>

      <?php dynamic_sidebar('sidebar_blog') ?>
    </div>
  </div>
</section>
<!--================ End Blog Post Area =================-->

<?php get_footer() ?>