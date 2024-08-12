<?php
// Ajouter le support pour les balises de titre
add_theme_support('title-tag');

// Enregistrer le menu principal
function register_my_menu() {
    register_nav_menus( array(
        'main-menu' => __( 'Menu principal', 'text-domain' ),
    ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

// Enregistrer et enfiler le fichier style.css
function enqueue_my_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );