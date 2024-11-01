<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_thumbtack = new TrustindexPlugin_thumbtack("thumbtack", __FILE__, "12.4.1", "Widgets for Thumbtack Reviews", "Thumbtack");
$trustindex_pm_thumbtack->uninstall();
?>