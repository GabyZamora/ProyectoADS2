<!-- CSS -->
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/formularios.css">
<form name="frmNuevo" action="" method="post">
<div class="container">
<div class="table-wrapper">
<div class="table-title">
<div class="form-row">
<div class="col-md-8">
<h2>Nueva  Categoria</h2>
</div>
<div class="col-md-4">
<button type="button" class="btn btn-danger"
onClick="location.replace('index.php?mod=cate&form=li');"><i class="material-icons">&#xe5c9;</i><span>Cancelar</span></button>
<button type="button" class="btn btn-success" onClick="ValidarNuevo();"><i
class="material-icons">&#xe161;</i><span>Guardar</span></button>
</div>
</div>
</div>
<!-- -------------------------- Fila 1 -------------------------- -->
<div class="form-row">
<div class="form-group col-md-8">
<label>Nombre : </label>
<input type="text" class="form-control" id="txtNombreC" name="txtNombreC">
</div>

<!-- -------------------------- Fila 2 -------------------------- -->
<div class="form-row">
<div class="form-group col-md-8">
<label>Descripcion: </label>
<input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion">
</div>

</div>
</div> <!-- Cierre del Div table-wrapper -->
</div> <!-- Cierre del Div container -->
</form>
<!-- -------------------- Validaciones de ingreso de datos -------------------- -->
<script type="text/javascript">
function ValidarNuevo(){
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