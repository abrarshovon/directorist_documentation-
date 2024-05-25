<?php

namespace DirectoristDocumentation;

class Activator {
    public static function activate() {
        flush_rewrite_rules();


        add_action('admin_notices', [self::class, 'display_activation_notice']);
        
    }
    public static function display_activation_notice() {
        ?>
        <div class="notice notice-success is-dismissible">
            <p>
                <?php _e('Directorist Documentation Plugin activated. Visit the <a href="admin.php?page=directorist-documentation">documentation page</a> for more details.', 'directorist-documentation'); ?>
            </p>
        </div>
        <?php
    }
        
        
       
    }

    
