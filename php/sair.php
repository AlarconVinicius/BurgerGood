<!-- Projeto: Site Burger Good -->
<!-- Arquivo: sair.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../cardapio.html');
?>