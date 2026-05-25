<?php
if (!defined('ABSPATH')) { exit; }
function apc_get_option(string $key, $default = '') { $opts = get_option('apc_settings', []); return $opts[$key] ?? $default; }
function apc_update_option_group(array $data): void { update_option('apc_settings', $data); }
function apc_media_field(string $name, string $label, $value = ''): void {
    echo '<div class="apc-media-field"><label><strong>' . esc_html($label) . '</strong></label><input type="text" class="regular-text" name="apc_settings[' . esc_attr($name) . ']" value="' . esc_attr((string) $value) . '">';
    echo ' <button class="button apc-media-upload" data-target="' . esc_attr($name) . '">Selecionar mídia</button></div>';
}
