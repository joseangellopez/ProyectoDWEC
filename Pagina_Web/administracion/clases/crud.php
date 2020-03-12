<?php 
/*AGREGA CLIENTES */
	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into cliente (DNI,nombre,apellidos,telefono)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]')";
			return mysqli_query($conexion,$sql);
		}
		public function obtenDatos($codCliente){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT codCliente,
							DNI,
							nombre,
							apellidos,
							telefono
					from cliente 
					where codCliente='$codCliente'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'dni' => $ver[0],
				'nombre' => $ver[1],
				'apellidos' => $ver[2],
				'telefono' => $ver[3]
				);
			return $datos;
		}
		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="UPDATE cliente set DNI='$datos[0]',
										nombre='$datos[1]',
										apellidos='$datos[2]'
										telefono='$datos[3]'
						where DNI='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($codCliente){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="DELETE from cliente where codCliente='$codCliente'";
			return mysqli_query($conexion,$sql);
		}
	/*---------------FIN CLIENTES--------------*/
	/*INICIO HABITACIONES */

public function agregarHabi($datos){
	$obj= new conectar();
	$conexion=$obj->conexion();
	$sql="INSERT into habitacion (tipo,capacidad,planta,tarifa,reservada,Fecha_entrada,Fecha_salida)
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$datos[3]',
									'$datos[4]',
									'$datos[5]',

									'$datos[6]')";
	return mysqli_query($conexion,$sql);
	}

	public function obtenDatosHabi($codHabitacion){
		$obj= new conectar();
		$conexion=$obj->conexion();
		$sql="SELECT 	codHabitacion,
						tipo,
						capacidad,
						planta,
						tarifa,
						reservada,
						Fecha_entrada,
						Fecha_salida
				from habitacion
				where codHabitacion='$codHabitacion'";
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);
		$datosHabi=array(
			'codHabitacion' => $ver[0],
			'tipo' => $ver[1],
			'capacidad' => $ver[2],
			'planta' => $ver[3],
			'tarifa' => $ver[4],
			'reservada' => $ver[5],
			'Fecha_entrada' => $ver[6],
			'Fecha_salida' => $ver[7]
			);
		return $datosHabi;
	}

	public function actualizarHabi($datosHabi){
		$obj= new conectar();
		$conexion=$obj->conexion();
		$sql="UPDATE habitacion set codHabitacion='$datosHabi[0]',
									tipo='$datosHabi[1]',
									capacidad='$datosHabi[2]',
									planta='$datosHabi[3]'
									tarifa='$datosHabi[4]'
									reservada='$datosHabi[5]'
									Fecha_entrada='$datosHabi[6]'
									Fecha_salida='$datosHabi[7]'
					where codHabitacion= '$datosHabi[0]'";
		return mysqli_query($conexion,$sql);
	}

	public function eliminarHabi($codHabitacion){
		$obj= new conectar();
		$conexion=$obj->conexion();
		$sql="DELETE from habitacion where codHabitacion='$codHabitacion'";
		return mysqli_query($conexion,$sql);
	}


}













 ?>