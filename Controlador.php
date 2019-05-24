<?php 
require "Consultas.php";

	/*
		Declaración de todas las variables
	 */
	
	$objeto = new Consultas;
	if (isset($_POST["nombre"]) && isset($_POST["cargo"]) && isset($_POST["direccion_oficina"]) && isset($_POST["codigo_postal"])) {
		$nombre = $_POST["nombre"];
		$cargo = $_POST["cargo"];
		$direccionOficina = $_POST["direccion_oficina"];
		$codigoPostal = $_POST["codigo_postal"];
		$ciudadId = $_POST["ciudad_id"];
		
		$objeto->savePerson($nombre, $cargo, $direccionOficina, $codigoPostal, $ciudadId);
		
	}else if (isset($_POST["codigo_postal"])) {
		$codigoPostal = $_POST["codigo_postal"];
		if ($codigoPostal=="") {
			echo "<script>alert('Debe digitar un código postal')
        	window.location.replace('index.php');
		</script>";
		}else{
			$data= $objeto->searchPerson($codigoPostal);
			// $data2 = array('email'=>'test@test.com',
   //                      array("php","mysql"),
   //                      'age'=>28);
			
			// var_dump($data);

			// echo "Segundo arreglo";

			// var_dump($data2);
			/*session_start();
			$_SESSION['data'] = $data;*/
			//header("location: view_resultado_busqueda.php?vals=" . url_encode(serialize($data)));
			//header("Location: view_resultado_busqueda.php?vals=" . http_build_query($arr));
			header("Location: view_resultado_busqueda.php?data=" . urlencode(serialize($data)));


		}

	}else if (isset($_POST["nombre_ciudad"])){
		$nombre = $_POST["nombre_ciudad"];
		$objeto->saveCity($nombre);

	}
	

	//echo $nombre;




