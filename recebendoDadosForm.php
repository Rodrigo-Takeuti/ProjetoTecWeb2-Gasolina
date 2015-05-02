<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$nomePosto = $_POST["nomePosto"];
$gasolina = $_POST["gasolina"];
$alcool = $_POST["alcool"];
$diesel = $_POST["diesel"];
$erro = 0;

    if(empty($nome)){
        echo 'Por favor, digite seu nome.<br>';
        $erro=1;
    }
        if(strstr($email, '@'==FALSE) || strstr($email, '.com'==FALSE)){
            echo 'Por favor, digite seu email corretamente.<br>'; 
            $erro=1;
        }
            if(empty($nomePosto)){
                echo 'Por favor, informe o nome do seu posto.';
                $erro=1;
            }
                if(empty($gasolina) or strstr($gasolina, '0.00'==FALSE)){
                    echo 'Informe o preço da gasolina no padrão "0.00"<br>'; 
                    $erro=1;
                }
                    if(strstr($alcool, '0.00'==FALSE) or empty($alcool)){
                    echo 'Informe o preço da álcool no padrão "0.00"<br>'; 
                    $erro=1;
                }
                    if(empty($diesel) or strstr($diesel, '0.00'==FALSE)){
                    echo 'Informe o preço da diesel no padrão "0.00"<br>'; 
                    $erro=1;
                }
                    if($erro==0){
                       echo'Cadastro efetuado com sucesso!<br>';
                    }else{
                        echo'Erro no cadastro.'; 
                    }

?>

