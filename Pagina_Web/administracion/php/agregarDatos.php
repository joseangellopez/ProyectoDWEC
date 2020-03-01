<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$c=$_POST['codCliente'];
	$d=$_POST['DNI'];
	$n=$_POST['nombre'];
	$a1=$_POST['apellido1'];
	$a2=$_POST['apellido2'];

	$sql="INSERT into cliente (codCliente,DNI,nombre,apellido1,apellido2)
								values ('$c','$d','$n','$a1','$a2')";

	echo $result=mysqli_query($conexion,$sql);

 ?>