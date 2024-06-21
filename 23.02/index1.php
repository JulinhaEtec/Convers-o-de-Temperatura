<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 1 </title>
	<style>
		input{
			width: 40px;
		}
	</style>
</head>
<body>
		<form action="" method="post">
		Insira o primeiro valor: 
		<input type="text" name="primeiro">
		<br><br> Insira o segundo valor: 		
		<input type="text" name="segundo">
		<br><br> Insira o terceiro valor: 
		<input type="text" name="terceiro">
		<input type="submit" name="btnEnviar">
		<br><br> 
	</form>

<?php
	$p1 = $_POST['primeiro'];
	$p2 = $_POST['segundo'];
	$p3 = $_POST ['terceiro'];

	$maiornumero = $p1; 

	if ($p2 > $maiornumero) {
		$maiornumero = $p2; 
	}

	if ($p3 > $maiornumero) {
		$maiornumero = $p3; 
	}
	echo "O maior número é $maiornumero";

?>
</body>
</html>