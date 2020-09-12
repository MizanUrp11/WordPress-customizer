<?php
/**
 * Title: Display Options
 * Post Type: post
 */

piklist('field',array(
    'type'=>'select',
    'field'=>'twentyseventeen_display_options',
    'label'=>__('Select Display Options','twentyseventeen'),
    'choices'=>array(
        'masonry'=>__('Masonry','twentyseventeen'),
        'standard'=>__('Standard','twentyseventeen'),
        'justified'=>__('Justified','twentyseventeen'),
    )
));