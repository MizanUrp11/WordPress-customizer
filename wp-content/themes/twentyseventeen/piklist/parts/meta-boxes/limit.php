<?php

/**
 * Title: Field Validation
 * Post Type: post
 */

piklist( 'field', array(
    'type'     => 'text',
    'label'    => __( 'Feature Name', 'twentyseventeen' ),
    'field'    => 'featuure',
    'add_more' => true,
    'validate' => array(
        array(
            'type'    => 'limit',
            'options' => array(
                'min' => 2,
                'max' => 4,
            ),
        ),
    ),
) );