<?php

/**
 *
 * Title: External Media
 * Post Type: post
 */

piklist( 'field', array(
    'type'       => 'url',
    'field'      => 'twentyseventeen_media_url',
    'label'      => __( 'External Media Source', 'twentyseventeen' ),
    'attributes' => array(
        'class' => 'widefat',
    ),
) );

piklist( 'field', array(
    'type'     => 'file',
    'field'    => 'twentyseventeen_gallery',
    'label'    => __( 'Gallery Images', 'twentyseventeen' ),
    'options'  => array(
        'modal_title' => __( 'Add Image', 'twentyseventeen' ),
        'save'        => 'id',
    ),
    'add_more' => true,
) );