<?php 
	wp_enqueue_style( 'coresol-jquery-ui-datepicker' ); 
	wp_enqueue_script( 'jquery-ui-datepicker' ); 
?>
<h4><?php echo $field['label']; ?></h4>
<p><?php echo $field['description']; ?></p>
<p>
	<input type="text" name="<?php echo $field['name']; ?>" value="<?php echo $field['value']; ?>" placeholder="<?php echo $field['placeholder']; ?>" class="<?php echo $field['class']; ?> coresol-datepicker" id="<?php echo $field['id']; ?>" autocomplete="off" />
</p>