<?php
include_once 'conexao.php';
//CRIA uma consulta para listar as categorias
$sql = "SELECT * FROM roupas WHERE moda = 2 ORDER BY nome";
//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($resultado);
// calcula quantos dados retornaram
$totalColuna = mysqli_num_rows($resultado);
$totalLinha = mysqli_num_rows($resultado);
if ($totalLinha<4){
    $totalLinha = 4;
}
?>

<html>
    <head>
        <title>Exemplo</title>
    </head>
    <body>

        <?php for ($l = 0; $l < ($totalLinha/4); $l++) { ?>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <?php
            // se o número de resultados for maior que zero, mostra os dados
            if ($totalLinha > 0) {
                // inicia o loop que vai mostrar todos os dados
                for ($i = 1; $i <= 4; $i++) {
                    ?>
                    <div class="d-flex justify-content-center" style="margin: 0 5px 0 5px;">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= $linha['imagem'] ?>" 
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $linha['nome'] ?></h5>
                                <h6 class="card-title">Descrição</h6>
                                <p class="card-text"><?= $linha['descricao'] ?></p>
                                <h3 class="card-title"><?= $linha['valor'] ?></h3>
                            </div>
                            <div class="card-footer"> 
                                <a href="#" class="btn btn-primary btn-block align-self-end">Detalhes</a>
                            </div>
                        </div>
                    </div>           
                    <?php
                    $linha = mysqli_fetch_assoc($resultado);
                    if ($linha['id'] == NULL){
                        exit();
                    }
                        
                    // finaliza o loop que vai mostrar os dados
                }
                // fim do if 
            }
            ?>
        </div>
        <?php } ?>
    </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($resultado);
?>