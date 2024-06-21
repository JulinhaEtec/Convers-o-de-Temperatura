<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio10</title>
</head>
<body>
		<form method="post" action="" >
<h1>Informe o valor arrecadado:</h1>
<input type="text" name="arreca" id="arreca" value=""><br><br><br>
<h1>Informe a quantidade de fiscais:</h1>
<input type="number" name="fisca" id="fisca" value=""><br><br><br>
<h1>Informe o valor gasto com alimentação:</h1>
<input type="text" name="alimen" id="alimen" value=""><br><br><br>
<input type="submit" name="btnenviar" id="btnenviar" value="Calcular"><br><br>


<?php
$n1 = $_POST['arreca'];
$n2 = $_POST['fisca'];
$n3 = $_POST['alimen'];
$btn = $_POST['btnenviar'];

 $btn =($n1 - ($n2 * 70)- $n3); 	

	echo "Os gastos com despesas serão : $btn" ;




?>
</body>
</html>