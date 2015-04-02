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
                <h2>Preço dos Combustíveis</h2><br>
                <input type="hidden" id="latitude"/>
                <input type="hidden" id="longitude"/>
                <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
                <input type="button" value="Buscar" onclick="initialize()"/><br><br>
                <div id="map" style="width: 600px; height: 450px"></div>
                <!--<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span> </span> -->

            </div>
            
           <div id="tabelaComPrecos"> 
              <iframe src="http://www.precodoscombustiveis.com.br/widget/iframe?id=3243&altura=500&largura=500&ordem=gasolina"></iframe> 
           <!--   <iframe src="http://www.precodoscombustiveis.com.br/widget/iframe?id=3239&altura=700&largura=700&ordem=gasolina"></iframe>
              <!--id="tabela"-->
               <?php 
//               
//        $tabela[0][0] = 'Posto1';
//        $tabela[0][1] = 'gas1';
//        $tabela[0][2] = 'alc1';
//        $tabela[0][3] = 'dis1';
//        
//        $tabela[1][0] = 'Posto2';
//        $tabela[1][1] = 'gas2';
//        $tabela[1][2] = 'alc2';
//        $tabela[1][3] = 'dis2';
//        
//        $tabela[2][0] = 'Posto3';
//        $tabela[2][1] = 'gas3';
//        $tabela[2][2] = 'alc3';
//        $tabela[2][3] = 'dis3';
//        
//        $tabela[3][0] = 'Posto4';
//        $tabela[3][1] = 'gas4';
//        $tabela[3][2] = 'alc4';
//        $tabela[3][3] = 'dis4';
//        
//        $tabela[4][0] = 'Posto5';
//        $tabela[4][1] = 'gas5';
//        $tabela[4][2] = 'alc5';
//        $tabela[4][3] = 'dis5'; 
//
//                 echo '<table border=1>';
//                 echo '<tr>';
//        
//                echo '<td><h3> Posto </h3></td>';
//                echo'<td id="gasolina"><h3> Gasolina </h3></td>';
//                echo'<td id="alcool"><h3> Alcool </h3></td>';
//                echo'<td id="disel"><h3> Disel </h3></td>';
//                
//                        echo'</tr>';
//                        
//   
//        //linha 
//        for($i=0;$i<=4;$i++){
//            $tabela[$i];
//            
//            for($j=0;$j<=3;$j++){
//                echo '<tr>';
//                $tabela[$j];
//            }

//                    '</tr>';
//         $coluna = $tabela[$i];
//         
//                    //coluna
//                    for($k=0;$k<4;$k++){
//    
//                       echo"<td> $coluna[$k] </td>";
//
//                   }
//                echo "</tr>";
//            }
//            echo'</table>';
//            
//            ?>
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



<?php

?>