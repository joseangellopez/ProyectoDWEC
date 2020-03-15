<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['codHabitacionU'],
		$_POST['tipoU'],
		$_POST['capacidadU'],
		$_POST['plantaU'],
		$_POST['tarifaU'],
		$_POST['reservadaU'],
		$_POST['fEntradaU'],
        $_POST['fSalidaU']);
        
	echo $obj->actualizar($datos);
	

 ?>