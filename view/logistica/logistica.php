<!DOCTYPE html>
<?php


  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador en este caso es el de lógistica)
  if(!isset($_SESSION['tipo_acceso']) || $_SESSION['tipo_acceso'] != 3){
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
 <script src="../../bower_components/jspdf/dist/jspdf.min.js"></script>
   <script src="../../bower_components/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>
 <!-- Latest compiled and minified CSS -->


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
      <li class="active">
        <a href="#">
          <i class="fa fa-user"></i>
        <button class="btn btn-info"  ng-click="flagTransport=false;flagUser2=false;flagUser=true;flagUser3=false;">USERS</button>
        </a>
      </li>
        <li>
        <a href="#">
          <i class="fa fa-suitcase"></i>
         <button class="btn btn-info"  ng-click="flagTransport=false;flagUser2=false;flagUser=false;flagUser3=true;">ACCESS</button>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-truck"></i>
        <button class="btn btn-info"  ng-click="flagTransport=true;flagUser2=false;flagUser=false;flagUser3=false;"  >TRANSPORT</button>
        </a>
      </li>
     <li>
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <button class="btn btn-info" ng-click="getReport()">REPORTS</button>
        </a>
      </li>

     <li>
        <a href="#">
          <div >
            <i class="fa fa-user-plus">&nbsp;</i>
            <button class="btn btn-success" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Add a user" >Add a new User </button>

          </div>
        </a>
      </li>
     <li>
        <a href="#">
          <div >

                      <i class="fa fa-user-times">&nbsp;</i>
                        <button class="btn btn-warning"  data-placement="bottom" title="deleate" data-toggle="modal" data-target="#myModal3"  >Delete  user</button>



          </div>
        </a>
      </li>
     <li>
        <a href="#">
          <div >

            <i class="fa fa-trash">&nbsp;</i>
              <button class="btn btn-danger" data-toggle="modal" data-target="#myModal2" data-toggle="tooltip" data-placement="bottom" title="Eliminate a user" >Get Inactive a user</button>

          </div>
        </a>
      </li>
     <li>
        <a href="#">
          <div >

            <i  class="fa fa-eye">&nbsp;</i>
              <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" ng-click="flagUser2=true;flagUser=false;flagUser3=false;" title="delete user" >See the inactive user</button>

          </div>
        </a>
      </li>
     <li>
        <a href="#">
          <div >


                          <i  class="fa fa-eye" >&nbsp;</i>
                      <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" ng-click="flagUser2=false;flagUser=true;flagUser3=false;" title="see the active users" >See the Active user</button>
          </div>
        </a>
      </li>
     <li>
        <a href="#">
          <div >




            <i class="fa fa-truck">&nbsp;</i>
            <button class="btn btn-success" class="btn btn-info btn-lg" data-toggle="modal" data-target="#transportmodel" data-toggle="tooltip" data-placement="bottom" title="Add a Transport"  >Add new transport</button>


          </div>
        </a>
      </li>

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
<button class="btn btn-info"data-toggle="modal" data-target="#access" data-toggle="tooltip" data-placement="bottom" title="Udpate Date"><i class="fa fa-calendar-check-o" ></i>Acces New</button>
<br>


 <!-- <div class="row">
    <div class="col-md-12">
    <div >
      <button class="btn btn-success" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Add a user"  ><i class="fa fa-user-plus">&nbsp;</i>Add a new User </button>
         <button class="btn btn-danger" data-toggle="modal" data-target="#myModal2" data-toggle="tooltip" data-placement="bottom" title="Eliminate a user" ><i class="fa fa-user-times">&nbsp;</i>Get Inactive a user</button>
         <button class="btn btn-warning"  data-placement="bottom" title="deleate" data-toggle="modal" data-target="#myModal3"  ><i class="fa fa-trash">&nbsp;</i>Delete  user</button>
        <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" ng-click="flagUser2=true;flagUser=false;flagUser3=false;" title="delete user" ><i  class="fa fa-eye">&nbsp;</i>See the inactive user</button>
        <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom" ng-click="flagUser2=false;flagUser=true;flagUser3=false;" title="see the active users" ><i  class="fa fa-eye" >&nbsp;</i>See the Active user</button>
        <button class="btn btn-success" class="btn btn-info btn-lg" data-toggle="modal" data-target="#transportmodel" data-toggle="tooltip" data-placement="bottom" title="Add a Transport"  ><i class="fa fa-truck">&nbsp;</i>Add new transport</button>
      <a href="logistica.php">  <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom"   title="Refresh the page" ><i class="fa fa-refresh">&nbsp;</i></button></a>
    </div>
  </div>
  </div> -->




    </br>
      <div>
         </div>


<div >
         <div class="col-md-12">
        <div class="row"  ng-show="flagTransport">
          <table  class="table table-striped table-bordered table-hover" id="HTMLtoPDF1">
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

     <div class="col-md-12">
    <div class="row"  ng-show="flagUser">
      <table  class="table table-striped table-bordered table-hover" >
        <thead >
          <th>Id User </th>
          <th>Name(s) </th>
          <th>Last Name</th>
          <th>Second Name</th>
          <th>Address</th>
          <th>Telephone</th>
          <th>User Type</th>
          <th>Status</th>
        </thead>
    <div>
        <tbody>
    <tr ng-repeat="value in vista | filter:searchText">
        <th> {{value.id_usuario}}</th>
         <th> {{value.nombre_U}}</th>
          <th>{{value.apellido_P}}</th>
          <th>{{value.apellido_M}}</th>
          <th>{{value.direccion_u}}</th>
          <th>{{value.telefono_u}}</th>
          <th>{{value.tipo_usuario}}</th>
          <th>{{value.status}}</th>
       </tr>
        </tbody>
  </div>
      </table>

        </div>
   </div>
    <!--FORMULARIO Y Tabla DE ACCESO!-->

  <div class="col-md-12">
    <div class="row"  ng-show="flagUser3">
<form>
  <div class="form-group">
      <label for="name">Id: </label>
    <input type="text" class="form-control" ng-model="user.nombre" required>
    <label for="id">New Name: </label>
    <input type="numb" class="form-control" ng-model="user.id_acceso" required>

  </div>

   <button ng-click="updateaccess()" class="btn btn-info"  >GO!!</button>
    </form>
        </br> </br>
<form>
  <div class="form-group">

<label for="pass">Id: </label>
    <input type="text" class="form-control" ng-model="user.pass" required>
       <label for="id2">New Pass: </label>
    <input type="numb2" class="form-control" ng-model="user.id_acceso2" required>
  </div>

   <button ng-click="updatepass()" class="btn btn-info"  >GO!!</button>
    </form>
    </br> </br>

      <table  class="table table-striped table-bordered table-hover" >
        <thead>
          <th>Id User </th>
          <th>Name </th>
          <th>Password</th>
          <th>User Type</th>

        </thead>

        <tbody>
    <tr ng-repeat="value in acceso">
        <th> {{value.id_acceso}}</th>
         <th> {{value.nombre}}</th>
          <th>{{value.pass}}</th>
          <th>{{value.tipo_acceso}}</th>

       </tr>
        </tbody>

      </table>
  </div>
</div>





     <!-- FIN DE FORMULARIO DE ACCESO!-->




    <div class="col-md-12">
    <div class="row"  ng-show="flagUser2" >
      <table  class="table table-striped table-bordered table-hover" >
        <thead>
          <th>Id User </th>
          <th>Name(s) </th>
          <th>Last Name</th>
          <th>Second Name</th>
          <th>Address</th>
          <th>Telephone</th>
          <th>User Type</th>
          <th>Status</th>
        </thead>
    <div>
        <tbody>
    <tr ng-repeat="value in InactiveUser">
        <th> {{value.id_usuario}}</th>
         <th> {{value.nombre_U}}</th>
          <th>{{value.apellido_P}}</th>
          <th>{{value.apellido_M}}</th>
          <th>{{value.direccion_u}}</th>
          <th>{{value.telefono_u}}</th>
          <th>{{value.tipo_usuario}}</th>
          <th>{{value.status}}</th>
       </tr>
        </tbody>
  </div>
      </table>

        </div>
   </div>


</section>


<div id="transportmodel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-truck">&nbsp;</i>Add a new Transport</h4>
      </div>
      <div class="modal-body">

<div class="col-xs-12">
<div  class="row">

<form>
  <div class="form-group">
    <label for="linea">Línea de Transporte</label>
    <input type="text" class="form-control" ng-model="transporte.trans" required>
  </div>
  <div class="form-group">
    <label for="tipos">Tipo de transporte:</label>
    <select class="form-control" ng-model="transporte.tipo" required>
      <option >Local</option>
      <option >Exportación</option>
      <option >Importación</option>
    </select>

  </div>
    <div class="form-group">
    <label for="placas">Truck license</label>
    <input type="text" class="form-control"  maxlength="7"  placeholder="7 digits" ng-model="transporte.placa" required>
  </div>
   <div class="form-group">
    <label for="direccion">No. box</label>
    <input type="text" class="form-control" ng-model="transporte.caja" required>
  </div>
   <div class="form-group">
    <label for="responsable">Responsable Name:</label>
    <input type="text"   class="form-control"   ng-model="transporte.responsable" required>
  </div>
   <div class="form-group">
    <label for="comentario">Comentario:</label>
    <input type="text" class="form-control"  ng-model="transporte.comentario" required>
  </div>

    </form>
   </div>
      </div>
      <button class="btn btn-info" ng-click="insertarTransporte()" data-dismiss="modal">GO!!</button>
    </div>

  </div>
</div>
 </div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-plus">&nbsp;</i>Add a new user</h4>
      </div>
      <div class="modal-body">
    <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong>Check the User type on the table.
</div>
<div class="col-xs-12">
<div  class="row">
     <table class="table table-striped table-bordered table-hover" >
      <thead>
      <th class="info">Number User</th>
      <th class="info">Type User</th>
      </thead>
        <tbody>
           <tr>
               <td >1 </td>
               <td>Vigilant</td>
           </tr>
          <tr>
               <td>2</td>
               <td>Carrier</td>
         </tr>
         <tr>
               <td>3 </td>
               <td>Logistic</td>
         </tr>

        </tbody>
 </table>
<form>
  <div class="form-group">
    <label for="name">Name(s):</label>
    <input type="text" class="form-control" ng-model="user.name" required>
  </div>
  <div class="form-group">
    <label for="apellidoP">Last Name:</label>
    <input type="text" class="form-control" ng-model="user.lastname" required>
  </div>
    <div class="form-group">
    <label for="apellidoM">Second Name:</label>
    <input type="text" class="form-control" ng-model="user.secondname" required>
  </div>
   <div class="form-group">
    <label for="direccion">Address:</label>
    <input type="text" class="form-control" ng-model="user.address" required>
  </div>
   <div class="form-group">
    <label for="telefono">Telephone:</label>
    <input type="tel"  pattern="[0-9]{10}" class="form-control"  placeholder="10 digitos" ng-model="user.tel" required>
  </div>
   <div class="form-group">
    <label for="tipo">User Type:</label>
    <input type="number" class="form-control" min="1" max="3" ng-model="user.user" required>
  </div>

    </form>
   </div>
      </div>
      <button ng-click="addUser()" class="btn btn-info"  data-dismiss="modal">GO!!</button>
    </div>

  </div>
</div>
 </div>




    <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-times">&nbsp;</i>Get Inactive a user</h4>
      </div>
      <div class="modal-body">
    <div class="alert alert-danger" role="alert">
  <strong>Warning!</strong>Check the id first, you don´t going to eliminate the person only going to pass to inactive.
</div>
<div class="col-xs-12">
<div  class="row">

<form>
  <div class="form-group">
    <label for="name">User id:</label>
    <input type="text" class="form-control" ng-model="id" required>
  </div>
    </form>
   </div>
      </div>
      <div class="modal-footer">
          <button ng-click="trashuser()" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash-o"></i>  Inactive User</button>
      </div>
    </div>

  </div>
</div>
 </div>
    <div id="access" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-times">&nbsp;</i>Get Inactive a user</h4>
      </div>
      <div class="modal-body">
    <div class="alert alert-info" role="alert">
  <strong>Warning!</strong>Check the id first, you don´t going to eliminate the person only going to pass to inactive.
</div>
<div class="col-xs-12">
<div  class="row">

<form>
  <div class="form-group">
    <div class="form-group">
     <label for="tipo">Name:</label>
     <input type="text" class="form-control" ng-model="user.name" required>
        <label for="tipo">Pass:</label>
     <input type="text" class="form-control" ng-model="user.pass" required>
        <label for="usuario">Type user:</label>
     <input type="number" class="form-control" ng-model="user.tipo" required>
   </div>
  </div>
    </form>
   </div>
      </div>
      <div class="modal-footer">
          <button ng-click="addAcces()" class="btn btn-info" data-dismiss="modal"><i class="fa fa-user"></i>  New access User</button>
      </div>
    </div>

  </div>
</div>
 </div>

     <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user-times">&nbsp;</i>Delete a user</h4>
      </div>
      <div class="modal-body">
    <div class="alert alert-danger" role="alert">
  <strong>Warning!</strong>Check the id first.
</div>
<div class="col-xs-12">
<div  class="row">

<form>
  <div class="form-group">
    <label for="name">User id:</label>
    <input type="text" class="form-control" ng-model="id_user" required>
  </div>


    </form>
   </div>
      </div>
      <div class="modal-footer">
         <button ng-click="delete()" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash-o"></i>  Remove User</button>
      </div>
    </div>

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


    <script src="../../js/jquery/jquery-2.2.3.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../js/funciones.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/angular.min.js"></script>
    <script src="../../js/mainModule.js"></script>
    <script src="../../js/sweetalert.min.js"></script>


</body>
</html>
