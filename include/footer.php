<!-- Footer -->
<!-- Widget area -->
<div class="pi-section-w pi-border-bottom pi-border-top-light pi-section-dark footer">
	<div class="pi-section pi-padding-bottom-10">
		<!-- Row -->
		<div class="pi-row">
			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-padding-bottom-30">
				<img src="images/footer.svg" alt="">
			</div>
			<!-- End col 4 -->
			<div class="pi-clearfix pi-hidden-lg-only pi-hidden-md-only"></div>
			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">
				<h6 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-has-border pi-has-tall-border pi-has-short-border">Acerca de OLAGED</h6>
			    <p>Somos una Asociación Civil que tiene por finalidad promover la investigación, análisis, estudio y promoción de políticas públicas en el Perú y América Latina; difundir el conocimiento en administración y gestión en general; y fortalecer capacidades para las personas que forman parte de la gestión pública o que desarrollan políticas públicas.</p>
			</div>
			<!-- End col 4 -->

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">
				<h6 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-has-border pi-has-tall-border pi-has-short-border">CONTACTO</h6>
				<p>Sed ut perspiciatis 105 unde,amet, consectetur</p>
				<p>+ 511 982332122</p>
				<p>amet,@consectetur.com</p>
	    		<ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered  pi-colored-bg clearFix">
					<li><a href="#" class="pi-social-icon-linkedin"><i class="icon-linkedin"></i></a></li>
					<li><a href="#" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
					<li><a href="#" class="pi-social-icon-youtube"><i class="icon-youtube"></i></a></li>
					<li><a href="#" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
				</ul>
			</div>
			<!-- End col 4 -->
		</div>
		<!-- End row -->
	</div>
</div>
<!-- End widget area -->

<!-- Copyright area -->
<div class="pi-section-w pi-section-header-w pi-section-dark pi-border-top-light pi-border-bottom-strong-base pi-section-header-md-w copy">
	<div class="pi-section pi-section-header pi-section-header-md pi-center-text-2xs pi-clearfix">
		<!-- Text -->
		<span class="pi-header-block pi-pull-center pi-header-block-txt pi-hidden-xs"><span class="pi-text-base pi-weight-600 pi-tooltip pi-tooltip-base">OLAGED 2017</span> - Todos los derechos Reservados.</span>
		<!-- End text -->
	</div>
</div>
<!-- End copyright area -->
<!-- End footer -->
    	
<a href="#" class="pi-scroll-top-arrow pi-active "></a>

<script src="3dParty/jquery-1.11.0.min.js"></script>
<script src="scripts/pi.helpers.js"></script>
<script src="scripts/pi.boundManager.js"></script>
<script src="scripts/pi.imagesLoader.js"></script>
<script src="scripts/pi.columnFix.js"></script>
<script src="scripts/pi.init.caption.js"></script>
<script src="scripts/pi.init.social.js"></script>
<script src="scripts/pi.ddMenu.js"></script>
<script src="scripts/pi.init.removeLastElMargin.js"></script>
<script src="scripts/pi.fixedHeader.js"></script>
<script src="scripts/pi.mobileMenu.js"></script>
<script src="scripts/pi.init.submitFormFooter.js"></script>
<script src="scripts/pi.detectTransition.js"></script>
<script src="scripts/pi.alert.js"></script>
<script src="scripts/pi.init.formsBlurClasses.js"></script>
<script src="scripts/pi.init.placeholder.js"></script>
<script src="3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="scripts/pi.init.colorbox.js"></script>
<script src="3dParty/jquery.easing.1.3.js"></script>
<script src="3dParty/jquery.scrollTo.min.js"></script>
<script src="scripts/pi.init.jqueryScrollTo.js"></script>
<script src="scripts/pi.scrollTopArrow.js"></script>
<script src="3dParty/tweetie/tweetie.min.js"></script>
<script src="scripts/pi.init.tweetie.js"></script>
<script src="3dParty/jquery-1.11.0.min.js"></script>
<script src="scripts/pi.easings.js"></script>
<script src="scripts/pi.helpers.js"></script>
<script src="scripts/pi.boundManager.js"></script>
<script src="3dParty/inview.js"></script>
<script src="scripts/pi.imagesLoader.js"></script>
<script src="scripts/pi.columnFix.js"></script>
<script src="scripts/pi.init.caption.js"></script>
<script src="scripts/pi.slider.js"></script>
<script src="scripts/pi.init.slider.js"></script>
<script src="scripts/pi.detectTransition.js"></script>
<script src="scripts/pi.tooltip.js"></script>
<script src="scripts/pi.init.tooltip.js"></script>
<script src="3dParty/gauge.min.js"></script>
<script src="scripts/pi.counter.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
    	
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.pi-scroll-top-arrow').fadeIn();
            } else {
                $('.pi-scroll-top-arrow').fadeOut();
            }
        });

        $('.pi-scroll-top-arrow').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
</script>

<!-- esto es para deslizar lento SCROLL DOWN-->
<script>
	$(function(){
	    $('a[href*=#]').click(function() {
	    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	            var $target = $(this.hash);
	            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	            if ($target.length) {
	                var targetOffset = $target.offset().top;
	                $('html,body').animate({scrollTop: targetOffset}, 1000);
	                return false;
	            }
	    	}
		});
	});
</script>