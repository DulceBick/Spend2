<?php



  session_start();

  if(isset($_SESSION['id_acceso'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- <link rel="stylesheet" href="css/style4.css"> -->


  </head>
  <body>


    <div class="container">
      <div class="row">
        <!-- <div id="map">
        </div> -->
    <div class="form animated flipInX">

    <form >
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-user"></i></div>
    <input type="text" class="form-control" id="user" placeholder="Enter your user">
    </div>
    <br>
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
    <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Enter your password">
    </div>
       <br>
    <button type="button" class="btn btn-primary btn-block" name="button" id="login">Login</button>

    </form>
        </div>






        </div>
        </div>
    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <script src="js/index4.js"></script> -->
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
    <script src="js/angular.min.js"></script>

  </body>
</html>
