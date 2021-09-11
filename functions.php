<?php
require('functions/styles-and-scripts.php');
require('functions/theme-support.php');
require('functions/menus.php');
require('functions/post-types.php');
require('functions/widgets.php');

require('widgets/search-widget.php');
require('widgets/category-widget.php');

remove_filter('the_content', 'wpautop');
