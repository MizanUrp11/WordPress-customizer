
<input 
  type="hidden"
  id="<?php echo piklist_form::get_field_id($arguments); ?>" 
  name="<?php echo piklist_form::get_field_name($arguments); ?>"
  value="<?php echo is_array($value) ? esc_attr(end($value)) : esc_attr($value); ?>" 
  <?php echo piklist_form::attributes_to_string($attributes); ?>
/>
