<?php
/**
 * Title: Testimonial
 * Post Type: post
 */

piklist( 'field', array(
    'type'        => 'group',
    'field'       => 'testimonials',
    'label'       => __( 'Group Field', 'twentyseventeen' ),
    'description' => __( 'Description', 'twentyseventeen' ),
    'add_more'=>true,
    'fields'      => array(
        array(
            'type'       => 'file',
            'field'      => 'Upload Image',
            'label'      => __( 'Image', 'twentyseventeen' ),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
        array(
            'type'       => 'text',
            'field'      => 'twentyseventeen_tname',
            'label'      => __( 'Name', 'twentyseventeen' ),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
        array(
            'type'       => 'textarea',
            'field'      => 'Description',
            'label'      => __( 'Description', 'twentyseventeen' ),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
    ),
) );