<?php
function cust_customizer_settings( $wp_customizer ) {
    $wp_customizer->add_section( 'cust_service', array(
        'title'    => __( 'Services', 'customizer' ),
        'priority' => '30',
    ) );
    $wp_customizer->add_setting( 'cust_service_setting', array(
        'default'   => 'Mission Statement',
        'transport' => 'refresh',
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
        'label'    => __( 'Services Subheading', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_service_subheading',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'cust_customizer_settings' );