<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$c=$_POST['codCliente'];
	$d=$_POST['DNI'];
	$n=$_POST['nombre'];
	$a1=$_POST['apellido1'];
	$a2=$_POST['apellido2'];


	$sql="UPDATE cliente set codCliente='$c',
								dni='$d',
								nombre='$n',
								apellido1='$a1',
								apellido2='$a2'
				where codCliente='$codCliente'";
	echo $result=mysqli_query($conexion,$sql);

 ?>