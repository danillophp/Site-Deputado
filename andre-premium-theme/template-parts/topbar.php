<?php $opts = get_option('apc_settings', []); ?>
<div class="topbar-wrap">
  <div class="container topbar">
    <nav class="top-links">
      <a href="<?php echo esc_url($opts['top_link1_url'] ?? '#'); ?>"><?php echo esc_html($opts['top_link1_texto'] ?? 'Assembleia Legislativa de Goiás'); ?></a>
      <a href="<?php echo esc_url($opts['top_link2_url'] ?? '#'); ?>">🔎 <?php echo esc_html($opts['top_link2_texto'] ?? 'Consulta Legislativa'); ?></a>
      <a href="<?php echo esc_url($opts['top_link3_url'] ?? '#'); ?>">ℹ <?php echo esc_html($opts['top_link3_texto'] ?? 'Acesso à Transparência'); ?></a>
      <a href="<?php echo esc_url($opts['top_link4_url'] ?? '#'); ?>">➜ <?php echo esc_html($opts['top_link4_texto'] ?? 'AlegoDigital'); ?></a>
      <a href="<?php echo esc_url($opts['mapa_politico_url'] ?? '#'); ?>">🗺 Mapa Político</a>
    </nav>
    <div class="top-actions">
      <?php get_search_form(); ?>
      <div class="acc"><button type="button" class="acc-minus">A−</button><button type="button" class="acc-plus">A+</button><button type="button" class="acc-contrast">Contraste</button><a href="https://www.vlibras.gov.br/" target="_blank" rel="noopener">VLibras</a></div>
      <div class="social"><a href="<?php echo esc_url($opts['instagram'] ?? '#'); ?>">Instagram</a><a href="<?php echo esc_url($opts['facebook'] ?? '#'); ?>">Facebook</a><a href="<?php echo esc_url($opts['youtube'] ?? '#'); ?>">YouTube</a></div>
    </div>
  </div>
</div>
