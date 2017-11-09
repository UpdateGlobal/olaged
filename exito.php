<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Gracias - Olaged</title>
	<meta name="description" content="A Responsive HTML Theme" />
	<meta name="keywords" content="html, responsive, theme" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	
  <!-- Nuevas librerias-->
	   	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/loader.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/rs-plugin/css/pi.settings.css"/>
	<link rel="stylesheet" type="text/css" href="css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="css/counters.css"/>
	<link rel="stylesheet" type="text/css" href="css/galleries.css"/>
	<link rel="stylesheet" type="text/css" href="css/images.css"/>
	<link rel="stylesheet" type="text/css" href="css/portfolio.css"/>
	<link rel="stylesheet" type="text/css" href="css/alert-boxes.css"/>
	<link rel="stylesheet" type="text/css" href="css/animations.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>
	<!-- CSS -->
	<link rel="stylesheet" href="css1/reset.css" type="text/css" />
	<link rel="stylesheet" href="css1/grid.css" type="text/css" />
	<link rel="stylesheet" href="css1/main.css" type="text/css" />
	<link rel="stylesheet" href="css1/header-footer.css" type="text/css" />
	<link rel="stylesheet" href="css1/elements.css" type="text/css" />
	<link rel="stylesheet" href="css1/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css1/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css1/linecons.css" type="text/css" />
	<link rel="stylesheet" href="css1/animate.min.css" type="text/css" />
	
	<!-- Nuevas librerias-->
    
 
</head>
 
<body>
	<!-- HEADER -->
	<header id="site-header" class="dark-header slider-nav bounceInDown animated">
<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-white pi-section-header-lg-w pi-header-row-sticky pi-shadow-bottom">
<div class="pi-section pi-section-header pi-section-header-lg pi-clearfix">

<!-- Logo -->
<div class="pi-header-block pi-header-block-logo">
	<a><img src="images/logo.svg" alt=""></a>
</div>
<!-- End logo -->

<!-- Text -->
<!-- <div class="pi-header-block pi-header-block-txt pi-hidden-2xs">Observatorio Latinoamericano de Gestión y Desarrollo</div> -->
<!-- End text -->

<!-- Menu -->
<?php include("include/navegacion.php"); ?>

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
	</header>
	<!-- HEADER END -->
	
	<div id="slider" class="slidecontainer slider">
        <ul>                
            <li class="bg-red" style="background-image: url(img/slide-10.jpg);">
	            <header style=" padding-top: 200px">
					<div class="title-1">Un asesor especializado te ayudará a la brevedad posible</div>
					<div class="title-2">Gracias por contactarnos</div>
					
					<div class="mar-b-30"></div><!-- GAP -->
					<br>
					<div class="hr-wrap short">
						<div class="hr-left"><hr></div>
						<div class="hr-mid"><i class="fa fa-star"></i></div>
						<div class="hr-right"><hr></div>
					</div>
					<br>
					<div>
						<a class="btn" href="index.html">Volver al Inicio</a>
					</div>
				</header>
			</li>
        </ul>
    </div>
	
<?php include("include/footer.php"); ?>
</body>
</html>