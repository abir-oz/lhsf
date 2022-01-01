<?php

function lhsf_register_my_cpts() {



	/**
	 * Post Type: LHSF.
	 */

	$labels = [
		"name"          => __( "বিদ্যালয় সম্পর্কে", "lhsf" ),
		"singular_name" => __( "বিদ্যালয় সম্পর্কে", "lhsf" ),
	];

	$args = [
		"label"                 => __( "বিদ্যালয় সম্পর্কে", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "about-lhsf", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-star-filled",
		"supports"              => [ "title", "editor","thumbnail"],
	];

	register_post_type( "about-lhsf", $args );

	

	/**
	 * Post Type: NOTICES.
	 */

	$labels = [
		"name"          => __( "নোটিশ", "lhsf" ),
		"singular_name" => __( "নোটিশ", "lhsf" ),
	];

	$args = [
		"label"                 => __( "নোটিশ", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "notices", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-calendar",
		"supports"              => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "notices", $args );

	


	/**
	 * Post Type: Galleries.
	 */

	$labels = [
		"name"          => __( "ফটো গ্যালারী", "lhsf" ),
		"singular_name" => __( "ফটো গ্যালারী", "lhsf" ),
	];

	$args = [
		"label"                 => __( "ফটো গ্যালারী", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "gallery", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-images-alt2",
		"supports"              => [ "title" ],
	];

	register_post_type( "gallery", $args );

	


	/**
	 * Post Type: teachers.
	 */

	$labels = [
		"name"          => __( "শিক্ষকবৃন্দ", "lhsf" ),
		"singular_name" => __( "শিক্ষকবৃন্দ", "lhsf" ),
	];

	$args = [
		"label"                 => __( "শিক্ষকবৃন্দ", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "teachers", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-admin-users",
		"supports"              => [ "title" ],
	];

	register_post_type( "teachers", $args );
	/**
	 * Post Type: employee.
	 */

	$labels = [
		"name"          => __( "কর্মচারীবৃন্দ", "lhsf" ),
		"singular_name" => __( "কর্মচারীবৃন্দ", "lhsf" ),
	];

	$args = [
		"label"                 => __( "কর্মচারীবৃন্দ", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "employee", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-admin-users",
		"supports"              => [ "title" ],
	];

	register_post_type( "employee", $args );
	/**
	 * Post Type: Quotes.
	 */

	$labels = [
		"name"          => __( "প্রধান শিক্ষক ও সভাপতির বাণী", "lhsf" ),
		"singular_name" => __( "প্রধান শিক্ষক ও সভাপতির বাণী", "lhsf" ),
	];

	$args = [
		"label"                 => __( "প্রধান শিক্ষক ও সভাপতির বাণী", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "quotes", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-admin-users",
		"supports"              => [ "title" ],
	];

	register_post_type( "quotes", $args );
	/**
	 * Post Type: Management Comitee.
	 */

	$labels = [
		"name"          => __( "ম্যানেজমেন্ট সদস্যবৃন্দ", "lhsf" ),
		"singular_name" => __( "ম্যানেজমেন্ট সদস্যবৃন্দ", "lhsf" ),
	];

	$args = [
		"label"                 => __( "ম্যানেজমেন্ট সদস্যবৃন্দ", "lhsf" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "management", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 5,
		"menu_icon"             => "dashicons-admin-users",
		"supports"              => [ "title" ],
	];

	register_post_type( "management", $args );

}

add_action( 'init', 'lhsf_register_my_cpts' );
