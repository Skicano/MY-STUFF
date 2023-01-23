<?php get_header() ?>

<?php get_header() ?>
<?php if(have_posts()): //  provjeri ima li post ?>
<?php else: // ako nema ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; // preusmjeri na stranicu greske ?>
<?php endif; ?>
<?php get_footer() ?>
<?php the_category(', ') ?>

<?php get_template_part('sidebar'); ?>

<?php get_footer() ?>