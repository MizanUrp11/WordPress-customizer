<?php
/**
 * Title: Related Post
 * Post Type: page
 */

piklist( 'field', array(
    'type'     => 'select',
    'field'    => 'related_posts',
    'label'    => __( 'relaed_posts', 'twentyseventeen' ),
    'add_more' => true,
    'choices'  => piklist( get_posts( array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
        'post_status'    => 'publish',
    ) ), array( 'ID', 'post_title' ) ),
) );