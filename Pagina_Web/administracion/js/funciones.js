

function agregardatos(codCliente,dni,nombre,apellido1,apellido2){

	cadena="codCliente=" + codCliente + 
			"&DNI=" + dni +
			"&nombre=" + nombre +
			"&apellido1=" + apellido1 +
			"&apellido2=" + apellido2;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');
	$('#codCliente').val(d[0]);

	$('#DNI').val(d[1]);
	$('#nombre').val(d[2]);
	$('#apellido1').val(d[3]);
	$('#apellido2').val(d[4]);
	
}

function actualizaDatos(){
	codCliente=$('#codCliente').val();
	dni=$('#DNI').val();
	nombre=$('#nombre').val();
	apellido1=$('#apellido1').val();
	apellido2=$('#apellido2').val();

	cadena=
	"DNI=" + dni +
	"&nombre=" + nombre +
	"&apellido1=" + apellido1 +
	"&apellido2=" + apellido2;
	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(codCliente){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(codCliente) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(codCliente){

	cadena="codCliente=" + codCliente;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}