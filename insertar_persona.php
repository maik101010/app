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

<div class="container">


</div>
	   
		<h2>Insertar persona</h2>
		<form action="Controlador.php" method="POST">
			<input type="text" name="nombre" placeholder="nombre: "> 
			<input type="text" name="cargo" placeholder="cargo: ">
			<input type="text" name="direccion_oficina" placeholder="direccion oficina: ">
			<input type="text" name="codigo_postal" placeholder="código postal: ">
			
			<select name="ciudad_id">
				<option value="0">Seleccionar ciudad</option>
					<?php
						include "Consultas.php";
												$objeto = new Consultas;
												$resultado = $objeto->getCity();
							foreach ($resultado as $row) {
										$opciones='<option value="'.$row["id_ciudad"].'">'.$row["nombre"].'</option>';
										echo $opciones;
									}              
						?>
				</select>
						
			<input type="submit" value="Registrar persona">	  
		</form> 
		 
</body>
</html>