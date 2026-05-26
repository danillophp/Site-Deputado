<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function andre_premium_theme_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo' );

    add_theme_support( 'responsive-embeds' );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    register_nav_menus( array(
        'primary' => 'Menu Principal',
        'topbar'  => 'Menu Superior',
        'footer'  => 'Menu Rodapé',
    ) );
}

add_action( 'after_setup_theme', 'andre_premium_theme_setup' );

function andre_premium_assets() {

    wp_enqueue_style(
        'andre-premium-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'andre-premium-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'andre-premium-style' ),
        '1.0.0'
    );

    wp_enqueue_script(
        'andre-premium-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}

add_action( 'wp_enqueue_scripts', 'andre_premium_assets' );
