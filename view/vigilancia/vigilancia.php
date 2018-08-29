<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['tipo_acceso']) || $_SESSION['tipo_acceso'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>


<html ng-app="mainApp">
 <head>
     <!-- Se mandan llamar nuestros links y hojas de estilo para que la página se vea más profesional --!-->
  <meta charset="UTF-8">
  <title>Administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="stylesheet" href="../../css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/sweetalert.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->

   <script src="http://kendo.cdn.telerik.com/2017.2.621/js/pako_deflate.min.js"></script>
 <script src="//kendo.cdn.telerik.com/2016.3.914/js/kendo.all.min.js"></script>
</head>

<body ng-controller="logistica">
<div id="menu-overlay"></div>
<div id="menu-toggle" class="closed" data-title="Menu">
     <i class="fa fa-bars"></i>
     <i class="fa fa-times"></i>
</div>
<header id="main-header">
  <nav id="sidenav">
    <div id="sidenav-header">
      <div id="profile-picture">
      	<img src="../../img/giphy.gif"/>
       </div>
     <a href="#" id="profile-link"> <?php echo ucfirst($_SESSION['nombre']); ?>
      </a>
       </div>
       <div id="account-actions">
    <a href="../../controller/cerrarSesion.php">
       <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Close Session" HSPACE="10" VSPACE="10">Close</button>

    </a>
    </div>
    <ul id="main-nav">

</br>
</br>

      <li class="active">
        <a href="#">
          <i class="fa fa-truck"></i>
        <button class="btn btn-info"  ng-click="flagTransport=true;"  >TRANSPORT</button>
        </a>
      </li>
     <li>


    </ul>
  </nav>

  <div id="header_logo">
    <a href="#">Logo</a>
  </div>
</header>
<section id="content">

     <a href="logistica.php">  <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom"   title="Refresh the page" ><i class="fa fa-refresh">&nbsp;</i></button></a>
  <label for="id">Search: </label>
<input ng-model="searchText" placeholder="search text">
<button class="btn btn-success"data-toggle="modal" data-target="#transupdate" data-toggle="tooltip" data-placement="bottom" title="Udpate Date"  ><i class="fa fa-calendar-check-o" ></i>Update Entry</button>
<button class="btn btn-info"data-toggle="modal" data-target="#transupdatesalida" data-toggle="tooltip" data-placement="bottom" title="Udpate Date"><i class="fa fa-calendar-check-o" ></i>Update Out</button>
<br>
</br>
</br>






    </br>
      <div>
         </div>


<div id="formConfirmation">
         <div class="col-md-12">
        <div class="row"  ng-show="flagTransport=true">
          <table  class="table table-striped table-bordered table-hover" >
            <thead >

              <th>Folio </th>
              <th>Transport Line </th>
              <th>Transport Type</th>
              <th>Transport License</th>
              <th>Number Box</th>
              <th>Responsable Name</th>
              <th>Comments</th>
              <th>Int Date</th>
              <th>Out Date</th>
            </thead>
        <div>
            <tbody>
        <tr ng-repeat="value in transporte | filter:searchText ">

            <th> MGS{{value.folio}}</th>
             <th> {{value.Linea_transporte}}</th>
              <th>{{value.tipo_transporte}}</th>
              <th>{{value.Placas_Camion}}</th>
              <th>{{value.No_Caja}}</th>
              <th>{{value.Nombre_Responsable}}</th>
              <th>{{value.comentario}}</th>
              <th>{{value.fecha_entrada}}</th>
              <th>{{value.fecha_salida}}</th>
           </tr>
            </tbody>
           </div>
          </table>

            </div>
       </div>
</div>





     <div id="transupdate" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"><i class="fa fa-calendar-check-o">&nbsp;</i>UPDATE DATE</h4>
       </div>
       <div class="modal-body">
     <div class="alert alert-info" role="alert">
   <strong>Warning!</strong>Check in the correct date
 <div class="col-xs-12">
 <div  class="row">

 <form>
   <div class="form-group">
     <label for="name">ID:</label>
     <input type="text" class="form-control" ng-model="user.id" required>
     <br>
     <label for="name" >Entry:</label>
     <input type="date" ng-model="user.entrada">

   </div>
     </form>
    </div>
       </div>
       <div class="modal-footer">
           <button ng-click="transupdate()" class="btn btn-info" data-dismiss="modal">UPDATE</button>
       </div>
     </div>

   </div>
 </div>
  </div>
</div>
     <div id="transupdatesalida" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"><i class="fa fa-calendar-check-o">&nbsp;</i>UPDATE DATE</h4>
       </div>
       <div class="modal-body">
     <div class="alert alert-info" role="alert">
   <strong>Warning!</strong>Check in the correct date
 <div class="col-xs-12">
 <div  class="row">


    <form>
      <div class="form-group">
        <label for="name">Id:</label>
        <input type="text" class="form-control" ng-model="user.id" required>
        <br>
        <label for="name" >Entry:</label>
        <input type="date" ng-model="user.salida">

      </div>
        </form>
    </div>
       </div>
       <div class="modal-footer">
           <button ng-click="transupdatesalida()" class="btn btn-info" data-dismiss="modal">UPDATE</button>
       </div>
     </div>

   </div>
 </div>
  </div>
</div>


</section>




    <script src="../../js/jquery/jquery-2.2.3.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../js/funciones.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/angular.min.js"></script>
    <script src="../../js/mainModule.js"></script>
    <script src="../../js/sweetalert.min.js"></script>


</body>
</html>
