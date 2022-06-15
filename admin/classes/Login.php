<?php
    class Login{
        private $email;
        private $senha;
    
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function login($email, $senha){
            $conn = Conexao::conexaoDB();
            $querySelect = $conn->prepare("SELECT * FROM cliente WHERE emailCliente = :EMAIL AND senhaCliente = :SENHA");
            $querySelect->bindParam(':EMAIL', $email);
            $querySelect->bindParam(':SENHA', $senha);
            $querySelect->execute();
            $dadosUsuario = $querySelect->fetch(PDO::FETCH_ASSOC);
            if($dadosUsuario){
                $json = array();
                $loginJson = array(
                    "msg"=>array(
                        "logado"=>"sim",
                        "texto"=>"Logado com sucesso"
                    ),
                    "dados"=> $dadosUsuario
                );
                array_push($json, $loginJson);
                echo json_encode($json);
            }else{
                $json = array();
                $loginJson = array(
                    "msg"=>array(
                        "logado"=>"não",
                        "texto"=>"Email ou senha incorretos"
                    ),
                    "dados"=> $dadosUsuario
                );
                array_push($json, $loginJson);
                echo json_encode($json);
            }
        }
    }
?>
