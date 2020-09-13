<?php
$term       = get_queried_object();
$term_id    = $term->term_id;
$term_extra = get_term_meta( $term_id, 'exra_data', true );
echo $term_extra;
echo "<br>";

$term_extra_img = get_term_meta( $term_id, 'category_image', true );
echo wp_get_attachment_image( $term_extra_img, array('full') );