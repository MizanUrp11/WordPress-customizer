<?php
/**
 * Template Name: Homepage
 */
$sections_ids = get_post_meta($post->ID,'page_sections');

foreach($sections_ids as $sections_id){
    $section = get_post($sections_id);
    echo $section->post_title."<br>";
}