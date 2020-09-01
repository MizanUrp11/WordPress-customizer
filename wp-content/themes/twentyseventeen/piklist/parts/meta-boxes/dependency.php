<?php
/**
 * Title: Dependency Field
 * Post Type: post
 */

piklist( 'field', array(
    'type'    => 'select',
    'field'   => 'colors',
    'label'   => __( 'Select a color', 'twentyseventeen' ),
    'choices' => array(
        'red'    => __( 'Red', 'twentyseventeen' ),
        'green'  => __( 'Green', 'twentyseventeen' ),
        'blue'   => __( 'Blue', 'twentyseventeen' ),
        'others' => __( 'Others', 'twentyseventeen' ),
    ),
) );

piklist( 'field', array(
    'type'    => 'select',
    'field'   => 'colors2',
    'label'   => __( 'Select a color', 'twentyseventeen' ),
    'choices' => array(
        'red'    => __( 'Red', 'twentyseventeen' ),
        'green'  => __( 'Green', 'twentyseventeen' ),
        'blue'   => __( 'Blue', 'twentyseventeen' ),
        'others' => __( 'Others', 'twentyseventeen' ),
    ),
) );

piklist( 'field', array(
    'type'       => 'colorpicker',
    'field'      => 'colorpicker',
    'label'      => __( 'Select Color', 'twentyseventeen' ),
    'value'      => '#ffffff',
    'conditions' => array(
        'relation' => 'or',
        array(
            'field' => 'colors',
            'value' => 'others',
        ),
        array(
            'field' => 'colors2',
            'value' => 'red',
        ),
    ),
) );