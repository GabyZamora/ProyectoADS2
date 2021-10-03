<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/productos.php';
//Instanciamos la clase
$Obj_Productos = new Productos();
//Asignación de atributos de la clase de la capa de negocio
$Obj_Productos->Nombre = $_POST['txtNombreC'];
$Obj_Productos->Precio = $_POST['tbxPrecio'];
$Obj_Productos->Categoria = $_POST['txtCategoria'];
$Obj_Productos->Descripcion = $_POST['txtDescripcion'];

//Ejecutamos el mantenimiento de actualizar
if( $Obj_Productos->Actualizar( $_POST['hidId'] ) ) {
 //Si se ejecuta, redireccionamos al formulario de listar con mensaje update
 echo "<script>location.replace('index.php?mod=prod&form=li&m=update');</script>";
}
else {
 //Si no se ejecuta, redireccionamos al formulario de listar con mensaje de error
 echo "<script>location.replace('index.php?mod=prod&form=li&m=error');</script>";
}
?>