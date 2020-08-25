<?php

function customizer_csf_settings( $options ) {
    $options[] = array(
        'name'     => 'customizer_csf_section1',
        'title'    => __( 'Codestar Demo', 'customizer' ),
        'settings' => array(
            array(
                'name'    => 'about_heading',
                'default' => __( 'Some text', 'customizer' ),
                'transport'=>'postMessage',
                'control' => array(
                    'label' => __( 'About Heading', 'customizer' ),
                    'type'  => 'text',
                ),
            ),
            array(
                'name'    => 'about_heading_description',
                'transport'=>'postMessage',
                'default' => __( 'Description', 'customizer' ),
                'control' => array(
                    'label' => __( 'Description', 'customizer' ),
                    'type'  => 'textarea',
                ),
            ),
            array(
                'name'    => 'dummy_control1',
                'control' => array(
                    'label' => __( 'Upload', 'customizer' ),
                    'type'  => 'upload',
                ),
            ),
            array(
                'name'    => 'dummy_control2',
                'control' => array(
                    'label' => __( 'Media', 'customizer' ),
                    'type'  => 'color',
                ),
            ),
        ),
    );

    $options[] = array(
        'name'     => 'customizer_csf_section2',
        'title'    => __( 'Codestar CS fields', 'customizer' ),
        'active_callback'=>function(){
            return true;
        },
        'settings' => array(
            array(
                'name'    => 'switcher_handle',
                'default'=>'1',
                'control' => array(
                    'type'    => 'cs_field',
                    'options' => array(
                        'type'  => 'switcher',
                        'title' => __( 'Select Color', 'customizer' ),
                    ),
                ),
            ),
            array(
                'name'    => 'dummy_text',
                'control' => array(
                    'label' => __( 'Dummy Text', 'customizer' ),
                    'type'  => 'text',
                    'active_callback'=>function(){
                        return cs_get_customize_option('switcher_handle');
                    }
                ),
            ),
            array(
                'name'    => 's_post',
                'control' => array(
                    'type'    => 'cs_field',
                    'options' => array(
                        'type'       => 'select',
                        'title'      => __( 'Select Post', 'customizer' ),
                        'options'    => 'posts',
                        'query_args' => array(
                            'post_type' => 'post',
                            'orderby'   => 'post_date',
                            'order'     => 'DESC',
                        ),
                    ),
                ),
            ),
        ),
    );

    return $options;
}
add_filter( 'cs_customize_options', 'customizer_csf_settings' );

function customizer_csf_init() {
    CSFramework_Customize::instance( array() );
}
add_action( 'init', 'customizer_csf_init' );