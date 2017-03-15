<html>
<head>
<title>practica11 php</title>
</head>
<body>


<?php

      //Nombre del alumno
	  echo "<h1>mi pagina web NULEY</h1>";
	  //Usando bariables en PHP
	  echo "<h1>variables</h1>";
	  $nombre='nuley angel';// tipo
	  $apellidos='angel sanchez';
	  $Edad=20;
	  $fechaNacimiento='28/03/1996';
	  $status=true;
	  $salario=2500.50;
	  echo $nombre.'<br/>';
	  echo $apellidos.'<br/>';
	  echo 'Nombre completo:'.$nombre.''.$apellidos.'<br/>';
	  echo 'TU ESDAD ES:'.$Edad.'<br/>';
	  echo 'TUSALARIO ES:'.$salario.'<br/>';
	  ?>
	  <h1>OPERADORES ARITMETICOS</H1>
	  <?php
	          $a=5;
	          $b=3;
			  $suma=$a+$b;
			  $resta=$a-$b;
			  $multiplica=$a*$b;
			  $divide=$a/$b;
			  echo $suma;
			  echo 'La suma de '.$a.'+'.$b.'es:'.$suma.'<br/>';
			  echo 'resta '.$a.'-'.$b.'es:'.$resta.'<br/>';
			  echo 'La multiplicasion esde '.$a.'*'.$b.'es:'.$multiplica.'<br/>';
			  echo 'La divisionde '.$a.'/'.$b.'es:'.$divide.'<br/>';
			  
	  ?>
	 </body> 
	 </html>