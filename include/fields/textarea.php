<h4><?php echo $field['label']; ?></h4>
<p><?php echo $field['description']; ?></p>
<p>
	<?php if($field['richtextarea'] == false){ ?>
		<textarea name="<?php echo $field['name']; ?>" value="<?php echo $field['value']; ?>" placeholder="<?php echo $field['placeholder']; ?>" class="<?php echo $field['class']; ?>" id="<?php echo $field['id']; ?>" style="width:100%; height:250px;"></textarea>
	<?php } else {
			$content = esc_textarea( $field['value'] );
			$editor_id = $field['name'];
			$settings =   array(
				'wpautop' => true, // use wpautop?
				'media_buttons' => true, // show insert/upload button(s)
				'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
				'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
				'tabindex' => '',
				'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
				'editor_class' => $field['class'], // add extra class(es) to the editor textarea
				'teeny' => false, // output the minimal editor config used in Press This
				'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
				'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
				'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
			);

			 wp_editor( $content, $editor_id, $settings );
		} ?>
	
</p>