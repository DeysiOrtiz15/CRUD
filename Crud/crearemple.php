<?php


include_once 'Database.php';
include_once 'Empleados.php';


$database = new Database();
$db = $database->getConnection();

$item = new Empleados($db);


if (isset($_POST['txtnombre']) &&
	isset($_POST['txtapellido']) &&
	isset($_POST['txtdireccion']))
{
	$nombre = $_POST['txtnombre'];
	$apellidos = $_POST['txtapellido'];
	$direccion = $_POST['txtdireccion'];
	$telefono = $_POST['txttelefono'];
	$fechanac  = $_POST['fecha'];

	$item->nombres = $nombre;
	$item->apellidos = $apellidos;
	$item->direccion = $direccion;
	$item->telefono = $telefono;
	$item->fechanac = $fechanac;

	if($item->createEmployee())
	{
		header("Location: Emple.php");
	}
	else
 	{
 		echo "Empleado no creado";
 	}


	
}


?>