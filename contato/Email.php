<?php 
    require_once("php-mailer/src/Exception.php");
    require_once("php-mailer/src/PHPMailer.php");
    require_once("php-mailer/src/SMTP.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class Email{
        
        private $nome;
        private $email;
        private $telefone;
        private $msg;

        public static function verifyData($data){
            if(empty($data["name"])){
                return false;
            }else if(empty($data['email'])){
                return false;
            }else if(empty($data['phone'])){
                return false;
            }else if(empty($data['msg'])){
                return false;
            }else{
                return true;
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getTel(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getMsg(){
            return $this->msg;
        }

        public function setMsg($msg){
            $this->msg = $msg;
        }

        public function sendMail(){
            $mail = new PHPMailer(true);
                
            try{              //Enable verbose debug output
                $mail->isSMTP();                        
                $mail->CharSet = 'UTF-8';                    //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'paulodaniel1360@gmail.com';                     //SMTP username
                $mail->Password   = 'lagbpjegosxarkly';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you 
                $mail->setFrom('paulodaniel1360@gmail.com', 'Suporte Kibeleza');
                $mail->addAddress("paulodaniel1360@gmail.com", "Suporte Kibeleza");

                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Email recebido';
                $corpo = "Email recebido <br>
                Nome: ".$this->getNome()."<br>
                Tel: ".$this->getTel()."<br>
                Email: ".$this->getEmail()."<br>
                Mensagem: ".$this->getMsg()."<br>";
                $mail->Body    = $corpo;
                $mail->AltBody = 'Email recebido';
            
                $mail->send();

                /* Mensagem automatica - Cliente */

                $mailResposta = new PHPMailer(true);
                $mailResposta->isSMTP();                        
                $mailResposta->CharSet = 'UTF-8';                 
                $mailResposta->Host       = 'smtp.gmail.com';              
                $mailResposta->SMTPAuth   = true;                               
                $mailResposta->Username   = 'paulodaniel1360@gmail.com';                   
                $mailResposta->Password   = 'lagbpjegosxarkly';                              
                $mailResposta->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mailResposta->Port       = 465;                                     
                $mailResposta->setFrom('paulodaniel1360@gmail.com', 'Kibeleza Clinica de Estética');
                $mailResposta->addAddress($this->getEmail(), $this->getNome());

                $mailResposta->isHTML(true);                                  //Set email format to HTML
                $mailResposta->Subject = 'Obrigado por entrar em contato';
                $corpo = "Obrigado por nos contatat <br>
                Nome: ".$this->getNome()."<br>
                Tel: ".$this->getTel()."<br>
                Email: ".$this->getEmail()."<br>
                Mensagem: ".$this->getMsg()."<br>";
                $mailResposta->Body    = $corpo;
                $mailResposta->AltBody = 'Email recebido';
                $mailResposta->send();

                echo"
                    <script>
                        alert('Mensagem enviada com sucesso')
                    </script>
                ";

                /*  */
            }catch(Exception $e){
                echo "Erro - ".$e->getMessage();
            }
        }

        public function enviarDados(){

            require_once("../links/conexao.php");
            $nome = $this->getNome();
            $email = $this->getEmail();
            $tel = $this->getTel();
            $msg = $this->getMsg();

            $conn = Conexao::conexaoDB();
            $query = $conn->prepare("INSERT INTO contato (nomeContato, emailContato, foneContato, mensagemContato) VALUES (:nome, :email, :fone, :msg)");
            $query->bindParam(":nome", $nome);
            $query->bindParam(":email", $email);
            $query->bindParam(":fone", $tel);
            $query->bindParam(":msg", $msg);
            $query->execute();
        }
    }
?>