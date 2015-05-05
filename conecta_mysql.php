<?php
    $conexao = mysqli_connect("127.0.0.1:3306", "root", "", "tecweb2");
    
    if(mysqli_connect_errno())
    {
        echo "Não foi possível conectar: " . mysqli_connect_error();
    }
?>

