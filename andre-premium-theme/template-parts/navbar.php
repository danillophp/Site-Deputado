<?php $opts = get_option('apc_settings', []); ?>
<header class="navbar-wrap">
  <div class="container navbar">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (!empty($opts['logo_principal'])) { echo wp_get_attachment_image((int)$opts['logo_principal'], 'medium'); } else { bloginfo('name'); } ?>
    </a>
    <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">☰</button>
    <nav id="primary-menu" class="menu"><?php wp_nav_menu(['theme_location'=>'primary','container'=>false]); ?></nav>
  </div>
</header>
