<?php
/**
 * Title: Select Gender
 */

?>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, molestiae!
</p>

<?php
piklist( 'field', array(
    'type'    => 'radio',
    'field'   => 'sex',
    'label'   => __( 'Gender', 'twentyseventeen' ),
    'choices' => array(
        ''  => __( 'Don\'t disclose', 'twentyseventeen' ),
        'm' => __( 'Male', 'twentyseventeen' ),
        'f' => __( 'Female', 'twentyseventeen' ),
    ),
) );