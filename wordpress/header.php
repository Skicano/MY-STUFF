<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>

    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

</head>
    
<body <?php body_class(); ?>>
 
<?php

    wp_nav_menu( [
        'theme_location'    => 'primary',
    ] );

?>

<?php get_search_form(); ?>

<?php dynamic_sidebar('post-sidebar'); ?>
