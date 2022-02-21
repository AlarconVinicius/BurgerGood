<!-- Projeto: Site Burger Good -->
<!-- Arquivo: testLogin.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        /* print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha); */

        $sql = "SELECT * FROM cadastro_bd WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        /* print_r($sql);
        print_r($result); */

        if(mysqli_num_rows($result) < 1)
        {
            //print_r('Não existe'); Se não existe cliente
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../cardapio.html');
        }
        else
        {
            //print_r('Existe'); Se existe cliente
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ./sistema.php');
        }

    }
    else
    {
        //Não acessa
        header('Location: ../cardapio.html');
    }  


?>