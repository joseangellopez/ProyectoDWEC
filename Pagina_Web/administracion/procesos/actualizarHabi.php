<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datosHabi=array(
		$_POST['codHabitacion'],
		$_POST['tipo'],
		$_POST['capacidad'],
		$_POST['planta'],
		$_POST['tarifa'],
		$_POST['reservada'],
		$_POST['fEntrada'],
        $_POST['fSalida']);
        
	echo $obj->actualizarHabi($datosHabi);
	

 ?>