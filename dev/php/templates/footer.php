	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol2 bezoekadres">
					<h1>Bezoekadres</h1>
					<hr>
					<p>Pastoor Daalmansplantsoen 43</p>
					<p>2771 SH Boskoop</p>
				</div>
				<div class="u-gridCol2 Postadres">
					<h1>Postadres</h1>
					<hr>
					<p>Postbus 251</p>
					<p>2770 AG Boskoop</p>
				</div>
				<div class="u-gridCol6 contactInformatie">
					<h1>Contact & Informatie</h1>
					<hr>
					<div class="u-gridCol1 contactPictogram">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contactpictogram3.png">
					</div>
					<div class="u-gridCol3"> 
					<p>0172 - 210 145</p>
					<p>0172 - 210 229</p> 
					<p>info@kampen-ak.nl</p> 
					</div>
					<div class="u-gridCol3">
					<p>Btw nr: 0212 42549 B01</p>
					<p>Kvk nr: 290 33260</p>
					</div class="noablogo">
					<div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noablogo2.png">
					</div>
					<div class="u-gridCol2 googleplay">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.png">
					</div>
				</div>
				<div class="u-gridCol2 footersitemap">
					<h1>Sitemap</h1>
					<hr>
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<?php endif; ?>
				</div>
				
			</div>
		</div>
	</div>


	<div class="Socket"> 
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
