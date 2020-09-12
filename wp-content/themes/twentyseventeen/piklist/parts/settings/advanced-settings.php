<?php
/*
Title: Advanced Settings
Setting: my_theme_settings
 */
piklist( 'field', array(
    'type'        => 'text',
    'field'       => 'text2',
    'label'       => 'Text Box',
    'description' => 'Field Description',
    'help'        => 'This is help text.',
    'value'       => 'Default text',
    'attributes'  => array(
        'class' => 'text',
    ),
) );

piklist( 'field', array(
    'type'        => 'colorpicker',
    'field'       => 'colorpicker2',
    'label'       => 'Choose a color',
    'value'       => '#aee029',
    'description' => 'Click in the box to select a color.',
    'help'        => 'This is help text.',
    'attributes'  => array(
        'class' => 'text',
    ),
) );
