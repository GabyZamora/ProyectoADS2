
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Reserva de Pedidos</title>
    <!-- Google font -->
 <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Montserrat&family=Quattrocento+Sans:wght@700&display=swap" rel="stylesheet"> <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-4.3.1.min.css" type="text/css" />
    <!-- Page style -->
    <link rel="stylesheet" href="css/page.css" type="text/css" />
    <!-- Form style -->
    <link rel="stylesheet" href="css/forms.css" type="text/css" /> </head>

<body>
    <div class="container">
       
        <div class="content" style='margin-top:5px'>
            <div class="row">
                <article class="col-md-12">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form method="post" action="enviar-email.php" name="reserva" id="reserva">
                                <div class="form-heading text-center">
                                    <div class="title">Reservación de pedidos</div>
                                   
                                </div>
								
								<div class='row' id="resultados_ajax"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" id="nombres" required /> 
									</div>
                                    <div class="col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" required /> 
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Correo electrónico</label>
                                        <input type="email" name="email" id="email" required/> 
									</div>
                                    <div class="col-md-6">
                                        <label>Teléfono</label>
                                        <input type="text"  name="telefono" id="telefono" required /> 
										
									</div>
                                </div>
								
								<div class="row">
                                    <div class="col-md-8">
                                        <label>Lugar o dirección de entrega</label>
                                        <input type="text" name="lugar" id="lugar" required /> 
									</div>
                                    <div class="col-md-4">
                                        <label>Municipio</label>
                                        <input type="text" name="muni" id="muni" required /> 
									</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <label>Fecha de reserva</label>
                                        <input type="text" class='datepicker' name="ingreso" id="ingreso" required /> 
									</div>
                                    <div class="col-md-6">
                                        <label>Fecha de entrega</label>
                                        <input type="text"  class='datepicker' name="salida" id="salida"  required/> 
									</div>	
                                </div>
								<div class="col-md-6">
                                        <label>Hora de entrega</label>
                                        <input type="time" name="hora" id='hora' required/>        
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <label>Producto a ordenar</label>
                                        <select class='form-control' required name="producto" id="producto">
										  <option value="">--Selecciona--</option>
										  <option value="Arreglo de flores">Caja con arreglo de flores en su interior</option>
										  <option value="Caja con flores" selected="">Caja con arreglo de flores</option>
										  <option value="Caja con flores y dulces">Caja con arreglo de flores y dulces</option>
                                          <option value="Caja de madera">Caja de madera personalizada</option>
                                          <option value="Caja de carton">Caja de cartón personalizada</option>
                                          <option value="Caja de carton2">Caja de cartón forrada</option>
                                          <option value="Caja desplegable">Caja de cartón con despliegues laterales</option>
                                          <option value="Caja larga">Caja larga de cartón personalizada</option>
                                          <option value="Caja madera pequeña">Caja de madera pequeña personalizada</option>
                                          <option value="Manualidad corazon"> Manualidad en forma de corazón y luces LED</option>
                                          <option value="Cuadro collage">Cuadro collage con luces LED</option>
                                          <option value="Manualidad desplegable"> Manualidad de carta desplegable personalizada</option>
                                          <option value="Manualidad de carta">Manualidad de carta desplegable</option>
                                          <option value="Manualidad entretenimiento">Manualidad de cartón para entretenimiento</option>
										</select>
									</div>
                                    <div class="col-md-6">
                                        <label>Tipo de pago</label>
                                        <select class="form-control" required name="pago" id="pago">
											<option value="">--Selecciona--</option>
											<option value="Efectivo" selected="">Efectivo</option>
											<option value="Deposito">Déposito en banco</option>
										  </select> 
									</div>	
                                </div>  
                                    <div class="col-md-12">
                                        <button class="adam-button">ENVIAR</button></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap-4.3.1.min.js" type="text/javascript"></script>
    <!-- Form JS -->
    <script src="js/formscript.js" type="text/javascript"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        
		
		$('.datepicker').datepicker({
			format: 'dd/mm/yyyy',
			startDate: '-3d'
		});
		$( "#booking" ).submit(function( event ) {
		  var parametros = $(this).serialize();
		  event.preventDefault();
		});
    </script>
	
</body>
</html>