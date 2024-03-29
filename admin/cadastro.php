<?php 
    require_once ('config.php');
    try{
        $data = file_get_contents("php://input");
        $objData = json_decode($data);
        $cadastro = new Cadastro();
        $cadastro->setNome($objData->nome);
        $cadastro->setEmail($objData->email);
        $cadastro->setSenha($objData->senha);
        $cadastro->cadastrarUsuario($cadastro->getNome(), $cadastro->getEmail(), $cadastro->getSenha());
    } catch (\Throwable $th){
        $jsonCadastro = array(
            "statusMsg" => false,
            "msg"=>'Não foi possível efetuar o cadastro'
        );

        echo json_encode($jsonCadastro);
    }
?>