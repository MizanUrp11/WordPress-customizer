<?php
/**
 * Template Name: About Page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
</head>
<body>
<div class="section banner">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mission section">
                <h1 class="heading" id="cs_heading">
					<?php echo get_theme_mod( 'cust_about_setting', __('About Page Customize','customize') );?>
                    <?php //echo esc_html(cs_get_customize_option('about_heading')); ?>
                </h1>
                <p class="subheading" id="cs_subheading">
                    <?php echo esc_html(get_theme_mod( 'cust_about_desc', __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illum quibusdam, nam.','customizer') )); ?>
                <?php //echo esc_html(cs_get_customize_option('about_heading_description')); ?>
                </p>

                <?php
                $attachment_id =  attachment_url_to_postid(get_theme_mod( 'test_image' ));
                echo wp_get_attachment_image( $attachment_id, 'thumbnail' );
                ?>
                <br>
                <?php
                $attachment_id =  get_theme_mod( 'test_image2' );
                echo wp_get_attachment_image( $attachment_id, 'medium' );
                ?>
                
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
</body>
<?php wp_footer(); ?>
</html>
