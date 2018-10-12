<?php
if ( ! class_exists( 'class_setting_page' ) ) {
    class class_setting_page {
		var $app_fields = array();
        public function __construct($fields = array()) {
			$this->app_fields = $fields;
			if(isset($this->app_fields['plugin_name'])){
				$plugin_name = $this->app_fields['plugin_name'];
				if(isset($_POST['nato_setting'][$plugin_name])){
					foreach($_POST['nato_setting'][$plugin_name] as $plugin_data){
						foreach($plugin_data as $key => $data){
							if(isset($plugin_data[$key])){
								$field_value = (($plugin_data[$key]) ? $plugin_data[$key] : '');
								update_option('nato_setting_'. $plugin_name . '_' .$key,$field_value);
							}
						}
					}
				}
			} else {
				echo "Please add plugin name in configuration array";
			}
			$this->coresol_render_fields($this->app_fields);
        }
		
		function coresol_render_fields( $configurations = array() ){
			$backend_populate = array(
				'title' => 'Heading',
				'description' => 'Description Text', 
				'plugin_name' => 'plugin', 
				'nav' => array(
					array(
						'key' => 'welcome',
						'text' => 'Welcome',
						'title' => 'Headings',
						'description' => 'Description Text', 
						'fields' => array(
							array(
								'type' => 'text',
								'label' => 'NOTE: This applies to all sites on the network.',
								'description' => 'Description Text', 
								'name' => 'name',
								'value' => '',
								'placeholder' => 'My own text',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'checkbox',
								'label' => 'Content Editor',
								'name' => 'just',
								'value' => '',
								'id' => '',
								'class' => ''
							)
						)
					),
					array(
						'key' => 'license',
						'text' => 'License',
						'title' => 'Headings',
						'description' => 'License Description Text', 
						'fields' => array(
							array(
								'type' => 'text',
								'label' => 'NOTE: This applies to all sites on the network.',
								'name' => 'name',
								'value' => '',
								'placeholder' => 'My own text',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'checkbox',
								'label' => 'Content Editor',
								'name' => 'just',
								'value' => '',
								'id' => '',
								'class' => ''
							)
						)
					) 
				)
			);
			$backend_populate = array_merge($backend_populate, $configurations);
			include_once( 'template/coresol-setting.php' );
		}
		public function coresol_generate_fields( $keys, $fields = array(), $plugin_name ){
			if(!empty($fields)){
				foreach($fields as $key => $field){
					switch($field['type']){
						case 'text':
						include( 'fields/text.php' );
						break;
						
						case 'date':
						include( 'fields/date.php' );
						break;
						
						case 'url':
						include( 'fields/url.php' );
						break;
						
						case 'checkbox':
						include( 'fields/checkbox.php' );
						break;
						
						case 'radio':
						include( 'fields/radio.php' );
						break;
						
						case 'password':
						include( 'fields/password.php' );
						break;
						
						case 'hidden':
						include( 'fields/hidden.php' );
						break;
						
						case 'textarea':
						include( 'fields/textarea.php' );
						break;
						
					}
				}
			}
		}
	}
}

?>