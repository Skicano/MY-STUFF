<form role="search" method="get" class="search-form" action="<?= esc_url( home_url( '/' ) ) ?>">

    <input type="search" class="search-field" placeholder="Search something." value="<?= get_search_query() ?>" name="s" />
    <input type="submit" class="search-submit" value="Search" />

</form>

<?php get_header() ?>

<?php if(have_posts()): //  provjeri ima li post ?>

<?php while(have_posts()): the_post(); ?>

    <h1><?php the_title() ?></h1>
    <p><?php the_category(', ') ?><?php the_date() ?></p>
    <div><?php the_content() ?></div>
    
<?php endwhile ?>

<?php else: // ako nema ?>

<p>No results.</p>

<?php endif; ?>

<?php get_footer() ?>
