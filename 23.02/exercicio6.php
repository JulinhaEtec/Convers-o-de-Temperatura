<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio6</title>
</head>
<body>
	
			<form method="post" action="" >
<h1>Informe a quantidade de meses trabalhadas:</h1>
<input type="mes" name="mes" id="mes" value=""><br><br><br>
<input type="submit" name="btnenviar" id="btnenviar" value="Enviar"><br><br>


<?php
$mes = $_POST['mes'];
$Area = $_POST['btnenviar'];
 

 		if ($mes < 6) {
 			echo "Não tem direito."; 		}
 		

 		else if ($mes >=6 && $mes =11) {
 			echo "3 parcelas."; 	
 		}

 		else if ($mes >11 && $mes =24) {
 			echo "4 parcelas.";
 		}

 		else if ($mes > 24) {
 			echo "5 parcelas.";
 		}


?>

</body>
</html>