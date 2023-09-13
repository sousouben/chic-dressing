<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

// Fonction qui permet de décharger les polices googlefonts
function dequeue_parent_theme_fonts() {  
    wp_dequeue_style( 'ashe-playfair-font');
    wp_dequeue_style( 'ashe-opensans-font' );
    wp_dequeue_style( 'ashe-kalam-font' );

}
add_action( 'wp_enqueue_scripts', 'dequeue_parent_theme_fonts', 999 );





 