<?php
/*
Template Name: Tours
*/
__('Tours', 'sensive');
?>
<?php
$hero_content = '
<h1>' . get_the_title() . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">' . __('Home', 'sensive') . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">' . __('Tours Page', 'sensive') . '</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]) ?>

<?php get_template_part('template-parts/content', 'posts', ['count' => -1, 'type' => 'tour', 'pagination' => true]); ?>

<?php get_footer() ?>