<?php get_header() ?>

<?php while(have_posts()): the_post(); ?>

    <h1><?php the_title() ?></h1>
    <div><?php the_content() ?></div>

<?php endwhile ?>

<?php while(have_posts()): the_post(); ?>

    <h1><?php the_title() ?></h1>
    <p><?php the_category(', ') ?><?php the_date() ?> by <?php the_author() ?></p>
    <div><?php the_content() ?></div>

<?php endwhile ?>

<?php get_template_part('sidebar'); ?>

<?php get_footer() ?>
