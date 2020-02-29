<!DOCTYPE html>
<html>
    <head>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="row">
        <div class="col-sm">
            <a class="navbar-brand" href="#" style="padding-right: 50px">
                <img src="http://localhost/modeloSite/site/imagens/logos/logo1.png" width="100" height="auto" class="d-inline-block align-center" alt="">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
        <!-- COLUNA VAZIA PARA AJUSTAR -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active navbar-brand">
                        <a class="nav-link" href="http://localhost/modeloSite/index.php">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown navbar-brand">
                        <a class="nav-link dropdown-toggle" href="#" id="cadastros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produtos
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="http://localhost/modeloSite/site/interface/acessorios.php">Acessórios</a>
                            <a class="dropdown-item text-white" href="http://localhost/modeloSite/site/interface/brinquedos.php">Brinquedos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-white" href="http://localhost/modeloSite/site/interface/esc_vestuario.php">Vestuário</a>
                            <a class="dropdown-item text-white" href="http://localhost/modeloSite/site/interface/esc_sapatos.php">Calçados</a>

                        </div>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="http://localhost/modeloSite/site/sobre.php">Sobre Nós</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="http://localhost/modeloSite/site/localizacao.php">Onde estamos</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="http://localhost/modeloSite/site/contato.php">Contato</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <?php
                    //session_start();
                    if(($_SESSION['entrou'] != 0) || ($_SESSION['entrou'] != NULL)){
                    echo "Olá "  . " , seja bem vindo(a):  " . strtoupper($_SESSION['usuario']);
                    }
                    //. strtoupper($_SESSION['usuario']) COLOCAR ESTE CONTEUDO NA LINHA ACIMA
                    ?>
                </span>
                
                <ul class="navbar-nav mr-auto float-right">
                    <li class="nav-item active navbar-brand justify-content-end">
                <?php 

                if($_SESSION['adm'] == 1){
                    echo '<a href="http://localhost/modeloSite/site/interface/cad.php" class="btn-nave justify-content-end"><button type="button" class="btn btn-outline-info" name="adm">Cadastrar</button></a>';
                }
				if(($_SESSION['entrou'] == 0) || ($_SESSION['entrou'] == NULL)){
					echo '<a href="http://localhost/modeloSite/site/interface/frmLogin.php" class="btn-nave justify-content-end"><button type="button" class="btn btn-outline-info" name="log">Login</button></a>';
              		echo '<a href="http://localhost/modeloSite/site/interface/frmAdm.php" class="btn-nave justify-content-end"><button type="button" class="btn btn-outline-info" name="adm">Administrador</button></a>';
				}
				else {
                    echo '<a class="justify-content-end" href="http://localhost/modeloSite/site/controle/sair.php" class="btn-nave justify-content-end"><button type="button" class="btn btn-outline-danger" name="adm">Sair</button></a>';
                }
            ?></ul></li>
            </div> 
            <div class="col-sm">
            
            </div>             
</div>
</nav>        
</body>
</html>