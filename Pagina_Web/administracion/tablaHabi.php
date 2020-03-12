
<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$sql="SELECT codHabitacion,tipo,capacidad,planta,tarifa,reservada,Fecha_entrada,Fecha_salida from habitacion";
$result=mysqli_query($conexion,$sql);
?>
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
                <td>Código Habitación</td>
				<td>Tipo</td>
				<td>Capacidad</td>
				<td>Planta</td>
				<td>Precio</td>
                <td>Reserva</td>
				<td>Fecha entrada</td>
                <td>Fecha salida</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
			<td>Código Habitación</td>
				<td>Tipo</td>
				<td>Capacidad</td>
				<td>Planta</td>
				<td>Precio</td>
                <td>Reserva</td>
				<td>Fecha entrada</td>
                <td>Fecha salida</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
                    <td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					<td><?php echo $mostrar[7] ?></td>

					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>