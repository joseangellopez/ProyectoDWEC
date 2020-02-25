<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
include 'links.php';
?>

    <title>Document</title>
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
        <img src="https://static.vecteezy.com/system/resources/previews/000/358/274/non_2x/vector-hotel-online-booking-banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://chandanai.com/wp-content/uploads/2019/01/hotelbook.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.squarespace-cdn.com/content/v1/5808ca8b2e69cff7baf46b68/1490058441933-BVAH59USJ4XQ4IFLJP8Q/ke17ZwdGBToddI8pDm48kG1VonStXBMhI7VIcWhi9y1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIKhY-fNmZN6-qcnAg_zlUgRugyKzCpaJ1F813YUpvg0cKMshLAGzx4R3EDFOm1kBS/banner-hotelrooms-eq.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- FIN CARROUSER -->

<!--INICIO TARJETAS HOTEL-->
<br>
<h1 class="display-4 text-center">HOTELES DISPONIBLES</h1>
<br>
<div class="row justify-content-center m-3">
    <div class="card p-3" style="width: 18rem;">
        <img src="https://www.ahstatic.com/photos/1867_ho_00_p_1024x768.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">HOTEX</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary ">Disponible</a>
        </div>
      </div>
      <div class="card p-3" style="width: 18rem;">
        <img src="https://ihg.scene7.com/is/image/ihg/avid-hotels-perry-5980510467-4x3" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">HOTEX</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-danger ">No disponible</a>
        </div>
      </div>
      <div class="card p-3" style="width: 18rem;">
        <img src="https://y.cdrst.com/foto/hotel-sf/e65d/hotelgallery/hotel-tryp-lisboa-caparica-mar-exterior-6bd965b.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">HOTEX</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-danger ">No disponible</a>
        </div>
      </div>
</div>
</div>
</div>
<!--FIN TARJETAS HOTEL-->

<?php 
include 'pie.php';
?>

