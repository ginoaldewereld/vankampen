<?php
/*
Template Name: nieuwsbrief-2
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<article>
			<h2 id="nieuwstitel">Nieuwsbrief</h2>
		</article>

		<div class="u-gridCol12 nieuwsbrieven">
			<p>U kunt hier onze nieuwsbrief van de NOAB vinden, deze brief komt vijf keer per jaar uit.</p>
		</div>
		<div class="u-gridRow accordionsnieuws">
			<div class="u-gridCol4 wrapper">
	    		<div class="dropdown">
	      			<label data-value="">Kies een nieuwsbrief 2015</label>
	     			 <ul>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/AanDeOrde-2015-1-LR-def.pdf" target="_blank"><li data-value="1">Nieuwsbrief nr.1 2015</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/AanDeOrde-2015-2-LR.pdf" target="_blank"><li data-value="2">Nieuwsbrief nr.2 2015</li></a>
				       	<a href=""><li data-value="3"></li></a>
				        <a href=""><li data-value="4"></li></a>
				        <a href=""><li data-value="5"></li></a>
				      </ul>
	    		</div>
	  		</div>
			<div class="u-gridCol4 wrapper">
	    		<div class="dropdown">
	      			<label data-value="">Kies een nieuwsbrief 2014</label>
	     			 <ul>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-01-AanDeOrde-2014-1-HR-def.pdf" target="_blank"><li data-value="1">Nieuwsbrief nr.1 2014</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-02-AanDeOrde-2014-2.pdf" target="_blank"><li data-value="2">Nieuwsbrief nr.2 2014</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-03-AanDeOrde-2014-3.pdf" target="_blank"><li data-value="3">Nieuwsbrief nr.3 2014</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-04-AanDeOrde-2014-4.pdf" target="_blank"><li data-value="4">Nieuwsbrief nr.4 2014</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-05-AanDeOrde-2014-5-Eindejaarstips.pdf" target="_blank"><li data-value="5">Nieuwsbrief nr.5 2014 met eindejaars tips</li></a>
				      </ul>
	    		</div>
	  		</div>
			<div class="u-gridCol4 wrapper-drie">
	    		<div class="dropdown">
	      			<label data-value="">Kies een nieuwsbrief 2013</label>
	     			 <ul>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-01-AanDeOrde-2013-1.pdf" target="_blank"><li data-value="1">Nieuwsbrief nr.1 2013</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-02-AanDeOrde-2013-2.pdf" target="_blank"><li data-value="2">Nieuwsbrief nr.2 2013</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-03-AanDeOrde-2013-3.pdf" target="_blank"><li data-value="3">Nieuwsbrief nr.3 2013</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-04-AanDeOrde-2013-4.pdf" target="_blank"><li data-value="4">Nieuwsbrief nr.4 2013</li></a>
				        <a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2013-05-AanDeOrde-2013-5.pdf" target="_blank"><li data-value="5">Nieuwsbrief nr.5 2013 (eindejaars special)</li></a>
				      </ul>
	    		</div>
	  		</div>
	  	</div>
  		<div class="u-gridRow">
  			<div class="u-gridCol9">
  				<br>
  				<br>
  				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
			  			<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</div>

		<div class="u-gridRow">
			<div class="u-gridCol6 rss">
				<h2>Elsevier Fiscaal Nieuws</h2>
				<hr>
				<ul class="rssfeed">
					<?php RSSImport(10, 'http://www.elsevierfiscaal.nl/rss-outbound/nieuws','','','',false,200,' ... ','',' ... ',
					' <small>',false,'</small>',' <small>',false,'</small>','<li>','</li>','','<li>','</li>','blank'); ?>
				</ul>
			</div>
			<div class="u-gridRow6 rss">
				<h2>Persbericht</h2>
				<hr>
				<p><b><a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/2014-05-AanDeOrde-2014-5-Eindejaarstips.pdf" target="_blank">Van Kampen Administraties & Kantoorservive ontvangt <br> bronzen predicaat voor SBR-rapporteages</b></p></a>
				<br>
				<p>Bekijk <a href="http://www.sbrweb.nl/rapportages/kredietrapportage/referenties/48-ketentestkampen?utm_source=Zilveren%20predicaat&utm_campaign=SBR%20Zilveren%20predicaat&utm_medium=socialshare" target="_blank"><b>hier</b></a> de de videoregistratie van het SBR-interview</p>
			</div>
		</div>
		<br>
		<div class="u-gridRow">
			<div class="u-gridCol6 rss">
				<h2>Belastingsdienst Nieuws particulieren</h2>
				<hr>
				<ul class="rssfeed">
					<?php RSSImport(10, 'http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/berichten/nieuws/rss/nieuwsfeed_actueel_particulier.xml','','','',false,200,' ... ','',' ... ',
					' <small>',false,'</small>',' <small>',false,'</small>','<li>','</li>','','<li>','</li>','blank'); ?>
				</ul>
			</div>
			<div class="u-gridCol6 rss">
				<h2>Belastingsdienst Nieuws ondernemers</h2>
				<hr>
				<ul class="rssfeed">
					<?php RSSImport(10, 'http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/berichten/nieuws/rss/nieuwsfeed_actueel_zakelijk.xml','','','',false,200,' ... ','',' ... ',
					' <small>',false,'</small>',' <small>',false,'</small>','<li>','</li>','','<li>','</li>','blank'); ?>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

