<?php 
    header("Access-Control-Allow-Origin: *");

    /* Criando uma classe para conexão */
    class Conexao{
        /* Criando uma função para a conexão */
        public static function conexaoDB(){
            /* Fazendo a conexão com PDO */
            $conn = new PDO("mysql:host=localhost;dbname=kibelezati14", "root", "");
            return $conn;
        }
    }
?>