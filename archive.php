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

<?php get_template_part('template-parts/content', 'archive'); ?>

<?php get_footer() ?>