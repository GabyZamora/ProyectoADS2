<?php
$FormValid = false;
switch ( @$_GET['form'] ) {
  case 'li':
  $Form = 'Presentacion/categorias/frmListar.php';
  $FormValid = true;
  break;

  case 'nu':
  	$Form = 'Presentacion/categorias/frmNuevo.php';
  	$FormValid = true;
  	break;

  case 'ag':
  	$Form = 'Presentacion/categorias/agregar.php';
  	$FormValid = true;
  	break;

  case 'ed':
  	$Form = 'Presentacion/categorias/frmEditar.php';
  	$FormValid = true;
  	break;
  case 'ac':
  	$Form = 'Presentacion/categorias/actualizar.php';
  	$FormValid = true;
  	break;
  case 'de':
  	$Form = 'Presentacion/categorias/frmDetalles.php';
  	$FormValid = true;
  	break;
  case 'el':
  	$Form = 'Presentacion/categorias/eliminar.php';
  	$FormValid = true;
  	break;

  default:
  $FormValid = false;
  break;
}

if ( $FormValid  ){
  require_once $Form;
}
else {
  header('Location: error404.php');
}
?>