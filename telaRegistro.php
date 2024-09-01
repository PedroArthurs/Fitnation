<?php

    if(isseT($_POST['submit'])) 
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['senha']);
        //print_r($_POST['objetivos']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $objetivos = $_POST['objetivos'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,objetivos) 
        VALUES('$nome','$email','$senha','$objetivos')");

        header('Location: telaLogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tela de Registro</title>

    <link rel="shortcut icon" type="imagex/png" href="assets/img/icone.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cambo&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/telaRegistro.css">
</head>
<body>
    <form action="telaRegistro.php" method="POST">
        <fieldset id="registro">
                <h1>Registre-se</h1>
                <input type="text" name="nome" placeholder="Nome">
                <br><br>
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input type="text" name="objetivos" placeholder="Objetivos Pessoais">
                <br><br>
                <button name="submit" id="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>