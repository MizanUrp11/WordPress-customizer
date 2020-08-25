<?php
/**
 *
 * Template Name: Landing Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
</head>

<body>
    <div class="section banner">
        <h1><?php bloginfo( 'name' );?></h1>
        <h2><?php bloginfo( 'description' );?></h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mission section">
                    <h1 class="heading" id="id_heading">
                        <?php echo esc_html( get_theme_mod( 'cust_service_setting', __( 'Our Mission Statement', 'customizer' ) ) ); ?>
                    </h1>

                    <?php if(get_theme_mod( 'cust_service_show_subheading', 1 )):?>
                    <p class="subheading">
                        <?php echo esc_html(get_theme_mod( 'cust_service_subheading',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima doloremque vitae aspernatur dignissimos repudiandae a nesciunt consectetur esse placeat?','customizer') )); ?>
                    </p>
                    <?php endif; ?>

                    <?php
                    $cust_number_of_items = get_theme_mod( 'cust_num_of_services', 4 );
                    ?>

                    <div class="row sub-section">
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="far fa-building"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="fas fa-chart-bar"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="fas fa-city"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="fas fa-haykal"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="fas fa-broadcast-tower"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($cust_number_of_items); ?>">
                            <div class="service">
                                <i class="fas fa-bicycle"></i>
                                <h2>Service Name</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                    harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section footer">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse nobis recusandae ullam
            unde.
        </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Github</a></li>
        </ul>
    </div>

    <?php wp_footer();?>
</body>

</html>