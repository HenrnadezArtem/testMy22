<?php
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/reset.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style2.css' );
    
});

// Поддержка функциональности
add_theme_support(' title-tag ');
add_theme_support('post-thumbnails');
?>