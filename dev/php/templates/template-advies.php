<?php
/*
Template Name: advies
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
		  <dt class="accordion__title">Ondersteuning financierings aanvraag</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Traject testamentschenking en successie</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  <dt class="accordion__title">Financiële- en fiscale vermogensplanning.</dt>
		  <dd class="accordion__content">
		    <p><b></b></p>
		  </dd>
		  <dt class="accordion__title">Ondersteuning echtscheidingstraject</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		  </dd>
		  <dt class="accordion__title">Hulp en/of volmacht financieel beheer</dt>
		  <dd class="accordion__content">
		    <p><b></b> </p>
		  </dd>
		</dl>

	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
