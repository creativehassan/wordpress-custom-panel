<h4><?php echo $field['label']; ?></h4>
<p>
	<label>
		<input type="radio" name="<?php echo $field['name']; ?>" value="<?php echo $field['value']; ?>" <?php echo (($field['checked']) ? 'checked="checked"' : ''); ?> class="<?php echo $field['class']; ?>" id="<?php echo $field['id']; ?>" />
		<span><?php echo $field['label']; ?></span>
	</label>
</p>