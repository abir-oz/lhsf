<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function lhsf_gallery( $attachments ) {


	$fields = array(
		array(
			'name'  => 'title',
			'type'  => 'text',
			'label' => __( 'Title', 'lhsf' ),
		),
		array(
			'name'  => 'caption',
			'type'  => 'text',
			'label' => __( 'Caption', 'lhsf' ),
		),
	);

	$args = array(

		'label'       => 'Gallery',
		'post_type'   => array( 'gallery' ),
		'note'        => 'Add Gallery Images',
		'button_text' => __( 'Attach Image', 'lhsf' ),
		'fields'      => $fields,
	);

	$attachments->register( 'gallery', $args );
}

add_action( 'attachments_register', 'lhsf_gallery' );

function lhsf_teachers( $attachments ) {


	$fields = array(
		array(
			'name'  => 'name',
			'type'  => 'text',
			'label' => __( 'Name', 'lhsf' ),
		),
		array(
			'name'  => 'designation',
			'type'  => 'text',
			'label' => __( 'Designation', 'lhsf' ),
		),
		array(
			'name'  => 'details',
			'type'  => 'textarea',
			'label' => __( 'Qualification', 'lhsf' ),
		),
	);

	$args = array(

		'label'       => 'Teachers',
		'post_type'   => array( 'teachers' ),
		'note'        => 'Add New Teacher',
		'button_text' => __( 'Add New Teacher', 'lhsf' ),
		'fields'      => $fields,
	);

	$attachments->register( 'teachers', $args );
}

add_action( 'attachments_register', 'lhsf_teachers' );


function lhsf_employee( $attachments ) {


	$fields = array(
		array(
			'name'  => 'name',
			'type'  => 'text',
			'label' => __( 'Name', 'lhsf' ),
		),
		array(
			'name'  => 'designation',
			'type'  => 'text',
			'label' => __( 'Designation', 'lhsf' ),
		),
		array(
			'name'  => 'details',
			'type'  => 'textarea',
			'label' => __( 'Qualification', 'lhsf' ),
		),
	);

	$args = array(

		'label'       => 'Employee',
		'post_type'   => array( 'employee' ),
		'note'        => 'Add New Employee',
		'button_text' => __( 'Add New Employee', 'lhsf' ),
		'fields'      => $fields,
	);

	$attachments->register( 'employee', $args );
}

add_action( 'attachments_register', 'lhsf_employee' );


function lhsf_members( $attachments ) {


	$fields = array(
		array(
			'name'  => 'name',
			'type'  => 'text',
			'label' => __( 'Name', 'lhsf' ),
		),
		array(
			'name'  => 'designation',
			'type'  => 'text',
			'label' => __( 'Designation', 'lhsf' ),
		),
		array(
			'name'  => 'details',
			'type'  => 'textarea',
			'label' => __( 'Details', 'lhsf' ),
		),
	);

	$args = array(

		'label'       => 'Members',
		'post_type'   => array( 'management' ),
		'note'        => 'Add New Management Member',
		'button_text' => __( 'Add New Member', 'lhsf' ),
		'fields'      => $fields,
	);

	$attachments->register( 'management', $args );
}

add_action( 'attachments_register', 'lhsf_members' );



