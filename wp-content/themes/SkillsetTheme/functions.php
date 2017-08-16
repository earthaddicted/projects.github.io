<?php

wp_register_script('jquery',get_template_directory_uri().'/libs/jquery/jquery-1.11.2.min.js');
wp_enqueue_script('jquery');

remove_action ('wp_head','rsd_link');
remove_action ('wp_head','wlwmanifest_link');
remove_action ('wp_head','wp_generator');

show_admin_bar(false);

require_once ( get_stylesheet_directory() . '/theme-options.php');

add_theme_support('post-thumbnails');
 ?>