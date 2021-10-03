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
            <h2>Nuevo Cliente</h2>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-danger"
            onClick="location.replace('index.php?mod=clie&form=li');"><i class="material-icons">&#xe5c9;</i><span>Cancelar</span></button>
            <button type="button" class="btn btn-success" onClick="ValidarNuevo();"><i
              class="material-icons">&#xe161;</i><span>Guardar</span></button>
            </div>
          </div>
        </div>
        <!--Fila 1 -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Nombre: </label>
            <input type="text" class="form-control" id="txtNombreC" name="txtNombreC">
          </div>
          <div class="form-group col-md-4">
            <label>Apellido</label>
            <input type="text" class="form-control" id="txtApellido" name="txtApellido">
          </div>
        </div>
        <!-- Fila 2 -->
        <div class="form-row">
          <div class="form-group col-md-8">
            <label>Dirección: </label>
            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
          </div>
          <div class="form-group col-md-4">
            <label>Teléfono: </label>
            <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono">
          </div>
        </div>
        <!-- Fila 3 -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>DUI: </label>
            <input type="text" class="form-control" id="txtDUI" name="txtDUI">
          </div>
        </div>
      </div> <!-- Cierre del Div table-wrapper -->
    </div> <!-- Cierre del Div container -->
  </form>
  <!--  Validaciones de ingreso de datos --->
  <script type="text/javascript">
  function ValidarNuevo(){
    if ( !document.getElementById('txtNombreC').value ) {
      alert('Ingrese el nombre del cliente');
    }
    else if ( !document.getElementById('txtApellido').value ) {
      alert('Seleccione el apellido del cliente');
    }
     else if ( !document.getElementById('txtDireccion').value ) {
      alert('Ingrese la dirección del cliente');
    }
   
    else if ( !document.getElementById('txtDireccion').value ) {
      alert('Ingrese la dirección del cliente');
    }
   
    else {
      document.forms.frmNuevo.action = 'index.php?mod=clie&form=ag';
      document.forms.frmNuevo.submit();
    }
  }
</script>
