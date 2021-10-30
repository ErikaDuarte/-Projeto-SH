<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'cslog_hilure';

    $conexao = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

    /*if ($conexao->connect_errno) {
        printf("Falha na conexão: %s\n", $conexao->connect_error);
        exit();
    }
    if ($conexao->ping()) {
        printf ("Conexão bem sucedida!\n");
    } else {
        printf ("Error: %s\n", $conexao->error);
    }
    $conexao->close();*/
?>