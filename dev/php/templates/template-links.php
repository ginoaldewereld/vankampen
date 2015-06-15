<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
	</div>
	<div class="backgroundcoverhead"></div>
	<div class="u-gridContainer">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
		<div class="u-gridCol6 links-list">
			<ul>
				<a href="http://www.belastingdienst.nl" target="_blank"><li>De Belastingdienst</li></a>
				<a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/belastingdienst/prive/toeslagen/index.html" target="_blank"><li>Belastingdienst Toeslagen</li></a>
				<a href="http://www.detelefoongids.nl/bedrijven/2-1/" target="_blank"><li>De Gouden Gids</li></a>
				<a href="http://www.rechtspraak.nl/Pages/default.aspx" target="_blank"><li>Jurisprudentie</li></a>
				<a href="http://www.kvk.nl/" target="_blank"><li>Kamers van Koophandel</li></a>
				<a href="http://www.minez.nl" target="_blank"><li>Ministerie van Economische Zaken</li></a>
				<a href="http://www.minszw.nl" target="_blank"><li>Ministerie van Sociale Zaken en Werkgelegenheid</li></a>
				<a href="http://www.mkb.nl" target="_blank"><li>MKB Nederland</li></a>
				<a href="http://www.noab.nl" target="_blank"><li>Nederlandse Orde van Administratie- en Belastingdeskundigen</li></a>
				<a href="http://www.overheid.nl" target="_blank"><li>Overheid</li></a>
				<a href="http://www.rvo.nl/" target="_blank"><li>Rijksdienst voor Ondernemend Nederland</li></a>
				<br>
				<br>
				<br>
			</ul>
		</div>
		<div class="u-gridCol6 links-foto">	
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotolink.jpg">
		</div>
	</div>
<?php get_footer(); ?>
