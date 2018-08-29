<?php
include ('../lib/shareFunctions.php');
include ('Queries.php');

class logisticaModel{


public function newUser($params){
    global $INSERTUSER;
    startTransaction();
    executeQuery($INSERTUSER,json_decode($params,true));
    return json_encode(endTransaction());
}
public function insertaTransporte($params){
    global $INSERT_TRANSPORT;
    startTransaction();
    executeQuery($INSERT_TRANSPORT,json_decode($params,true));
    return json_encode(endTransaction());
}
public function insertaAC($params){
    global $ACCESS;
    startTransaction();
    executeQuery($ACCESS,json_decode($params,true));
    return json_encode(endTransaction());
}


public function trashuser($params){
    global $INACTIVEUSER;
    startTransaction();
    executeQuery($INACTIVEUSER,json_decode($params,true));
    return json_encode(endTransaction());


}

    public function viewUser(){
    global $SELECT_ACTIVE_USER;
    return executeQuery($SELECT_ACTIVE_USER);
}

    public function viewTransporte(){
    global $SELECT_TRANSPORT;
    return executeQuery($SELECT_TRANSPORT);
}

    public function InactiveUser(){
    global $SELECT_INACTIVE_USER;
    return executeQuery($SELECT_INACTIVE_USER);
}
       public function acceso(){
    global $SELECT_ACTIVE_ACCESO;
    return executeQuery($SELECT_ACTIVE_ACCESO);
}

    public function delete($params){
   global $DELETE_USER;
    startTransaction();
    executeQuery($DELETE_USER,json_decode($params,true));
    return json_encode(endTransaction());

}




public function updateaccess($params){
    global $UPDATE_ACCESO_NAME;
    var_dump($params);
  executeQuery($UPDATE_ACCESO_NAME,json_decode($params,true));

}
 public function updatepass($params){
    global $UPDATE_ACCESO_PASS;
    var_dump($params);
  executeQuery($UPDATE_ACCESO_PASS,json_decode($params,true));

}
 public function updatTransporte($params){
    global $UPDATE_ACCESO_TRANSPORTE;
    //var_dump($params);
  executeQuery($UPDATE_ACCESO_TRANSPORTE,json_decode($params,true));
}

 public function updatTransporteSalida($params){
    global $UPDATE_ACCESO_TRANSPORTE_SALIDA;
    var_dump($params);
  executeQuery($UPDATE_ACCESO_TRANSPORTE_SALIDA,json_decode($params,true));

}


}
?>
