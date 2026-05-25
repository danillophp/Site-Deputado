<?php
if (!defined('ABSPATH')) { exit; }
add_action('init', function () {
    register_taxonomy('area_acao', ['acoes_projetos','emendas'], ['label'=>'Áreas','public'=>true,'hierarchical'=>true,'show_in_rest'=>true]);
    foreach (['Saúde','Educação','Infraestrutura','Assistência Social','Esporte','Cultura','Segurança','Outros'] as $term) {
        if (!term_exists($term, 'area_acao')) { wp_insert_term($term, 'area_acao'); }
    }
});
