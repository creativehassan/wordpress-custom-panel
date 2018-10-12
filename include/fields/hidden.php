<?php 
$field_val = get_option('nato_setting_'. $plugin_name . '_' .$field['name']);
$field_val = (($field_val) ? $field_val : $field['value']);
?>
<input type="hidden" name="nato_setting[<?php echo $plugin_name; ?>][<?php echo $keys;?>][<?php echo $field['name']; ?>]" value="<?php echo $field_val; ?>" class="<?php echo $field['class']; ?>" id="<?php echo $field['id']; ?>">