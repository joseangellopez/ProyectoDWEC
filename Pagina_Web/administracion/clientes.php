

<div class="container-fluid">
      <h1 class="mt-4">Clientes</h1>
        
        
	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close l-12" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo cliente</h4>
      </div>
      <div class="modal-body">

    
      <input type="text" hidden="" id="codCliente" name="">
        
        	<label>Dni</label>
        	<input type="text" name="" id="dni" class="form-control input-sm" >
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm" >
        	<label>Apellidos</label>
        	<input type="text" name="" id="apellido1" class="form-control input-sm" >
          <label>Telefono</label>
        	<input type="text" name="" id="apellido2" class="form-control input-sm" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->
<form action="#" method="GET" onsubmit="return validaCampos();">                    

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
         
        	<label>Dni</label>
        	<input type="text" name="" id="dni" class="form-control input-sm" >
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm" >
        	<label>Primer Apellido</label>
        	<input type="text" name="" id="apellido1" class="form-control input-sm" >
          <label>Segundo Apellido</label>
        	<input type="text" name="" id="apellido2" class="form-control input-sm" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos"  data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
</form>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>





<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          codCliente=$('#codCliente').val();
          dni=$('#dni').val();
          nombre=$('#nombre').val();
          apellidos=$('#apellido1').val();
          apellido2=$('#apellido2').val();


    
            agregardatos(codCliente,dni,nombre,apellidos,apellido2);
        });
        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  