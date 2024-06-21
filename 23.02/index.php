<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
      <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
<center>

<form action="" method="post">

        <h1>Coloque a temperatura desejada</h1>
		<input type="text" id="txtN1" name="txtVal"> <br/> 
		 
	

	<h1><font size="3" face="verdana">Converter de:</font></h1>
	<select name="slPrimeiro">
      <font size="5" face="verdana">
			<option value="C">Celsius</option>
			<option value="F">Fahrenheit</option>
			<option value="K">Kelvin</option>
	</font>
			</select>	


			<h1 ><font size="3" face="verdana">Para:</font></h1>
			<select name="slSegundo">

			<option value="C">Celsius</option>
			<option value="F">Fahrenheit</option>
			<option value="K">Kelvin</option>
			<option value="Re">Réaumur</option>
			<option value="R">Rankine</option> <br/> <br/>

		

			</select>
				<input type="submit" name="btnEnviar" value="Enviar">	<br/> <br/> <br/>  

		</form>



    


	<?php

	$Primeiro = $_POST['slPrimeiro'];
	$Segundo = $_POST['slSegundo'];
	$valor = $_POST ['txtVal'];


// celsius 

	if (($Primeiro == "C" )&&($Segundo=="F")){
		$res = $valor * 1.8 +32;

		echo "$res ";
}

	else if (($Primeiro == "C" )&&($Segundo=="K")){
		$res = $valor + 273.15;

		echo "$res ";
}
else if (($Primeiro == "C" )&&($Segundo=="R")){
		$res = $valor * 1.8 + 32 + 459.67;

		echo "$res ";
}

else if (($Primeiro == "C" )&&($Segundo=="Re")){
		$res = $valor * 0.8;

		echo "$res ";
}

// kelvin 

else if (($Primeiro == "K" )&&($Segundo=="C")){
		$res = $valor - 273.15;

		echo "$res ";
}

else if (($Primeiro == "K" )&&($Segundo=="F")){
		$res = $valor * 1.8 - 459.67;

		echo "$res ";
}

else if (($Primeiro == "K" )&&($Segundo=="R")){
		$res = $valor * 1.8;

		echo "$res ";
}

else if (($Primeiro == "K" )&&($Segundo=="Re")){
		$res = ($valor - 273.15) * 0.8;

		echo "$res ";
}

//fahreint

else if (($Primeiro == "F" )&&($Segundo=="C")){
		$res = ($valor - 32) / 1.8;

		echo "$res ";
}

else if (($Primeiro == "F" )&&($Segundo=="K")){
		$res = ($valor + 459.67) / 1.8;

		echo "$res ";
}

else if (($Primeiro == "F" )&&($Segundo=="R")){
		$res = $valor + 459.67;
    
		echo "$res ";

}

else if (($Primeiro == "F" )&&($Segundo=="Re")){
		$res = ($valor - 32) / 2.25;

		echo "$res ";
}
























	?>

</center>

</body>
</html>