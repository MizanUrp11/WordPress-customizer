<?php
/**
 * Title: Terms extra fields
 * Taxonomy: category
 */

?>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo optio quos tempora architecto, assumenda totam odit maxime voluptatem itaque eius!
</p>

<?php

piklist( 'field', array(
    'type'  => 'text',
    'field' => 'exra_data',
    'label' => __( 'Some Extra data', 'twentysevnteen' ),
    'help'  => __( 'Here is some help', 'twentysevnteen' ),
    'attributes'=>array(
        'class'=>'regular-text'
    ),
) );

piklist( 'field', array(
    'type'    => 'file',
    'field'   => 'category_image',
    'label'   => __( 'Category_image', 'twentysevnteen' ),
    'help'    => __( 'Here is some help', 'twentysevnteen' ),
    'options' => array(
        'modal_title' => __( 'Category Image', 'twentyseventeen' ),
        'help'        => __( 'Add', 'twentyseventeen' ),
    ),
) );