<?php

/**
 *
 * Title: Gallery Images
 * Post Type: post
 */

piklist( 'field', array(
    'type'    => 'select',
    'field'   => 'twentyseventeen_gallery_type',
    'label'   => __( 'Gallery Display Type', 'twentyseventeen' ),
    'choices' => array(
        'carousel'  => __( 'Carousel', 'twentyseventeen' ),
        'justified' => __( 'Justified', 'twentyseventeen' ),
    ),
) );

piklist( 'field', array(
    'type'     => 'file',
    'field'    => 'twenty_seventeen_gallery',
    'label'    => __( 'Gallery Images', 'twentyseventeen' ),
    'options'  => array(
        'modal_title' => __( 'Add File(s)', 'twentyseventeen' ),
        'save'        => 'id',
    ),
    'add_more' => true,
) );
