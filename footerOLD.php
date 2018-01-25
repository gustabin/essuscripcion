<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Manténte en contacto</span>
						</div>
						<div class="col-md-4">
						  <div class="newsletter">
								<h4>Suscribete</h4>
								<p><a href="registrar.php" style=" color: #09F"> Registrate</a>
                                 hoy y recibe tres (3) d&igrave;as GRATIS de nuestro servicio además podrás disfrutar de una nueva edición diaria de nuestro periodico en formato PDF.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contáctanos</h4>
								<ul class="contact">
									<li><p align="right"><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana, Maracay, Aragua, Venezuela</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Teléfono:</strong> (0243) 554-4867</p></li>
									<li><p><i class="fa fa-envelope"></i><strong>Correo:</strong> <a href="mailto:contacto@essuscripcion.com">escribenos </a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<h4>Siguenos</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://es-la.facebook.com/elsiglocomve" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://twitter.com/elsiglocomve" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="youtube"><a href="http://www.youtube.com/user/elsiglocomve" target="_blank" data-placement="bottom" rel="tooltip" title="Youtube">Youtube</a></li>
                                    <li class="instagram"><a href="http://instagram.com/elsiglocomve" target="_blank" data-placement="bottom" rel="tooltip" title="Instagram">Instagram</a></li>                                    
								</ul> 
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="mailto:gustavoarias@outlook.com" class="logo">
									<!--img alt="el siglo por suscripción" class="img-responsive" src="img/logos/logotabin.png"!-->
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>

		<script src="vendor/bootstrap/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
        <script src="js/jquery.validate.js" type="text/javascript" language="javascript" ></script>   
		<!--script src="vendor/jquery.validation/jquery.validation.js"></script!-->
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script> 
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owlcarousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/jquery.vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Specific Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
        
        <!-- super especiales -->
          <script type="text/javascript" language="javascript" src="js/jquery.validate.js"></script>
  		  <script type="text/javascript" language="javascript" src="js/jquery.ui.datepicker.js"></script>
		  <script type="text/JavaScript" language="javascript" src="js/jquery.ui.core.js"></script>
		  <script type="text/JavaScript" language="javascript" src="js/jquery.ui.widget.js"></script>
		  <script type="text/JavaScript" language="javascript" src="js/datepiker_lenguaje.js"></script>
		  <script type="text/JavaScript" language="javascript" src="js/jquery.maskedinput.js"></script>
        
        

		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-42715764-5']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
        
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "",
				html: "<strong>el siglo</strong><br>Aragua, Venezuela ",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 10.256244;  
			var initLongitude = -67.618897;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: true,
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				//markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 18
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>

	</body>

</html>