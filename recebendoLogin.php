<?php
include "conecta_mysql.php";

$email = $_GET["email"];
$senha = $_GET["senha"];
$erro = 0;


    if(strstr($email, '@'==FALSE) || strstr($email, '.com'==FALSE)){
        echo 'Usuário não cadastrado.<br>'; 
        $erro=1;
    }
        if(empty($senha))
        {
            echo 'Senha ou e-mail incorreta.<br>';
            $erro=1;
        }

        if($erro==0){
           echo'Login efetuado com sucesso!<br>';
        }else{
            echo'Erro no cadastro.'; 
        }

?>

