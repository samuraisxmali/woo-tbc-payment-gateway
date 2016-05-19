# WooCommerce TBC Payment Gateway

**Important!** This is for developers only.
If you want to use this plugin in production please download it from wordpress.org

#### This section describes how to install the plugin and get it working.

1. run`composer install` in the root dir
2. Upload the plugin files to the `/wp-content/plugins/woo-tbc-payment-gateway` directory
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to WooCommerce -> Settings -> Checkout -> Tbc and fill out required settings
4. Bank provides certificate in .p12 format,to transform it into .pem use this command: `openssl pkcs12 -in *.p12 -out tbcpay.pem`
5. Upload certificate provided by TBC to a secure directory on your server, usually this is not your root wordpress directory. Enter full path to certificate on plugin settings page under 'certificate path'
6. You should communicate Ok and Fail urls to Tbc e.g. example.com/wc-api/ok and example.com/wc-api/fail

