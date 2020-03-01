
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$codCliente=$_POST['codCliente'];

	$sql="DELETE from cliente where codCliente='$codCliente'";
	echo $result=mysqli_query($conexion,$sql);
 ?>