<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/categoria.php';
//Instanciamos la clase
$Obj_Categoria = new Categorias();
//Asignación de atributos de la clase de la capa de negocio
$Obj_Categoria->categorias_nombre = $_POST['txtNombreC'];
$Obj_Categoria->categorias_descripcion = $_POST['txtDescripcion'];
zar
if( $Obj_Categoria->Agregar( $_POST['hidId'] ) ) {
//Si se ejecuta, redireccionamos al formulario de listar con mensaje succes
echo "<script>location.replace('index.php?mod=cate&form=li&m=success');</script>";
}
else {
//Si no se ejecuta, redireccionamos al formulario de listar con mensaje de error
echo "<script>location.replace('index.php?mod=cate&form=li&m=error');</script>";
}
?>