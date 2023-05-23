<?php namespace App\Controllers\Api;

class ExampleController {
    public static function echo($message) {
        echo $message . "<br>";
        echo "The route for this page is in /app/routes/api.php";
    }
}
