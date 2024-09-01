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
    <link rel="stylesheet" href="css/telaSuplemento.css">
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
        <div id="suplemento">
            <h2>SUPLEMENTOS</h2>
        </div>
        <div id="conteudo-suplemento">
            <div id="item-suplemento">
                <img src="assets/img/wheyProtein.png" alt="Whey Protein">
                <h2 id="titulo-item-suplemento">Whey Protein</h2>
                <h3>
                    O whey protein é um suplemento rico em proteínas extraído do soro do leite. Existem tipos como 
                    concentrado, isolado e hidrolisado. É usado para recuperação muscular após os treinos, em shakes 
                    ou receitas. Escolha marcas confiáveis e consulte um profissional. Lembre-se de que é um complemento, 
                    não substituição, na dieta.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/creatina.png" alt="Creatina">
                <h2 id="titulo-item-suplemento">Creatina</h2>
                <h3>
                    A creatina é um suplemento utilizado por atletas para aumentar a energia durante exercícios intensos e 
                    auxiliar na recuperação muscular. Existem formas diferentes, como monoidratada e micronizada. Consulte 
                    um profissional antes de usar e lembre-se de manter uma boa hidratação.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/termogenico.png" alt="Termogênicos">
                <h2 id="titulo-item-suplemento">Termogênicos</h2>
                <h3>
                    Termogênicos são suplementos que aumentam o metabolismo e a queima de gordura. Eles contêm ingredientes como 
                    cafeína e chá verde. Use com cautela e siga as orientações do fabricante para evitar efeitos colaterais. 
                    Consulte um profissional de saúde antes de usar e lembre-se de que não substituem uma dieta balanceada e 
                    exercícios regulares.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/glutamina.png" alt="Glutamina">
                <h2 id="titulo-item-suplemento">Glutamina</h2>
                <h3>
                    A glutamina é um aminoácido essencial para a saúde intestinal e imunológica, além de auxiliar na recuperação 
                    muscular. Consulte um profissional antes de usar e lembre-se de que não substitui uma alimentação equilibrada 
                    e a prática de exercícios regulares.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/preTreino.png" alt="Pré-Treino">
                <h2 id="titulo-item-suplemento">Pré-Treino</h2>
                <h3>
                    Pré-treino é um suplemento usado para aumentar energia, foco e desempenho durante os treinos. Contém 
                    ingredientes como cafeína e beta-alanina. Use com cuidado e consulte um profissional antes de começar. 
                    Lembre-se de que não substitui uma dieta balanceada e a prática regular de exercícios.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/bcaa.png" alt="BCAA">
                <h2 id="titulo-item-suplemento">BCAA</h2>
                <h3>
                    BCAA (aminoácidos de cadeia ramificada) são suplementos que ajudam na recuperação muscular e na síntese 
                    proteica. Contêm leucina, isoleucina e valina. Use conforme orientação e consulte um profissional de saúde 
                    antes de começar. Lembre-se de que são complementos e não substituem uma alimentação equilibrada e a prática 
                    regular de exercícios.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/betaAlanina.png" alt="Beta-Alanina">
                <h2 id="titulo-item-suplemento">Beta-Alanina</h2>
                <h3>
                    A beta-alanina ajuda a aumentar os níveis de carnosina nos músculos, o que pode melhorar a resistência e atrasar 
                    a fadiga durante treinos intensos. Ideal para quem busca aumentar a performance em exercícios de alta intensidade 
                    e curta duração.
                </h3>
            </div>
            <div id="item-suplemento">
                <img src="assets/img/lCarnitina.png" alt="L-Carnitina">
                <h2 id="titulo-item-suplemento">L-Carnitina</h2>
                <h3>
                    A L-carnitina é um aminoácido que auxilia na conversão de gordura em energia, promovendo a perda de gordura e melhorando 
                    a performance atlética. É especialmente popular entre aqueles que buscam melhorar a composição corporal.
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