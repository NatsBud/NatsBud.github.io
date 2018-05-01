
<?php

if (!defined('ABSPATH'))exit;
function my_assets() {
	wp_enqueue_style('normalize', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'); 
	wp_enqueue_style( 'my-style', get_template_directory_uri() .'/style.css',false,'1.0','all');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
	wp_enqueue_script( 'my-js', get_template_directory_uri() .'/js/main.js','','1.0',true );
	wp_enqueue_script( 'particles', get_template_directory_uri() .'/js/particles.min.js','','1.0', true);
	wp_enqueue_script( 'app-js', get_template_directory_uri() .'/js/app.js','','1.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'my_assets' );
?>