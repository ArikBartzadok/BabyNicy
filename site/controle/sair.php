<?php
    session_start();
    
    $_SESSION['entrou'] = 0;

    session_destroy();
    
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/modeloSite/index.php'>"
    . "<script type='text/javascript'>alert('Usuário deslogado');</script>";

?>