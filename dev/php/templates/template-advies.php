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
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
		<dl class="accordion">
		  <dt class="accordion__title">Keuze van de bedrijfsvorm</dt>
		  <dd class="accordion__content">
		    <p><b>Wanneer wordt een BV interessant of juist niet meer. Moeten we risico’s gaan spreiden over meer ondernemingen.</b> </p>
		  </dd>
		  <dt class="accordion__title">Bedrijfsopvolging</dt>
		  <dd class="accordion__content">
		    <p><b>Zijn er kinderen die het bedrijf over kunnen en willen nemen of moeten we buiten de familie gaan kijken. Hoe gaan we dat vorm geven.</b> </p>
		  </dd>
		  <dt class="accordion__title">Samenlevingsvormen</dt>
		  <dd class="accordion__content">
		    <p><b>Samenwonen of huwelijk. Wanneer is een notarieel samenlevingscontract wenselijk. Wat brengt ieder in en moeten er eventueel huwelijksvoorwaarden gemaakt worden en wat moet daar dan in staan.</b></p>
		  </dd>
		  <dt class="accordion__title">Echtscheiding</dt>
		  <dd class="accordion__content">
		    <p><b>Wat zijn de wensen van beide partners. Welke zaken vallen buiten de boedel en zijn dus persoonlijk in verband met huwelijkse voorwaarden of zijn er schenkingen en erfenissen ontvangen van ouders die alleen aan de eigen kinderen zijn gedaan en waar de partner dus is uitgesloten.  Er moet een echtscheidingsconvenant opgesteld worden waarin de verdeling wordt vastgelegd. Zijn er nog minderjarige kinderen dan moet er ook een ouderschapsplan worden opgesteld. </b> </p>
		  </dd>
		  </dd>
		  <dt class="accordion__title">Vermogens- en estateplanning</dt>
		  <dd class="accordion__content">
		    <p><b>Hoe krijgen ouders hun vermogen zo fiscaal gunstig mogelijk bij de kinderen terwijl ze zelf nog wel voor de rest van hun leven over voldoende geld kunnen blijven beschikken. </b> </p>
		  </dd>
		  <dt class="accordion__title">Testament</dt>
		  <dd class="accordion__content">
		    <p><b>Een goed testament is hierbij van groot belang. Daar sommige testamenten al tientallen jaren oud zijn kan het verstandig zijn om eens te bekijken of wat er in staat nog wel voldoet aan de huidige wensen. Nieuwe wetgeving kan ook een reden zijn om het testament aan te passen.</b> </p>
		  </dd>
		</dl>

	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
