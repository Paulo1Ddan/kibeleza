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
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $jsonCadastro = array(
                        "statusMsg" => false,
                        "msg"=>'Insira um email válido!'
                    );
                    echo json_encode($jsonCadastro);
                }else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{8,36}$/', $senha)){
                    $jsonCadastro = array(
                        "statusMsg" => false,
                        "msg"=>'Insira uma senha válida'
                    );
                    echo json_encode($jsonCadastro);
                }else{
                    $conn = Conexao::conexaoDB();
                    $data = date("Y-m-d");
                    $status = "Ativo";
                    $senha = sha1($senha);
                    $foto = "foto-usuario/default.png";
                    $sqlInsertCad = $conn->prepare("INSERT INTO cliente(noeCliente, emailCliente, senhaCliente, statusCliente, dataCadCliente, fotoCliente) VALUES(:NOME, :EMAIL, :SENHA, '$status', '$data', '$foto')");
                    $sqlInsertCad->bindParam(":NOME", $nome);
                    $sqlInsertCad->bindParam(":EMAIL", $email);
                    $sqlInsertCad->bindParam(":SENHA", $senha);
                    if($sqlInsertCad->execute()){
                        $jsonCadastro = array(
                            "statusMsg" => true,
                            "msg"=>'Cadastro efetuado com sucesso'
                        );
                        echo json_encode($jsonCadastro);
                    }else{
                        $jsonCadastro = array(
                            "statusMsg" => false,
                            "msg"=>'Não foi possível efetuar o cadastro'
                        );
        
                        echo json_encode($jsonCadastro);
                    }
                }

            }catch(PDOException $pdoe){
                $jsonCadastro = array(
                    "statusMsg" => false,
                    "msg"=>'Não foi possível efetuar o cadastro'
                );

                echo json_encode($jsonCadastro);
            }
        }
    }
?>