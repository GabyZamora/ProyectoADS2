<?php
$FormValid = false;
switch ( @$_GET['form'] ) {
  case 'li':
  $Form = 'Presentacion/Productos/FormListar.php';
  $FormValid = true;
  break;

  case 'nu':
  $Form = 'Presentacion/Productos/FormNuevo.php';
  $FormValid = true;
  break;

  case 'ag':
  $Form = 'Presentacion/Productos/Agregar.php';
  $FormValid = true;
  break;

  case 'ed':
  $Form = 'Presentacion/Productos/FormEditar.php';
  $FormValid = true;
  break;
  
  case 'ac':
  $Form = 'Presentacion/Productos/Actualizar.php';
  $FormValid = true;
  break;
  
  case 'de':
  $Form = 'Presentacion/Productos/FormDetalles.php';
  $FormValid = true;
  break;
  
  case 'el':
  $Form = 'Presentacion/Productos/Eliminar.php';
  $FormValid = true;
  break;

  default:
  $FormValid = false;
  break;
}

if ( $FormValid ){
  require_once $Form;
}
else {
  header('Location: error404.php');
}
?>