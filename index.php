<?php
  include_once("site/controle/conexao.php");
  session_start();
  if(!isset($_SESSION['entrou'])){
    $_SESSION['entrou'] = 0;
    $_SESSION['adm'] = 0;
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
include_once ('site/menu.php');
?>
<!-- Header -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/modeloSite/site/imagens/ca1.jpeg" alt="O mundo mágico de crianças com deficiência" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/modeloSite/site/imagens/ca2.jpeg" alt="O mundo mágico de crianças com deficiência" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/modeloSite/site/imagens/ca3.jpeg" alt="Como funciona a mente de crianças deficientes?" style="max-width: 100%; max-height: auto; width: 100%; height: auto;">
      <div class="acrousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Conteúdo -->
<div class="container conteudo" style="margin-top: 0px !important; padding: 0 !important;">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <center><h1 class="font-weight-light">Destaques</h1></center>
      <div>
      <?php
      include_once('site/controle/listaProdutosIndex.php');
      ?>
      <div style="height: 50px;" class="align-content-center social">
      
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!-- Rodapé -->
<?php
include_once('site/rodape.php');
?>
</body>
</html>