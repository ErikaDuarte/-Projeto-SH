<?php
    include_once('conexao.php');
    if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $telefone = $_GET['telefone'];
    $sexo = $_GET['genero'];
    $dt = $_GET['dt'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    $endereco = $_GET['endereco'];

    $_RE = mysqli_query($conexao, "INSERT INTO pl_contrato_hilure(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$email','$senha','$telefone','$sexo','$dt','$cidade','$estado','$endereco')");

    header('Location: ./login.php');}
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Cadastro</title>
    <style>
        body{
            font-family: 'Gemunu Libre', sans-serif;
            background-image: linear-gradient(45deg, blue, red);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 27%;
            color: whitesmoke;
        }
        fieldset{
            border: 3px solid darkblue;
        }
        legend{
            border: 3px solid darkblue;
            padding: 5px;
            text-align: center;
            background-color: darkblue;
            border-radius: 8px;
        }
        .inputbox{
            position: relative;
        }
        .IUser{
            background: none;
            border: none;
            border-bottom: solid whitesmoke;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .IP{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .IUser:focus ~ .IP,
        .IUser:valid ~ .IP{
            top: -20px;
            font-size: 15px;
            color: dodgerblue;
        }
        #dt{
            border: none;
            padding: 5px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
        a{
            color: white;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
        }
        a:active{
            color: red;
        }
        @media only screen and (width: 768px){
            .box{
                width: 45%;
                top: 60%;
            }
        }
        @media only screen and (width: 425px){
            .box{
                width: 70%;
                top: 60%;
            }
        }
        @media only screen and (width: 375px){
            .box{
                width: 80%;
                top: 60%;
            }
        }
        @media only screen and (width: 320px){
            .box{
                width: 80%;
                top: 60%;
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="create_account.php" method="GET">
            <fieldset>
                <legend><b>Hilure Cadastro<b></legend>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="IUser" required>
                        <label for="nome" class="IP">Nome Completo</label>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="email" id="email" class="IUser" required>
                        <label for="email" class="IP">E-mail</label>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input type="password" name="senha" id="senha" class="IUser" required>
                        <label for="pass" class="IP">Senha</label>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input type="tel" name="telefone" id="telefone" class="IUser" required>
                        <label for="telefone" class="IP">Telefone</label>
                    <br>
                    <p>Sexo:</p>
                    <input type="radio" id="m" name="genero" value="masculino" required>
                    <label for="m">Masculino</label>
                    <br>
                    <input type="radio" id="f" name="genero" value="feminino" required>
                    <label for="f">Feminino</label>
                    <br>
                    <input type="radio" id="o" name="genero" value="outro" required>
                    <label for="o">Outro</label>
                    <br><br><br>
                        <label for="dt"><b>Data de nascimento:</b></label>
                        <input type="date" name="dt" id="dt"required>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="cidade" id="cidade" class="IUser" required>
                        <label for="cidade" class="IP">Cidade</label>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="estado" id="estado" class="IUser" required>
                        <label for="estado" class="IP">Estado</label>
                    </div>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="endereco" id="endereco" class="IUser" required>
                        <label for="endereco" class="IP">Endereço</label>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Iniciar Conexão">
                    <br><br>
                    <a href="login.php" class="PG">Já possui conta? Conecte-se agora mesmo a nave mãe!</a>
            </fieldset>
        </form>
    </div>
    
</body>
</html>