<!--CSS--->
 <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Montserrat&family=Quattrocento+Sans:wght@700&display=swap" rel="stylesheet">  
 <link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-3.3.7.min.css"> 
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
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Inventario <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?mod=prod&form=li" class="dropdown-item">Productos</a></li>
          <li><a href="index.php?mod=cate&form=li" class="dropdown-item">Categorías</a></li>
          <li><a href="index.php?mod=clie&form=li" class="dropdown-item">Clientes</a></li>
        </ul>
      </li>
			 <li class="nav-item"><a href="index.php?mod=info" class="nav-link">Sobre nosotros.</a></li>  
		<li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Pedidos<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="pruebacatalogo.php" class="dropdown-item">Catálogo</a></li>
          <li><a href="reserva.php" class="dropdown-item">Reservación</a></li>
        </ul>
      </li>
		</ul>
	</div>
</nav>
	<div class="slider">
		<ul>
			<li><img src="imagenes/1.jpg" alt=""></li>
			<li><img src="imagenes/2.jpg" alt=""></li>
			<li><img src="imagenes/img3.jpg" alt=""></li>
			<li><img src="imagenes/img4.jpg" alt=""></li>
			<li><img src="imagenes/img5.jpg" alt=""></li>
			<li><img src="imagenes/img6.jpg" alt=""></li>
			<li><img src="imagenes/img7.jpg" alt=""></li>
			<li><img src="imagenes/img8.jpg" alt=""></li>
		</ul>
	</div>
	<div align="center">
	<h4 align="center">Nuestras redes sociales:</h4>
	<img src="imagenes/img.png" width="80" height="50"><a href="https://www.instagram.com/cardel_decorations/">Cardel_Decorations</a>
	<img src="imagenes/face.png" width="50" height="50"><a href="https://www.facebook.com/CardelDecorations">Cardel Decorations</a>
	<img src="imagenes/whats.png" width="35" height="35"><b>7489-3108</b>
</div>
</div>
</body>
	<script type="text/javascript"> 
		function CerrarSesion(){ if( confirm('¿Confirma cerrar la sesión actual?'))
		{ window.top.location.replace('presentacion/usuarios/cerrarSesion.php'); 
	}
}
</script>
