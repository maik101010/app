<?php 
/**
 * 
 */
class Conexion
{
	public static $user = "root";
	public static $pass = "";
	public static $con=null;

	public static function getConexion(){
		if (self::$con==null) {
			$con = new PDO('mysql:host=localhost;dbname=politica', self::$user, self::$pass);		
		}
		return $con;
	}
}

//$conn = new PDO('mysql:host=localhost;dbname=politica;charset=UTF-8', $user, $pass);

/*$query = "SELECT * FROM persona";

$result = $con->prepare($query);
//$result->bindValue(":email", $email);
//$result->bindValue(":contrasenia", $contrasenia);
$result->execute();

//---Capturamos todos los resultados de la base de datos provenientes de la anterior consulta
$resultados = $result->fetchAll(PDO::FETCH_ASSOC);
//$cont=0;
foreach ($resultados as $row) {

    echo $row['nombre'] . "<br>";
    echo $row['cargo'] . "<br>";
    echo $row['direccion_oficina'] . "<br>";
}*/