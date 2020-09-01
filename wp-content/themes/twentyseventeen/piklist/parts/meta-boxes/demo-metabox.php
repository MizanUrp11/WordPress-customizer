<?php
/**
 * Title: My Demo Metabox
 * Post Type: post
 */

piklist('field',array(
    'type'=>'text',
    'field'=>'demo_text',
    'label'=>'Label text',
    'description'=>'Description text',
    'value'=>'Default text',
    'help'=>'Help text',
    'attributes'=>array(
        'class'=>'text'
    ),
    'add_more'=>true
));