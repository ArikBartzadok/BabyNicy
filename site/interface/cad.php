<?php
  include_once("../controle/conexao.php");
  session_start();
  if(!isset($_SESSION['entrou'])){
    $_SESSION['entrou'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/modeloSite/site/css/estilo.css">
    <link rel="stylesheet" href="http://localhost/modeloSite/site/css/bootstrap.min.css">
</head>
<body>
<!-- Menu -->
<?php
include_once ('../menu.php');
?>
<!-- Header -->

<!-- Conteúdo -->
<div class="container conteudo" style="text-align: center;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light align-">Cadastros</h1>
      <br>
      <br>
      <div style="height: 700px;">

      <form class="form" name="novo" action="../controle/cad.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col form-group">
                        <label>Produto</label>
                            <input class="form-control" type="text" name="txt_produto" value="" size="30" required=""/>
                        </div>
                        </div>
                        <div class="col form-group">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="txt_cat">
                            <option selected>Categoria...</option>
                            <option value="1">Vestuário</option>
                            <option value="2">Sapatos</option>
                            <option value="3">Acessórios</option>
                            <option value="4">Brinquedos</option>
                        </select>
                        </div>
                        <div class="col form-group">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="txt_sexo">
                            <option selected>Moda...</option>
                            <option value="1">Feminina</option>
                            <option value="2">Masculina</option>
                            <option value="3">Unissex</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Descrição Curta</label>
                            <input class="form-control" type="text" name="txt_descricao" value="" size="" required=""/>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label>Preço</label>
                                <input class="form-control" type="text" name="txt_preco" value="" size="30" required=""/>
                            </div> 
                        </div>
                        <div class="form-group">
                            <label>Imagem</label>
                            <input class="form-control" type="file" name="txt_imagem" value="" size="30" required=""/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="INSERIR" name="btn_cadastrar" />
                        </div>
                        <div class="form-group">
                            <a class="btn btn-danger btn-lg btn-block" href="../../index.php">Voltar</a>
                        </div>
                    </form>
     
      </div>
      <div style="height: 50px;" class="align-content-center">
      
      </div>
    </div>
  </div>
</div>


<!-- Rodapé -->
<?php
include_once('../rodape.php');
?>
</body>
</html>