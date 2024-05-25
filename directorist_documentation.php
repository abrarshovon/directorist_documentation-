<?php
/*
Plugin Name: Directorist Documentation
Description: A WordPress plugin for managing documentation.
Version: 1.0
Author: Abrar
*/

require __DIR__ . '/vendor/autoload.php';

use DirectoristDocumentation\Activator;
use DirectoristDocumentation\Deactivator;
use DirectoristDocumentation\Admin;
use DirectoristDocumentation\Documentationlink;
class DirectoristDocumentation {
    public static function register() {
        //activation hook
        register_activation_hook(__FILE__, [Activator::class, 'activate']);
        //deactivation hook
        register_deactivation_hook(__FILE__, [Deactivator::class, 'deactivate']);
        //submenu 
        add_action('admin_menu', [Admin::class, 'add_documentation_submenu']);
        //link
        add_filter('plugin_action_links_' . plugin_basename(__FILE__), [Documentationlink::class, 'add_custom_link']);
        
    }
    
    
}

DirectoristDocumentation::register();
