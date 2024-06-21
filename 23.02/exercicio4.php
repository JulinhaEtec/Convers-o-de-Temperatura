<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio 4</title>
</head>
<body>
	<form method="post" action="" >
<h1>Digite o primeiro valor:</h1>
<input type="number" name="val1" id="val1" value="val1">><br><br><br>

<h1>Digite o segundo valor:</h1>
<input type="number" name="val2" id="val2" value="val2"><br><br><br>

<input type="submit" name="btnsomar" id="btnsomar" value="somar">
</form>



<?php
$somar = $_POST['btnsomar'];
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];




 if ($somar > 20){
 	$somar = $val1 + $val2+8;
 echo "O resultado da soma é: $somar";
}

 else if ($somar <= 20) {
   $somar = $val1 + $val2-5;
 echo "O resultado da soma é: $somar" ;
 }


?>



</body>
</html>