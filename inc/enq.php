<?php


function my_theme_asset() {


	wp_enqueue_style( 'wptheme-bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-flaticon.css', get_template_directory_uri() . '/assets/css/flaticon.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-bangla-font.css', get_template_directory_uri() . '/assets/css/bangla-font.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-themify-icons.css', get_template_directory_uri() . '/assets/css/themify-icons.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-owl-carousel.css', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-nice-select.css', get_template_directory_uri() . '/assets/vendors/nice-select/css/nice-select.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-style.css', get_template_directory_uri() . '/assets/css/style.css', null, '1.0' );


	wp_enqueue_script( 'wptheme-popper.js', get_template_directory_uri() . '/assets/js/popper.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-jquery.magnific-popup.min.js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-nice-select.js', get_template_directory_uri() . '/assets/vendors/nice-select/js/jquery.nice-select.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-owl.carouselt.js', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-owl-carousel-thumb.min.js', get_template_directory_uri() . '/assets/js/owl-carousel-thumb.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wptheme-theme.js', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '1.0', true );
	
}

add_action( 'wp_enqueue_scripts', 'my_theme_asset' );
//add_action('admin_enqueue_scripts','my_theme_asset');


function admin_assets() {

	wp_enqueue_style( 'wptheme-flaticon.css', get_template_directory_uri() . '/assets/css/flaticon.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-bangla-font.css', get_template_directory_uri() . '/assets/css/bangla-font.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-themify-icons.css', get_template_directory_uri() . '/assets/css/themify-icons.css', null, '1.0' );
	wp_enqueue_style( 'wptheme-style.css', get_template_directory_uri() . '/assets/css/style.css', null, '1.0' );

}

add_action( 'admin_enqueue_scripts', 'admin_assets' );