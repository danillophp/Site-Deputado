<?php
/**
 * Plugin Name: André Premium Core
 * Description: Recursos institucionais: CPTs, taxonomias, metaboxes, shortcodes e painel administrativo.
 * Version: 1.0.0
 * Author: Equipe André Premium
 * Requires PHP: 8.0
 */
if (!defined('ABSPATH')) { exit; }

define('APC_PATH', plugin_dir_path(__FILE__));
define('APC_URL', plugin_dir_url(__FILE__));

require_once APC_PATH . 'includes/helpers.php';
require_once APC_PATH . 'includes/post-types.php';
require_once APC_PATH . 'includes/taxonomies.php';
require_once APC_PATH . 'includes/metaboxes.php';
require_once APC_PATH . 'includes/admin-settings.php';
require_once APC_PATH . 'includes/shortcodes.php';
require_once APC_PATH . 'includes/seo.php';

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('andre-premium-core-front', APC_URL . 'assets/front/front.css', [], '1.0.0');
    wp_enqueue_script('andre-premium-core-front', APC_URL . 'assets/front/front.js', [], '1.0.0', true);
});

add_action('admin_enqueue_scripts', function ($hook) {
    if (strpos((string) $hook, 'andre-premium') !== false) {
        wp_enqueue_media();
        wp_enqueue_style('andre-premium-core-admin', APC_URL . 'assets/admin/admin.css', [], '1.0.0');
        wp_enqueue_script('andre-premium-core-admin', APC_URL . 'assets/admin/admin.js', ['jquery'], '1.0.0', true);
    }
});
