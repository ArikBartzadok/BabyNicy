<?php
  include_once("../controle/conexao.php");
  session_start();
  if(!isset($_SESSION['entrou'])){
    $_SESSION['entrou'] = 0;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nicy Baby</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/modeloSite/site/css/estilo.css">
    </head>
    <body>
    <?php 
    include_once ('../menu.php');
    ?>
    
    <!-- Conteúdo -->
    <div class="container conteudo" style="text-align: center;">
      <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
          <h1 class="font-weight-light align-">Acesso ao Site</h1>
          <br>
          <br>
          <div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form name="logar" action="../controle/login.php" method="POST" class="form">
                        <div class="form-group">
                            <label>Usuário </label>
                            <input class="form-control" type="text" name="txt_usuario" value="" size="30" required="" />
                        </div>
                        <div class="form-group">
                            <label>Senha </label>
                            <input class="form-control" type="text" name="txt_senha" value="" size="30" required="" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="ENTRAR" name="btn_entrar" />
                        </div>
                        <div class="alert alert-primary" role="alert">
                            Não tem uma conta? <a href="./frmCadastraUsuario.php" class="alert-link">CADASTRE-SE</a>. É simples e rápido!
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
            </div>
          <div style="height: 50px;" class="align-content-center social">
          </div>
        </div>
      </div>
    </div>
                <?php
                include('../rodape.php');
                ?>
        </div>    
    </div>    
    </body>
</html>
