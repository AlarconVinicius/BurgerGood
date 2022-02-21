<!-- Projeto: Site Burger Good -->
<!-- Arquivo: email.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php


    if(isset($_POST['email']) && !empty($_POST['email'])){

        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);


        $to = "alarcon.pqd74@gmail.com";
        $subject = "Contato - Burger Good";
        $body = "Nome: ".$nome."\r\n".
                "Telefone: ".$telefone."\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$mensagem;
        $header = "From:vinicius.alarcon.crf@gmail.com"."\r\n".
                    "Reply-To:".$email."\r\n".
                    "X=Mailer:PHP/".phpversion();
        if(mail($to,$subject,$body,$header)){
            
            echo("E-mail enviado com sucesso!");

        }else{
            echo("O E-mail não pode ser enviado...");
        }
    }else{
        echo("O E-mail não pode ser enviado...");
    }



?>