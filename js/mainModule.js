var mainApp= angular.module('mainApp',[]);

mainApp.service('functions',function functions ($http) {
                        this.async = function (type, url, request, params) {
                //            console.log("asyncData('" + type + "', '" + url + "', '" + request + "', '" + params + "')");
                            var promise = $http({
                                url: url,
                                method: type,
                                data: $.param({'request': request, 'params': params}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function (response) {
                                return response;
                            });
                            return promise;
                        };

                        this.sync = function (url, params) {
                           console.log("asyncData('" + url + "', '" + params + "')");
                            var myJson = "null";
                            console.log(myJson);
                            $.ajax({
                                type: 'POST',
                                async: false,
                                cache: false,
                                data: params,
                                url: url,
                                dataType: 'json',
                                success: function (data) {
                                    myJson = data;
                                }
                            });
                            eval(myJson);
                            return myJson;
                        };

                });

mainApp.controller('logistica',function logistica($scope,functions){
    var url = "../../Presenter/logisticaPresenter.php";



$scope.addUser = function (){

    var params = {};
    params.name = $scope.user.name;
    params.lastname = $scope.user.lastname;
    params.secondname = $scope.user.secondname;
    params.address = $scope.user.address;
    params.telefono = $scope.user.tel;
    params.user = $scope.user.user;
    params = JSON.stringify(params);
  functions.async("POST",url,'newUser',params).then(function(promise){

        $scope.newUser=promise;
        console.log(promise.data);

        if ($scope.newUser == true){

        sweetAlert("Oops...", "A terrible success happens", "error");
    }else{
        sweetAlert("GOOD", "This person is a new User !", "success");

    }
          $scope.user = {};
});

};

$scope.addAcces = function (){

    var params = {};
    params.name = $scope.user.name;
    params.pass = $scope.user.pass;
    params.tipo = $scope.user.tipo;

    params = JSON.stringify(params);
  functions.async("POST",url,'insertaAC',params).then(function(promise){

        $scope.insertaAC=promise;
        console.log(promise.data);

        if ($scope.insertaAC == true){

        sweetAlert("Oops...", "A terrible success happens", "error");
    }else{
        sweetAlert("GOOD", "This person is a access User !", "success");

    }
          $scope.user = {};
});

};

$scope.insertarTransporte = function (){

    var params = {};
    params.trans = $scope.transporte.trans;
    params.tipo = $scope.transporte.tipo;
    params.placa = $scope.transporte.placa;
    params.caja = $scope.transporte.caja;
    params.responsable = $scope.transporte.responsable;
    params.comentario = $scope.transporte.comentario;
    params = JSON.stringify(params);
  functions.async("POST",url,'insertaTransporte',params).then(function(promise){

        $scope.insertaTransporte=promise;
        console.log(promise.data);

        if ($scope.insertaTransporte == true){

        sweetAlert("Oops...", "A terrible success happens", "error");
    }else{
        sweetAlert("GOOD", "This person is a new User !", "success");

    }
          $scope.trans = {};
});

};

  $scope.trashuser=function () {
     var params = "";
      params =$scope.id;
      functions.async("POST",url,'trashuser',params).then(function(promise){
          if ($scope.trashuser == true){
       sweetAlert("Oops...", "A terrible success happens", "error");

    }else{
       sweetAlert("GOOD", "This person is a new User !", "success");

    }


    });
 };

     $scope.delete=function () {
     var params = "";
      params =$scope.id_user;
        functions.async("POST",url,'delete',params).then(function(promise){
          if ($scope.delete == true){
       sweetAlert("Oops...", "A terrible success happens", "error");

    }else{
       sweetAlert("GOOD", "This person was deleted !", "success");

    }


    });
 };


      $scope.updateaccess=function () {
     var params = {};

      params.id_acceso =$scope.user.id_acceso;
      params.nombre =$scope.user.nombre;
      params = JSON.stringify(params);
      functions.async("POST",url,'updateaccess',params).then(function(promise){
      // console.log(promise.updateaccess);
       $scope.updateaccess=promise;
          if ($scope.updateaccess == true){
       sweetAlert("Oops...", "A terrible success happens", "error");

    }else{
       sweetAlert("GOOD", "This person was changed!", "success");

    }
        $scope.user = {};

    });
 };
      $scope.transupdate=function () {
     var params = {};

      params.entrada =$scope.user.entrada;
      params.id =$scope.user.id;

    //  params.salida =$scope.user.salida;
      params = JSON.stringify(params);
      functions.async("POST",url,'updatTransporte',params).then(function(promise){
      // console.log(promise.updateaccess);
       $scope.updatTransporte=promise;
          if ($scope.updatTransporte == true){

            sweetAlert("Oops...", "A terrible success happens", "error");
    }else{
   $scope.insertarTransporte();
      sweetAlert("GOOD", "This date was changed!", "success");
    }
        $scope.user = {};

    });
 };
      $scope.transupdatesalida=function () {
     var params = {};
     params.salida =$scope.user.salida;
      params.id =$scope.user.id;
    //  params.salida =$scope.user.salida;
      params = JSON.stringify(params);
      functions.async("POST",url,'updatTransporteSalida',params).then(function(promise){
       console.log(promise.updatTransporteSalida);
       $scope.updatTransporteSalida=promise;
          if ($scope.updatTransporteSalida == true){
            sweetAlert("Oops...", "A terrible success happens", "error");

     }else{

      sweetAlert("GOOD", "This date was changed!", "success");
    }
        $scope.user = {};

    });
 };


    $scope.updatepass=function () {
     var params = {};

      params.id_acceso2 =$scope.user.id_acceso2;
      params.pass =$scope.user.pass;
      params = JSON.stringify(params);
      functions.async("POST",url,'updatepass',params).then(function(promise){
      // console.log(promise.updateaccess);
       $scope.updatepass=promise;
          if ($scope.updatepass == true){
       sweetAlert("Oops...", "A terrible success happens", "error");

    }else{
       sweetAlert("GOOD", "This password was changed!", "success");

    }
        $scope.user = {};

    });
 };



  functions.async("POST",url,'viewTransporte').then(function(promise){
       $scope.transporte=promise.data;
         //console.log($scope.transporte);

    });
   $scope.flagTransport=false;

$scope.getReport = function () {
  examples.html();
}



           var examples = {};

           examples.html = function () {
              var doc = new jsPDF('l');
              var elem = document.getElementById("HTMLtoPDF1");
              var res = doc.autoTableHtmlToJson(elem);
              doc.text(7, 15, "Report Line: "+$scope.reportTransport);
              doc.autoTable(res.columns, res.data, {
                  startY: 20,
                  margin: {horizontal: 7},
                  bodyStyles: {valign: 'top'},
                  styles: {overflow: 'linebreak', columnWidth: 'wrap'},
                  columnStyles: {text: {columnWidth: 'auto'}}
              });
              doc.setProperties({
                title: 'Report Line'///,
                // subject: 'A jspdf-autotable example pdf (' + $scope.reportTransport + ')'
             });
             var name = "Report Line.pdf";
             doc.save(name);
             //  return doc;
          };



  functions.async("POST",url,'viewUser').then(function(promise){
       $scope.vista=promise.data;
         //console.log($scope.vista);

    });
   $scope.flagUser=true;

    functions.async("POST",url,'acceso').then(function(promise){
       $scope.acceso=promise.data;
       // console.log($scope.acceso);

    });
   $scope.flagUser3=false;

 functions.async("POST",url,'InactiveUser').then(function(promise){
       $scope.InactiveUser=promise.data;
        // console.log($scope.InactiveUser);

    });
   $scope.flagUser2=false;






});
