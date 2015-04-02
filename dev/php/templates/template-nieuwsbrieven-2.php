<?php
/*
Template Name: nieuwsbrief-2
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<article >
			<h2>Nieuwsbrief</h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>

		<div class="u-gridCol12 nieuwsbrieven">
			<p>U kunt hier onze nieuwsbrief van de NOAB vinden, deze brief komt vijf keer per jaar uit.</p>
		</div>
		<div class="u-gridCol5 wrapper">
    		<div class="dropdown">
      			<label data-value="">Kies een nieuwsbrief 2014</label>
     			 <ul>
			        <a href="http://www.kampen-ak.nl/AanDeOrde-2014-1-HR-def.pdf"><li data-value="1">Nieuwsbrief nr.1 2014</li></a>
			        <li data-value="2">Nieuwsbrief nr.2 2014</li>
			        <li data-value="3">Nieuwsbrief nr.3 2014</li>
			        <li data-value="4">Nieuwsbrief nr.4 2014</li>
			        <li data-value="5">Nieuwsbrief nr.5 2014 met eindejaars tips</li>
			      </ul>
    		</div>
  		</div>
  		<div class="u-gridCol2">hier moet nog wat opvulling</div>
		<div class="u-gridCol5 wrapper">
    		<div class="dropdown">
      			<label data-value="">Kies een nieuwsbrief 2013</label>
     			 <ul>
			        <li data-value="1">Nieuwsbrief nr.1 2013</li>
			        <li data-value="2">Nieuwsbrief nr.2 2013</li>
			        <li data-value="3">Nieuwsbrief nr.3 2013</li>
			        <li data-value="4">Nieuwsbrief nr.4 2013</li>
			        <li data-value="5">Nieuwsbrief nr.5 2013 (eindejaars special)</li>
			      </ul>
    		</div>
  		</div>

	</div>
<?php get_footer(); ?>
