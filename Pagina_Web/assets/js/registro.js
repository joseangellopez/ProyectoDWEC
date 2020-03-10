$('#enviar_registro').click(function () {
    console.log("entra al ajax");
    var usuario_registro = $('#usuario_registro').val();
    var contrasena_registro = $('#contrasena_registro').val();
    var contrasena_registro2 = $('#contrasena_registro2').val();
    
    if (contrasena_registro != contrasena_registro2){
        alert("Las contraseñas tienen que ser iguales");
    }

     if (contrasena_registro.length < 6){
        alert("Las contraseñas tienen que tener minimo 6 caracteres");
    }

    $.ajax({
        url: "assets/gets/getregistro.php",
        type: "POST",
        data: {usuario_registro: usuario_registro, 
        contrasena_registro: contrasena_registro,contrasena_registro2: contrasena_registro2},
        success: function (data){
            alert(data);
            if (data == 'OK') {
                $('#myModalregistro').hide();
                //location.reload();
            } else {
                //alert(data);
                document.getElementsByClassName("mensaje").text(data);
            }
        }
    });
});
    
