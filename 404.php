<?php
$hero_content = '
<h1>404 Page not found</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_permalink(17) . '">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">404 Page not found</li>
  </ol>
</nav>';
get_header(null, ['content' => $hero_content]);
get_footer();
