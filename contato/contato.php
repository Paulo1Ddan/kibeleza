<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <script src="https://kit.fontawesome.com/a9f506c8dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../links/css/reset.css">
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="css/contato.css">
</head>

<body>
    <?php require_once "header/header.php" ?>
    <section class="map">

    </section>
    <section class="frmContato">
        <div class="site">
            <h3 class="tituloContato">Formulario de contato</h3>
            <form action="" method="POST">
                <div class="inputs">
                    <div class="input-group">
                        <label for="input-name">Nome</label>
                        <input type="text" name="name">
                    </div>
                    <div class="input-group">
                        <label for="input-email">Email</label>
                        <input type="email" name="email" id="input-email" placeholder="Digite seu email">
                    </div>
                    <div class="input-group">
                        <label for="input-phone">Telefone</label>
                        <input type="tel" name="phone" id="input-phone" placeholder="Digite seu telefone">
                    </div>
                </div>
                <div class="textarea">
                    <div class="textarea-group">
                        <label for="textarea-msg">Mensagem</label>
                        <textarea name="msg" id="textarea-msg" placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <div class="btn-group">
                        <input type="submit" name="enviar" class="btnContato" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php require_once "footer/footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="header/header.js"></script>
</body>
</html>

<?php
    
    require_once("Email.php");
    
    if(isset($_POST['enviar'])){

        if(!Email::verifyData($_POST)){
            echo "
                <script>
                    alert('Preencha todos os campos')
                </script>
            ";
        }else{
            $email = new Email();
            $email->setNome($_POST['name']);
            $email->setEmail($_POST['email']);
            $email->setTelefone($_POST['phone']);
            $email->setMsg($_POST['msg']);

            $email->sendMail();
            $email->enviarDados();
        }
    }

?>
