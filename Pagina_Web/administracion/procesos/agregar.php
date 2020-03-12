<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['dni'],
		$_POST['nombre'],
		$_POST['apellidos'],

		$_POST['telefono']
				);

	echo $obj->agregar($datos);
	

	

 ?>