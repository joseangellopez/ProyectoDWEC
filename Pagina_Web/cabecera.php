
  <!--ETIQUETA NAV-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">HOTEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hoteles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
          <?php
          session_start();

          $login_logout = "";
          if (!isset($_SESSION['sess_user_name'])) {
              $login_logout = '<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModallogin">Login</button></li>
       <li> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalregistro">Registro</button></li>';
          }else {
              $login_logout =  '<li> <a href="logout.php"> <button type="button" class="btn btn-primary">Logout</button></a></li>';
          }
          echo $login_logout
          ?>

      </ul>
    </div>
    
</nav>
  <!-- FIN ETIQUETA NAV-->
  

<!-- Ventana modal de login y registro -->
<div class="modal" id="myModallogin" data-backdrop="static">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">login</h4>
                <button type="button" class="close" data-dismiss="modal"><i class='fa fa-close'
                                                                            style='font-size:24px;color:red'></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <?php include 'login.php'; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<div class="modal" id="myModalregistro" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Registro</h4>
                <button type="button" class="close" data-dismiss="modal"><i class='fa fa-close'
                                                                            style='font-size:24px;color:red'></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <?php include 'registro.php'; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

