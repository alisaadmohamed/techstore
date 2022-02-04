<?php


//path & url
define("PATH" , __DIR__ . "/");
define("URL" , "http://localhost/TechStore/");

// For Admin


define("APATH" , __DIR__ . "/admin/");
define("AURL" , "http://localhost/TechStore/admin/");



//DB
define("SERVER" , 'localhost');
define("USER", "admin");
define("PASS", "alisaad99");
define("DB", "techstore");


//include classes

include (PATH."vendor/autoload.php");


// objects



use TechStore\Classes\Request;
use TechStore\Classes\Session;

$request = new Request;
$session = new  Session;