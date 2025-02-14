<?php
/**
 * Plugin Name: Live Sales Notifications - WooCommerce & Easy Digital Download Sales Notification
 * Description: Live sales notifications for WooCommerce and Easy Digital Download products
 * Version: 1.0.2
 * Author: themeegg
 * Author URI: https://themeegg.com
 * Requires at least: 4.4
 * Tested up to: 5.1.1
 * License: GPLv3 or later
 */
/*

 */
if (!defined('ABSPATH')) {
    exit;
}

if (!defined('LIVE_SALES_NOTIFICATIONS_VERSION')) {
    define('LIVE_SALES_NOTIFICATIONS_VERSION', '1.0.1');
}


if (!defined('LIVE_SALES_NOTIFICATIONS_PLUGIN_FILE')) {
    define('LIVE_SALES_NOTIFICATIONS_PLUGIN_FILE', __FILE__);
}


// Include the main CLASS
if (!class_exists('Live_Sales_Notifications')) {
    include_once dirname(__FILE__) . '/includes/class-live-sales-notifications.php';
}

/**
 * Main instance of live sales notification.
 *
 * Returns the main instance to prevent the need to use globals.
 *
 * @since 1.0.0
 * @return Live_Sales_Notifications
 */
function live_sales_notifications_instance()
{

    return Live_Sales_Notifications::instance();
}


// Global for backwards compatibility.
$GLOBALS['live-sales-notifications'] = live_sales_notifications_instance();

