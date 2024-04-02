<?php 

function alpha_setup() {
	
    wp_enqueue_style( 'alpha/css', get_template_directory_uri() . '/assets/css/style.css', false, null);
    wp_enqueue_style( 'bootstrap/css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', false, null);
    wp_enqueue_script( 'bootstrap/js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', ["jquery"], null, true);
    wp_enqueue_style( 'fontawesome/js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false, null,);
    wp_enqueue_style( 'googlefonts/js', 'https://fonts.googleapis.com', false, null,);
    wp_enqueue_style( 'googlefonts/js', 'https://fonts.gstatic.com', false, null,);
    wp_enqueue_style( 'googlefonts/js', 'https://fonts.googleapis.com/css2?family=Anta&display=swap', false, null,);
}
add_action( 'after_setup_theme', 'alpha_setup' );
