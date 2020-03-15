  <link rel="stylesheet" type="text/css" href="administracion/administracion/librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="administracion/administracion/librerias/alertifyjs/css/themes/default.css">
<form method="post" name="registro">
    <div class="container">
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group">
                   
                    
                   <input class="form-control" type="text" id="nombre_registro" name="nombre_registro"
                           placeholder="Nombre" required>
                           <br>
                      <input class="form-control" type="text" id="apellidos_registro" name="apellidos_registro"
                           placeholder="Apellidos" required>
                           <br>

                     <input class="form-control" type="number" id="telefono_registro" name="telefono_registro"
                           placeholder="telefono" min="1" max="999999999999" >
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="form-group">
                     <input class="form-control" type="text" id="dni_registro" name="dni_registro"
                           placeholder="DNI" required>
                           <br>

                    <input class="form-control" type="password" id="contrasena_registro" name="contrasena_registro"
                           placeholder="Contraseña" required>
                           <br>

                    <input class="form-control" type="password" id="contrasena_registro2" name="contrasena_registro2"
                           placeholder="Repite Contraseña" required>
                    <div class="checkbox">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
                    <input class="form-control" type="email" id="usuario_registro" name="usuario_registro"
                           placeholder="Correo electronico" required>
        </div>
    </div>
    <div class="col-md-11"><p class="boton"><input type="submit" name="enviar_registro" class="btn btn-primary" id="enviar_registro"
                                                   value="Registro"/></p></div>
</form>

<span class="text-danger"><?php echo @$msg ?></span>

<script src="assets/js/registro.js"></script>
