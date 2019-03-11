<?php
/**
 * Deactivate Plugins based on environments
 *
 * WP_ENV needs to match environments defined in wp-config.env.php
 *
 * @package    QuantumWP WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Arleys Resco <arleys@quantumwp.com>
 */

$plugins = array();

/** Include Plugins Base */
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( defined( 'WP_ENV' )) {
	switch ( WP_ENV ) {
		case 'development' :

			//-- Add Plugin Here: plugin_name/plugin_name.php
			$plugins = array(
				'google-analytics-dashboard-for-wp/gadwp.php',
			);

			//-- Disable Robots
			update_option( 'blog_public', 0, true );

			//-- Disable Change Admin Email
			update_option( 'admin_email', 'arleys@quantumwp.com', true );

			//-- Change New Order Email Recipient
			add_filter( 'woocommerce_email_recipient_new_order', 'dev_wc_change_admin_new_order_email_recipient', 1, 2 );

			/**
			 * Change WooCommerce New Order Admin Email Programmatically
			 *
			 * @param $recipient
			 * @param $order
			 *
			 * @return string
			 */
			function dev_wc_change_admin_new_order_email_recipient( $recipient, $order ) {
				global $woocommerce;

				$recipient = "arleys@quantumwp.com";

				return $recipient;
			}

			break;

		case 'staging' :

			//-- Add Plugin Here: plugin_name/plugin_name.php
			$plugins = array(
				'google-analytics-dashboard-for-wp/gadwp.php',
			);

			//-- Disable Robots
			update_option( 'blog_public', 0, true );

			//-- Disable Change Admin Email
			update_option( 'admin_email', 'arleys@quantumwp.com', true );

			// Change new order email recipient for registered customers
			add_filter( 'woocommerce_email_recipient_new_order', 'stg_wc_change_admin_new_order_email_recipient', 1, 2 );

			/**
			 * Change WooCommerce New Order Admin Email Programatically
			 *
			 * @param $recipient
			 * @param $order
			 *
			 * @return string
			 */
			function stg_wc_change_admin_new_order_email_recipient( $recipient, $order ) {
				global $woocommerce;

				$recipient = "arleys@quantumwp.com";

				return $recipient;
			}

			break;

		case 'production' :

			$plugins = array();

			break;
	}
}

/** Deactivate Selected Plugins */
deactivate_plugins( $plugins );



