<?php namespace Unified\Lithium\Security;

class CORS {
    public static function setHeaders() {
        $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false ? 'http' : 'https';
        $domainLink = $protocol . '://' . $_SERVER['HTTP_HOST'];
        header('Access-Control-Allow-Origin: '. $domainLink);
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
    }
}
