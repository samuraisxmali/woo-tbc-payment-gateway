=== WooCommerce Tbc Payment Gateway ===
Contributors: wearedecom
Tags: WooCommerce, GEL, TBC, gateway, bank gateway, credit card gateway, payment
Requires at least: 4.0
Tested up to: 4.5.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to set TBC bank as a payment gateway for your WooCommerce shop.

== Description ==

Plugin uses [this php SDK](https://github.com/wearede/tbcpay-php) to communicate with TBC servers.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/woo-tbc-payment-gateway` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to WooCommerce -> Settings -> Checkout -> Tbc and fill out required settings
4. Bank provides certificate in .p12 format,to transform it into .pem use this command: openssl pkcs12 -in *.p12 -out tbcpay.pem
5. Upload certificate provided by TBC to a secure directory on your server, usually this is not your root wordpress directory. Enter full path to certificate on plugin settings page under 'certificate path'
6. You should communicate Ok and Fail urls to Tbc e.g. example.com/wc-api/ok and example.com/wc-api/fail

== Frequently Asked Questions ==

== Screenshots ==

1. New payment option appears on checkout page
2. User is redirected to Tbc form
3. Completed order via Tbc payment gateway
4. Failed order via Tbc payment gateway
5. Plugin settings page

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==
