<?php

namespace App\Helpers;

class Redirect
{
    public static function to($page)
    {
        header("location: http://localhost:8080/phpEcommerce/public/$page");
    }
    
    /**
     * Redirect to same page
     */
    public static function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }
}
 