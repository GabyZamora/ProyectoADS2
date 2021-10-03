<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/Productos.php';
require_once 'Negocio/categoria.php';
//Instanciamos las clases de la capa de negocio
$Obj_Productos = new Productos();
//Cargamos el registro solicitado
$DatosProductos = $Obj_Productos->BuscarPorId( $_GET['id'] );
//Recuperamos el registro obtenido en una variable fila
foreach ( $DatosProductos as $Fila ) {
$DatosProductos = $Fila;
}
?>
<!-- CSS -->
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/formularios.css">
<form name='formEditar' action="" method="post">
<div class="container">
<div class="table-wrapper">
 <div class="table-title">
 <div class="form-row">
 <div class="col-md-8">
 <h2>Detalles del Producto</h2>
 </div>
 <div class="col-md-4">
 <button type="button" class="btn btn-info" onclick="window.open('reportes/detalleProducto.php?id=<?php echo $_GET['id'] ?>', 'ReporteDeProductos', 'width=1000,height=600');"><i class="material-icons">&#xe8ad;</i><span>Imprimir</span></button>
 <button type="button" class="btn btn-success"
onClick="location.replace('index.php?mod=prod&form=li');"><i class="material-icons">&#xe5c4;</i><span>Regresar</span></button>
 </div>
 </div>
 </div>
 <!-- -------------------------- Fila 1 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-8">
 <label>Nombre del producto: </label>
 <input type="text" class="form-control" id="txtNombre" name="txtNombre" readonly
value="<?php echo $Fila['NombreProducto']; ?>">
 </div>
 </div>
 <!-- -------------------------- Fila 2 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-8">
 <label>Precio: </label>
 <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" readonly
value="<?php echo $Fila['Precio']; ?>">
 </div>
 <div class="form-group col-md-4">
 <label>Categoria: </label>
 <input type="tel" class="form-control" id="txtCategoria" name="txtCategoria" readonly
value="<?php echo $Fila['NombreCategoria']; ?>">
 </div>
 </div>
 <!-- -------------------------- Fila 3 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-4">
 <label>Descripcion: </label>
 <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" readonly value="<?php
echo $Fila['Descripcion']; ?>">
 </div>
 </div>
 </div> <!-- Cierre del Div table-wrapper -->
</div> <!-- Cierre del Div container -->
</form>