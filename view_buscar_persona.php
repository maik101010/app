<!DOCTYPE html>
<html>
<head>
	<title>Buscar personas</title>

	 <?php 
        include("generales/estilos.php");
     ?>
</head>
<body>
<?php
include "generales/header.php";
?>

	<h2>Buscar persona</h2>
	<form action="Controlador.php" method="POST">
		<input type="text" name="codigo_postal" placeholder="Código postal: ">		
		<input type="submit" value="Buscar persona">	  
	</form>
</body>
</html>