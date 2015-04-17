<?php
/*
Template Name: particulieren
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
		</article>
		<dl class="accordion">
		  <dt class="accordion__title">Aangifte Inkomstenbelasting</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">bezwaarschriften belastingdienst</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Aanvragen voorlopige aanslagen</dt>
		  <dd class="accordion__content">
		    <p><b></b></p>
		  </dd>
		  <dt class="accordion__title">Aanvragen/Aanpassen diverse toeslagen</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		</dl>
	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
