<?php

include_once 'conexao.php';


//Recebe os valores digitados no frmCadastraUsuario.php
$usuario = filter_input(INPUT_POST, 'txt_usuario');
$email = filter_input(INPUT_POST, 'txt_email');
$senha = filter_input(INPUT_POST, 'txt_senha');

//CRIA uma consulta para cadastra um novo usuário
$sql = "INSERT INTO usuario(usuario, email, senha) VALUES ('$usuario','$email','$senha')";

//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);

if (mysqli_affected_rows($conecta) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
            . "'0;URL=../interface/frmLogin.php'>"
            . "<script type='text/javascript'>"
            . "alert('Usuario cadastrado com Sucesso . ');</script>";
} else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
            . "'0;URL=../interface/frmCadastraUsuario.php'>"
            . "<script type='text/javascript'>"
            . "alert('O Usuario não foi cadastrado com Sucesso . ');</script>";
}