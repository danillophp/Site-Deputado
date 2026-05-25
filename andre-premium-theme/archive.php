<?php get_header(); ?><h1><?php the_archive_title(); ?></h1><?php while(have_posts()){the_post(); get_template_part('template-parts/news-card'); } the_posts_pagination(); get_footer();
