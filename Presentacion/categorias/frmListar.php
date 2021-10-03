<?php
//Llamamos a la capa de datos
require_once 'Datos/datos.php';
//Llamamos a la capa de negocio
require_once 'Negocio/categoria.php';
//Instanciamos las clases de la capa de negocio
 
require_once('Negocio/Paginador.php');

$Obj_Paginador = new Paginador();
$Obj_Categoria = new Categorias();


$Obj_Paginador->Cadena = $Obj_Categoria->ListarTodos( addslashes( @$_POST['txtBuscar'] ) );
$Obj_Paginador->CantTotalReg = $Obj_Categoria->CantTotalRegistros( addslashes( @$_POST['txtBuscar']
) );
$Obj_Paginador->FilasPorPagina = 5; 
$Obj_Paginador->NumPagina = @$_GET['np']; 
$Obj_Paginador->EnlaceListar = "mod=cate&form=li"; 
$Obj_Paginador->ConfPaginador();

?>
<!-- CSS -->
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/formularios.css">
<!-- JS -->
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap-4.3.1.min.js"></script>
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="form-row">
        <div class="col-md-4">
          <a href="index.php?mod=clie&form=li" class="a-titulo-form"><h2>Gestión de
            <b>Categoria</b></h2></a>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              
              <form action="" method="post">
                <div class="input-group-append">
                  <input type="text" class="form-control" placeholder="Buscar..." name="txtBuscar"
                  id="txtBuscar" value="<?php echo @$_POST['txtBuscar']; ?>">
                  <button class="btn btn-info" type="submit" style="margin-left: -3px; height: 38px;">
                    <i class="material-icons">&#xe8b6;</i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          
          <div class="col-md-5">
            <button type="button" class="btn btn-danger" data-toggle="modal"
            onClick="location.replace('index.php?mod=menu');">
            <i class="material-icons">&#xe879;</i><span>Cerrar</span></button>
              <button type="button" class="btn btn-success" onclick="location.replace('index.php?mod=cate&form=nu');">
                <i class="material-icons">&#xe148;</i><span>Agregar Nuevo</span></button>
              </div>
            </div>
          </div>
          <?php
          
          echo $Obj_Paginador->MostrarControles();
          ?>
          <br>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
               
              </tr>
            </thead>
            <tbody>
              <?php
              
              foreach ( $Obj_Paginador->RegistrosPaginados as $Fila ) {
                ?>
                <tr>
                  <td><?php echo $Fila['Nombre']; ?></td>
                  <td><?php echo $Fila['Descripcion']; ?></td>
             
                  <td>
                    <a href="index.php?mod=cate&form=de&id=<?php echo $Fila['CategoriaId'];?>" class="view" title="Detalles"><i class="material-icons">&#xE417;</i></a>
                    <a href="index.php?mod=cate&form=ed&id=<?php echo $Fila['CategoriaId'];?>" class="edit"><i class="material-icons" data-toggle="tooltip"
                      title="Editar">&#xE254;</i></a>
                      <a href="#" class="delete" onclick="Eliminar('<?php echo $Fila['CategoriaId']; ?>');"><i class="material-icons" data-toggle="tooltip"
                        title="Eliminar">&#xE872;</i></a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
          </table>
    </div> 
</div> 
<script type="text/javascript">
    function Eliminar(paId){
        if(confirm('¿Confirma eliminar este registro?')){
            window.location.replace('index.php?mod=cate&form=el&id=' + paId);
        }
    }
</script>
          
<?php
          
require_once 'presentacion/myAlert.php';
          
if ( isset( $_GET['m'] ) ) {
    if ( $_GET['m'] == 'success' ) {
      	echo "<script>myAlertSuccess();</script>";
    }
   	else if ( $_GET['m'] == 'error' ) {
        echo "<script>myAlertDanger();</script>";
   	}
    else if ( $_GET['m'] == 'update' ) {
        echo "<script>myAlertInfo();</script>";
    }
    else if ( $_GET['m'] == 'delete' ) {
        echo "<script>myAlertWarning();</script>";
        }
}
?>
