<?php


$SELECT_ACTIVE_USER="SELECT * FROM transporte.usuariosgeneral where status='Activo';";

$SELECT_ACTIVE_ACCESO="SELECT * FROM transporte.acceso ;";

$SELECT_INACTIVE_USER="SELECT * FROM transporte.usuariosgeneral where status='Inactivo';";

$INSERTUSER="INSERT INTO transporte.usuariosgeneral
(nombre_U,apellido_P,apellido_M,direccion_u,telefono_u,tipo_usuario)VALUES(?,?,?,?,?,?);";

$INACTIVEUSER="UPDATE transporte.usuariosgeneral SET status='Inactivo' where id_usuario=?";

$DELETE_USER="DELETE FROM transporte.usuariosgeneral
WHERE id_usuario=?;";

$UPDATE_ACCESO_NAME="UPDATE transporte.acceso SET nombre=? where id_acceso=?;";
$UPDATE_ACCESO_TRANSPORTE="UPDATE transporte.transporte SET fecha_entrada=?   where folio=?;";
$UPDATE_ACCESO_TRANSPORTE_SALIDA="UPDATE transporte.transporte SET fecha_salida=?   where folio=?;";

$UPDATE_ACCESO_PASS="UPDATE transporte.acceso SET pass=? where id_acceso=?;";
$INSERT_TRANSPORT="INSERT INTO transporte.transporte (Linea_transporte,tipo_transporte,Placas_Camion,No_Caja,Nombre_Responsable,comentario)VALUES (?,?,?,?,?,?)";

$SELECT_TRANSPORT="SELECT * FROM transporte.transporte";
$ACCESS="INSERT INTO transporte.acceso (nombre,pass,tipo_acceso) VALUES (?,?,?)";

?>
