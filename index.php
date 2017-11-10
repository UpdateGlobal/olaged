<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("include/head.php"); ?>
</head>
<?php $num=""; ?>
<body>
	<div id="pi-all">
		<?php $menu=""; include("include/navegacion.php") ?>
	</div>
	<!-- End header -->

	<div id="page">
		<!-- - - - - - - - - - SECTION - - - - - - - - - -->
		<div class="tp-banner-container">
			<div class="tp-banner pi-revolution-slider" >
				<ul>
					<?php
			            $consultarBanner = "SELECT * FROM banners ORDER BY orden";
			            $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
			            while($filaBan = mysqli_fetch_array($resultadoBanner)){
			                $xTitulo    = $filaBan['titulo'];
			                $xImagen    = $filaBan['imagen'];
			        ?>
					<!-- SLIDE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
						<!-- MAIN IMAGE -->
						<img src="cms/assets/img/banner/<?php echo $xImagen; ?>" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
						<div class="tp-caption sft str" data-x="45" data-hoffset="0" data-y="236" data-speed="800" data-start="1800" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; font-size: 34px; color: #21252b; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; line-height: auto; background: rgba(255, 255, 255, 0.9); padding: 0px 16px; border-radius: 10px; box-shadow: 0 1px 1px rgba(0,0,0,0.15); width: 40%;">
							<p><?php echo $xTitulo; ?></p>
						</div>
					</li>
					<?php
			            }
			            mysqli_free_result($resultadoBanner);
			        ?>
				</ul>
			</div>
		</div>
		<span class="revolution-slider"></span>
		<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
		
		<!-- - - - - - - - - - SECTION - - - - - - - - - -->
		<div class="pi-section-w pi-shadow-inside-top pi-section-dark3 piTooltips">
			<div class="pi-texture" style="background: url() repeat;"></div>
			<div class="pi-section pi-padding-top-60 pi-padding-bottom-40">
				<h4 class="pi-weight-300 pi-text-center">
					<span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base"> OLAGED - </span>  Observatorio Latinoamericano de Gestión y Desarrollo
				</h4>
				<p class="lead-16 pi-text-center">
					<center><h5>El objeto de la asociación es<span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base" data-placement="top" title> promover la investigación; análisis, estudio y promoción de políticas públicas en el Perú y América Latina,</span> así como difundir el conocimiento en administración y gestión en general; y, especialmente desarrollar de capacidades para las personas que forman parte de la gestión pública o que desarrollen políticas públicas.</h5></center>
				</p>
			</div>
		</div>
		<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
		
		<!-- - - - - - - - - - SECTION - - - - - - - - - -->
		<div id="servicios" class="pi-section-w pi-shadow-inside-top pi-section-dark piCounter pi-row pi-liquid-col-xs-1 pi-liquid-col-sm-4 pi-gallery pi-gallery-small-margins isotope servicios">
			<div class="pi-section pi-padding-bottom-30">
				<div class="pi-text-center">
					<h3 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-has-border pi-has-tall-border pi-has-short-border"> NUESTROS SERVICIOS</h3>
				</div>
				<p class="lead-16 pi-margin-bottom-40 pi-text-center pi-text-grey">
					Los servicios que ofrecemos buscan perfeccionar la visión de largo alcance de nuestros clientes, promoviendo la apertura  <br> al cambio y la innovación, facilitando la creación e implementación de soluciones a problemas complejos que pueden estar enfrentando. 
				</p>
				<!-- Portfolio gallery -->
				<div class="pi-row pi-liquid-col-xs-3 pi-gallery pi-padding-bottom-20 pi-text-center">
					<!-- Portfolio item -->
					<div class="Lifestyle Creation pi-gallery-item pi-padding-bottom-40 isotope-item">
						<div class="pi-img-w pi-img-round-corners pi-img-shadow">
							<img src="img_external/servicios/capacitación.jpg" alt="">
						<span class="pi-img-overlay pi-img-overlay-white"></span>
					</div>
				<h6>Servicio de Investigación</h6></h3>
				<ul class="pi-meta">
					<strong><a href="servicio-de-investigacion.php">Más Información</a></strong>
				</ul>
			</div>
			<!-- End portfolio item -->

			<!-- Portfolio item -->
			<div class="Lifestyle Creation pi-gallery-item pi-padding-bottom-40 isotope-item">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					
						<img src="img_external/servicios/desarrollo-de-personas.jpg" alt="">
					<span class="pi-img-overlay pi-img-overlay-white">
					</span>
					
				</div>
				<h6>Gestión</h6>
				<ul class="pi-meta">
					<strong><a href="gestion.php">Más Información</a></strong>
				</ul>
			</div>
			<!-- End portfolio item -->

			<!-- Portfolio item -->
			<div class="Lifestyle Creation pi-gallery-item pi-padding-bottom-40 isotope-item">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					
						<img src="img_external/servicios/Gestion.jpg" alt="">
					   <span class="pi-img-overlay pi-img-overlay-white">
					</span>
				</div>
				<h6>Capacitación</h6>
				<ul class="pi-meta">
					<strong><a href="capacitacion.php">Más Información</a></strong>
				</ul>
			</div>
			<!-- End portfolio item -->

			<!-- Portfolio item -->
			<div class="Lifestyle Creation pi-gallery-item pi-padding-bottom-40 isotope-item">
				<div class="pi-img-w pi-img-round-corners pi-img-shadow">
					
						<img src="img_external/servicios/investigacion.jpg" alt="">
					 <span class="pi-img-overlay pi-img-overlay-white">
					</span>
				</div>
				<h6>Desarrollo de Personas</h6>
				<ul class="pi-meta">
					<strong><a href="desarrolloPersonas.php">Más Información</a></strong>
				</ul>
			</div>
			<!-- End portfolio item -->	
		</div>
		<!-- End portfolio gallery -->
	
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-shadow-inside-top pi-section-dark2 piTooltips">
	<div class="pi-texture" style="background: url() repeat;"></div>
	<div class="pi-section pi-padding-top-60 pi-padding-bottom-40">
		
		<h1 class="pi-weight-300 pi-text-center">
			Crece con nosotros 
		</h1>
		
		<p class="lead-16 pi-text-center">
			Nuestra filosofía nos impulsa a  <span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base" data-placement="top">la búsqueda permanente del saber,</span> para ayudar a nuestros clientes a que puedan<br>gestionar sus procesos de <span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base">cambio y desarrollo</span>.

		</p>

		<p class="pi-text-center">
			<a href="nosotros.php" class="btn pi-btn-base">
				Más Info
			</a>
		</p>

	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->


<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div id="actividades" class="pi-section-w pi-section-white adelanto">
	<div class="pi-section pi-padding-top-90 pi-padding-bottom-30">
		<div class="pi-row">

			<div class="pi-col-sm-6 pi-padding-bottom-50">

				<span class="pi-text-base1 pi-weight-600 pi-tooltip pi-tooltip-base">ACTIVIDADES</span> 

				<p class="pi-margin-bottom-30">
					Temporibus autem quibusdam et aut officiis debetis aut rerum necessitatibus saepe eveniet
				</p>
				
				<div class="pi-row">
					<div class="pi-col-sm-6">
						<ul class="pi-list-with-icons pi-list-icons-ok">
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
							<li>Nam libero tempore,cum soluta nobis est eligendi optio cumque</li>
							<li>Temporibus autem quibusdam et aut officiis debitis aut rerum</li>
							<li>officiis debetis aut rerum necessitatibus saepe quibusdam</li>
						</ul>
					</div>

				</div>
				<p class="pi">
			      <a href="blog.php" class="btn pi-btn-base">
				       Más Info
			      </a>
		</p>
			</div>

			<div class="pi-col-sm-6 pi-padding-bottom-50">

				<!-- Slider -->
				<div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover">
					<div class="pi-slider pi-slider-animate-opacity">

						<!-- Slide -->
						<div class="pi-slide">
							<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">

								<a href="#"><img src="img/proyectos.png" alt=""/></a>

							</div>
						</div>
						<!-- End slide -->

						<!-- Slide -->
						<div class="pi-slide">
							<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">

								<a href="#"><img src="https://lh3.googleusercontent.com/-uv-fUNTnDxo/Wd-eWaOXbPI/AAAAAAAApTY/JNNhEtTooMcRdyv7XlQLei4hjpg5gx43ACL0BGAYYCw/h460/2017-10-12.jpg" alt=""/></a>

							</div>
						</div>
						<!-- End slide -->

					</div>
				</div>
				<!-- End slider -->

			</div>

		</div>
		
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
		

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-shadow-inside-top pi-section-dark">
	<div class="pi-section pi-text-center">
		<div class="pi-text-center">
			<h3 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-has-border pi-has-tall-border pi-has-short-border">EXPERIENCIA CON <span class="pi-text-base pi-weight-800 pi-tooltip pi-tooltip-base">CLIENTES FELICES</span></h3>
		</div>
		<p class="lead-16 pi-margin-bottom-40 pi-text-center pi-text-grey">Excepteur sint occaecat cupidatat non proident <br>sunt in culpa qui officia deserunt.</p>
		<!-- Slider -->
		<div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover">
			<div class="pi-slider pi-slider-animate-opacity">
				<!-- Slide -->
				<div class="pi-slide">
					<!-- Logos gallery -->
					<div class="pi-row pi-liquid-col-lg-5 pi-gallery">
						<?php
	                    	$consultarCarrusel = "SELECT * FROM carrusel ORDER BY orden";
	                    	$resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                    	while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
	                    		$xCodigo    = $filaCar['cod_carrusel'];
	                    		$xImagen    = $filaCar['imagen'];
	                    		$num++;
	                    ?>
						<!-- Logo -->
						<div class="pi-gallery-item">
							<div class="pi-img-w pi-img-opacity-50 pi-img-grayscale-hover">
								<a href="#"><img src="cms/assets/img/carrusel/<?php echo $xImagen; ?>" alt="" /></a>
							</div>
						</div>
						<?php if($num % 5 === 0){ print "</div></div>
						<div class='pi-slide'>
						<div class='pi-row pi-liquid-col-lg-5 pi-gallery'>"; } ?>
						<?php
							}
	                        mysqli_free_result($resultadoCarrusel);
						?>
						<!-- End logo -->
					</div>	
				</div>
				<!-- End slide -->
			</div>
		</div>
		<!-- End slider -->
	</div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->
	
<div class="pi-section-w pi-section-white pi-border-top">
	<div class="pi-section pi-padding-bottom-20">
		<div class="pi-text-center">
			<h3 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-has-border pi-has-tall-border pi-has-short-border">
				NOTICIAS DESDE <span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base">NUESTRO BLOG</span>
			</h3>
		</div> <br>
		<!-- Row -->
		<div class="pi-row">
			
			<!-- Col 6 -->
			<div class="pi-col-sm-6 pi-padding-bottom-30">
				
				<!-- Post item -->
				<div class="pi-img-w pi-img-round-corners pi-img-left pi-img-shadow" style="width: 170px;">
					<a href="#">
					<img src="https://lh3.googleusercontent.com/-pv2A6ddoTU8/Wd-Vbb69ktI/AAAAAAAApS8/HQw0WHrGYasn2pCCAyclLCXbvAwAKLlOgCL0BGAYYCw/h630/2017-10-12.jpg" alt="">
					<span class="pi-img-overlay pi-img-overlay-white">
					</span>
					</a>
				</div>
				
				<h2 class="h5 pi-margin-top-minus-5 pi-margin-bottom-5">
					<a href="#" class="pi-link-dark">Regulación Administrativa (Poder de Policía del Estado) y Seguros Privados. Posible complementariedad virtuosa.</a>
				</h2>
				
				<ul class="pi-meta pi-margin-bottom-10">
					<li><i class="icon-clock"></i></li>
					<li><i class="icon-comment"></i>comentarios</li>
				</ul>
				<p>
					El Poder Policía constituye una de las manifestaciones de la Función Administrativa del Estado. Esta consiste en la ordenación, regulación, limitación de derechos, para articularlos, coordinarlos, adecuarlos al interés general, público o derechos o intereses legítimos de otros ciudadanos. A estas función también se le conoce como "Regulación Administrativa".
					 <a href="nota-blog.php" class="pi-italic">Leer mas</a>
				</p>
				<!-- End post item -->
				
			</div>
			<!-- End col 6 -->
			
				<!-- Col 6 -->
				<div class="pi-col-sm-6 pi-padding-bottom-30">

				<!-- Post item -->
				<div class="pi-img-w pi-img-round-corners pi-img-left pi-img-shadow" style="width: 170px;">
					<a href="#">
					<img src="https://lh3.googleusercontent.com/-rLxGy4XHzXs/Wd-CgSHoHFI/AAAAAAAApQc/YP64nxRvEzAha7YEzlK4w7q6uXUtiIvCgCL0BGAYYCw/h630/2017-10-12.jpg" alt="">
					<span class="pi-img-overlay pi-img-overlay-white">
					</span>
					</a>
				</div>
				
				<h2 class="h5 pi-margin-top-minus-5 pi-margin-bottom-5">
					<a href="#" class="pi-link-dark">
						Los problemas del Servicio Civil. Persistencia de problemas y de falta de medidas (parte 2)
					</a>
				</h2>
				
				<ul class="pi-meta pi-margin-bottom-10">
					<li><i class="icon-clock"></i></li>
					<li><i class="icon-comment"></i>comentarios</li>
				</ul>
				<p>
					A partir de la dación del Decreto Legislativo N° 1023 (en el año 2008) queda claro que el Sistema Administrativo de Gestión de Recursos Humanos en un sistema administrativo, que comprende el conjunto de normas, principios, recursos, métodos, procedimientos y técnicas utilizados por las entidades del sector público.
					  <a href="nota-blog2.php" class="pi-italic">Leer mas</a>
				</p>
				<!-- End post item -->
				
				</div>
			<!-- End col 6 -->
			</div>
		<!-- End row -->			
		</div>
	</div>
	<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
	<?php include("include/footer.php"); ?>
</div>
</body>
</html>