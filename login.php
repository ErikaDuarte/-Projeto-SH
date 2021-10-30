<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            font-family: 'Gemunu Libre', sans-serif;
            background-image: linear-gradient(45deg, blue, red);
        }
        div {
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white; 
        }

        input{
            padding: 4px;
            border: none;
            font-size: 15px;
            outline: none;
        }

        .inputS{
            background-color: rgb(0, 38, 255);
            border: none;
            padding: 10px;
            width: 95%;
            color: white;
            font-size: 15px;
        }
        .inputS:hover{
            background-color: rgb(93, 180, 235);
            cursor: pointer;
        }
        .voltar {
            color: rgb(51, 125, 255);
            margin-left: 2px;
            border-radius: 41px;
            text-decoration: none;
        }
        .voltar:active{
            color: red;
        }
        @media only screen and (width: 320px){
        div{
            padding: 40px;
        }
        .inputS{
            width: 100%;
        }
        .voltar{
            font-size: 15px;
            }
        }
        @media only screen and (width: 425px){
        div{
            padding:70px;
        }
        .voltar{
            font-size: 15px;
        }
        }
        @media only screen and (width: 375px){
        div{
            padding:60px;
        }
        .voltar{
            font-size: 15px;
        }
        }
    </style>

</head>
<body>
    <div>
        <h1>Social Hilure</h1>
        <h2>Login</h2>
        <form action="connected.php" method="POST">
            <input type="text" name="email" placeholder="E-mail ou Login">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" class="inputS" name="submit" value="Conectar">
            <br>
            <br>
            <a href="create_account.php" class="voltar">Não tem uma conta? Faça uma agora!</a>
            </form>
    </div>
   
</body>
</html>