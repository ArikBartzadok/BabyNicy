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
    <title>Nicy Baby</title>
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
      <h1 class="font-weight-light align-">Entre em contato!</h1>
      <br>
      <p class="lead">Possui alguma dúvida ou sugestão? Entre em contato conosco via e-mail, é fácil e rápido!</p>
      <br>
      <br>
      <div>
<section class="mb-4 contato">
<div class="row">
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="name" class="">Seu nome: </label>
                        <input type="text" id="name" name="name" class="form-control">                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="email" class="">Seu email: </label>
                        <input type="text" id="email" name="email" class="form-control">                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                    <label for="subject" class="">Assunto</label>
                        <input type="text" id="subject" name="ass" class="form-control">                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                    <label for="message">Sua menssagem: </label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <div class="text-center text-md-left">
        <button type="button" class="btn btn-outline-info btn-block">Enviar</button>
        </div>
        <div class="status"></div>
    </div>
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Mogi Guaçu, SP, Brasil</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+55 19 99999-9999</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>baby.nicy@buriti.shupping.com</p>
            </li>
        </ul>
    </div>
</div>
</section>
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