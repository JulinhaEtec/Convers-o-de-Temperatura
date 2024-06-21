<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 5</title>
</head>
<body>
	<form method="post" action="" >
<h1>Digite a Base maior:</h1>
<input type="number" name="val1" id="val1" value="val1">><br><br><br>

<h1>Digite a Base menor:</h1>
<input type="number" name="val2" id="val2" value="val2"><br><br><br>


<h1>Insira a altura:</h1>
<input type="number" name="val3" id="val3" value="val3"><br><br><br>

<input type="submit" name="btnenviar" id="btnenviar" value="calcular">
</form>



<?php
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$val3 = $_POST['val3'];
$Area = $_POST['btnenviar'];

$Area= (($val1 + $val2)* $val3)/2;

echo "A aréa será : $Area";





?>



</body>
</html>