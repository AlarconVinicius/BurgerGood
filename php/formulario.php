<!-- Projeto: Site Burger Good -->
<!-- Arquivo: formulario.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php
        

if(isset($_POST['submit']))
{

    //  print_r('Nome: ' .$_POST['nome']);
    //  print_r('<br>');
    //  print_r('CPF: ' .$_POST['cpf']);
    //  print_r('<br>');
    //  print_r('Aniversário: ' .$_POST['aniversario']);
    //  print_r('<br>');
    //  print_r('E-mail: ' .$_POST['email']);
    //  print_r('<br>');
    //  print_r('Celular: ' .$_POST['celular']);
    //  print_r('<br>');
    //  print_r('Senha: ' .$_POST['senha']);
    //  print_r('<br>');
    //  print_r('Repetir Senha: ' .$_POST['repet_senha']);
    //  print_r('<br>');

    include_once('config.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $aniversario = $_POST['aniversario'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $repet_senha = $_POST['repet_senha'];
            
    $sql = "INSERT INTO cadastro_bd(nome,cpf,aniversario,email,celular,senha,repet_senha) VALUES ('$nome','$cpf','$aniversario','$email','$celular','$senha','$repet_senha')";

    echo $sql;

    if(!$conexao->query ($sql)){
        echo $conexao->error;
    }

    header('Location: ../cardapio.html');
}

?>