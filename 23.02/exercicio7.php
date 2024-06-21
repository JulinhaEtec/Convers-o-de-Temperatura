<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 7</title>
</head>
<body>
	<form method="post" action="" >
<h1>Informe a nota do trabalho: :</h1>
<input type="number" name="val1" id="val1" value="val1">><br><br><br>

<h1>Informe a nota da prova:</h1>
<input type="number" name="val2" id="val2" value="val2"><br><br><br>

<input type="submit" name="btnenviar" id="btnenviar" value="calcular">
</form>



<?php


$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$res = $_POST['btnenviar'];



$res = ($val1 *4 + $val2 *6) /10; 
echo "A sua média é: $res";




?>



</body>
</html>