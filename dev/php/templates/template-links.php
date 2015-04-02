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
				<a href="http://www.belastingdienst.nl"><li>De Belastingdienst</li></a>
				<a href="http://www.detelefoongids.nl/bedrijven/2-1/"><li>De Gouden Gids</li></a>
				<a href="http://www.rechtspraak.nl/Pages/default.aspx"><li>Jurisprudentie</li></a>
				<a href="http://www.kvk.nl/"><li>Kamers van Koophandel</li></a>
				<a href="http://www.minszw.nl"><li>Ministerie van Sociale Zaken en Werkgelegenheid</li></a>
				<a href="http://www.minez.nl"><li>Ministerie van Economische Zaken</li></a>
				<a href="http://www.mkb.nl"><li>MKB Nederland</li></a>
				<a href="http://www.noab.nl"><li>Nederlandse Orde van Administratie- en Belastingdeskundigen</li></a>
				<a href="http://www.overheid.nl"><li>Overheid</li></a>
			</ul>
		</div>
		<div class="u-gridCol6 links-foto">	
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linksfoto.jpg">
		</div>
	</div>
<?php get_footer(); ?>
