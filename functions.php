<?php
/**
 * Essential theme supports
 * */
function theme_setup(){

    /** carga de archivos para traudcciones **/
  	load_theme_textdomain( 'mowomo', get_template_directory() . '/languages' );

    /** feed de links automáticos en el head **/
    add_theme_support( 'automatic-feed-links' );

    /** añade el título de página en el head title **/
    add_theme_support( 'title-tag' );

    /** añade post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** añade etiquetas HTML5 en elementos **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    /** logo en personalizar **/
    add_theme_support( 'custom-logo', array(
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    /** HTML5 support **/
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'mowomo' ),
        'footer_menu'  => __( 'Footer Menu', 'mowomo' ),
    ) );

}
add_action('after_setup_theme','theme_setup');

function widgets_init_theme() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mowomo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mowomo' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>'
		)
	);
}
add_action( 'widgets_init', 'widgets_init_theme' );

function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
