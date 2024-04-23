<?php
    $server = "localhost"; 
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if  ( $conn =  mysqli_connect($server, $user, $pass, $bd) )  {
        // echo "Banco conectado com sucesso!";
    }  else
        echo "Sem conexão com o banco de dados";    

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
    }

?>