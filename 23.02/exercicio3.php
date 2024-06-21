<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 </title>
    
</head>
<body>
	<center>
		<br/> <br/> <br/> <br/> <br/> 
    <h1>Insira o valor que deseja converter:</h1>
    <br/>
    <form action="" method="post">
    	<select name="cambio">
			<option name= "dolar" id= "dolar" value="d">Dolár</option>
			<option name= "euro" id= "euro" value="e">Euro</option>
			<option name= "libra" id= "libra" value="l">Libra</option>
            <br/><br/>
			<input name= "valor" id= "valor" type="text">
		</select>
		

		<br/><br/>

		<input type="submit" name="btn" value="Converter">

		<?php

			$selecao = $_POST ['cambio'];
            $r = $_POST['valor'];

			if ($selecao=="d") {
				$rd = round ($r/5.40);

				echo "O valor convertido é: $rd ";
			}

			else if ($selecao=="e") {
                $re = round ($r/6.50);

				echo "O valor convertido é: $re ";
			}
			
			else if ($selecao=="l") {
				$rl = round ($r/7.00);

				echo "O valor convertido é: $rl ";
			}

		?>

	</center>
</body>
</html>