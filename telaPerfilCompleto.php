<?php
    session_start();

    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telaLogin.php');
    }
    $logado = $_SESSION['email']; 

    $sql = "SELECT treinoSeg FROM caracteristicas WHERE email = '$logado'";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
        $treinoSeg = $row['treinoSeg'];

    if(empty($treinoSeg)) 
    {
        header('Location: telaPerfil.php');
    }
    else 
    {
        $sql = "SELECT nome FROM usuarios WHERE email = '$logado'";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
        $nome = $row['nome'];

        $sql = "SELECT treinoSeg, treinoTer, treinoQua, treinoQui, treinoSex, treinoSab, treinoDom,
               suplementosSeg, suplementosTer, suplementosQua, suplementosQui, suplementosSex, suplementosSab, suplementosDom,
               dieta FROM caracteristicas WHERE email = '$logado'";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();

        $treinoSeg = $row['treinoSeg'];
        $treinoTer = $row['treinoTer'];
        $treinoQua = $row['treinoQua'];
        $treinoQui = $row['treinoQui'];
        $treinoSex = $row['treinoSex'];
        $treinoSab = $row['treinoSab'];
        $treinoDom = $row['treinoDom'];
        $suplementosSeg = $row['suplementosSeg'];
        $suplementosTer = $row['suplementosTer'];
        $suplementosQua = $row['suplementosQua'];
        $suplementosQui = $row['suplementosQui'];
        $suplementosSex = $row['suplementosSex'];
        $suplementosSab = $row['suplementosSab'];
        $suplementosDom = $row['suplementosDom'];
        $dieta = $row['dieta'];

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNation</title>

    <link rel="shortcut icon" type="imagex/png" href="assets/img/icone.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cambo&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/telaPerfilCompleto.css">
</head>
<body>
    <header>
        <a id="logo" href="telaInicial.php"><img src="assets/img/logo.png" alt="Logo"></a>
        <nav>
            <a href="telaInicial.php">Treino</a>
            <a href="telaDieta.php">Dieta</a>
            <a href="telaSuplemento.php">Suplementos</a>
        </nav>
        <a id="perfil" href="telaPerfil.php"><img src="assets/img/perfil.png" alt="Perfil"></a>
    </header> 

    <form action="telaPerfil.php" method="POST">
        <div id="container-perfil">
            <header id="nome-perfil">
                <?php
                    echo"<h1 id='nome'>$nome</h1>";
                ?>
            </header>

            <div id="dias-semana">
                <div id="dia">
                    <h2>Segunda-feira</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoSeg</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosSeg</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Terça-feira</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoTer</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosTer</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Quarta-feira</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoQua</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosQua</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Quinta-feira</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoQui</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosQui</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Sexta-feira</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoSex</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosQui</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Sábado</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoSab</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosSab</h1>";
                    ?>
                </div>
                <div id="dia">
                    <h2>Domingo</h2>
                    <label>Treino:</label>
                    <?php
                        echo"<h1 id='php'>$treinoDom</h1>";
                    ?>
                    <label>Suplementos:</label>
                    <?php
                        echo"<h1 id='php'>$suplementosDom</h1>";
                    ?>
                </div>
            </div>
            <div id="dieta">
                <h2 id="titulo-dieta">Dieta</h2>
                <?php
                    echo nl2br("<h1 id='php'>$dieta</h1>");
                ?>
            </div>
            <button name="delete" href="telaPerfil.php">ATUALIZAR</button>
        </div>
    </form>

    <footer>
        <div id="descricao-footer">
            <img id="descricao-image" src="assets/img/logoFooter.png" alt="LogoFooter">
            <a id="titulo-descricao" href="index.html">FitNation</a>
            <h2 id="texto-descricao" >Site de musculação onde o usuário pode armazenar seu treino, dieta, dados e receber dicas personalizadas sobre os mesmos.</h2>
        </div>

        <div id="social-footer">
            <h1 id="titulo-social">Social</h1>
            <a id="texto-social" href="https://www.instagram.com/lucas_sambati/">Instagram</a>
            <a id="texto-social" href="mailto:lucasleonardosambati@edu.unifil.br">Email</a>
        </div>

        <div id="projetos-footer">
            <h1 id="titulo-projetos">Projetos</h1>
            <a id="texto-projetos" href="https://sites.google.com/edu.unifil.br/lucas-sambati/p%C3%A1gina-inicial">Meu Portfólio</a>
        </div>

        <div id="parcerias-footer">
            <h1 id="titulo-parcerias">Parcerias</h1>
            <a id="texto-parcerias" href="https://unifil.br/">Instituto Unifil</a>
        </div>
    </footer>
</body>
</html>