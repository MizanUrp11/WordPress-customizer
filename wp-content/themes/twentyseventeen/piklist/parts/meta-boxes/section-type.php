<?php
/**
 * Title: Section Type
 * Post Type: section
 * Order: 10
 */

piklist( 'field', array(
    'type'    => 'select',
    'field'   => 't_section_type',
    'label'   => __( 'Section Type', 'twentyseventeen' ),
    'choices' => array(
        'none'        => __( 'Select a type', 'twentyseventeen' ),
        'banar'       => __( 'Banar', 'twentyseventeen' ),
        'testimonial' => __( 'Testimonial', 'twentyseventeen' ),
    ),
) );