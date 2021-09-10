<?php
require('functions/styles-and-scripts.php');
require('functions/theme-support.php');
require('functions/menus.php');
require('functions/post-types.php');
require('functions/search-widget.php');
require('functions/widgets.php');

remove_filter('the_content', 'wpautop');
