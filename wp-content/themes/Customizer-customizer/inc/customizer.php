<?php
function cust_customizer_settings( $wp_customizer ) {
    $wp_customizer->add_section( 'cust_service', array(
        'title'    => __( 'Services', 'customizer' ),
        'priority' => '30',
    ) );
    $wp_customizer->add_setting( 'cust_service_setting', array(
        'default'   => 'Mission Statement',
        'transport' => 'postMessage',
    ) );
    $wp_customizer->add_control( 'cust_service_setting_ctrl', array(
        'label'    => __( 'Services Heading', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_service_setting',
        'type'     => 'text',
    ) );
    $wp_customizer->add_setting( 'cust_service_subheading', array(
        'default'   => 'Subheading Here',
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control( 'cust_service_subheading_ctrl', array(
        'label'           => __( 'Services Subheading', 'customizer' ),
        'section'         => 'cust_service',
        'settings'        => 'cust_service_subheading',
        'type'            => 'textarea',
        'active_callback' => function () {

            if ( get_theme_mod( 'cust_service_show_subheading' ) == 1 ) {
                return true;
            } else {
                return false;
            }

        },
    ) );

    $wp_customizer->add_setting( 'cust_service_show_subheading', array(
        'default'   => 1,
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control( 'cust_service_show_subheading_ctrl', array(
        'label'    => __( 'Show Subheading', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_service_show_subheading',
        'type'     => 'checkbox',
    ) );

    $wp_customizer->add_section( 'cust_service', array(
        'title'    => __( 'Services', 'customizer' ),
        'priority' => '30',
    ) );

    $wp_customizer->add_setting( 'cust_icon_color', array(
        'default'   => '#dd2d6a',
        'transport' => 'postMessage',
    ) );
    $wp_customizer->add_control( new WP_Customize_Color_Control( $wp_customizer, 'cust_icon_color_ctrl', array(
        'label'    => __( 'Icon Color', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_icon_color',
    ) ) );

    $wp_customizer->add_setting( 'cust_num_of_services', array(
        'default'   => 4,
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control( 'cust_num_of_services_ctrl', array(
        'label'    => __( 'Number of items', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_num_of_services',
        'type'     => 'select',
        'choices'  => array(
            '4' => '3 Per Row',
            '6' => '2 Per Row',
        ),
    ) );

    $wp_customizer->add_section( 'cust_about', array(
        'title'           => __( 'About page', 'customizer' ),
        'priority'        => '40',
        'active_callback' => function () {

            if ( is_page_template( 'page-templates/about.php' ) ) {
                return true;
            }

            return false;
        },
    ) );

    $wp_customizer->add_setting( 'cust_about_setting', array(
        'default'   => 'About Page Statement',
        'transport' => 'postMessage',
    ) );
    $wp_customizer->add_control( 'cust_about_setting', array(
        'label'   => __( 'About Page', 'customizer' ),
        'section' => 'cust_about',
        'type'    => 'text',
    ) );
    $wp_customizer->selective_refresh->add_partial( 'about_section', array(
        'selector'        => '#cs_heading',
        'settings'        => array( 'cust_about_setting' ),
        'render_callback' => function () {
            return get_theme_mod( 'cust_about_setting' );
        },
    ) );

    $wp_customizer->add_setting( 'cust_about_desc', array(
        'default'   => 'About Page Statement',
        'transport' => 'postMessage',
    ) );
    $wp_customizer->add_control( 'cust_about_desc', array(
        'label'   => __( 'Description', 'customizer' ),
        'section' => 'cust_about',
        'type'    => 'textarea',
    ) );

    $wp_customizer->selective_refresh->add_partial( 'cust_desc', array(
        'selector'        => '#cs_subheading',
        'settings'        => array( 'cust_about_desc' ),
        'render_callback' => function () {
            return get_theme_mod( 'cust_about_desc' );
        },
    ) );

    /**
     * Special Controls
     */

    $wp_customizer->add_section( 'image_and_upload', array(
        'title'    => __( 'Image and Upload', 'customizer' ),
        'priority' => 40,
    ) );
    $wp_customizer->add_setting( 'test_image', array(
        'default'   => __( 'Upload Image', 'customizer' ),
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'test_logo',
            array(
                'label'    => __( 'Upload a Image', 'customizer' ),
                'section'  => 'image_and_upload',
                'settings' => 'test_image',
            )
        )
    );

    $wp_customizer->add_setting( 'test_image2', array(
        'default'   => __( 'Upload Media', 'customizer' ),
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control(
        new WP_Customize_Media_Control(
            $wp_customizer,
            'test_image2',
            array(
                'label'    => __( 'Upload a Image', 'customizer' ),
                'section'  => 'image_and_upload',
            )
        )
    );

    $wp_customizer->add_setting( 'test_file', array(
        'default'   => __( 'Upload Media', 'customizer' ),
        'transport' => 'refresh',
    ) );
    $wp_customizer->add_control(
        new WP_Customize_Upload_Control(
            $wp_customizer,
            'test_file',
            array(
                'label'    => __( 'Upload a File', 'customizer' ),
                'section'  => 'image_and_upload',
            )
        )
    );
}

add_action( 'customize_register', 'cust_customizer_settings' );