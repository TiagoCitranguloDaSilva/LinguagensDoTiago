<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagens</title>
    <link rel="shortcut icon" href="content/fav/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/linguagens.css">
</head>
<body>
    <header>
        <div id="nomePagina">
            <h1>Línguagens</h1>
        </div>
        <nav>
            <div class="navOpt"><button onclick="nav('')">HOME</button></div>
            <div class="navOpt"><button onclick="nav('php/linguagens.php')">LINGUAGENS</button></div>
            <div class="navOpt"><button onclick="nav('html/contato.html')">CONTATO</button></div>
        </nav>
    </header>
    <main id="telaEscolha">
        <div id="linguagensContainer">
            <div id="msg">
                <p>Selecione a línguagem</p>
            </div>
            <div id="linguagens">
                <div class="opt" id="java" onclick="selected(this)"></div>
            </div>
            
    </main>
    <div id="textoLinguagemContainer">
        <div id="textoLinguagem">
            <div id="linguagemTitulo"><p></p></div>
            <div id="content"></div>
        </div>
    </div>
    <footer>
        <p>Site desenvolvido por &copy;<span>Tiago Citrangulo da Silva</span></p>
        <p>E-mail de <a href="mailto:tiagocitrangulo256@gmail.com" target="_blank">contato</a></p>
        <p>Repositório <a href="https://github.com/tiagocitrangulodasilva" target="_blank">GitHub</a></p>
    </footer>

    <script src="../js/nav.js"></script>
    <script src="../js/mov.js"></script>

    <?php

        if(isset($_GET['lang'])){
            $texto = file_get_contents("../content/txts/" . $_GET['lang'] . ".txt");
            echo "<script>showLanguageContent(\"" . $texto . "\", \""  . $_GET['lang'] . "\" )</script>";
        }

    ?>
</body>
</html>