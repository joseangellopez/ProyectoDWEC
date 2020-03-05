<?php
session_start();
include "../../conexionbd.php";
if (isset($_POST["username"])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    try {
        $query = "select usuario,clave from login where usuario=:username ";
        $stmt = $db->prepare($query);
        $stmt->bindParam('username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($count == 1 && !empty($row) && password_verify($password, $row['clave']) ) {

            //$_SESSION['sess_user_id'] = $row['id_usuario'];
            $_SESSION['sess_user_name'] = $row['usuario'];
            $_SESSION['conectado'] = true;
            echo "Session iniciada correctamente";
        } else {
            echo 'Error a iniciar session';
        }
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
}

?>