<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$c=$_POST['codCliente'];
	$d=$_POST['DNI'];
	$n=$_POST['nombre'];
	$a1=$_POST['apellido1'];
	$tl=$_POST['apellido2'];

	$sql="INSERT into cliente (codCliente,DNI,nombre,apellidos,telefono)
								values ('$c','$d','$n','$a1','$tl')";

	echo $result=mysqli_query($conexion,$sql);

 ?>