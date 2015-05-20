<!DOCTYPE html>
<html> 
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nomePosto = $_POST["nomePosto"];
$endereco = $_POST["endereco"];
$gasolina = $_POST["gasolina"];
$alcool = $_POST["alcool"];
$diesel = $_POST["diesel"];
$erro = 0;

if (empty($nome) || strstr($nome, ' ' == true)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe seu nome.');";
    echo "</script>";
    $erro = 1;
}
if (empty($email) || strstr($email, ' ' == TRUE)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe seu E-mail.');";
    echo "</script>";
    $erro = 1;
}
if (empty($senha)) {
    echo"<script type='text/javascript'>";
    echo "alert('Digite uma senha.')";
    echo "</script>";
    $erro = 1;
}
if (empty($nomePosto) || strstr($nomePosto, ' ' == true)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe o nome do seu posto.')";
    echo "</script>";
    $erro = 1;
}
if (empty($endereco) || strstr($endereco, ' ' == true)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe o endereço do seu posto.')";
    echo "</script>";
    $erro = 1;
}
if (empty($gasolina) || strstr($gasolina, '0.00' == FALSE)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe o preço da gasolina.')";
    echo "</script>";
    $erro = 1;
}
if (empty($alcool) || strstr($alcool, '0.00' == FALSE)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe o preço do álcool.')";
    echo "</script>";
    $erro = 1;
}
if (empty($diesel) || strstr($diesel, '0.00' == FALSE)) {
    echo"<script type='text/javascript'>";
    echo "alert('Informe o preço do diesel.')";
    echo "</script>";
    $erro = 1;
}
if ($erro == 0) {
    echo"<script type='text/javascript'>";
    echo "alert('Cadastro efetuado com sucesso.')";
    echo "</script>";
    include "insere.php";
} else {
    echo"<script type='text/javascript'>";
    echo "alert('Erro ao cadastrar.')";
    echo "</script>";
    $erro = 0;
}
?>
</html>