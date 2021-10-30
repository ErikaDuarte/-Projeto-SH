<?php
session_start();
    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('Email: ' . $email);
        print_r('<br>');
        print_r('senha: ' . $senha);*/

        $sql = "SELECT * FROM pl_contrato_hilure WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            echo "<script> alert('Usuario não encontrado na nuvem!');
            window.location.href = 'login.php';
            </script>";
        }else{
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }
    }else{
        header('Location: login.php');
    }
?>  