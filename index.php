<?php
// ---------- Configuramos la zona horaria de El Salvador ----------
date_default_timezone_set("America/El_Salvador");
switch( @$_GET["mod"] ){
  case 'cate':
  $Modulo = 'Presentacion/categorias/index.php';
  break;
  case 'prod':
  $Modulo = 'Presentacion/Productos/index.php';
  break;
  case 'menu':
  $Modulo = 'Presentacion/menu.php';
  break;
  case 'cat':
  $Modulo = 'Catalogo/pruebacatalogo.php';
  break;
  case 'clie':
  $Modulo = 'Presentacion/clientes/index.php';
  break;
  case 'info':
  $Modulo = 'Presentacion/info.html';
  break;
  default:
  $Modulo = 'Presentacion/usuarios/frmLogin.php';
  break;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="Cardel Decoration" content="width=device-width,initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/icono.png">
      <title>Cardel Decorations</title>
    <style>
      body{
         
          font-family: 'Bitter', serif;

           font-family: 'Montserrat', sans-serif;

          font-family: 'Quattrocento Sans', sans-serif;
      }
    </style>
  </head>
  <body>
    <div id="DivMainIndex" style='position: relative; margin: 0 auto 0 auto;'>
    <?php
    require_once $Modulo;
    ?>
  </body>
</html>