<?php
if( isset($_POST['btnEnviar']) ){
	require_once 'Datos/conexion.php';

	$Obj_Conexion = new Conexion();

	//recepción de datos enviados medinate POST desde ajax
	$usuario = (isset($_POST['txtUsuario'])) ? $_POST['txtUsuario'] : '';
	$password = (isset($_POST['txtPassword'])) ? $_POST['txtPassword'] : '';

	$pass = md5($password);

	$CadenaUsuario = "SELECT * FROM Usuarios WHERE Usuario='$usuario' AND Password='$password'";

	$Datos_Usuario = $Obj_Conexion->EjecutarSelectiva( $CadenaUsuario );

	if ( count( $Datos_Usuario ) == 0 ){
		echo "<script>alert('Usuario y/o password incorrectos');</script>";
	}
	else if( count( $Datos_Usuario ) == 1 ){
		$_SESSION['UsuarioId'] = $Datos_Usuario[0]['UsuarioId'];
		$_SESSION['Nombre'] = $Datos_Usuario[0]['Nombre'];

		echo "<script>window.location.replace('index.php?mod=menu');</script>";
	}
}

?>
<!-- CSS -->
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/formularios.css">

<main role="main" class="container my-auto">
		<div class="row">
				<div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
						col-12">
						<h2 class="text-center">Bienvenido/a</h2>
						<img class="img-fluid mx-auto d-block rounded" width="100px" height="100px" 
								src="imagenes/logo2.jpeg" />

						<form name="frmNuevo" action="" method="post">
								<div class="form-group">
									<label>Usuario: </label>
							    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario">
								</div>
								<div class="form-group">
									<label>Password: </label>
								  <input type="password" class="form-control" id="txtPassword" name="txtPassword">
								</div>
								<button type="submit" class="btn btn-success mb-2" name="btnEnviar" onClick="location.replace('index.php?mod=menu');">
										Entrar
								</button>
									</form>
				</div>
		</div>
</main>
