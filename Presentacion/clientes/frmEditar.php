<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/clientes.php';

//Instanciamos las clases de la capa de negocio
$Obj_Clientes = new Clientes();
//Cargamos el registro solicitado
$DatosCliente = $Obj_Clientes->BuscarPorId( $_GET['id'] );
//Recuperamos el registro obtenido en una variable fila
foreach ( $DatosCliente as $Fila ) {
  $DatosCliente = $Fila;
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
            <h2>Editar Cliente</h2>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-danger"
            onClick="location.replace('index.php?mod=clie&form=li');"><i class="material-icons">&#xe5c9;</i><span>Cancelar</span></button>
            <button type="button" class="btn btn-success" onClick="ValidarEditar();"><i
              class="material-icons">&#xe161;</i><span>Guardar</span></button>
            </div>
          </div>
        </div>
        <!--Fila 1 -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Nombre: </label>
            <input type="text" class="form-control" id="txtNombreC" name="txtNombreC" value="<?php
            echo $Fila['Nombre']; ?>">
            <input type="hidden" class="form-control" id="hidId" name="hidId" value="<?php echo
            $Fila['ClienteId']; ?>">
          </div>
          <div class="form-group col-md-8">
            <label>Apellido: </label>
            <input type="text" class="form-control" id="txtApellido" name="txtApellido" value="<?php
            echo $Fila['Apellido']; ?>">
            <input type="hidden" class="form-control" id="hidId" name="hidId" value="<?php echo
            $Fila['IdCliente']; ?>">
          </div>
        </div>
        <!--Fila 2-->
        <div class="form-row">
          <div class="form-group col-md-8">
            <label>Dirección: </label>
            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
            value="<?php echo $Fila['Direccion']; ?>">
          </div>
          <div class="form-group col-md-4">
            <label>Teléfono: </label>
            <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono" value="<?php
            echo $Fila['Telefono']; ?>">
          </div>
        </div>
        <!-- Fila 3 -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>DUI: </label>
            <input type="text" class="form-control" id="txtDUI" name="txtDUI" value="<?php echo
            $Fila['DUI']; ?>">
          </div>
        </div>
      </div> <!-- Cierre del Div table-wrapper -->
    </div> <!-- Cierre del Div container -->
  </form>
  <!-- Validaciones de ingreso de datos-->
  <script type="text/javascript">
  function ValidarEditar(){
    if ( !document.getElementById('txtNombreC').value ) {
      alert('Ingrese el nombre del cliente');
    }
    else if ( !document.getElementById('txtApellido').value ) {
      alert('Ingrese el apellido del cliente');
    }
    else if ( !document.getElementById('txtDUI').value ) {
      alert('Ingrese el DUI del cliente');
    }
    else if ( !document.getElementById('txtDireccion').value ) {
      alert('Ingrese la dirección del cliente');
    }
    else {
      document.forms.frmEditar.action = 'index.php?mod=clie&form=ac';
      document.forms.frmEditar.submit();
    }
  }
</script>
