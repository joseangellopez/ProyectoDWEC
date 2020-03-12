<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<br>
<!--CARROUSER -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://static.vecteezy.com/system/resources/previews/000/358/274/non_2x/vector-hotel-online-booking-banner.jpg" class="d-block w-100" height="500">
       
      </div>
      <div class="carousel-item">
        <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/221/221478894.jpg" class="d-block w-100" height="500">
      
      </div>
      <div class="carousel-item">
        <img src="https://images.squarespace-cdn.com/content/v1/5808ca8b2e69cff7baf46b68/1490058441933-BVAH59USJ4XQ4IFLJP8Q/ke17ZwdGBToddI8pDm48kG1VonStXBMhI7VIcWhi9y1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIKhY-fNmZN6-qcnAg_zlUgRugyKzCpaJ1F813YUpvg0cKMshLAGzx4R3EDFOm1kBS/banner-hotelrooms-eq.jpg" class="d-block w-100" height="500">
        
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>
<!-- FIN CARROUSER -->

<!--INICIO TARJETAS HOTEL-->
<br>
<h1 class="display-4 text-center">HOTELES DISPONIBLES</h1>
<br>
<div class="row justify-content-center m-3 ">
    <div class="card p-3" style="width: 18rem;">
        <img src="https://www.ahstatic.com/photos/1867_ho_00_p_1024x768.jpg" class="card-img-top" alt="hotel campo nuevo">
        <div class="card-body">
          <h5 class="card-title text-center">HOTEX</h5>
            <p class="card-text text-center">HOTEX es el lugar perfecto si estas cansado de los mismos sitio de siempre, cuenta con una gran intimidad, muchas actividades y una gran piscina.</p> <p class="card-text text-center">VEN Y DESCRÚBRETE A TI MISMO</p>
          <a href="hotelcamponuevo.php" class="btn btn-outline-primary btn-lg btn-block">Disponible</a>
        </div>
      </div>
      <div class="card p-3" style="width: 18rem;">
        <img src="https://ihg.scene7.com/is/image/ihg/avid-hotels-perry-5980510467-4x3" class="card-img-top" alt="hotel los piripis">
        <div class="card-body">
          <h5 class="card-title text-center">Los piripis</h5>
          <p class="card-text text-center">¿Cansado que tu hotel no tenga todos los servicios?</p>
          <p class="card-text text-center">¿Cansado de esperar largos periodos de tiempo para entrar en tu habitación?</p>
          <p class="card-text text-center">No busques mas, este es el hotel perfecto para ti</p>
          <a href="#" class="btn btn-outline-danger btn-lg btn-block">No disponible</a>
        </div>
      </div>
      <div class="card p-3" style="width: 18rem;">
        <img src="https://y.cdrst.com/foto/hotel-sf/e65d/hotelgallery/hotel-tryp-lisboa-caparica-mar-exterior-6bd965b.jpg" class="card-img-top" alt="hotel la hora del angelus">
        <div class="card-body">
          <h5 class="card-title text-center">ANGELUS</h5>
          <p class="card-text text-center">En este hotel podrás escuchar la llamada de Dios a todas horas del día y en todos los lugares</p>
          <p class="card-text text-center">Nuestro objetivo es que te sientes como en la sagrada casa de Dios</p>
          <p class="card-text text-center">SIEMPRE DISPONIBLE</p>
          <a href="#" class="btn btn-outline-danger btn-lg btn-block">No disponible</a>
        </div>
      </div>
</div>
</div>
<!--FIN TARJETAS HOTEL-->

<?php 
include 'pie.php';
?>

