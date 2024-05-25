<?php

namespace DirectoristDocumentation;

class Documentationlink {
    public static function add_custom_link($links) {
       
        $custom_link = '<a href="https://directorist.com/documentation/directorist/" target="_blank">Documentation</a>';
        
        
        $links['deactivate'] .= ' | ' . $custom_link;

        return $links;
    }
}
