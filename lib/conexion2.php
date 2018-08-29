<?php
//parte donde se realiza la conexión
//ADOdb es un conjunto de bibliotecas de bases de datos para PHP1 y Python. Esta permite a los programadores desarrollar aplicaciones web de una manera portable, rápida y fácil. La ventaja reside en que la base de datos puede cambiar sin necesidad de reescribir cada llamada a la base de datos realizada por la aplicación.
include_once('config.php');
include('adodb5/adodb.inc.php');

global $dbhost,$dbuname,$dbpass,$dbname;//conexión
$conn=ADONewConnection('mysqli');
$conn->Connect($dbhost,$dbuname,$dbpass,$dbname) or die ("The data base is no connected");//prueba si conecta o no la bd

$conn->EXECUTE("set names 'utf8'");
$conn->debug=false;




?>
