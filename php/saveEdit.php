<!-- Projeto: Site Burger Good -->
<!-- Arquivo: saveEdit.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php
    include_once('config.php');
    echo "Alterando resultado";

    if(isset($_POST["update"]))
    {

        print_r($_POST);
        $id = $_POST['idcliente'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $aniversario = $_POST['aniversario'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $senha = $_POST['senha'];
        $repet_senha = $_POST['repet_senha'];

        $sqlUpdate = "UPDATE cadastro_bd SET nome='$nome', cpf='$cpf', aniversario='$aniversario', email='$email', celular='$celular', senha='$senha', repet_senha='$repet_senha'
        WHERE idcliente='$id'";

        $result = $conexao->query($sqlUpdate);

        
    }
    header('Location: ./sistema.php');
    $conexao->close();
?>