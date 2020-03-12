<?php require_once "vistas/cabecera.php";  ?>

	<?php require_once "scripts.php";  ?>

<!--TABLA DE CLIENTE-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header text-center">
					ADMINISTRACIÓN DE HABITACIÓNES
					</div>
						<div id="tablaHabi"></div>
					<div class="card-footer text-muted">
						Administración Habitaciónes
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo Cliente</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>Código Habitación</label>
						<input type="text" class="form-control input-sm" id="codHabitacion" name="codHabitacion">
						<label>Tipo</label>
						<input type="text" class="form-control input-sm" id="tipo" name="tipo">
						<label>Capacidad</label>
						<input type="text" class="form-control input-sm" id="capacidad" name="capacidad">
						<label>Planta</label>
						<input type="number" class="form-control input-sm" id="planta" name="planta">
						<label>Precio</label>
						<input type="number" class="form-control input-sm" id="tarifa" name="tarifa">
                        <label>Reservada</label>
						<input type="text" class="form-control input-sm" id="reservada" name="reservada">
                        <label>Fecha Entrada</label>
						<input type="date" class="form-control input-sm" id="fEntrada" name="fEntrada">
                        <label>Fecha Salida</label>
						<input type="date" class="form-control input-sm" id="fSalida" name="fSalida">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Cliente</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<label>Dni</label>
						<input type="text" class="form-control input-sm" id="dni" name="dni">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellidos</label>
						<input type="text" class="form-control input-sm" id="apellidos" name="apellidos">
						<label>Teléfono</label>
						<input type="number" class="form-control input-sm" id="telefono" name="telefono">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "vistas/pie.php";  ?>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregaHabi.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaHabi').load('tablaHabi.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});
		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizarHabi.php",
				success:function(r){
					if(r==1){
						$('#tablaHabi').load('tablaHabi.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaHabi').load('tablaHabi.php');
	});
</script>
<script type="text/javascript">
	function agregaFrmActualizar(codCliente){
		$.ajax({
			type:"POST",
			data:"codCliente=" + codCliente,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#codCliente').val(datos['codCliente']);
				$('#dni').val(datos['dni']);
				$('#nombre').val(datos['nombre']);
				$('#apellidos').val(datos['apellidos']);
				$('#telefono').val(datos['telefono']);
			}
		});
	}
	function eliminarDatos(codHabitacion){
		alertify.confirm('Eliminar una Habitación', '¿Seguro de eliminar estta Habitación:(?', function(){ 
			$.ajax({
				type:"POST",
				data:"codHabitacion=" + codHabitacion,
				url:"procesos/eliminarHabi.php",
				success:function(r){
					if(r==1){
						$('#tablaHabi').load('tablaHabi.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});
		}
		, function(){
		});
	}
</script>