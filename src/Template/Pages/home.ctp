<!DOCTYPE html>
<html lang="en">
<head>
<title>RAPITAX</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- gallery -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="header">
			<div class="header-left">
				<div class="agileinfo-phone">
					<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +51 982323781</p>
				</div>
				<div class="agileinfo-phone agileinfo-map">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Urb. Nicolás Garatea Mz 43 lt 32, Nuevo Chimbote</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1>
				<!--	<a href="index.html">RAPITAX</a>-->
					  <a  href="index.html"><img src="./images/logo.png" alt="Logo"></a>
				</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a class="active" href="index.html">Inicio</a></li>
									<li><a href="#about" class="scroll">Nosotros</a></li>
									<li><a href="#welcome" class="scroll">Servicios</a></li>
									<li><a href="#contact" class="scroll">Contactanos</a></li>
									<li><a href="./formLogin.html" class="nav-link">Acceso</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<h3><span>Tax</span></h3>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h3><span>RAPI</span></h3>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });

										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="wthree-heading">
				<h2>NUESTROS SERVICIOS</h2>
				<p>Viaja Seguro y Tranquilo con RapiTax</p>
			</div>
			<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/6.jpg" alt="" />
						<h4>Taxi Directo</h4>
						<p>En Taxi Directo contamos con el servicio más seguro,confiable y amigable del mercado.Solicita tu servicio llamando al 930352896</p>
					</div>
				</div>
			<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/3.jpg" alt="" />
						<h4>Taxi Corporativo</h4>
						<p>Modalidad de servicio de taxi preparado para cumplir necesidades corporativas. Con reportes personalizados y facturación centralizada.</p>
					</div>
				</div>
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/4.jpg" alt="" />
						<h4>Chofer de Reemplazo</h4>
						<p>Para toda eventualidad, evite el problema de conducir después de un día extenso de trabajo o de celebración.</p>
					</div>
				</div>
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/5.jpg" alt="" />
						<h4>Servicio de VAN</h4>
						<p>No siempre el espacio de un Taxi es suficiente, para eso ponemos a tu servicio nuestras Taxi Vans.</p>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- team -->
	<div class="team jarallax" id="team">
		<div class="team-dot">
			<div class="container">
				<div class="wthree-heading about-heading">
					<h3>¿Por qué usar RapiTax?</h3>
				</div>
				<div class="agile-team-grids">
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="images/t1.jpg" alt="" />
								</div>
								<div class="back">
									<h4>Atención 24/7</h4>
									<p>Disponibilidad las 24 horas, solo comunicate con nosotros a traves nuestro APP o a nuestra linea directa +51 982323781 / 043 432769</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="images/t2.jpg" alt="" />
								</div>
								<div class="back">
									<h4>Requerimientos especiales</h4>
									<p>Si necesitas viajar con una silla de ruedas, una mascota o un bebe te enviaremos un taxi especial para ti. Puedes gestionar fácilmente tus direcciones de recojo habituales.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="images/t3.jpg" alt="" />
								</div>
								<div class="back">
									<h4>Sigue tu trayecto sobre el mapa</h4>
									<p>Con nuestro sistema conocerás en todo momento la ubicación de tu taxi y el recorrido que realiza.Tambien podras programa tus servicios anticipadamente</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="images/t4.jpg" alt="" />
								</div>
								<div class="back">
									<h4>Ahorra Dinero</h4>
									<p>Configura tus gastos y tiempo por empleado, centros de costo y proyectos con precios acordados antes del trayecto, totalmente libres de sorpresas o de incrementos, sin importar la ruta o el tráfico.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- blog -->
	<div id="about" class="about">
		<div class="container">
			<div class="wthree-heading">
				<h3>RAPITAX</h3>
				<p>Vayas a donde vayas, tú siempre eliges la ruta.</p>
			</div>
			<div class="blog-agileinfo">
				<div class="col-md-6 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">
						<img src="images/4.jpg" class="img-responsive" alt=""/>
					</a>
				</div>
				<div class="col-md-6 blog-w3grid-text">
					<h4><a href="#myModal" data-toggle="modal">Nosotros</a></h4>
					<p>RapiTax, es una aplicación móvil, orientada a las empresas que brindan servicios de taxi, la cual les permite pider un servicio de transporte de manera rapida y segura. A través de esta aplicación podemos solicitar el servicio y a la vez hacer un seguimiento en tiempo real del trayecto, dando mayor seguridad y fidelidad a sus clientes.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-agileinfo blog-agileinfo-mdl">
				<div class="col-md-6 blog-w3grid-img blog-img-rght">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">
						<img src="images/6.jpg" class="img-responsive" alt=""/>
					</a>
				</div>
				<div class="col-md-6 blog-w3grid-text">
					<h4><a href="#myModal" data-toggle="modal">¿Qué hacemos?</a></h4>
					<p>Brindamos seguridad en el servicio de taxi, a través de seguimiento de su trayecto mediante su movil en tiempo real.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-agileinfo">
				<div class="col-md-6 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">
						<img src="images/5.jpg" class="img-responsive" alt=""/>
					</a>
				</div>
				<div class="col-md-6 blog-w3grid-text">
					<h4><a href="#myModal" data-toggle="modal">Nuestro Propósito</a></h4>
					<p>Mejorar la imagen de la industria del transporte en el país, retratarla como segura y eficiente.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="wthree-heading">
				<h3>Contactanos</h3>
				<p>Rapitax,contamos con el servicio más seguro,confiable y amigable. Solicita tu taxi con solo un click</p>
			</div>
			<div class="contact-form">
				<h4>Contactanos</h4>
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Full Name" required="">
							<label>Apellidos y Nombres</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Phone" required="">
							<label>Telefono</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required="">
							<label>Email</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="Message" required=""></textarea>
						<label>Mensaje</label>
						<span></span>
					</div>
					<input type="submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
		<footer>
			<div class="w3ls-footer-grids">
				<div class="container">
					<div class="col-md-3 w3l-footer two">
						<h3>Redes Sociales</h3>
						<ul>
							<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Siguenos en Facebook</a></li>
							<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Siguenos en Twitter</a></li>

						</ul>
					</div>
					<div class="col-md-3 w3l-footer two">
						<h3> </h3>
						<ul>
							<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Agreganos en Google</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer three">
						<h3>Contact Information</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i><p>RAPYTAX <span>Urb. Nicolás Garatea Mz 43 lt 32, </span>Nuevo Chimbote </p><div class="clearfix"></div> </li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer three">
						<h3> </h3>
						<ul>
							<li><i class="fa fa-phone"></i><p>982323781</p> <div class="clearfix"></div> </li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:rapitax@gmail.com">rapitax@gmail.com</a> <div class="clearfix"></div></li>
							<li><a href="./canvas.html">Nuestro modelo de negocio - CANVAS</a></li>
							<li><a href="./clientes_lista.html">Nuestros clientes</a></li>
							<li>
								<p>
    								<a href="http://jigsaw.w3.org/css-validator/check/referer">
        								<img style="border:0;width:88px;height:31px"
            								src="http://jigsaw.w3.org/css-validator/images/vcss"
            								alt="Valid CSS!" />
    								</a>
								</p>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="copy-right-grids">
				<div class="container">
					<div class="copy-left">
						<p class="footer-gd">© RAPITAX. | 2019</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
</body>
</html>
