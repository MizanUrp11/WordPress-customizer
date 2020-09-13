<?php
/**
 * Title: Sections
 * post type: page
 */

piklist( 'field', array(
    'type'     => 'select',
    'field'    => 'page_sections',
    'label'    => __( 'Page Sections', 'twentyseventeen' ),
    'add_more' => true,
    'choices'  => piklist( get_posts( array(
        'posts_per_page' => -1,
        'post_type'      => 'section',
        'post_status'    => 'publish',
    ) ), array( 'ID', 'post_title' ) ),
) );