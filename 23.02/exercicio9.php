<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 9</title>
</head>
<body>
	<form method="post" action="" >
<h1>Informe a quantidade de alunos matriculados :</h1>
<input type="number" name="val1" id="val1" value="val1">><br><br><br>

<h1>Informe a quantidade de alunos formados</h1>
<input type="number" name="val2" id="val2" value="val2"><br><br><br>

<input type="submit" name="btnenviar" id="btnenviar" value="calcular">
</form>



<?php
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$res = $_POST['btnenviar'];


$res = $val1 - $val2; 
echo "O valor da evasão da faculdade é: $res %";
?>



</body>
</html>