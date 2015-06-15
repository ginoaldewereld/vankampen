<?php
/*
Template Name: nieuwsen
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
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

		<div class="u-gridRow">
			<div class="u-gridCol12">
				<p>U kunt hier onze nieuswbrief van de NOAB vinden. Deze brief komt 5 keer per jaar uit en staat vol met intressante zaken op gebied van administraties en belasting zaken.</p>
			</div>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6 nieuwsbrieven">
				<h1>2014</h1>
				<ul>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-01-AanDeOrde-2014-1-HR-def.pdf"><li>Nieuwsbrief nr. 1 2014</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-02-AanDeOrde-2014-2.pdf"><li>Nieuwsbrief nr. 2 2014</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-03-AanDeOrde-2014-3.pdf"><li>Nieuwsbrief nr. 3 2014</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-04-AanDeOrde-2014-4.pdf"><li>Nieuwsbrief nr. 4 2014</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-05-AanDeOrde-2014-5-Eindejaarstips.pdf"><li>Nieuwsbrief nr. 5 2014</li></a>					
				</ul>
			</div>
			<div class="u-gridCol6 nieuwsbrieven">
				<h1>2013</h1>
				<ul>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-01-AanDeOrde-2013-1.pdf"><li>Nieuwsbrief nr. 1 2013</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-02-AanDeOrde-2013-2.pdf"><li>Nieuwsbrief nr. 2 2013</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-03-AanDeOrde-2013-3.pdf"><li>Nieuwsbrief nr. 3 2013</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-04-AanDeOrde-2013-4.pdf"><li>Nieuwsbrief nr. 4 2013</li></a>
					<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-05-AanDeOrde-2013-5.pdf"><li>Nieuwsbrief nr. 5 2013</li></a>
				</ul>
			</div>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6 nieuwsbrieven">
				<h2>Persberichten</h2>
				<p>Van Kampen Administraties & Kantoorservice ontvangt bronzen predicaat voor <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/SBR-Kredietrapportage-Van-Kampen-Boskoop-foto.pdf">SBR-rapportages</a>. Bekijk hier ook de videoregistratie van het SBR-interview.</p>
				
			</div>
		</div>








	</div>

<?php get_footer(); ?>
