<?php

namespace DirectoristDocumentation;

class Admin {
    
    public static function add_documentation_submenu() {
        
        $parent_slug = 'edit.php?post_type=at_biz_dir';

        // Add submenu under the Directory Listings menu
        add_submenu_page(
            $parent_slug,                               
            __('Directorist Documentation', 'directorist-documentation'),  // Page title
            __('Documentation', 'directorist-documentation'),            // Menu title
            'manage_options',                         
            'directorist-documentation',               // Menu slug
            [self::class, 'display_documentation_page'] // Callback function to display content
        );
    }

    public static function display_documentation_page() {
       
        require_once plugin_dir_path(__DIR__) . './templates/documentation.php';
       
    }
}
