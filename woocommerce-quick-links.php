<?php
/* @wordpress-plugin
 * Plugin Name:       WooCommerce Quick Links
 * Plugin URI:        https://wpruby.com
 * Description:       Add all the important WooCommerce links in a dashboard widget.
 * Version:           1.0.0
 * Author:            WPRuby
 * Author URI:        https://wpruby.com
 * Text Domain:       woocommerce
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
add_action( 'wp_dashboard_setup', 'wql_widget_setup' );
function wql_widget_content() {
	$gateways = new WC_Payment_Gateways();
	$available_gateways = $gateways->get_available_payment_gateways();
	$shipping_methods = WC()->shipping->load_shipping_methods();
	require_once plugin_dir_path(__FILE__).'widget-content.php';
}
function wql_widget_setup() {
 	wp_add_dashboard_widget( 'woocommerce_quick_links_widget', __('WooCommerce Quick Links', 'woocommerce'), 'wql_widget_content' );
 	
 	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 
 	global $wp_meta_boxes;
 	
 	// Get the regular dashboard widgets array 
 	// (which has our new widget already but at the end)
 
 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	
 	// Backup and delete our new dashboard widget from the end of the array
 
 	$wql_widget_backup = array( 'woocommerce_quick_links_widget' => $normal_dashboard['woocommerce_quick_links_widget'] );
 	unset( $normal_dashboard['woocommerce_quick_links_widget'] );
 
 	// Merge the two arrays together so our widget is at the beginning
 
 	$sorted_dashboard = array_merge( $wql_widget_backup, $normal_dashboard );
 
 	// Save the sorted array back into the original metaboxes 
 
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
} 