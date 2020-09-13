<?php
/**
 * Title: Select categories
 */
?>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero.
</p>

<?php
piklist( 'field', array(
    'type'        => 'checkbox', //radio,select
    'field'       => 'cats',
    'label'       => __( 'Select categories', 'twentyseventeen' ),
    'description' => __( 'Some description here', 'twentyseventeen' ),
    'choices'     => array(
        '' => __( 'Pick a category', 'twentyseventeen' ),
    ) + piklist( get_terms( array(
        'taxonomy'   => 'category', //post-tag
        'hide_empty' => false,
    ) ),
        array(
            'term_id', 'name',
        ) ),
) );