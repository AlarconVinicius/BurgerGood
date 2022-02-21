<!-- Projeto: Site Burger Good -->
<!-- Arquivo: delete.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->
<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadastro_bd WHERE idcliente=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastro_bd WHERE idcliente=$id";
            $resultDelete = $conexao->query($sqlDelete);
        
        }
        
    }
    header('Location: ./sistema.php')
    
    
?>