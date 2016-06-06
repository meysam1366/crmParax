<?php
session_start();
define("SOFT_ROOT", "/var/www/html/support");
define("BASE_DOMAIN", "http://localhost/support");
define("TITLE", 'مدیریت سامانه پشتیبانی پاراکس وب');
$root = dirname(__FILE__);
$root = explode('/', $root);
$url = 'localhost/'.$root[4]. '/' . $root[5];
define("URL", $url);
//
//
////echo '<pre>';
////// print_r($root);
////echo '</pre>';
////exit();
//define("CSS_URL", '/var/www/html/support/backend/assets/css/');
//define("JS_URL", '/backend/assets/js/');
//define("IMAGE_URL", '/backend/assets/img/');
