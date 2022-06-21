<?php 
    header('Content-type: application/json; charset=utf-8');
    header('Access-Control-Allow-Method: POST');
    header("Access-Control-Allow-Origin: *");
    spl_autoload_register(function($nameClass){
        $classe = "classes".DIRECTORY_SEPARATOR."$nameClass.php";
        if(file_exists($classe)){
            require_once "$classe";
        }
    });
?>