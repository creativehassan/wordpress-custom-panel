<?php
/**
 * Plugin Name: Coresol Settings Page
 * Plugin URI:  https://wordpress.org/plugins/coresol-setting-page
 * Description: Coresol Settings Page
 * Version:     1.0.0
 * Author:      Hassan Ali
 * Author URI:  https://coresol.com.pk
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: coresol-setting-page
 */


if ( ! class_exists( 'coresol_setting_page' ) ) {
    class coresol_setting_page {
		var $plugin_name = "";
		var $class_setting_page = "";
        public function __construct() {
			$this->plugin_name = "coresol-setting-page";
			add_action( 'admin_menu', array( $this, 'register_coresol_setting_menu_page') );
			add_action('admin_enqueue_scripts', array( $this, 'admin_style_scripts' ));
			
			// register_activation_hook( __FILE__,  array( $this, 'coresol_setting_plugin_create_db'));
			add_action( 'plugins_loaded', array( $this, 'coresol_setting_plugin_textdomain' ));
			include_once( 'include/class_setting_page.php' );
			$this->class_setting_page = new class_setting_page();
        }
		
		
		
		function coresol_setting_plugin_textdomain(){
			$plugin_rel_path = basename( dirname( __FILE__ ) ) . '/languages';
			load_plugin_textdomain( $this->plugin_name, false, $plugin_rel_path );
		}
		
		public function register_coresol_setting_menu_page() {
		  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
		  add_menu_page( 'Coresol Settings', 'Coresol Settings', 'manage_options', 'custom.php', array( $this, 'coresol_setting_menu_page' ), 'dashicons-welcome-widgets-menus', 90 );
		}
		
		public function coresol_setting_menu_page() {
			$backend_populate = array(
				'title' => 'Heading',
				'description' => 'Description Text', 
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
								'type' => 'password',
								'label' => 'This applies to all sites on the network.',
								'description' => 'Description Text', 
								'name' => 'date',
								'value' => '',
								'placeholder' => 'Shah',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'textarea',
								'label' => 'This applies to all sites on the network.',
								'description' => 'Description Text', 
								'name' => 'textarea',
								'value' => 'textarea',
								'placeholder' => 'Shah',
								'id' => '',
								'class' => '',
								'richtextarea' => true
							),
							array(
								'type' => 'hidden',
								'name' => 'date',
								'value' => '10',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'url',
								'label' => 'This applies to all sites on the network.',
								'description' => 'Description Text', 
								'name' => 'date',
								'value' => '',
								'placeholder' => 'Shah',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'date',
								'label' => 'This applies to all sites on the network.',
								'description' => 'Description Text', 
								'name' => 'date',
								'value' => '',
								'placeholder' => 'Shah',
								'id' => '',
								'class' => ''
							),
							array(
								'type' => 'checkbox',
								'label' => 'Content Editor',
								'name' => 'just',
								'value' => '',
								'id' => '',
								'class' => '',
								'checked' => false,
							),
							array(
								'type' => 'radio',
								'label' => 'Content Editor',
								'name' => 'just',
								'value' => '',
								'id' => '',
								'class' => '',
								'checked' => true,
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
								'class' => '',
								'checked' => true
							)
						)
					) 
				)
			);
			$this->class_setting_page->coresol_render_fields($backend_populate);
		}
		
		// Update CSS within in Admin
		public function admin_style_scripts() {
			/* wp_enqueue_style( 'wp-color-picker');
			wp_enqueue_script( 'wp-color-picker');
			wp_enqueue_script( 'jquery-ui-sortable' ); */
			wp_enqueue_style('coresol-setting-page-admin', plugin_dir_url( __FILE__ ) . 'css/coresol-setting-admin.css');
			wp_register_style( 'coresol-jquery-ui-datepicker', plugin_dir_url( __FILE__ ) . 'css/coresol-datepicker.css', false, false, false );
			wp_enqueue_script('coresol-setting-page-admin', plugin_dir_url( __FILE__ ) . 'js/coresol-setting-admin.js');
		}
		
    }
	$coresol_setting_page = new coresol_setting_page();
}
