<?php
$hero_content = '
<h1>' . get_the_title(get_option('page_for_posts', true)) . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Page</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]) ?>

<?php get_template_part('template-parts/content', 'posts', ['count' => 5, 'type' => 'post', 'pagination' => true]); ?>

<? get_footer() ?>