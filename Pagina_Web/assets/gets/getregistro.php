 <?php
    include '../../conexionbd.php';
    $msg = "";
        $usuario_registro = trim($_POST['usuario_registro']);
        $contrasena_registro = trim($_POST['contrasena_registro']);
        $contrasena_registro2 = trim($_POST['contrasena_registro2']);
       $nombre_registro = trim($_POST['nombre_registro']);
       $apellidos_registro = trim($_POST['apellidos_registro']);
       $dni_registro = trim($_POST['dni_registro']);
       $telefono_registro = trim($_POST['telefono_registro']);

        $contrasena = password_hash($contrasena_registro2, PASSWORD_DEFAULT);
            $sql = $db->prepare("INSERT INTO login(usuario, clave) VALUES (:usuario_registro,:contrasena_registro2);");
            $sql->bindParam('usuario_registro', $usuario_registro, PDO::PARAM_STR);
            $sql->bindParam('contrasena_registro2', $contrasena, PDO::PARAM_STR);
          $sql->execute();


            $sql2 = $db->prepare("INSERT INTO cliente(DNI,nombre,apellidos,telefono) VALUES (:dni_registro,:nombre_registro,:apellidos_registro,:telefono_registro);");
            $sql2->bindParam('dni_registro', $dni_registro, PDO::PARAM_STR);
 $sql2->bindParam('nombre_registro', $nombre_registro, PDO::PARAM_STR);
            $sql2->bindParam('apellidos_registro', $apellidos_registro, PDO::PARAM_STR);
            $sql2->bindParam('telefono_registro', $telefono_registro, PDO::PARAM_STR);

          $sql2->execute();
            echo ("OK");

        
    ?>
