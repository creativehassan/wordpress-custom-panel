<?php 
	wp_enqueue_style( 'coresol-jquery-ui-datepicker' ); 
	wp_enqueue_script( 'jquery-ui-datepicker' ); 
?>
<h4><?php echo $field['label']; ?></h4>
<p><?php echo $field['description']; ?></p>
<?php 
$field_val = get_option('nato_setting_'. $plugin_name . '_' .$field['name']);
$field_val = (($field_val) ? $field_val : $field['value']);
?>
<p>
	<input type="text" name="nato_setting[<?php echo $plugin_name; ?>][<?php echo $keys;?>][<?php echo $field['name']; ?>]" value="<?php echo $field_val; ?>" placeholder="<?php echo $field['placeholder']; ?>" class="<?php echo $field['class']; ?> coresol-datepicker" id="<?php echo $field['id']; ?>" autocomplete="off" />
</p>