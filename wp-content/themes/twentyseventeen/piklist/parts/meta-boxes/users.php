<?php
/**
 * Title: Post Owner
 */
?>

<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, aperiam!
</p>

<?php
piklist( 'field', array(
    'type'    => 'select', //select,radio,checkbox
    'field'   => 'select_users',
    'label'   => __( 'Select Owners', 'twentyseventeen' ),
    'choices' => array(
        '' => __( 'Select Owner', 'twentyseventeen' ),
    ) + piklist( get_users(), array( 'ID', 'display_name' ) ),
) );