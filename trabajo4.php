<?php
IF($_POST){
	$txtnombre=$_POST["txtNombre"];
	$txtApellido=$_POST["txtApellido"];
	
	
	
	echo "hola" .$txtnombre. " !!!";
}

?>





<html>
<head>
<meta charset="UTF-8">
<title>mi web personal</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 maxima=scale=1, minima-scale=1">
<link rel="styleshet"href="style4.css"

</head>

<body>
 <form action="trabajo3.php" method="post">
 Nombre:
 <input type="text" name="txtNombre" id="">
 <br>
 <br>
 Apellido
 
  <input type="text" name="txtApellido" id="">
  <br>
 <br>
 
 <input type="submit" value="enviar">
 
 
 </form>

</body>

</html>
