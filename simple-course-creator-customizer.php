<?php
/**
 * Plugin Name: SCC - Customizer
 * Plugin URI: http://buildwpyourself.com/downloads/scc-customizer/
 * Description: Customizer the Simple Course Creator output with the WordPress theme customizer
 * Version: 1.0.0
 * Author: Sean Davis
 * Author URI: http://seandavis.co
 * License: GPL2
 * Requires at least: 3.8
 * Tested up to: 3.8
 * Text Domain: scc_customizer
 * Domain Path: /inc/languages/
 * 
 * This plugin is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 * 
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see http://www.gnu.org/licenses/.
 *
 * The basic foundation of this plugin was highly influenced by Mike 
 * Jolley's WP Post Series plugin. Special thanks to him. Check out 
 * his website - http://mikejolley.com -
 *
 * @package Simple Course Creator
 * @category Customizer
 * @author Sean Davis
 * @license GNU GENERAL PUBLIC LICENSE Version 2 - /license.txt
 * @version 1.0.0
 */


// No accessing this file directly
if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Primary class for Simple Course Creator Customizer
 *
 * @since 1.0.0
 */
class Simple_Course_Creator_Customizer {

		
	/**
	 * Constructor for Simple_Course_Creator_Customizer class
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		
		// define plugin directory
		define( 'SCCC_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
		
		// define plugin root file
		define( 'SCCC_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );

		// load text domain
		add_action( 'init', array( $this, 'load_textdomain' ) );
		
		// require additional plugin files
		$this->includes();
	}
	

	/**
	 * Load SCC Customizer textdomain
	 *
	 * @since 1.0.0
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'scc_customizer', false, SCCC_DIR . "inc/languages" );
	}
	
	
	/**
	 * require additional plugin files
	 *
	 * @since 1.0.0
	 */
	private function includes() {
		require_once( SCCC_DIR . 'inc/admin/class-scc-customizer.php' );		// customizer class
	}
}
new Simple_Course_Creator_Customizer();