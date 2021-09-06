<?php
require('functions/styles-and-scripts.php');
require('functions/theme_support.php');
require('functions/menus.php');

remove_filter('the_content', 'wpautop');
