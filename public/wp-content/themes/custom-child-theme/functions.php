<?php
/**
** activation theme
**/
function theme_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function capitaine_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => false,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction
