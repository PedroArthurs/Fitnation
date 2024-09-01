<?php
    session_start();

    //print_r($_SESSION);

    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telaLogin.php');
    }
    $logado = $_SESSION['email']; 

    $sql = "SELECT nome FROM usuarios WHERE email = '$logado'";
    $result = $conexao->query($sql);
    $row = $result->fetch_assoc();
    $nome = $row['nome'];

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
    <link rel="stylesheet" href="css/telaDieta.css">
</head>
<body>
    <header>
        <a id="logo" href="telaInicial.php"><img src="assets/img/logo.png" alt="Logo"></a>
        <nav>
            <a href="telaInicial.php">Treino</a>
            <a href="telaDieta.php">Dieta</a>
            <a href="telaSuplemento.php">Suplementos</a>
        </nav>
        <a id="perfil" href="telaPerfilCompleto.php"><img src="assets/img/perfil.png" alt="Perfil"></a>
    </header> 

    <main>
        <div id="dieta">
            <h2>DIETA</h2>
        </div>
        <div id="conteudo-dieta">
            <div id="alimento">
                <img src="assets/img/proteina.png" alt="Proteínas">
                <h2 id="titulo-alimento">Proteínas</h2>
                <h3>
                    Incluir alimentos ricos em proteínas na dieta é crucial para a saúde muscular, controle do 
                    apetite e nutrição adequada. Fontes como carnes magras, ovos, leguminosas e proteínas 
                    são essenciais para atletas e pessoas ativas. Variedade e orientação profissional garantem 
                    uma dieta equilibrada e saudável ao longo do tempo.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/carboidrato.png" alt="Carboidratos">
                <h2 id="titulo-alimento">Carboidratos</h2>
                <h3>
                    Incluir alimentos ricos em carboidratos na dieta é importante para fornecer energia ao corpo, 
                    especialmente para atividades físicas e funcionamento adequado do cérebro. Fontes como grãos 
                    integrais, frutas, legumes e raízes são excelentes opções. Variedade e moderação garantem uma 
                    dieta equilibrada e saudável ao longo do tempo.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/gordura.png" alt="Gorduras">
                <h2 id="titulo-alimento">Gorduras</h2>
                <h3>
                    Incluir alimentos ricos em gordura na dieta é importante para a absorção de vitaminas 
                    lipossolúveis e para manter a saúde do sistema nervoso. Fontes como abacate, nozes, sementes, 
                    azeite de oliva e peixes gordurosos são boas opções. Moderação e escolhas saudáveis garantem uma 
                    dieta equilibrada e benéfica para o corpo.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/fibras.png" alt="Fibras">
                <h2 id="titulo-alimento">Fibras</h2>
                <h3>
                    Alimentos ricos em fibras, como frutas, legumes e grãos integrais, ajudam na digestão e promovem 
                    a saciedade. As fibras também contribuem para a saúde do intestino e auxiliam no controle do peso.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/acucares.png" alt="Açúcares">
                <h2 id="titulo-alimento">Açúcares</h2>
                <h3>
                    Limitar o consumo de açúcares adicionados, presentes em alimentos processados e bebidas adoçadas, 
                    ajuda a evitar picos de glicose no sangue e a manter o peso saudável. Prefira frutas para satisfazer 
                    o desejo por doces.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/hidratacao.png" alt="Hidratação">
                <h2 id="titulo-alimento">Hidratação</h2>
                <h3>
                    Manter-se hidratado é fundamental para o bom funcionamento do corpo. A água ajuda na digestão, na 
                    circulação e na eliminação de toxinas, além de ser vital para a saúde da pele e o controle do apetite.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/frequencia.png" alt="Frequência">
                <h2 id="titulo-alimento">Frequência</h2>
                <h3>
                    Comer em intervalos regulares ajuda a manter os níveis de energia estáveis e evita a fome excessiva, 
                    o que pode levar a escolhas alimentares inadequadas. O ideal é fazer de 5 a 6 pequenas refeições ao 
                    longo do dia.
                </h3>
            </div>
            <div id="alimento">
                <img src="assets/img/academia.png" alt="Planejamento">
                <h2 id="titulo-alimento">Planejamento</h2>
                <h3>
                    Planejar as refeições com antecedência ajuda a garantir escolhas alimentares saudáveis e evita a 
                    tentação de recorrer a opções rápidas e menos nutritivas. Prepare lanches e refeições com equilíbrio 
                    nutricional.
                </h3>
            </div>
        </div>
    </main>
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