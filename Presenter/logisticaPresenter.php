<?php
include '../model/logisticaModel.php';
$userData = new UserData();

$request = filter_input(INPUT_POST, "request", FILTER_SANITIZE_STRING);
$params = filter_input(INPUT_POST, "params");

$userData->$request($params);

class UserData{
  private $logistica_Model;

  function __construct(){
    $this->logistica_Model = new logisticaModel();
  }




  function newUser($params){
	   echo $this->logistica_Model->newUser($params);
  }
  function insertaTransporte($params){
	   echo $this->logistica_Model->insertaTransporte($params);
  }
  function insertaAC($params){
	   echo $this->logistica_Model->insertaAC($params);
  }


 function trashuser($params){
	   echo $this->logistica_Model->trashuser($params);

  }

    function viewUser(){
	   echo $this->logistica_Model->viewUser();
  }


    function viewTransporte(){
	   echo $this->logistica_Model->viewTransporte();
  }

   function InactiveUser(){
	   echo $this->logistica_Model->InactiveUser();
  }

    function acceso(){
	   echo $this->logistica_Model->acceso();
  }

 function delete($params){
	   echo $this->logistica_Model->delete($params);
  }

     function updateaccess($params){
	   echo $this->logistica_Model->updateaccess($params);

  }

       function updatepass($params){
	   echo $this->logistica_Model->updatepass($params);

  }
       function updatTransporte($params){
	   echo $this->logistica_Model->updatTransporte($params);

  }
       function updatTransporteSalida($params){
	   echo $this->logistica_Model->updatTransporteSalida($params);

  }


}


?>
