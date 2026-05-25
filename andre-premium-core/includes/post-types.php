<?php
if (!defined('ABSPATH')) { exit; }
add_action('init', function () {
    register_post_type('acoes_projetos', ['label'=>'Ações e Projetos','public'=>true,'show_in_rest'=>true,'supports'=>['title','editor','thumbnail','excerpt'],'has_archive'=>true,'rewrite'=>['slug'=>'acoes-projetos']]);
    register_post_type('emendas', ['label'=>'Emendas','public'=>true,'show_in_rest'=>true,'supports'=>['title','editor','thumbnail','excerpt'],'has_archive'=>true,'rewrite'=>['slug'=>'emendas']]);
    register_post_type('galerias', ['label'=>'Galerias','public'=>true,'show_in_rest'=>true,'supports'=>['title','editor','thumbnail'],'has_archive'=>true,'rewrite'=>['slug'=>'galerias']]);
});
