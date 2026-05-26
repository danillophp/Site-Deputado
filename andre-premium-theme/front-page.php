<?php get_header(); ?>
<?php get_template_part('template-parts/hero'); ?>
<section class="section container">
  <div class="section-head"><h2>Notícias</h2><a class="btn secondary" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/noticias')); ?>">Ver mais notícias</a></div>
  <div class="news-grid"><?php $q = new WP_Query(['post_type'=>'post','posts_per_page'=>4]); while($q->have_posts()): $q->the_post(); get_template_part('template-parts/news-card'); endwhile; wp_reset_postdata(); ?></div>
</section>
<section class="section container"><h2>Ações e Projetos</h2><div class="carousel" data-carousel><?php echo do_shortcode('[andre_acoes_projetos]'); ?><button class="carousel-prev" type="button">‹</button><button class="carousel-next" type="button">›</button></div></section>
<section class="section container"><h2>Emendas Parlamentares</h2><?php echo do_shortcode('[andre_emendas_resumo]'); ?></section>
<section class="section container"><h2>Instagram</h2><?php echo do_shortcode('[andre_instagram]'); ?></section>
<?php get_footer(); ?>
