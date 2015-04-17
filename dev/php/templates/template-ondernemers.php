<?php
/*
Template Name: ondernemers
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
		  <dt class="accordion__title">Financiële Administratie</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Loonadministratie</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Samenstellen jaarrekening</dt>
		  <dd class="accordion__content">
		    <p><b></b></p>
		  </dd>
		  <dt class="accordion__title">Vennootschapsbelasting</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Publicatie jaarrekening bij KvK</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  </dd>
		  <dt class="accordion__title">Tussentijdje Rapportages</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		</dl>
	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
