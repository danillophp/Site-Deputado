<?php
if (!defined('ABSPATH')) { exit; }
add_action('after_setup_theme', function(){ add_theme_support('post-thumbnails'); add_theme_support('title-tag'); register_nav_menus(['primary'=>'Principal','footer'=>'Rodapé']); });
add_action('wp_enqueue_scripts', function(){ wp_enqueue_style('apt-main', get_template_directory_uri().'/assets/css/main.css', [], '1.0.0'); wp_enqueue_script('apt-main', get_template_directory_uri().'/assets/js/main.js', [], '1.0.0', true); });
