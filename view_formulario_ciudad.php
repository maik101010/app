<!DOCTYPE html>
<html>
<head>
	<title>Formulario de personas</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	 <?php 
        include("generales/estilos.php");
     ?>
</head>
<body>
<?php
include "generales/header.php";
?>

	<h2>Insertar ciudad</h2>
	<form action="Controlador.php" method="POST">
		<input type="text" name="nombre_ciudad" placeholder="nombre ciudad: "> 		
		<input type="submit" value="Registrar ciudad">	  
	</form>
</body>
</html>