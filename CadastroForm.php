<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Formulário em php.</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="estilo.css" rel="stylesheet">
        <script type ="text/javascript" src="script.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

    </head>
    <body onload="initialize()">
        <!-- begin template -->
        <div class="navbar navbar-custom navbar-fixed-top">
            <div class="navbar-header"><a class="navbar-brand" href="Principal.php"><img src="logo1.png"><img src="logo2.png"></a>
                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Principal.php">Home</a></li>
                    <li><a href="QuemSomos.php">Quem Somos</a></li>
                    <li><a href="GasolinaCara.php">Entenda o Preço da gasolina</a></li>
                    <li><a href="Faq.php">FAQ</a></li>
                    <li><a href="CadastroForm.php">Cadastre-se</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li>&nbsp;</li>
                </ul>
                <form class="navbar-form">
                    <div class="form-group" style="display:inline;">
                        <div class="input-group">
                            <div class="input-group-btn">

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <div class="container-fluid" id="main">
                <div class="row">
                    <div class="col-xs-8" id="left">
                        <br>

                        <h2 id="centralizandoC"> Cadastre-se </h2>
                        <h4>Atenção: Apenas donos de postos de gasolina.</h4>
                        <form action="recebendoDadosForm.php" method="POST">
                            <p><label for="nome"> Nome:</label> <input type="text" name="nome" id="nome" size="30" /></p>
                            <p><label for="email"> E-mail:</label> <input type="email" name="email" id="email" size="30" /></p>
                            <p><label for="senha"> Senha:</label> <input type="password" name="senha" id="senha" size="30" /></p>
                            <p><label for="nomePosto"> Nome do seu posto:</label> <input type="text" name="nomePosto" id="nomePosto" size="30" /></p>
                            <p><label for="endereco"> Endereço:</label> <input type="text" name="endereco" id="endereco" size="30" /></p>
                            <p><label for="gasolina"> Preço da GASOLINA:</label> <input type="text" name="gasolina" id="precoGas" size="10" />
                                <label for="alcool"> Preço do ÁLCOOL:</label> <input type="text" name="alcool" id="precoAlc" size="10" /> 
                                <label for="diesel"> Preço do DIESEL:</label> <input type="text" name="diesel" id="precoDies" size="10" /></p>    

                            <p><input type="submit" value="Enviar" name="enviar" > 
                                <input type="reset" value="Reset" name="reset"></p>     
                        </form>

                    </div>
                </div>
            </div>
        </div>    
        <!-- end template -->

        <br></br>

        <footer>
            <p>Copyright</p>
        </footer>

    </body>

</html>
