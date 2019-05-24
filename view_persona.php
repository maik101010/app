<!DOCTYPE html>
<html>
<head>
	<title>Personas</title>
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

<h2>Registros de las personas</h2>

	<a href="insertar_persona.php" style="text-align: right;">Insertar persona</a>
	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nombre</th>
		      <th scope="col">Cargo</th>
					<th scope="col">Dirección oficina</th>
					<th scope="col">Código postal</th>
					<th scope="col">Ciudad</th>
		    </tr>
  	</thead>
	<?php 
		require "Consultas.php";
		$objeto = new Consultas;
		$resultado = $objeto->getPersons();
		//$count = count($resultado);

		foreach ($resultado as $row) { ?>		
		  <tbody>
		    <tr>
		      <td><?php echo $row['nombre'] ?></td>
		      <td><?php echo $row['cargo'] ?></td>
					<td><?php echo $row['direccion_oficina'] ?></td>
					<td><?php echo $row['codigo_postal'] ?></td>
					<td><?php echo $row['ciudad'] ?></td>
		    </tr>		   
		  </tbody>
		  

		<?php } ?>
	</table>


	 
</body>
</html>