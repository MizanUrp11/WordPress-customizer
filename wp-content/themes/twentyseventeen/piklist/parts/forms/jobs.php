<?php
/*
Title: Job Application
Method: post
Message: Your job application has benn received
Logged in: true
 */

piklist( 'field', array(
    'type'  => 'hidden',
    'field' => 'post_type',
    'value' => 'job',
    'scope' => 'post',
) );

piklist( 'field', array(
    'type'  => 'hidden',
    'field' => 'post_status',
    'value' => 'pending',
    'scope' => 'post',
) );

piklist( 'field', array(
    'type'  => 'text',
    'field' => 'post_title',
    'scope' => 'post',
    'label' => __( 'Your name', 'twentyseventeen' ),
) );

piklist( 'field', array(
    'type'       => 'textarea',
    'field'      => 'post_content',
    'scope'      => 'post',
    'label'      => __( 'Biography', 'twentyseventeen' ),
    'attributes' => array(
        'style: height:200px',
    ),
) );

piklist( 'field', array(
    'type'  => 'text',
    'field' => 'email',
    'scope' => 'post_meta',
    'label' => __( 'Email', 'twentyseventeen' ),
) );

piklist( 'field', array(
    'type'  => 'text',
    'field' => 'phone',
    'scope' => 'post_meta',
    'label' => __( 'Phone', 'twentyseventeen' ),
) );

piklist( 'field', array(
    'type'  => 'submit',
    'field' => 'submit',
    'value' => __( 'Submit', 'twentyseventeen' ),
) );


