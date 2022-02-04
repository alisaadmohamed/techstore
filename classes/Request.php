<?php
namespace TechStore\Classes;

class Request
{

    public function get(string $key)
    {
        return $_GET[$key];
    }

    public function post(string $key)
    {

        return $_POST[$key];
    }


    public function files(string $key)
    {

        return $_FILES[$key];
    }



    public function postClean($key)
    {

        return trim(htmlspecialchars($_POST[$key]));

    }

    public function getHas($key): bool
    {
        return isset($_GET[$key]);

    }

    public function postHas($key): bool
    {
        return isset($_POST[$key]);

    }

    public  function redirect($path) {
        header("location: ". URL.  $path);

    }



    public  function aredirect($path) {
        header("location: ". AURL.  $path);

    }

}
