<?php 
require "Conexion.php";
/**
 * 
 */
class Consultas 
{
	/**
	 * obtenemos todas las personas en un arreglo, retornamos el arreglo
	 * 
	 */
	public function getPersons($value='')
	{
		//$conexion = new Conexion(); 
		$query = "select persona.nombre, persona.cargo, persona.codigo_postal, persona.direccion_oficina, ciudad.nombre as ciudad, ciudad.id_ciudad  
		from persona inner join ciudad on ciudad.id_ciudad = persona.ciudad_id order by persona.codigo_postal";
		//$result = $conexion->getConexion()->prepare($query);
		$stament = Conexion::getConexion()->prepare($query);
		$stament->execute();
		$resultados = $stament->fetchAll(PDO::FETCH_ASSOC);
		$arr = [];
		$i=0;
		foreach ($resultados as $row) {
		 	$arr[$i] = $row;
		 	$i++;
		}

		return $arr;
	}

	/**
	 * obtenemos todas las ciudades en un arreglo, retornamos el arreglo
	 * 
	 */
	public function getCity($value='')
	{
		//$conexion = new Conexion(); 
		$query = "select * from ciudad";
		//$result = $conexion->getConexion()->prepare($query);
		$stament = Conexion::getConexion()->prepare($query);
		$stament->execute();
		$resultados = $stament->fetchAll(PDO::FETCH_ASSOC);
		$arr = [];
		$i=0;
		foreach ($resultados as $row) {
		 	$arr[$i] = $row;
		 	$i++;
		}

		return $arr;
	}


	/**
	 * Insertamos la persona
	 */
	public function savePerson($nombre, $cargo, $direccionOficina, $codigoPostal, $ciudadId){
		$query = "INSERT INTO persona (nombre, cargo, direccion_oficina, ciudad_id, codigo_postal) VALUES (?,?,?,?,?)";
		$preparedStament = Conexion::getConexion()->prepare($query);

		$preparedStament->bindParam(1, $nombre, PDO::PARAM_STR);
		$preparedStament->bindParam(2, $cargo, PDO::PARAM_STR);
		$preparedStament->bindParam(3, $direccionOficina, PDO::PARAM_STR);
		$preparedStament->bindParam(4, $ciudadId, PDO::PARAM_STR);
		$preparedStament->bindParam(5, $codigoPostal, PDO::PARAM_STR);
		//$preparedStament->execute();
        if($preparedStament->execute()){
        	echo "<script>alert('Persona registrada')
        	window.location.replace('insertar_persona.php');
		</script>";
        }else{
        	echo "<script>alert('Hubo un error')
        	window.location.replace('index.php');
		</script>";
        }
	}

	/*
	Insertamos la ciudad
	*/
	public function saveCity($nombre){
		$query = "INSERT INTO ciudad (nombre) VALUES (?)";
		$preparedStament = Conexion::getConexion()->prepare($query);
		$preparedStament->bindParam(1, $nombre, PDO::PARAM_STR);
		//$preparedStament->execute();
        if($preparedStament->execute()){

        	//header("location: index.php");
        	echo "<script>alert('Ciudad registrada')
        	window.location.replace('view_formulario_ciudad.php');
		</script>";
        }else{
        	echo "<script>alert('Hubo un error')
        	window.location.replace('index.php');
		</script>";
        }
	}

	public function searchPerson($codigoPostal)
	{
		//$query = "select * from persona where codigo_postal like '".$codigoPostal."%'";
		$query = "select persona.nombre, persona.cargo, persona.codigo_postal, persona.direccion_oficina, ciudad.nombre as ciudad, ciudad.id_ciudad  
		from persona inner join ciudad on ciudad.id_ciudad = persona.ciudad_id
		where codigo_postal like '".$codigoPostal."%'";
		//$result = $conexion->getConexion()->prepare($query);
		$stament = Conexion::getConexion()->prepare($query);
		$stament->execute();
		$resultados = $stament->fetchAll(PDO::FETCH_ASSOC);
		$arr = [];
		$i=0;
		foreach ($resultados as $row) {
		 	$arr[$i] = $row;
		 	$i++;
		}

		return $arr;
	}
	
}
/*$objeto = new Consultas;
$resultado = $objeto->getPersons();
//$count = count($resultado);

foreach ($resultado as $row) {
	echo $row['nombre'] . "<br>";
    echo $row['cargo'] . "<br>";
    echo $row['direccion_oficina'] . "<br>";
}*/
//var_dump($resultado);
// $nombre = "oscar";