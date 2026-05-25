<?php get_header(); while(have_posts()){the_post(); ?><article><?php the_title('<h1>','</h1>'); the_post_thumbnail('large'); the_content(); ?></article><?php } get_footer();
