<!--
	Pablo Miguel Velasco Garcia 4°H
-->
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<?php
	echo"<h1>operadores aritmeticos...(+,-,*,/,%)</h1>" ;

	$num1 = 5;
	$num2 = 8;

	echo"La suma de num1 y num2 seria: " .     ($num1 + $num2);

	echo "<br>";


	echo"La resta de num1 y num2 seria: " .     ($num1 - $num2);

	echo "<br>";


	echo"La multiplicacion de num1 y num2 seria:" .     ($num1 * $num2);

	echo "<br>";


	echo"La division de num1 y num2 seria: " .    ($num1 / $num2);

	echo "<br>";


	echo"<h1>Operadores de asignacion (=)</h1>";

	echo "<br>";

	$num2 = $num1;

	echo $num1;

	echo"<br>";
	echo "<h1>Operdaores de concatenacion (=)</h1>";
	echo"<hr";

	$texto="yo tengo " . 16 ."anos";
	echo $texto;

	echo "<br>";
	$tengo="yo";
	$tengo="tengo";
	$tengo="16 anos";
	 echo $tengo;
	 
	 echo"<hr>";

	echo "<h1>Operadores de comparacion.... (==,===,!=,<>,>=,<=)</h1>";

	if ($num1==$num2){
		echo "son iguales";

	}else{
		echo "no son iguales";
	}
	echo"<hr>";

	echo"<h1>Operadores de logicos ....(&& o AND,OR o ||,XOR) </h1";
	$res= true ;
	if(($num1 < $num2) && ($res =true)){
		echo "$num1, es mayor ";

	}else{
		echo "no es mayor";

	}
	echo"<hr>";
	?>
			<img src="img/taco.jpeg" width="50">
</body>
</html>