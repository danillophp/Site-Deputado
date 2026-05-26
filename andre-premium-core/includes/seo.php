<?php
if (!defined('ABSPATH')) { exit; }
add_action('wp_head', function(){
    $title = apc_get_option('seo_title', get_bloginfo('name'));
    $desc = apc_get_option('seo_description', get_bloginfo('description'));
    $img = apc_get_option('seo_og_image', '');
    echo '<meta property="og:title" content="'.esc_attr($title).'">';
    echo '<meta property="og:description" content="'.esc_attr($desc).'">';
    echo '<meta property="og:type" content="'.esc_attr((string)apc_get_option('seo_og_type','website')).'">';
    if ($img) { echo '<meta property="og:image" content="'.esc_url($img).'">'; }
    echo '<meta name="twitter:card" content="'.esc_attr((string)apc_get_option('seo_twitter_card','summary_large_image')).'">';
});
