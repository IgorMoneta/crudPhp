<?php

    $server = "localhost:3307";
    $user = "root";
    $pass = "123456789";
    $bd = "cadastro";

    if ($conn = mysqli_connect($server , $user, $pass, $bd)) {

       // echo "Conectado!";

    }else{ 
        echo "Erro";
    }

    

?>