<?php
if (!defined('ABSPATH')) { exit; }
function apc_sections(){return ['gerais'=>'Configurações Gerais','identidade'=>'Identidade Visual','topo'=>'Configurações do Topo','redes'=>'Redes Sociais','instagram'=>'Instagram Embed','seo'=>'SEO e Compartilhamento','contatos'=>'Contatos','rodape'=>'Rodapé','midias'=>'Mídias do Site'];}
add_action('admin_menu', function(){
    add_menu_page('André Premium','André Premium','manage_options','andre-premium','apc_settings_page','dashicons-admin-site',25);
    foreach(apc_sections() as $slug=>$label){ add_submenu_page('andre-premium',$label,$label,'manage_options','andre-premium-'.$slug,'apc_settings_page'); }
});
function apc_settings_page(){ if(!current_user_can('manage_options')) return; if(isset($_POST['apc_save'])){ check_admin_referer('apc_save_settings'); $settings=get_option('apc_settings',[]); foreach($_POST['apc_settings'] ?? [] as $k=>$v){ $settings[sanitize_key($k)] = is_string($v)?sanitize_text_field(wp_unslash($v)):$v; } update_option('apc_settings',$settings); echo '<div class="updated"><p>Salvo.</p></div>'; }
$settings=get_option('apc_settings',[]);
?><div class="wrap"><h1>André Premium</h1><form method="post"><?php wp_nonce_field('apc_save_settings');
$fields=['deputado_nome','subtitulo','hero_texto','hero_img','hero_btn1_texto','hero_btn1_url','hero_btn2_texto','hero_btn2_url','logo_principal','logo_rodape','favicon','cor_principal','cor_secundaria','cor_destaque','top_link1_texto','top_link1_url','top_link2_texto','top_link2_url','top_link3_texto','top_link3_url','top_link4_texto','top_link4_url','instagram','facebook','youtube','whatsapp','tiktok','seo_title','seo_description','seo_og_type','seo_og_image','seo_twitter_card','contato_telefone','contato_whatsapp','contato_email','contato_endereco','contato_horario','rodape_creditos','instagram_embed_code','instagram_embed_link','instagram_embed_titulo','instagram_embed_ativo','midia_default_noticia','midia_default_acao','midia_default_emenda','midia_mapa_politico','midia_banners'];
foreach($fields as $field){ echo '<p><label><strong>'.esc_html($field).'</strong></label><input class="widefat" name="apc_settings['.esc_attr($field).']" value="'.esc_attr((string)($settings[$field]??'')).'"></p>'; }
submit_button('Salvar','primary','apc_save'); ?></form></div><?php
}
