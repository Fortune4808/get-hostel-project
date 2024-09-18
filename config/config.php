<?php
    session_start();
    session_regenerate_id(true);
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
     // var_dump($_SESSION);

    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>


<?php 
    $website_url='http://localhost/gethostel2.com/';
    // $website_url='http://192.168.148.35/gethostel2.com/';
    $website_name='Get hostel';
    $latest_version=date('Ymdhis');
?>
