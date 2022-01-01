<?php

// Check if the menu exists
$menu_name   = 'Social Menu';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );

	// Set up default menu items
	wp_update_nav_menu_item( $menu_id, 0, array(
		'menu-item-title'       => 'Facebook',
		'menu-item-description' => '',
		'menu-item-attr-title'  => '',
		'menu-item-target'      => '_blank',
		'menu-item-url'         => 'https://facebook.com/{username}/',
		'menu-item-status'      => 'publish'
	) );

	wp_update_nav_menu_item( $menu_id, 0, array(
		'menu-item-title'       => 'Twitter',
		'menu-item-description' => '',
		'menu-item-attr-title'  => '',
		'menu-item-target'      => '_blank',
		'menu-item-url'         => 'https://twitter.com/{username}/',
		'menu-item-status'      => 'publish'
	) );
	wp_update_nav_menu_item( $menu_id, 0, array(
		'menu-item-title'       => 'Youtube',
		'menu-item-description' => '',
		'menu-item-attr-title'  => '',
		'menu-item-target'      => '_blank',
		'menu-item-url'         => 'https://www.youtube.com/channel/{chanelid}/',
		'menu-item-status'      => 'publish'
	) );
	wp_update_nav_menu_item( $menu_id, 0, array(
		'menu-item-title'       => 'LinkedIn',
		'menu-item-description' => '',
		'menu-item-attr-title'  => '',
		'menu-item-target'      => '_blank',
		'menu-item-url'         => 'https://linkedin.com/in/{username}/',
		'menu-item-status'      => 'publish'
	) );
}

$menu_name   = 'Footer Navigation';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );
}

$menu_name   = 'Quick Links';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );
}
$menu_name   = 'Feature Links';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );
}
$menu_name   = 'Resource Links';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );
}
$menu_name   = 'Header Menu';
$menu_exists = wp_get_nav_menu_object( $menu_name );

// If it doesn't exist, let's create it.
if ( ! $menu_exists ) {
	$menu_id = wp_create_nav_menu( $menu_name );
}