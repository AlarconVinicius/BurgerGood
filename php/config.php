<!-- Projeto: Site Burger Good -->
<!-- Arquivo: config.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php

    $dbHost = 'mysql.getempresa.com.br';
    $dbUsername = 'getempresa03';
    $dbPassword = 'nanico2021';
    $dbName = 'getempresa03';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }


?>
