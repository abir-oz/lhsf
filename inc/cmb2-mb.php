<?php
add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {

    $prefix = '_lhsf_';

    $cmb = new_cmb2_box( array(
        'id'           => 'pdf_attach',
        'title'        => __( 'Attach PDF', 'lhsf' ),
        'object_types' => array( 'about-lhsf','notices','post','page'),
        'context'      => 'side',
        'priority'     => 'high',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Attach PDF File', 'lhsf' ),
        'desc' => __('Upload PDF File','lhsf'),
        'id' => 'pdf_file',
        'type' => 'file',
    ) );

}