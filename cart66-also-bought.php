<?php
/**
 * Cart66 Also Bought.
 *
 * Help increase sales by showing relevant items
 * that were also bought by previous customers.
 *
 * @package   cart66AlsoBought
 * @author    Kane Andrews <hello@kaneandre.ws>
 * @license   GPL-2.0+
 * @link      http://kaneandre.ws
 * @copyright 2013 Kane Andrews
 *
 * @wordpress-plugin
 * Plugin Name: Cart66 Also Bought
 * Plugin URI:  http://kaneandre.ws
 * Description: Increase sales by showing relevant products that were bought with previous orders.
 * Version:     1.0.0
 * Author:      Kane Andrews
 * Author URI:  http://kaneandre.ws
 * Text Domain: plugin-name-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-cart66-also-bought.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'cart66AlsoBought', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'cart66AlsoBought', 'deactivate' ) );

cart66AlsoBought::get_instance();