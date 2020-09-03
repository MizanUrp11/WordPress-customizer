<?php
/**
 * Title: Team Members
 * Post Type: post
 */

piklist( 'field', array(
    'type'   => 'group',
    'field'  => 'team_members_group',
    'label'  => __( 'Team Members', 'twentyseventeen' ),
    'fields' => array(
        array(
            'type'       => 'text',
            'field'      => 'name',
            'label'      => __( 'Name', 'twentyseventeen' ),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
        array(
            'type'     => 'group',
            'field'    => 'team_member_testimonials',
            'label'    => __( 'Testimonials', 'twentyseventeen' ),
            'add_more' => true,
            'fields'   => array(
                array(
                    'type'       => 'text',
                    'field'      => 'name',
                    'label'      => __( 'Name', 'twentyseventeen' ),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),
                array(
                    'type'       => 'file',
                    'field'      => 'image',
                    'label'      => __( 'Upload Image', 'twentyseventeen' ),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),
                array(
                    'type'       => 'textarea',
                    'field'      => 'description',
                    'label'      => __( 'Description', 'twentyseventeen' ),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),
            ),
        ),
    ),
) );