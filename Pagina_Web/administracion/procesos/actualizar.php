<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['codCliente'],
		$_POST['dniU'],
		$_POST['nombreU'],
		$_POST['apellidosU'],
		$_POST['telefonoU']
				);

	echo $obj->actualizar($datos);
	

 ?>