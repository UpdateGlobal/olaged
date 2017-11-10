<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Contacto - Olaged</title>

	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/loader.css"/>
	<link rel="stylesheet" type="text/css" href="css/google-maps.css"/>
	<link rel="stylesheet" type="text/css" href="css/alert-boxes.css"/>
	<link rel="stylesheet" type="text/css" href="css/animations.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css"/>
	<link href="css/bootstrap.css" rel="stylesheet">

	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css'>

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>

	<!--[if lte IE 8]>
	<script src="scripts/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div id="pi-all">

<!-- Header -->
<div class="pi-main-header-w">

<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-dark1 pi-section-header-sm-w">
	<div class="pi-section pi-section-header pi-section-header-sm pi-clearfix">

		<!-- Phone -->
		<div class="pi-header-block pi-header-block-txt">
			<i class="pi-header-block-icon icon-phone pi-icon-base pi-icon-square"></i>Informes: <strong>(+51) 999337660</strong>
		</div>
		<!-- End phone -->

		<!-- Email -->
		<div class="pi-header-block pi-header-block-txt pi-hidden-xs"><i
				class="pi-header-block-icon icon-mail pi-icon-base pi-icon-square"></i>Email: <a href="#">info@olaged.com</a>
		</div>
		<!-- End email -->

		<!-- Social icons -->
		<div class="pi-header-block pi-pull-right pi-hidden-2xs">
			<ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered  pi-colored-bg clearFix">
				<li><a href="https://www.linkedin.com/uas/login" target="_blank" class="pi-social-icon-linkedin"><i class="icon-linkedin"></i></a></li>
				<li><a href="https://www.facebook.com/" target="_blank" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/" target="_blank" class="pi-social-icon-youtube"><i class="icon-youtube"></i></a></li>
				<li><a href="https://twitter.com/login?lang=es" target="_blank" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
				
				
			</ul>
		</div>
		<!-- End social icons -->

		<!-- Text -->
		<div class="pi-header-block pi-header-block-txt pi-pull-right pi-hidden-xs">Síguenos en:</div>
		<!-- End text -->

	</div>
</div>
<!-- End header row -->

<!-- Header -->


<!-- Header row -->

<!-- End header row -->

<div class="pi-header-row-sticky-w">
<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-white pi-section-header-lg-w pi-header-row-sticky pi-shadow-bottom">
<div class="pi-section pi-section-header pi-section-header-lg pi-clearfix">

<!-- Logo -->
<div class="pi-header-block pi-header-block-logo">
	<a href="index.php"><img src="images/logo.svg" alt=""></a>
</div>
<!-- End logo -->

<!-- Text -->
<!-- <div class="pi-header-block pi-header-block-txt pi-hidden-2xs">Observatorio Latinoamericano de Gestión y Desarrollo</div> -->
<!-- End text -->

<!-- Menu -->
<?php include("include/navegacion.php"); ?>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-header-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>
<!-- End mobile menu button -->


	<!-- Mobile menu -->
	<?php include("include/navemovil.php");?>
	<!-- End mobile menu -->

</div>
</div>
<!-- End header row -->
</div>

</div>

<!-- End header -->

<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->



<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb">
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li>Contacto</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white piICheck piStylishSelect piSocials">
	<div class="pi-section">

		<div class="pi-row">
			<div class="pi-col-sm-8">
				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Escríbenos
				</h2>

				<!-- Contact form -->

				<form  action="enviar.php" method="post">

					<div class="pi-error-container"></div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputName1">Nombre</label>
								<input type="text" name="nombre" class="form-control form-control-name" id="exampleInputName1"

									   placeholder="Nombre" required>

							</div>
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputEmail1">Correo</label>
								<input type="email" name="correo" class="form-control form-control-email" id="exampleInputEmail1"

									   placeholder="ejmplo@ejemplo.com" required>

							</div>
						</div>
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputCompany">Asunto</label>
								<input type="text" name="asunto" class="form-control form-control-company-name" id="exampleInputCompany"

									   placeholder="Asunto" required>

							</div>
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputPhone">Telefono</label>
								<input type="text" name="telefono" class="form-control form-control-phone" id="exampleInputPhone"

									   placeholder="Telefono" required>


							</div>
						</div>
					</div>
					
					<div class="form-group pi-padding-bottom-10">
						<label for="exampleInputMessage1">Mensaje</label>

						<textarea name="mensaje" class="form-control form-control-comments" id="exampleInputMessage1" placeholder="comentario" required rows="3"></textarea>

					</div>
					
					<p>
						<button class="btn pi-btn-base">
							Enviar<i class="icon-paper-plane pi-icon-right"></i>
						</button>
					</p>
				</form>
				<!-- End contact form -->

			</div>
			<div class="pi-col-sm-4">

				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					CONTACTANOS
				</h2>
				
				<ul class="pi-list-with-icons pi-list-big-margins pi-padding-bottom-10">
					<li><span class="pi-bullet-icon"><i class="icon-location"></i></span>Calle Martin de Murúa 150 <br>San Miguel.<br>
					<a href="#"></a></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-mail"></i></span><a href="#">info@olaged.com</a><br><a href="#">info@olaged.com</a></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-phone"></i></span>327334 <strong></strong> <br>
					 +51<strong>999337660</strong></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-clock"></i></span>Lunes - Viernes: <strong>9:00 am - 10:00 pm</strong>
					<br>
					Martes - Jueves: <strong>Cerrado</strong></li>
				</ul>
				<ul class="pi-social-icons pi-small pi-jump pi-colored-bg pi-round pi-padding-bottom-10">
					<li><a href="https://www.facebook.com/" target="_blank" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
					<li><a href="https://twitter.com/login?lang=es" target="_blank" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
					<li><a href="https://dribbble.com/session/new" target="_blank" class="pi-social-icon-dribbble"><i class="icon-dribbble"></i></a></li>
					<li><a href="http://hotmailiniciarsesion.webnode.es/rss/" target="_blank" class="pi-social-icon-rss"><i class="icon-rss"></i></a></li>
				</ul>

			</div>
		</div>

	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white">
	<div class="pi-google-map pi-google-map-wide googleMap"
		 data-map-type="roadmap"
		 data-map-zoom="14"
		 data-map-style="base"
		 data-map-marker="img/marker-base.png"
		 data-map-marker-size="67,81"
		 data-map-marker-anchor="30,81"
		 data-map-lat="-12.0763163"
		 data-map-long="-77.09093080000002">

	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>

<?php include("include/footer.php"); ?>

</body>
</html>