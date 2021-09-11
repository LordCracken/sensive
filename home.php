<?php
$hero_content = '
<h1>' . get_the_title(get_option('page_for_posts', true)) . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">' . __('Home', 'sensive') . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">' . __('Blog Page', 'sensive') . '</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]) ?>

<?php get_template_part('template-parts/content', 'posts', ['count' => -1, 'type' => 'post', 'pagination' => true, 'taxes' => true, 'sidebar_type' => 'sidebar_blog']); ?>

<? get_footer() ?>