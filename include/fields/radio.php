<h4><?php echo $field['label']; ?></h4>
<?php 
$field_val = get_option('nato_setting_'. $plugin_name . '_' .$field['name']);
$field_val = (($field_val) ? $field_val : 1);
$field_checked = (($field_val) ? (($field_val != "no") ? 'checked="checked"' : '') : '');
?>
<p>
	<label>
		<input type="radio" name="nato_setting[<?php echo $plugin_name; ?>][<?php echo $keys;?>][<?php echo $field['name']; ?>]" value="<?php echo $field_val; ?>" <?php echo $field_checked; ?> class="<?php echo $field['class']; ?>" id="<?php echo $field['id']; ?>" />
		<span><?php echo $field['label']; ?></span>
	</label>
</p>