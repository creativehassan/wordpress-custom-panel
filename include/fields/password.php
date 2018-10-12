<h4><?php echo $field['label']; ?></h4>
<p><?php echo $field['description']; ?></p>
<?php 
$field_val = get_option('nato_setting_'. $plugin_name . '_' .$field['name']);
$field_val = (($field_val) ? $field_val : $field['value']);
?>
<p>
	<input type="password" name="nato_setting[<?php echo $plugin_name; ?>][<?php echo $keys;?>][<?php echo $field['name']; ?>]" value="<?php echo $field_val; ?>" placeholder="<?php echo $field['placeholder']; ?>" class="<?php echo $field['class']; ?> regular-text" id="<?php echo $field['id']; ?>">
</p>