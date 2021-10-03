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

<div class="container">

	<div class="table-wrapper">
		<div class="table-title">
			<div class="form-row">
				<div class="col-md-8">
					<h2>Detalles de Categoria</h2>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info" onclick="window.open('reportes/detalleCategoria.php?id=<?php echo $_GET['id'] ?>', 'ReporteDetCategoria', 'width=1000,height=600');"><i class="material-icons">&#xe8ad;</i><span>Imprimir</span></button>
					<button type="button" class="btn btn-success" onClick="location.replace('index.php?mod=cate&form=li');"><i class="material-icons">&#xe5c4;</i><span>Regresar</span></button>
				</div>
			</div>
		</div>
<!-- -------------------------- Fila 1 -------------------------- -->
		<div class="form-row">
			<div class="form-group col-md-8">
				<label>Nombre de  categoria: </label>
				<input type="text" class="form-control" id="txtNombreC" name="txtNombreC" readonly value="<?php echo $Fila['Nombre']; ?>">
			</div>
			
<!-- -------------------------- Fila 2 -------------------------- -->
		<div class="form-row">
			<div class="form-group col-md-8">
				<label>Descripcion: </label>
				<input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" readonly value="<?php echo $Fila['Descripcion']; ?>">
	</div> <!-- Cierre del Div table-wrapper -->
</div> <!-- Cierre del Div container -->