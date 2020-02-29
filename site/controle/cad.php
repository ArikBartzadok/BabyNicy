<?php

include_once 'conexao.php';

//Recebe os valores digitados no frmCadastraUsuario.php
$nome = filter_input(INPUT_POST, 'txt_produto');
$descricao = filter_input(INPUT_POST, 'txt_descricao');
$preco = filter_input(INPUT_POST, 'txt_preco');
$cate = filter_input(INPUT_POST, 'txt_cat');
$sexo = filter_input(INPUT_POST, 'txt_sexo');

if($cate == 1){
    $cat = "roupas";
}
else if($cate == 2){
    $cat = "sapatos";
}
else if($cate == 3){
    $cat = "acessorios";
}
else if($cate == 4){
    $cat = 'brinquedos';
}

if($cate == 4){
    $sexo = '3';
}

if($cate == 3){
    $sexo = '3';
}

if(isset($_FILES['txt_imagem']))
 {
    $ext = strtolower(substr($_FILES['txt_imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../imagens/produtos/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    
    //move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $pastaUp . $novo_nome); //Fazer upload do arquivo
    $pasta = 'http://localhost/modeloSite/site/imagens/produtos/';
    $caminhocompleto = $pasta . $new_name;
}



//CRIA uma consulta para cadastra um novo usuário
$sql = "INSERT INTO " . $cat . " (nome, categoria, descricao, valor, imagem, moda) VALUES ('$nome', '$cate', '$descricao', '$preco', '$caminhocompleto', '$sexo');";

/*$sql2 = "INSERT INTO produto_categoria(fk_categoria_idCategoria, fk_produto_idProduto) "
        . "VALUES ('$idFornecedor', '$nome', '$descricao', '$caminhocompleto', '$estoque', '$preco')";*/
//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);

if (mysqli_affected_rows($conecta) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../interface/cad.php'>"
    . "<script type='text/javascript'>"
    . "alert('Produto cadastrado com Sucesso! ');</script>";

    /*echo $nome . "<br>" . $cate  . "<br>" . $cat . "<br>" . $descricao . "<br>" . $preco . "<br>" . $caminhocompleto;*/
} else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../interface/cad.php'>"
    . "<script type='text/javascript'>"
    . "alert('O Produto não foi cadastrado com Sucesso! ');</script>";
}