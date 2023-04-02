
<?php
IF($_POST){
	$nombre=$_POST["txtNombre"];
	
	echo "hola" .$nombre. " !!!";
}

?>





<html>
<head>
<meta charset="UTF-8">
<title>mi web personal</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 maxima=scale=1, minima-scale=1">


</head>

<body>
 <form action="trabajo3.php" method="post">
 Nombre:
 <input type="text" name="txtNombre" id="">
 <br>
 <input type="submit" value="enviar">
 
 
 </form>

</body>

</html>
