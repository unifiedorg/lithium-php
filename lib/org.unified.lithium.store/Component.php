<?php namespace Unified\Lithium\Store;

class Component
{
    public static function get($components) {
        require dirname(__DIR__, 2) . "/app/components/$components.php";
    }

    public static function header($components, $ptitle, $pfavicon = APP_ICON) {
        $title = $ptitle;
        $favicon = $pfavicon;
        require dirname(__DIR__, 2) . "/app/components/$components.php";
    }
}
