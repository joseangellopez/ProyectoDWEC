
$('#enviar_registro').click(function () {
    console.log("entra al ajax");
    var usuario_registro = $('#usuario_registro').val();
    var contrasena_registro = $('#contrasena_registro').val();
    var contrasena_registro2 = $('#contrasena_registro2').val();
    var dni_registro = $('#dni_registro').val();
        var nombre_registro = $('#nombre_registro').val();
    var apellidos_registro = $('#apellidos_registro').val();
        var telefono_registro = $('#telefono_registro').val();


    if (contrasena_registro == contrasena_registro2 && contrasena_registro.length >= 6){
         $.ajax({
        url: "assets/gets/getregistro.php",
        type: "POST",
        data: {usuario_registro: usuario_registro, 
        contrasena_registro: contrasena_registro,contrasena_registro2: contrasena_registro2,dni_registro: dni_registro,nombre_registro: nombre_registro,apellidos_registro: apellidos_registro,telefono_registro: telefono_registro},
        success: function (data){
            alert(data);
            if (data == 'OK') {
                $('#myModalregistro').hide();
            } else {
                //alert(data);
                document.getElementsByClassName("mensaje").text(data);
            }
        }
    });
    }

   
   
});
    
