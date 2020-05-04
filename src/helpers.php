<?php

use DesignByCode\ActiveLinks\Facades\Active;

if (!function_exists('active_link')) {

    function active_link($root, $class = null) {
        if ($class === null) {
            $class = config('active-links.link.active');
        }
        return Active::link($root, $class);
    }
}

if (!function_exists('on_page')) {
    function on_page( $root) {
        return (boolean) Active::onPage($root);
    }
}

if (!function_exists('active_body')) {
    function active_body($class = []) {
        return Active::body($class);
    }
}
