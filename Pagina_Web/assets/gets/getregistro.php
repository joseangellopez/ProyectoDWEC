 <?php
    include '../../conexionbd.php';
    $msg = "";
        $usuario_registro = trim($_POST['usuario_registro']);
        $contrasena_registro = trim($_POST['contrasena_registro']);
        $contrasena_registro2 = trim($_POST['contrasena_registro2']);
        $contrasena = password_hash($contrasena_registro2, PASSWORD_DEFAULT);
            $sql = $db->prepare("INSERT INTO login(usuario, clave) VALUES (:usuario_registro,:contrasena_registro2);");
            $sql->bindParam('usuario_registro', $usuario_registro, PDO::PARAM_STR);
            $sql->bindParam('contrasena_registro2', $contrasena, PDO::PARAM_STR);
          $sql->execute();
            echo ("OK");

        
    ?>
