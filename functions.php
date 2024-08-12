<?php
// Ajouter le support pour les balises de titre
add_theme_support('title-tag');

// Enregistrer et enfiler le fichier style.css
function enqueue_my_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );

// Enregistrer le menu principal
function register_my_menu() {
    register_nav_menus( array(
        'main-menu' => __( 'Menu principal', 'text-domain' ),
    ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

// Ajouter des attributs title et aria-current aux éléments de menu
function customize_menu_attributes($atts, $item, $args) {
    // Ajouter l'attribut title
    if (isset($item->title)) {
        $atts['title'] = $item->title;
    }

    // Ajouter l'attribut aria-current pour les éléments de menu actifs
    if (in_array('current-menu-item', $item->classes) || in_array('current-menu-ancestor', $item->classes)) {
        $atts['aria-current'] = 'page';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'customize_menu_attributes', 10, 3);


