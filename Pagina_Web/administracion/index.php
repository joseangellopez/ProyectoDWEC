<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>

<!--TABLA DE CLIENTE-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						HOTEL
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						Administración
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
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/agregar.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tabla.php');
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
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
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
		$('#tablaDatatable').load('tabla.php');
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
				$('#dni').val(datos['DNI']);
				$('#nombre').val(datos['nombre']);
				$('#apellidos').val(datos['apellidos']);
				$('#telefono').val(datos['telefono']);
			}
		});
	}
	function eliminarDatos(codCliente){
		alertify.confirm('Eliminar Cliente', '¿Seguro de eliminar este Cliente:(?', function(){ 
			$.ajax({
				type:"POST",
				data:"codCliente=" + codCliente,
				url:"procesos/eliminar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
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