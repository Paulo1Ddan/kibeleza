<?php 
    require_once("config.php");
    if(isset($_GET['email']) && isset($_GET['senha'])){
        try{
            $login = new Login();
            $login->setEmail($_GET['email']);
            $login->setSenha($_GET['senha']);
            $login->login($login->getEmail(), $login->getSenha());
        }catch( \Throwable $pdoe){
            echo "Erro ao conectar com o banco".$pdoe->getMessage();
        }
    }
?>