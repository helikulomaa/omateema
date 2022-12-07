<?php 
register_nav_menus(['primary' => 'Päävalikko']);

function omateema_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('omateema-script', get_template_directory_uri().'/js/omateema.js', array('jquery'));
    wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap' , false );
} 
add_action('wp_enqueue_scripts', 'omateema_assets', 'add_google_fonts' );

function excerpt_read_more() {
    global $post;
    return ' <a href="' . get_permalink($post->ID) . '">Lue lisää &raquo;</a>';
}

add_filter('excerpt_more','excerpt_read_more');

function omateema_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'omateema_theme_setup')

?>

 
