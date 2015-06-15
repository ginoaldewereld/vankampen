<?php
/*
Template Name: Wie zijn wij
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
	</div>
	<div class="backgroundcoverhead"></div>
	<div class="u-gridContainer">
			<h2>Mogen wij ons even voorstellen?</h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
		<div class="u-gridRow">
			<div class="u-gridCol6 buitenfotos">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkerpetra.png"> 
				
			</div>
			<div class="u-gridCol6 buitenfotos">
				<img id="maxheight" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kantoorbuiten.png">
			</div>
		</div>
	</div>

<?php get_footer(); ?>
