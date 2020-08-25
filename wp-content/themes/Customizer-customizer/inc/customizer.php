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
        'label'    => __( 'Services Subheading', 'customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_service_subheading',
        'type'     => 'textarea',
        'active_callback'=>function(){
            if(get_theme_mod( 'cust_service_show_subheading' ) == 1){
                return true;
            }else{
                return false;
            }
        }
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
        'label'    => __( 'Icon Color','customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_icon_color',
    ) ) );

    $wp_customizer->add_setting('cust_num_of_services',array(
        'default'=>4,
        'transport'=>'refresh'
    ));
    $wp_customizer->add_control('cust_num_of_services_ctrl',array(
        'label'    => __( 'Number of items','customizer' ),
        'section'  => 'cust_service',
        'settings' => 'cust_num_of_services',
        'type'=>'select',
        'choices'=>array(
            '4'=>'3 Per Row',
            '6'=>'2 Per Row',
        )
    ));
}
add_action( 'customize_register', 'cust_customizer_settings' );