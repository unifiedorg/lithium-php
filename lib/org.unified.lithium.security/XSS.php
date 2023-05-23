<?php namespace Unified\Lithium\Security;

class XSS {
    public static function sanitizeInput($input, $encoding = 'UTF-8') {
        return htmlspecialchars($input, ENT_QUOTES, $encoding);
    }
}
