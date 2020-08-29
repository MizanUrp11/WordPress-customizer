<?php
/**
 * Understrap functions and definitions
 *
 * @package denver
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$denver_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $denver_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_filter( 'loop_shop_columns', 'denver_loop_shop_columns' );
function denver_loop_shop_columns($nc){
	return 3;
}

add_filter( 'woocommerce_product_query', 'denver_woocommerce_product_query' );
function denver_woocommerce_product_query( $wq ) {
    $wq->set( 'post__not_in', array(88) );

    return $wq;
}

add_filter( 'woocommerce_product_query', 'denver_woocommerce_product_query_category' );
function denver_woocommerce_product_query_category( $wq ) {
    $tax_query   = (array) $wq->get( 'tax_query' );
    $tax_query[] = array(
        'taxonomy' => 'product_cat',
        'field'    => 'slug',
        'terms'    => array( 'accessories' ),
        'operator' => 'NOT IN',
    );
    $wq->set( 'tax_query', $tax_query );

    return $wq;
}

function denver_woocommerce_before_shop_loop() {
    echo "<ul class='product_list'>";
    woocommerce_output_product_categories();
    echo "<ul>";

    $term_id   = get_queried_object()->term_id;
	$parent_id = get_queried_object(  )->parent;
	if($parent_id > 0){
		$term_id = $parent_id;
	}
    if ( $term_id ) {
        echo "<ul class='product_list'>";
        woocommerce_output_product_categories(array(
			'parent_id'=>$term_id
		));
        echo "<ul>";
    }

}

add_action( 'woocommerce_before_shop_loop', 'denver_woocommerce_before_shop_loop', 11 );