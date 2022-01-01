<?php
flush_rewrite_rules( true );

require_once get_theme_file_path( '/inc/tgm.php' );
require_once get_theme_file_path( '/inc/cpt.php' );
require_once get_theme_file_path( '/inc/enq.php' );
require_once get_theme_file_path( '/inc/acf-mb.php' );

if ( file_exists( get_theme_file_path( '/inc/cmb2-mb.php' ) ) ) {
	require_once get_theme_file_path( '/inc/cmb2-mb.php' );
}


if ( class_exists( "Attachments" ) ) {
	require_once get_theme_file_path( '/inc/attachments.php' );
}

function lhsf_supports() {
	load_theme_textdomain( "lhsf" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "html5", array( 'search-form', 'comment-list' ) );
	add_theme_support( "custom-logo" );
	add_theme_support( 'automatic-feed-links' );
	add_editor_style( "/assets/css/editor-style.css" );
	register_nav_menus( array(
		"topmenu"      => __( "Main Menu", "lhsf" ),
		"footermain"   => __( "Footer Menu Main", "lhsf" ),
		"footersec"    => __( "Footer Menu 2", "lhsf" ),
		"footerthird"  => __( "Footer Menu 3", "lhsf" ),
		"footerfourth" => __( "Footer Menu 4", "lhsf" ),
		"social"       => __( "Social Menu", "lhsf" ),
	) );
	add_image_size( "hthumb", 510, 290, array( "center", "center" ) );
	add_image_size( "tthumb", 92, 92, array( "center", "center" ) );
	add_image_size( "rathumb", 72, 72, array( "center", "center" ) );
	add_image_size( "notice_thumb", 555, 400, array( "center", "center" ) );
	add_image_size( "blog_thumb", 510, 290, array( "center", "center" ) );
	add_image_size( "g_thumb", 360, 270, array( "center", "center" ) );

	if ( ! isset( $content_width ) ) {
		$content_width = 900;
	}

}

add_action( 'after_setup_theme', 'lhsf_supports' );

function add_specific_menu_location_atts( $atts, $item, $args ) {
	// check if the item is in the primary menu
	if ( $args->theme_location == 'topmenu' ) {
		// add the desired attributes:
		$atts['class'] = 'nav-link';
	}

	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );

function get_max_page_number() {
	global $wp_query;

	return $wp_query->max_num_pages;
}

function lhsf_search_form( $form ) {
	$homedir = site_url( "/" );

	$newform = <<<FORM
		<form role="search" method="get" class="d-flex justify-content-between" method="" action="{$homedir}">
			<input type="text" class="form-control" id="search_input" onkeyup="fetch()" placeholder="Search Here" name="s"/>
			<button type="submit" class="btn"></button>
			<span class="ti-close" id="close_search" title="Close Search"></span>
		 </form>
FORM;

	return $newform;
}

add_filter( "get_search_form", "lhsf_search_form" );


require_once get_theme_file_path('/inc/custom-menus.php');