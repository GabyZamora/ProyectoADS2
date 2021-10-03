<?php
$FormValid = false;
switch ( @$_GET['form'] ) {
  case 'li':
  $Form = 'Presentacion/clientes/frmListar.php';
  $FormValid = true;
  break;

  case 'nu':
  $Form = 'Presentacion/clientes/frmNuevo.php';
  $FormValid = true;
  break;

  case 'ag':
  $Form = 'Presentacion/clientes/agregar.php';
  $FormValid = true;
  break;

  case 'ed':
  $Form = 'Presentacion/clientes/frmEditar.php';
  $FormValid = true;
  break;

  case 'ac':
  $Form = 'Presentacion/clientes/actualizar.php';
  $FormValid = true;
  break;

  case 'de':
  $Form = 'Presentacion/clientes/frmDetalles.php';
  $FormValid = true;
  break;

  case 'el':
  $Form = 'Presentacion/clientes/eliminar.php';
  $FormValid = true;
  break;

  default:
  $FormValid = false;
  break;
}
//Llamadas a los archivos de formularios
if ( $FormValid  ){
  require_once $Form;
}
else {
  header('Location: error404.php');
}
?>