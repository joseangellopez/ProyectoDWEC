
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contacto.css">

    <?php 
include 'links.php';
?>

    <title>Aplicación Hotelera</title>
</head>
<body>

<?php
include 'cabecera.php';
?>

<div class="container">

<form action="mandar_contacto.php" method="post">
<label for="nombre">Nombre:</label>
 <input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required />
 <label for="email">Email:</label>
 <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required />
 <label for="mensaje">Mensaje:</label>
 <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
 <input id="submit" type="submit" name="submit" value="Enviar" />
</form>


</div>


<?php 
include 'pie.php';
?>
