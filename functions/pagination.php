<?php
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
  return '
    <nav class="blog-pagination justify-content-center d-flex %1$s" role="navigation">
      <ul class="pagination">%3$s</ul>
    </nav> 
	';
}

the_posts_pagination(array(
  'end_size' => 2,
));
