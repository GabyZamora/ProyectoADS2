<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/Productos.php';
//Instanciamos la clase
$Obj_Productos = new Productos();

//Ejecutamos el mantenimiento de eliminar
if( $Obj_Productos->Eliminar( $_GET['id'] ) ) {
 //Si se ejecuta, redireccionamos al formulario de listar con mensaje success
 echo "<script>location.replace('index.php?mod=prod&form=li&m=delete');</script>";
}
else {
 //Si no se ejecuta, redireccionamos al formulario de listar con mensaje de error
 echo "<script>location.replace('index.php?mod=prod&form=li&m=error');</script>";
}
?>