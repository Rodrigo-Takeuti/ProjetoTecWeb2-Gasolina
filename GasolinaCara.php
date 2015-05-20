<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Preço dos Combustíveis</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link href="bootstrapcss.css" rel="stylesheet"> -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
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
                <h2 id="centralizandoC">Por que a gasolina é tão cara no Brasil?</h2><br>
                
                <h4>Somos autossuficientes em petróleo, mas isso não significa preços mais baixos. Entenda o porquê: </h4>
                
                <p><h4 id="estiloNum">1)</h4> Em primeiro lugar, impostos. Quase 60 por cento (57,13%) do preço da gasolina é apenas imposto, 
                    mais da metade do preço do litro. Nada que manifestações não resolvam. Um detalhe para quem não sabe: 
                    o IGF (Imposto sobre Grandes Fortunas) é um tributo previsto na constituição, mas que NUNCA FOI IMPLEMENTADO!
                    Basta vontade política, ou pressão da população.</p>
                <hr></hr> 
                    <p><h4 id="estiloNum">2)</h4>A Petrobrás não é totalmente do governo. É uma Sociedade de Economia Mista. 
                    Resumindo: O governo federal tem só 37% das ações da companhia, mas tem 56% do voto,
                    e como acionista majoritário, tem poder de decisão na empresa. 
                    Ou seja, a Petrobras é uma empresa como outra qualquer, porém controlada pelo Estado. 
                    Mas, como não é totalmente do governo, os acionistas exigem que seja altamente lucrativa, 
                    isto é, forçam ao máximo para ter o maior preço que o mercado aguenta. 
                    (só para esclarecer, há 2 tipos de ação: ordinária(direito a voto na administração) e 
                    preferencial (ações que qualquer um compra e lucra ou perde). 
                    Por isso a Petrobrás cede aos clamores dos acionistas e busca lucro máximo.</p>
                <hr></hr> 
                <p><h4 id="estiloNum">3)</h4>A gasolina brasileira não é 100% gasolina! O governo pode exigir que o percentual 
                    varie de acordo com a necessidade da economia. A lei determina que o percentual de etanol 
                    na gasolina varie entre 20% e 25%. Recentemente (01/05/2013) o governo anunciou o aumento 
                    para 25%. Motivo: fomentar a produção de etanol no Brasil e diminuir a importação de gasolina.
                    Teoricamente isso acarretaria em uma diminuição do preço da gasolina nos postos, certo? 
                    Não, de acordo com o Ministro da Fazendoa Guido Mantega, pois a medida visa estimular a produção
                    e beneficiar a indústria sucroalcooleira e química. Em suas palavras:</p>
                
                <p>O objetivo principal dessa redução é viabilizar condições para que o setor faça mais investimentos
                    . (…) Não quer dizer necessariamente que o produtor vai repassar para o preço”, disse.
                    Segundo ele, o objetivo é incentivar a alta da produção, e “reduzir preço a partir de mais oferta”.
                    Guido Mantega. 01/05/2013.</p>
                 
                <p>Quer dizer: a diminuição do preço da gasolina também depende da benevolência da indústria 
                    sucroalcooleira. (?!) Lembrando que, quando há tempestades na Índia – que  deixam a exportação 
                    de etanol atraente para países afetados, ou falta de açúcar no mercado externo – que deixa a 
                    exportação de açúcar mais atraente do que transformar a cana em álcool – ou ainda pressão 
                    da indústria sucroalcooleira para aumento dos preços e aumento de seus lucros, somos nós, 
                    consumidores, que sofremos.</p>
                <hr></hr> 
                <p><h4 id="estiloNum">4)</h4> Houve um grande aumento do número de carros nos últimos anos, o que aumentou a demanda por 
                    combustível, deixando o setor ainda mais sensível a qualquer uma dessas variantes citadas.</p>
                <hr></hr> 
                <p><h4 id="estiloNum">5)</h4> Entressafra de cana: os preços do álcool são afetados pelo período de entressafra da 
                    cana-de-açúcar e pela redução da produção das usinas, que preferem aumentar a fabricação de 
                    açúcar devido à alta da cotação internacional do produto (por isso Mantega zerou as alíquotas de
                    PIS e COFINS do etanol para incentivar as indústrias).</p>
                <hr></hr> 
                <p> <h4 id="estiloNum">6)</h4> Autossuficiência? Não somos de fato autossuficientes. O petróleo que extraímos tem densidade
                    média ou pesada. Nossas refinarias foram construídas na década de 70 para refinar o petróleo leve 
                    do Oriente Médio. Em outras palavras, o petróleo que extraímos não nos serve totalmente. Então, 
                    o paradoxo, exportamos laranja para importar suco, exportamos o nosso petróleo e importamos o do 
                    Oriente Médio – sujeito a variações de preço por instabilidades econômicas, guerras etc.</p>
                <hr></hr> 
            </div>
    
        </div>
    </div>
</div>    
<!-- end template -->
  <footer>
      <p>Copyright</p>
  </footer>
	</body>
</html>
