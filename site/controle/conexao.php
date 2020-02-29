<?php
    $servidor = "localhost";
    $usuario_db = "root";
    $senha_db = "";
    $database = "baby_nicy";

    //Criar a conexao
    $conecta = mysqli_connect($servidor, $usuario_db, $senha_db, $database);

    if (!$conecta) {
        die("Falha na conexao: " . mysqli_connect_error());
    } else {
        //echo "Conexao realizada com sucesso";
    }
