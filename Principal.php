<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Preço dos Combustívels</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link href="bootstrapcss.css" rel="stylesheet"> -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="estilo.css" rel="stylesheet">
                <script type ="text/javascript" src="javaScript.js"></script>
                <script type ="text/javascript" src="script.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

        </head>
        <body onload="initialize()">
<!-- begin template -->
<div class="navbar navbar-custom navbar-fixed-top">
    
    <div class="navbar-header"><a class="navbar-brand" href="Principal.php"><img src="logo1.png"><img src="logo2.png"></a>
    
        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="menu()">
            <nav>
        <ul>
           <span class="icon-bar"></span>    <!--<li><a href="Principal.php">Home</li></a>-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </ul>
            </nav>
      </a>
    </div> 
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          <li class="active"><a href="Principal.php">Home</a></li>
          <li><a href="QuemSomos.php">Quem Somos</a></li>
        <li><a href="GasolinaCara.php">Entenda o Preço da gasolina</a></li>
        <li><a href="Faq.php">FAQ</a></li>
        <li><a href="CadastroForm.php">Cadastre-se</a></li> 
<!--          <li class="active"><a href="Principal.php">Home</a></li>
          <li><a href="QuemSomos.php">Quem Somos</a></li>
        <li><a href="GasolinaCara.php">Entenda o Preço da gasolina</a></li>
        <li><a href="Faq.php">FAQ</a></li>-->

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
                <h2 id="centralizandoC">Preço dos Combustíveis</h2><br>
                <input type="hidden" id="latitude"/>
                <input type="hidden" id="longitude"/>
                <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
                <input type="button" value="Buscar" onclick="initialize()"/><br><br>
                <div id="map" style="width: 600px; height: 450px"></div>
                <!--<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span> </span> -->

            </div>
            
           <div id="tabelaComPrecos"> 
              <!--<iframe src="http://www.precodoscombustiveis.com.br/widget/iframe?id=3243&altura=500&largura=500&ordem=gasolina"></iframe> 
                <iframe src="http://www.precodoscombustiveis.com.br/widget/iframe?id=3239&altura=700&largura=700&ordem=gasolina"></iframe>
              id="tabela"-->
               <table id="tabelaPreco" border="1">
                  <thead id="tabelaPrecoHead">
+                       <tr>
+                           <td><b>Nome Do Posto</b></td>
+                           <td id="gasolina"><b>Gasolina</b></td>
+                           <td id="alcool"><b>Álcool</b></td>
+                           <td id="diesel"><b>Diesel</b></td>
+                       </tr>
                  </thead>
                  <tbody>
                        <?php
                            include "conecta_mysql.php";
                            
                            $resultado = mysqli_query($conexao, "SELECT * from postosgasolina");
                            $i = 0;
                            
                            if($resultado)
                            {
                                while($row = mysqli_fetch_array($resultado))
                                {
                                    if($i % 2 == 0)
                                    {
                                        echo "<tr class = 'odd'>";
                                        echo "<td>"; 
                                        echo $row["nomePosto"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["gasolina"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["alcool"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["diesel"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }else{
                                        echo "<tr class = 'even'>";
                                        echo "<td>"; 
                                        echo $row["nomePosto"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["gasolina"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["alcool"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["diesel"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    $i++;
                                }
                            }
                        ?>
                  </tbody>
               </table>
            </div>
            
        </div>
    </div>  
</div>    
<!-- end template -->

	<!-- script references -->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrapjs.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/javascript.php"></script>
  -->
  <br><br>
  <footer>
      <p>Copyright</p>
  </footer>
  
	</body>
</html>
