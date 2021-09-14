<?php
$hero_content = '<h1>' . __('Search: ', 'sensive') . get_search_query() . '</h1>';
get_header(null, ['content' => $hero_content]) ?>

<?php get_template_part('template-parts/content', 'archive'); ?>

<?php get_footer() ?>