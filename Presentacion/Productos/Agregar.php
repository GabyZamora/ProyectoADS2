<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/Productos.php';
//Instanciamos la clase
$Obj_Productos = new Productos();
//Asignación de atributos de la clase de la capa de negocio
$Obj_Productos->Nombre = $_POST['txtNombreC'];
$Obj_Productos->Precio = $_POST['tbxPrecio'];
$Obj_Productos->Categoria = $_POST['txtCategoria'];
$Obj_Productos->Descripcion = $_POST['txtDescripcion'];

//Ejecutamos el mantenimiento de agregar
if( $Obj_Productos->Agregar() ) {
 //Si se ejecuta, redireccionamos al formulario de listar con mensaje succes
 echo "<script>location.replace('index.php?mod=prod&form=li&m=success');</script>";
}
else {
 //Si no se ejecuta, redireccionamos al formulario de listar con mensaje de error
 echo "<script>location.replace('index.php?mod=prod&form=li&m=error');</script>";
}
?>