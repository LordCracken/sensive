<?php
require('functions/styles-and-scripts.php');
require('functions/theme_support.php');

remove_filter('the_content', 'wpautop');
