<?php
if (!defined('ABSPATH')) { exit; }
function apc_cards_query($post_type,$limit=6){$q=new WP_Query(['post_type'=>$post_type,'posts_per_page'=>$limit]); ob_start(); echo '<div class="apc-cards">'; while($q->have_posts()){ $q->the_post(); echo '<article><h3><a href="'.esc_url(get_permalink()).'">'.esc_html(get_the_title()).'</a></h3><p>'.esc_html(get_the_excerpt()).'</p></article>'; } wp_reset_postdata(); echo '</div>'; return ob_get_clean();}
add_shortcode('andre_acoes_projetos', fn()=>apc_cards_query('acoes_projetos'));
add_shortcode('andre_emendas', fn()=>apc_cards_query('emendas'));
add_shortcode('andre_emendas_resumo', fn()=>apc_cards_query('emendas',3));
add_shortcode('andre_galerias', fn()=>apc_cards_query('galerias'));
add_shortcode('andre_galeria', function($atts){$atts=shortcode_atts(['id'=>0],$atts); $ids=explode(',',(string)get_post_meta((int)$atts['id'],'gallery_ids',true)); $o='<div class="apc-gallery">'; foreach($ids as $id){$id=(int)trim($id); if($id){$url=wp_get_attachment_url($id); $o.='<a href="'.esc_url($url).'">'.wp_get_attachment_image($id,'medium').'</a>';}} return $o.'</div>';});
add_shortcode('andre_instagram', fn()=>wp_kses_post((string)apc_get_option('instagram_embed_code')));
add_shortcode('andre_redes_sociais', fn()=>'<div><a href="'.esc_url((string)apc_get_option('instagram')).'">Instagram</a> | <a href="'.esc_url((string)apc_get_option('facebook')).'">Facebook</a> | <a href="'.esc_url((string)apc_get_option('youtube')).'">YouTube</a></div>');
add_shortcode('andre_contato', fn()=>'<div>'.esc_html((string)apc_get_option('contato_telefone')).' - '.esc_html((string)apc_get_option('contato_email')).'</div>');
