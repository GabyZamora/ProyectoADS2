<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/categoria.php';
//Instanciamos las clases de la capa de negocio
$Obj_Categoria = new Categorias();
//Cargamos el registro solicitado
$DatosCategoria = $Obj_Categoria->BuscarPorId( $_GET['id'] );
//Recuperamos el registro obtenido en una variable fila
foreach ( $DatosCategoria as $Fila ) {
$DatosCategoria = $Fila;
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
<h2>Editar Categoria</h2>
</div>
<div class="col-md-4">
<button type="button" class="btn btn-danger"
onClick="location.replace('index.php?mod=cate&form=li');"><i class="material-icons">&#xe5c9;</i><span>Cancelar</span></button>
<button type="button" class="btn btn-success" onClick="ValidarEditar();"><i
class="material-icons">&#xe161;</i><span>Guardar</span></button>
</div>
</div>
</div>
<!-- -------------------------- Fila 1 -------------------------- -->
<div class="form-row">
<div class="form-group col-md-8">
<label>Nombre de categoria: </label>
<input type="text" class="form-control" id="txtNombreC" name="txtNombreC" value="<?php echo $Fila['Nombre']; ?>">
<input type="hidden" class="form-control" id="hidId" name="hidId" value="<?php echo $Fila['categorias_id']; ?>">
</div>

<!-- -------------------------- Fila 2 -------------------------- -->
<div class="form-row">
<div class="form-group col-md-8">
<label>Descripcion: </label>
<input type="text" class="form-control" id="txtDireccion" name="txtDescripcion" value="<?php echo $Fila['Descripcion']; ?>">
</div>

</div> <!-- Cierre del Div table-wrapper -->
</div> <!-- Cierre del Div container -->
</form>
<!-- -------------------- Validaciones de ingreso de datos -------------------- -->
<script type="text/javascript">
function ValidarEditar(){
if ( !document.getElementById('txtNombreC').value ) {
alert('Ingrese el nombre de la categoria');
}

else if ( !document.getElementById('txtDescripcion').value ) {
alert('Ingrese la descripcion del producto');
}

else {
document.forms.frmEditar.action = 'index.php?mod=cate&form=ac';
document.forms.frmEditar.submit();
}
}
</script>