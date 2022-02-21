<!-- Projeto: Site Burger Good -->
<!-- Arquivo: edit.php -->
<!-- Autor: Vinícius Alarcon Vilela-->
<!-- Criação: 25/11/2021 -->

<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {

        

        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM cadastro_bd WHERE idcliente=$id";
        
        $result = $conexao->query($sqlSelect);
        $userdata = $result->fetch_assoc();
        $nome = $userdata['nome'];
        $cpf = $userdata['cpf'];
        $aniversario = $userdata['aniversario'];
        $email = $userdata['email'];
        $celular = $userdata['celular'];
        $senha = $userdata['senha'];
        $repet_senha = $userdata['repet_senha'];

    }
    else
    {
        header('Location: ./sistema.php');
    }
            
?>
<!DOCTYPE html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cardápio | Burger Good</title>

    <!----- CSS ----->
    <link rel='stylesheet' href='../css/editPHP.css'>

    <script src='https://kit.fontawesome.com/6910838e09.js' crossorigin='anonymous'></script>
</head>
<body>

    <a href="./sistema.php" class="btn-voltar">VOLTAR</a>
    
    <div class='sign-in-form-container'>


        <form action='./saveEdit.php' method='POST'>
            <h3>Editar dados</h3>
            <input type="hidden"  value="<?php echo $id; ?>" name="idcliente" />
            <input type='text' name='nome' value="<?php echo $nome; ?>" class='sign-in-box' placeholder='nome completo' id='' required>
            <label for=''></label>
            <input type='text' name='cpf'  value="<?php echo $cpf; ?>"class='sign-in-box' placeholder='CPF' id='' required>
            <input type='text' name='aniversario'  value="<?php echo $aniversario; ?>"class='sign-in-box' placeholder='aniversário' id='' required>
            <input type='email' name='email'  value="<?php echo $email; ?>"class='sign-in-box' placeholder='e-mail' id='' required>
            <input type='tel' name='celular'  value="<?php echo $celular; ?>"class='sign-in-box' placeholder='celular' id='' required>
            <input type='text' name='senha'  value="<?php echo $senha; ?>"class='sign-in-box' placeholder='senha' id='' required>
            <input type='text' name='repet_senha'  value="<?php echo $repet_senha; ?>"class='sign-in-box' placeholder='repetir senha' id='' required>
            <input type='submit' name='update' id="update" value='confirmar' class='btn'>
        </form>
    </div>
</body>
</html>