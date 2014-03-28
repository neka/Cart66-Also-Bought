<?php
/**
 * Cart66 Best Selling Products.
 *
 * Showcase the best selling products on your Cart66 store.
 * 
 *
 * @package   cart66BestSellingProducts
 * @author    Kane Andrews <hello@kaneandre.ws>
 * @license   GPL-2.0+
 * @link      http://kaneandre.ws
 * @copyright 2013 Kane Andrews
 *
 * @wordpress-plugin
 * Plugin Name: Cart66 Best Selling Products
 * Plugin URI:  http://kaneandre.ws
 * Description: Showcase the best selling items over a number of days.
 * Version:     1.0.1
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

require_once( plugin_dir_path( __FILE__ ) . 'class-cart66-best-selling-products.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'cart66BestSellingProducts', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'cart66BestSellingProducts', 'deactivate' ) );

cart66BestSellingProducts::get_instance();