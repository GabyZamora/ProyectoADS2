<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/Productos.php';
require_once 'Negocio/categoria.php';
//Instanciamos las clases de la capa de negocio
$Obj_Productos = new Productos();
$Obj_Categoria = new Categorias();
//Cargamos el registro solicitado
$DatosProductos = $Obj_Productos->BuscarPorId( $_GET['id'] );
$DatosCategorias = $Obj_Categoria->ListarTodoCombos();
//Recuperamos el registro obtenido en una variable fila
foreach ( $DatosProductos as $Fila ) {
$DatosProductos = $Fila;
}
?>
<!-- CSS -->
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/formularios.css">
<form name="frmEditar" action="" method="post">
<div class="container">
<div class="table-wrapper">
 <div class="table-title">
 <div class="form-row">
 <div class="col-md-8">
 <h2>Editar Productos</h2>
 </div>
 <div class="col-md-4">
 <button type="button" class="btn btn-danger"
onClick="location.replace('index.php?mod=prod&form=li');"><i class="materialicons">&#xe5c9;</i><span>Cancelar</span></button>
 <button type="button" class="btn btn-success" onClick="ValidarEditar();"><i
class="material-icons">&#xe161;</i><span>Guardar</span></button>
 </div>
 </div>
 </div>
 <!-- -------------------------- Fila 1 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-8">
 <label>Nombre del producto: </label>
 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php
echo $Fila['Nombre']; ?>">
 <input type="hidden" class="form-control" id="hidId" name="hidId" value="<?php echo
$Fila['IdProductos']; ?>">
 </div>
 </div>
 <!-- -------------------------- Fila 2 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-8">
 <label>Precio: </label>
 <input type="text" class="form-control" id="txtPrecio" name="txtPrecio"
value="<?php echo $Fila['Precio']; ?>">
 </div>
 <div class="form-group col-md-4">
 <label>Categoria: </label>
 <input type="text" class="form-control" id="txtCategoria" name="txtCategoria" value="<?php
echo $Fila['Categoria']; ?>">
<select id="cbxCategoria" name="cbxCategoria" class="form-control">
            <option value="<?php echo $FilaProducto['IdCategoria']; ?>"><?php
            echo $FilaProducto['NombreCategoria']; ?></option>
            <?php
            foreach ( $DatosCategoria as $FilaCategoria ) {
              ?>
              <option value="<?php echo $FilaCategoria['IdCategoria']; ?>"><?php
              echo $FilaCategoria['Nombre']; ?></option>
              <?php
            }
            ?>
          </select>

 </div>
 </div>
 <!-- -------------------------- Fila 3 -------------------------- -->
 <div class="form-row">
 <div class="form-group col-md-4">
 <label>Descripcion: </label>
 <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" value="<?php echo
$Fila['Descripcion']; ?>">
 </div>
  </div>
 </div> <!-- Cierre del Div table-wrapper -->
</div> <!-- Cierre del Div container -->
</form>
<!-- -------------------- Validaciones de ingreso de datos -------------------- -->
<script type="text/javascript">
 function ValidarEditar(){
 if ( !document.getElementById('txtNombre').value ) {
 alert('Ingrese el nombre del producto');
 }
 else if ( !document.getElementById('txtPrecio').value ) {
 alert('Ingrese el precio del producto');
 }
 else if ( document.getElementById('txtCategoria').value) {
alert('Seleccione la categoria');
 }
 else if ( document.getElementById('txtDescripcion').value){
 alert('Ingrese la descripcion del producto');
 }
 else {
 document.forms.frmEditar.action = 'index.php?mod=prod&form=ac';
 document.forms.frmEditar.submit();
 }
 }
</script>