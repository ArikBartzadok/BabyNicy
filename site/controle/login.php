<?php
include 'conexao.php';
session_start();

//Recebe os valores digitados no frmLogin.php
$usuario = filter_input(INPUT_POST,'txt_usuario');
$senha = filter_input(INPUT_POST,'txt_senha');

//CONSTROI uma consulta para saber se o Usuário e a Senha existem
$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ";

//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);

//CONTA o numero de linhas retorna
$linha = mysqli_num_rows($resultado);
$_SESSION['adm'] = 0;
//Verifica se houve algum resultado referente ao USUARIO e a SENHA digitada e faz o acesso
if($linha != 0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['entrou'] = 1;
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../index.php'><script type='text/javascript'>alert('Logado');</script>";
}else{
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../interface/frmLogin.php'><script type='text/javascript'>alert('Digite corretamente o Usuário e a Senha');</script>"; 
    $_SESSION['entrou'] = 0;
}

//echo "teste" . $usuario;