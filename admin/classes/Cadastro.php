<?php 
    class Cadastro{
        private $nome;
        private $email;
        private $senha;
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            trim($this->nome = $nome);
        }
        
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            trim($this->email = $email);
        }
        
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function cadastrarUsuario($nome, $email, $senha){
            try{
                $conn = Conexao::conexaoDB();
                $data = date("Y-m-d");
                $status = "Ativo";
                $foto = "foto-usuario/default.png";
                $sqlInsertCad = $conn->prepare("INSERT INTO cliente(nomeCliente, emailCliente, senhaCliente, statusCliente, dataCadCliente, fotoCliente) VALUES(:NOME, :EMAIL, :SENHA, '$status', '$data', '$foto')");
                $sqlInsertCad->bindParam(":NOME", $nome);
                $sqlInsertCad->bindParam(":EMAIL", $email);
                $sqlInsertCad->bindParam(":SENHA", $senha);
                if($sqlInsertCad->execute()){
                    $jsonCadastro = array(
                        "msg"=>'Cadastro efetuado com sucesso'
                    );
                    echo json_encode($jsonCadastro);
                }else{
                    $jsonCadastro = array(
                        "msg"=>'Não foi possível efetuar o cadastro'
                    );
    
                    echo json_encode($jsonCadastro);
                }
            }catch(PDOException $pdoe){
                echo $pdoe->getMessage();
            }
        }
    }
?>