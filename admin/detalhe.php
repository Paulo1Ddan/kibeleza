<?php 
    require_once ("conexao.php");
    if(isset($_GET['idServico'])){
        $idDetalhe = $_GET['idServico'];
        $conexao = Conexao::conexaoDB();
        $conexao->exec("SET NAMES utf8");
    
        $sqlDetalhe = $conexao->prepare("SELECT * FROM servico WHERE idServico = :id");
        $sqlDetalhe->bindValue(":id", $idDetalhe);
        $sqlDetalhe->execute();
        $dadosDetalhe = $sqlDetalhe->fetch(PDO::FETCH_ASSOC);
        $json = array();
        array_push($json, $dadosDetalhe);
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
    
    

?>