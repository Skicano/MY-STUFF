<?php
function kiwi_widgets_init() {
    register_sidebar( [
    'name'            => __( 'Post Sidebar', 'kiwitheme' ),
    'id'              => 'post-sidebar',
    'description'     => __( 'Post Sidebar Description', 'kiwitheme' ),
    'before_widget'   => '<div>',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
    ] );
}
add_action( 'widgets_init', 'kiwi_widgets_init' );

?>