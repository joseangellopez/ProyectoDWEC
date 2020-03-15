
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contacto.css">
<style>
    input:focus {
  background: #87CEEB;
}
    textarea:focus {
  background: #87CEEB;
}

    </style>
   
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
<div class="row">
        <div class="col-md-6">

<form action="mandar_contacto.php" method="post">
<label for="nombre">Nombre:</label>
 <input  id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required />
 <label for="email">Email:</label>
 <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required />
 <label for="mensaje">Mensaje:</label>
 <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
 <input id="submit" type="submit" name="submit" value="Enviar" />
</form>          
        </div>
        <div class="col-md-6">
        <br>
        <br>
     <p>Estamos en la calle Jumeirah St - Dubai - Emiratos Árabes Unidos
            <p>Llamando al:<a href="tel:999999999"> 999999999</a></p>
            <p>Escribenos:<a href="https://wa.me/15551234567"> WhatsApp</a></p>

            <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.82653274625!2d55.18278961500831!3d25.14155483392211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6a576414cf2d%3A0xb3da71b879f0e038!2sBurj%20Al%20Arab!5e0!3m2!1ses!2ses!4v1584282759108!5m2!1ses!2ses" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
     </div>
      </div>
</div>

<?php 
include 'pie.php';
?>
