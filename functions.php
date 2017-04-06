<?php 

function alfrancis_menu(){}
// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'alfrancis' )
	) );
add_action('after_setup_theme', 'alfrancis_menu');    

function alfrancis_scripts(){
	$template_url = get_template_directory_uri();
	
	wp_enqueue_style('bootstrap' , $template_url.'/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome' , $template_url.'/assets/bootstrap/fonts/font-awesome.min.css');
	wp_enqueue_style('alfrancis-stlye' , get_stylesheet_uri());
    
	wp_enqueue_script('jquery' , $template_url.'/assets/js/jquery.min.js');
    wp_enqueue_script('bootstrap' , $template_url.'/assets/bootstrap/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'alfrancis_scripts');


function alfrancis_sibar() {

	register_sidebar( array(
		'name' => __( 'Sidebar', 'alfrancis' ),
		'id' => 'sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'alfrancis' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'alfrancis_sibar' );
