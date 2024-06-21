<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio8</title>
</head>
<body>
	
			<form method="post" action="" >
<h1>Quantidade colhida na última safra de cana de açucar:</h1>
<input type="cana" name="cana" id="cana" value=""><br><br><br>
<input type="submit" name="btnenviar" id="btnenviar" value="Enviar"><br><br>


<?php
$cana = $_POST['cana'];
$Area = $_POST['btnenviar'];
 

 		if ($cana <=1000) {
 			echo "Abaixo da meta."; 		}
 		

 		else if ($cana >1000 && $cana <=5000) {
 			echo "Dentro da meta."; 	
 		}

 		else if ($cana >5000) {
 			echo "Acima da meta.";
 		}

 	


?>

</body>
</html>