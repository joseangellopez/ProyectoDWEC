 <?php
    include 'conexionbd.php';
    $msg = "";
    if (isset($_POST['enviar_registro'])) {             
        $usuario_registro = trim($_POST['usuario_registro']);
        $contrasena_registro = trim($_POST['contrasena_registro']);
        $contrasena_registro2 = trim($_POST['contrasena_registro2']);
        if (strlen($contrasena_registro) < 6) {
            echo "<script>alert(\"La costraseña tiene que tener minimo 6 carapteres\");</script>";
            //$msg = "La costraseña tiene que tener minimo 6 carapteres";
        } else if ($contrasena_registro != $contrasena_registro2) {
             echo "<script>alert(\"Las costraseñas tiene que ser iguales\");</script>";
            //$msg = "Las costraseñas tiene que ser iguales";
        } else {
        $contraseña = password_hash($contrasena_registro, PASSWORD_DEFAULT);
            $sql = $db->prepare("INSERT INTO login(usuario, clave) VALUES (:usuario_registro,:contrasena_registro);");
            $sql->bindParam('contrasena_registro', $contraseña, PDO::PARAM_STR);
            $sql->bindParam('usuario_registro', $usuario_registro, PDO::PARAM_STR);
            $sql->execute();
        }
    }

    ?>




<form method="post" name="registro">
    <div class="container">
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group">
                    <input class="form-control" type="text" id="usuario_registro" name="usuario_registro"
                           placeholder="Usuario" required>
                   
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="form-group">
                    
                    <input id="myPassword" class="form-control" type="password" id="contrasena_registro" name="contrasena_registro"
                           placeholder="Contraseña" required>
                    <br>
                    <input class="form-control" type="password" id="contrasena_registro2" name="contrasena_registro2"
                           placeholder="Repite Contraseña" required>
                    <div class="checkbox">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-11"><p class="boton"><input type="submit" name="enviar_registro" class="btn btn-primary" id="enviar_registro"
                                                   value="Login"/></p></div>
</form>

<span class="text-danger"><?php echo @$msg ?></span>

