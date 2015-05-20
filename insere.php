<?php
include "conecta_mysql.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nomePosto = $_POST["nomePosto"];
    $gasolina = $_POST["gasolina"];
    $alcool = $_POST["alcool"];
    $diesel = $_POST["diesel"];
    
    $sql = "INSERT INTO postosgasolina VALUES";
    $sql .= "('$nome' , '$email' , '$senha' , '$nomePosto' , '$gasolina' , '$diesel' , '$alcool')";
    $resultado = mysqli_query($conexao, $sql);
    
    mysqli_close($conexao);
?>

