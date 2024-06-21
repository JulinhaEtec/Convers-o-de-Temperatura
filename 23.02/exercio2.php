<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Execicio2</title>
</head>
<body>

<form action="" method="post">
        <label>Digite as suas notas:</label><br>
        <input type="number" name="txtNota" id="txtNota" required> <br>

        <input type="number" name="txtNota2" id="txtNota2" required> <br>

        <input type="number" name="txtNota3" id="txtNota3" required> <br>

        <input type="submit" name="btnVerifica" id="btnVerifica" value="Verificar Nota">

  </form>

  <?php

    $N1 = $_POST['txtNota'];
    $N2 = $_POST['txtNota2'];
    $N3 = $_POST['txtNota3'];
    $Res = $_POST['btnVerifica'];

    $Res = ($N1 + $N2 + $N3) / 3;


    if ($Res < 5 )
    {
    	echo "Sua nota final foi $Res , Reprovado" ;
    }

    else if ( $Res >= 5)
    {
    	echo "Sua nota final foi $Res , Aprovado" ;
    }



  ?>

</body>
</html>