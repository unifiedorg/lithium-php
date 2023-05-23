<?php namespace Unified\Lithium\Store;

class View
{
    public static function get($view, $ptitle, $pfavicon = "#") {
        \Unified\Lithium\Store\Component::header('header', "$ptitle - Unified");
        \Unified\Lithium\Store\Component::get('navbar');
        require dirname(__DIR__, 2) . "/app/views/$view.php";
        \Unified\Lithium\Store\Component::get('footer');
    }

    public static function return($view) {
        return dirname(__DIR__, 2) . "/app/views/$view.php";
    }
}
