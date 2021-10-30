<?php
    session_start();
    //print_r($_SESSION);
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pagina inicial</title>
</head>
<body>
    <style>
        body{
            background-image: linear-gradient(90deg, rgb(66, 47, 168), rgb(247, 81, 81));
            font-family: 'Gemunu Libre', sans-serif;
            -webkit-font-smoothing: antialiased !important;
        }
        div.NewPost div.InfoUser a.pf{
            text-decoration: none;
        }
    </style>
    <header> <!--Logo-->
        <img src="./assets/logo.png" alt="Hilure" class="LG" width="8%">
        <h1>Hilure</h1>
    </header>
    <nav class="Hub" id="Menu">
        <ul>
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="profile.php">Perfil</a></li>
            <li><a href="./exits/exit.php" class="login">Entrar</a></li>
            <li><a href="./exits/exit2.php" class="cadastro">Criar nova conta</a></li>
        </ul>
        <div class= "search-box"> <!--BOTÃO DE PESQUISA-->
            <input type ="text" class="search-txt" placeholder="Pesquisar no Hilure">
            <a class="search-btn" href="search.html"> <img src="./assets/pesquisa.png" width="15px"></a>
        </div>
    </nav>
    <div>
        <a href="./exits/exit.php" class="btnd">Desconctar</a>
    </div>
    <main class="main"> <!--ENVIO POSTS-->
        <div class="NewPost">
            <div class="InfoUser">
                <a href="profile.php">
                <div class="ImgUser"></div>
                </a>
                    <a href="profile.php" class="pf">
                        <?php
                        echo "<strong>$logado</strong>"
                        ?>
                    </a>
            </div>
            <form action="" class="Formulario" id="formPost">
                <textarea name="textarea" placeholder="CONTE SOBRE O ULTIMO GAME QUE JOGOU!" id="textarea"></textarea> <!--<button type="submit" class="btnSubmittForm">Enviar</button>-->
                <div class="IcconsANDButton">
                    <div class="icon">
                        <button class="btnFILEform"><img src="./assets/video.svg" alt="Adicionar Video"></button>
                        <button class="btnFILEform"><img src="./assets/img.svg" alt="Adicionar Imagem"></button>
                        <button class="btnFILEform"><img src="./assets/gif.svg" alt="Adicionar Gif"></button>
                    </div>
                    <button type="submit" class="btnSubmittForm">Enviar</button>
                </div>
            </form>
        </div>
        <ul class="posts" id="posts">
        </ul>
    </main>
    <script type="module" src="./Controles/PostersForm.js"></script>
</body>
</html>