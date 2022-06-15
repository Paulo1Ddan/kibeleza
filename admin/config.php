<?php 
    spl_autoload_register(function($nameClass){
        $classe = "classes".DIRECTORY_SEPARATOR."$nameClass.php";
        if(file_exists($classe)){
            require_once "$classe";
        }
    });
?>