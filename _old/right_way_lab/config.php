<?php 
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    define('base_url', $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    define('USERNAME', 'root');
    define('password', 'password#22');
    define('host', 'localhost');
    define('dbname', 'projeto_integrador');