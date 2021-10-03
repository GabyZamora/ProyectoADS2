<!--CSS--->
 <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Montserrat&family=Quattrocento+Sans:wght@700&display=swap" rel="stylesheet">  
 <link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-3.3.7.min.css"> 
<link href="css/custom.css" rel="stylesheet">
<!--JS-->
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap-4.3.1.min.js"></script>
<style type="text/css"> 
	body { 
	font-family: 'Quattrocento', sans-serif; 
	background-position: center center; 
	background-repeat: no-repeat; 
	background-attachment: fixed; 
	background-size: cover;
	margin: 0; 
	}
	.form-inline { 
		display: inline-block; 
	} 
		.navbar-header.col { 
			padding: 0; 
		} 
		.navbar { 
			font-size: 16px; 
			background: #0d9bab; 
			padding-left: 16px; 
			padding-right: 20px; 
			border-bottom: 1px solid #817ae6 ; 
			box-shadow: 0 0 4px rgba(0,0,0,.1); 
		}
		.navbar .navbar-brand { 
			color: #000; 
			padding-left: -20px; 
			font-size: 50px; 
			padding-right: 960px; 
			font-family: 'Bitter', sans-serif;
			text-transform: uppercase; 
			} 
			.navbar .navbar-brand p{  
				font-weight: normal;
				color: #000; 
				font-size: 50px;
				} 
				.navbar .navbar-brand b { 
				font-weight: bold; 
				color: #f04f01; 
				} 
			.navbar ul.nav li { 
				font-size: 96%; 
				font-weight: bold; 
				text-transform: uppercase;  
			}
			.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus { 
				color: #000 !important; 
				background: transparent !important; 
				} 
				.search-box { 
					position: relative; 
				} 
				.search-box input.form-control, .search-box .btn { 
					font-size: 14px; 
					border-radius: 2px !important; 
				}
				.search-box .input-group-btn { 
					padding-left: 20 px; 
					} 
				.search-box input.form-control:focus { 
					border-color: #e67aa9; 
					box-shadow: 0 0 8px rgba(240,79,1,0.2); 
					} 
				.search-box .btn-primary, .search-box .btn-primary:active { 
					font-weight: bold; 
					background: #e67aa9;
					border-color: #e67aa9; 
					text-transform: uppercase; 
					min-width: 90px; 
				}
				.search-box .btn-primary:focus { 
					outline: none; 
					background: #eb4e01; 
					box-shadow: 0 0 8px rgba(240,79,1,0.2); 
					} 
				.search-box .btn span { 
					transform: scale(0.9); 
					display: inline-block; 
					} 
				.navbar .nav-item i { 
					font-size: 14px; 
					} 
					.navbar .dropdown-item i { 
					font-size: 16px; 
					min-width: 22px; 
					} 
				.navbar .nav-item.open > a { 
					background: #000; 
					} 
					.navbar .dropdown-menu { 
					border-radius: 1px; 
					border-color: #e5e5e5; 
					box-shadow: 0 2px 8px rgba(0,0,0,.05); 
					} 
				.navbar .dropdown-menu li a { 
					color: #777; padding: 8px 20px; 
					line-height: normal; 
					font-size: 14px; 
					} 
				.navbar .dropdown-menu li a:hover, 
				.navbar .dropdown-menu li a:active { 
					color: #333; 
					} 
				.navbar .navbar-form { 
					border: none; 
					} 
				}
			@media (max-width: 992px){ 
				.form-inline { 
					display: block; 
					} 
				}
				@media (max-width: 992px){ 
				.form-inline { 
					display: block; 
					} 
				}
			#content {
		       position: relative;
		    }
		     #content img {
		       position: absolute;
		       top: 0px;
		       left: 360px;
		       width: 100px;
		       height: 100px;
		    }
		    
		    .slider {
		    	width: 100%;
		    	margin: 0;
		    	overflow: hidden;
		    	display: inline-block;

		    }

		    .slider ul{
		    	display: flex;
		    	padding: 0;
		    	width: 400%;
		    	

		    	animation: change 20s infinite alternate;
		    	animation-timing-function: ease;
		    }

		    .slider:nth-child(2) ul{
		    	animation-timing-function: ease-in;
		    }
		    .slider li {
		    	width: 100%;
		    	list-style: none;
		    }

		    .slider img {
		    	width: 100%;
		    }

		    @keyframes change{
		    	0% {margin-left: 0;}
		    	20%{margin-left: 0;}

		    	25%{margin-left: -100%;}
		    	45%{margin-left: -100%;}

		    	50%{margin-left: -200%;}
		    	70%{margin-left: -200%;}

		    	75%{margin-left: -300%;}
		    	100%{margin-left: -300%;}
		    }

		    .fondo background-color{
		    	color: #fffedd;
		    }
		    h4{
				font-family: 'Quattrocento', sans-serif;		    	
		    }
		     h3{
		     	font-family: 'Quattrocento', sans-serif;
		     }
</style> 
</head> 
<body class="fondo">
		<nav class="navbar navbar-default navbar-expand-lg navbar-light"> 
			<div class="navbar-header d-flex col"> 
				<div id="content">
					<img src="imagenes/logo.png">
				<a class="navbar-brand"><p>Cardel</p>
					<br/>
					<p>Decorations</p>
				</a> 
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto"> 
					<span class="navbar-toggler-icon"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button> 
		</div>
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start navbar-right">
	    <ul class="nav navbar-nav"> 
	    <li class="nav-item"><a href="index.php?mod=menu" class="nav-link">Regresar a inicio</a></li> 
		<li class="nav-item"><a href="reserva.php" class="nav-link">Reservación</a></li> 
			</ul>
		</div>
	</nav>
	<table>
		 <tbody>
			<div class="custom-product row custom-btn-sort">
				<div class="col-md-4">
				  <img src="imagenes/productos/flores.jpeg"
				       alt="Caja con arreglo de flores en su interior. Precio: $30.25"
				       width="250"
				       height="250">
				       <h4 title="Caja con arreglo de flores">Caja con arreglo de flores en su interior</h4>
									<h3 class="store-product-price">$30.25</h3>
				</div>

				<div class="col-md-4">
				  <img src="imagenes/productos/flores (2).jpeg"
				       alt="Caja con arreglo de flores en su interior (Parte 2)"
				       width="250"
				       height="250">
					<h4 title="Caja con flores2">Caja con flores en su interior</h4>
					<h3 class="store-product-price">$30.25</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/flor.jpeg"
			       		alt="Caja con arreglo de flores en su interior, acompañado con dulces. Precio: $30.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja con arreglo de flores y dulces</h4>
			       		<h3 class="store-product-price">$30.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/caja.jpeg"
			       		alt="Caja de madera personalizada. Precio: $25.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja de madera personalizada</h4>
			       		<h3 class="store-product-price">$25.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/caja (2).jpeg"
			       		alt="Caja de carton personalizada. Precio: $15.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja de cartón personalizada</h4>
			       		<h3 class="store-product-price">$15.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/caja (3).jpeg"
			       		alt="Caja de carton personalizada. Precio: $20.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja de cartón personalizada</h4>
			       		<h3 class="store-product-price">$20.00</h3>
				</div>
				<div class="col-md-4">
			  		<img src="imagenes/productos/caja (4).jpeg"
			       		alt="Caja de carton con despliegue a sus laterales, personalizada. Precio: $25.00"
			       		width="250"
			       		height="250">
						<h4>Caja de cartón con despliegues laterales<h4>
						<h3 class="store-product-price">$25.00</h3>
				</div>


				<div class="col-md-4">
			  		<img src="imagenes/productos/caja (6).jpeg"
			       		alt="Caja larga de carton personalizada. Precio: $25.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja larga de cartón personalizada</h4>
			       		<h3 class="store-product-price">$25.00</h3>
				</div>
				<div class="col-md-4">
			  		<img src="imagenes/productos/caja (7).jpeg"
			       		alt="Caja de madera pequeña, personalizada. Precio: $10.00"
			       		width="250"
			       		height="250">
			       		<h4>Caja de madera pequeña personalizada</h4>
			       		<h3 class="store-product-price">$10.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/manualidad.jpeg"
			       		alt="Manualidad en forma de corazon con fotos y acompañado de luces LED. Precio: $30.00"
			       		width="250"
			       		height="250">
			       		<h4>Manualidad en forma de corazón y luces LED</h4>
			       		<h3 class="store-product-price">$30.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/manualidad (2).jpeg"
			       		alt="Cuadro de collage con luces LED, personalizado. Precio: $35.00"
			       		width="250"
			       		height="250">
						<h4>Cuadro collage con luces LED</h4>
						<h3 class="store-product-price">$35.00</h3>
				</div>

				<div class="col-md-4">
					<img src="imagenes/productos/manualidad (3).jpeg"
			       		alt="Manualidad de carta desplegable, personalizada (Parte 2)"
			       		width="250"
			       		height="250">
			       		<h4>Manualidad de carta desplegable personalizada</h4>
			       		<h3 class="store-product-price">$35.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/manualidad (4).jpeg"
			       		alt="Manualidad de carta desplegable, personalizada (Parte 1). Precio: $5.00"
			       		width="250"
			       		height="250">
			       		<h4>Manualidad de carta desplegable</h4>
			       		<h3 class="store-product-price">$5.00</h3>
				</div>

				<div class="col-md-4">
			  		<img src="imagenes/productos/manualidad (5).jpeg"
			       		alt="Manualidad con caja de carton, ideal para entretenimiento. Precio: $15.00"
			       		width="250"
			       		height="250">
			       		<h4>Manualidad de cartón para entretenimiento</h4>
			       		<h3 class="store-product-price">$15.00</h3>
				</div>
			</div>
		</tbody>
	 </table>
</body>