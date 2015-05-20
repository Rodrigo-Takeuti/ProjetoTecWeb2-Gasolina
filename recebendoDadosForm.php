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
    
    if(empty($nome)){
        echo 'Por favor, digite seu nome.<br>';
        $erro=1;
    }
        if(strstr($email, '@'==FALSE) || strstr($email, '.com'==FALSE)){
            echo 'Por favor, digite seu email corretamente.<br>'; 
            $erro=1;
        }
            if(empty($senha))
            {
                echo 'Por favor, digite sua senha.<br>';
                $erro=1;
            }
            if(empty($nomePosto)){
                echo 'Por favor, informe o nome do seu posto.';
                $erro=1;
            }
            if(empty($endereco))
            {
                echo 'Por favor, informe seu endereço';
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
                       include "insere.php";
                    }else{
                        echo'Erro no cadastro.'; 
                    }
?>

