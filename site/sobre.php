<?php
  include_once("controle/conexao.php");
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
include_once ('menu.php');
?>
<!-- Header -->

<!-- Conteúdo -->
<div class="container conteudo" style="text-align: center;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <img src="http://localhost/modeloSite/site/imagens/logos/logo1.png" width="300px" height="auto" class="d-inline-block align-center" alt="">
    <br>
    <br>
      <br>
      <div>
      <p class="lead">Somos uma empresa que cuida de levar até você os melhores produtos infantis, estamos em serviço desde 2019 e esperamos sempre atendê-los com qualidade e carinho. </p>

      <p class="lead">Fundada por Isabelly Katuki e Michele Aparecida, com o objetivo de levar o que for de qualidade para os seres mais angelicais desse mundo e para as mamães. Somos apaixonadas por crianças e queremos vê-las usando do que for melhor.  </p>

      <p class="lead">Voltem sempre!</p>
      </div>
      <div style="height: 50px;" class="align-content-center social">
      
      </div>
    </div>
  </div>
</div>


<!-- Rodapé -->
<?php
include_once('rodape.php');
?>
</body>
</html> 