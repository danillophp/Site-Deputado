<?php
if (!defined('ABSPATH')) { exit; }
add_action('add_meta_boxes', function () {
    add_meta_box('apc_acoes_meta', 'Dados da Ação/Projeto', 'apc_render_acoes_meta', 'acoes_projetos');
    add_meta_box('apc_emendas_meta', 'Dados da Emenda', 'apc_render_emendas_meta', 'emendas');
    add_meta_box('apc_galeria_meta', 'Imagens da Galeria', 'apc_render_galeria_meta', 'galerias');
});
function apc_render_acoes_meta($post){ wp_nonce_field('apc_save_meta','apc_meta_nonce'); $fields=['cidade','area','data','status','link_externo']; foreach($fields as $f){echo '<p><label>'.esc_html(ucwords(str_replace('_',' ',$f))).'</label><input class="widefat" name="'.$f.'" value="'.esc_attr((string)get_post_meta($post->ID,$f,true)).'"></p>';}}
function apc_render_emendas_meta($post){ wp_nonce_field('apc_save_meta','apc_meta_nonce'); $fields=['municipio','valor','ano','area','beneficiario','objeto','status','orgao_executor','numero_processo','link_transparencia']; foreach($fields as $f){echo '<p><label>'.esc_html(ucwords(str_replace('_',' ',$f))).'</label><input class="widefat" name="'.$f.'" value="'.esc_attr((string)get_post_meta($post->ID,$f,true)).'"></p>';}}
function apc_render_galeria_meta($post){ wp_nonce_field('apc_save_meta','apc_meta_nonce'); echo '<p>IDs das imagens (separados por vírgula)</p><input class="widefat" name="gallery_ids" value="'.esc_attr((string)get_post_meta($post->ID,'gallery_ids',true)).'">'; }
add_action('save_post', function($post_id){ if(!isset($_POST['apc_meta_nonce'])||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['apc_meta_nonce'])),'apc_save_meta')) return; if(!current_user_can('edit_post',$post_id)) return; $keys=['cidade','area','data','status','link_externo','municipio','valor','ano','beneficiario','objeto','orgao_executor','numero_processo','link_transparencia','gallery_ids']; foreach($keys as $k){ if(isset($_POST[$k])) update_post_meta($post_id,$k,sanitize_text_field(wp_unslash($_POST[$k]))); }
});
