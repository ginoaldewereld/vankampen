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
		  <dt class="accordion__title">Aangifte inkomstenbelasting</dt>
		  <dd class="accordion__content">
		    <p><b>Ziet u ieder jaar weer op tegen de hele heisa die hoort bij de belastingaangifte? Geef het dan aan ons uit handen!  Kijk <i><b><a href="http://vankampen.lokaalgevonden.nl/downloads-2/" target="_blank">hier voor de bijgaande checklist</i></b></a> en kijk wat er voor u van toepassing is. Stuur die stukken aan ons op en wij verzorgen uw aangifte. Voeg alle zaken bij waarvan u maar denkt dat ze aftrekbaar zijn. Wij zullen alles beoordelen  en alle aftrekbare posten uiteraard meenemen in de aangifte.</b> </p>
		  </dd>
		  <dt class="accordion__title">Toeslagen</dt>
		  <dd class="accordion__content">
		    <p><b>Denkt u dat u recht heeft op zorgtoeslag, huurtoeslag, kinderopvang toeslag of kind gebonden budget en heeft u moeite om dit zelf aan te vragen? Vraag ons om hulp en wij doen het voor u!</b> </p>
		  </dd>
		  <dt class="accordion__title">Voorlopige aanslagen</dt>
		  <dd class="accordion__content">
		    <p><b>Als u jaarlijks een forse aftrekpost heeft, bijvoorbeeld door betaalde hypotheekrente, dan kan het zinvol zijn om de verwachte belastingteruggave  eerder te krijgen dan pas na het indienen van de aangifte het jaar erop. Wij kunnen u daarbij helpen door al in de loop van het jaar een voorlopige teruggave aan te vragen welke u dan in maandelijkse termijnen krijgt uitbetaald. Andersom, als u altijd moet bijbetalen door bijvoorbeeld meerdere werkgevers en/of uitkeringen, of een groot vermogen,  dan kunnen wij u helpen door een aanvraag in te dienen waarbij u het bij te betalen bedrag ook over de maanden van het jaar uit mag smeren.</b> </p>
		  </dd>
		  <dt class="accordion__title">Bezwaarschriften</dt>
		  <dd class="accordion__content">
		    <p><b>Heeft u een aanslag gehad die afwijkt van wat u ervan verwacht had, dan gaan we samen met u kijken wat daarvan de oorzaak is. Blijkt de aanslag dan toch niet correct te zijn dan zullen we voor u bezwaar gaan maken bij de belastingdienst.</b> </p>
		  </dd>
		  <dt class="accordion__title">Hulp bij financieelbeheer</dt>
		  <dd class="accordion__content">
		    <p><b>Lijkt uw administratie op een schoenendoos en wilt u alles eens uitgezocht hebben? Bent u alleenstaand en hebt u moeite met het beheren van uw financiën? Zoekt u daarbij hulp van een vertrouwd iemand? We komen met plezier regelmatig bij u langs om een en ander samen door te nemen en waar nodig kunnen wij u dit zelfs uit handen nemen.</b> </p>
		  </dd>
		  <dt class="accordion__title">Schenkbelasting</dt>
		  <dd class="accordion__content">
		    <p><b>Wilt u geld schenken aan uw kinderen dan kunnen wij voor u de noodzakelijke schenkingsovereenkomsten maken en de aangifte schenkbelasting verzorgen. </b></p>
		  </dd>
		  <dt class="accordion__title">Erfbelasting</dt>
		  <dd class="accordion__content">
		    <p><b>Na het overlijden van een dierbare kunnen wij u behulpzaam zijn bij het invullen van de aangifte erfbelasting.</b> </p>
		  </dd>
		</dl>
	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
