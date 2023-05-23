<?php namespace Unified\Lithium\Security;

class CSRF {
    public static function generateToken() {
        return bin2hex(random_bytes(32));
    }

    public static function validateToken($token) {
        return $token === $_SESSION['csrf_token'];
    }
}
