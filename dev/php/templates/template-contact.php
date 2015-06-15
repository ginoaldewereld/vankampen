<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text content">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>van Kampen Administraties en Kantoorservice</p>
								<p>Pastoor Daalmansplantsoen 43</p>
								<p>2771 SH Boskoop</p>
								<a href="mailto:info@kampen-ak.nl"><p>Email: info@kampen-ak.nl</p></a>
								<a href="tel:0172210145"><p>Tel: 0172210145</p></a>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<di class="u-gridRow">
						<div class="u-gridCol12">
							<h2>Routebeschrijvingen</h2>
							<dl class="accordion">
							  <dt class="accordion__title">Vanaf de A12 (uit de richting van Utrecht)</dt>
							  <dd class="accordion__content">
							    <p><b>U neemt afslag naar de N11 richting Bodegraven, Alphen aan den Rijn, Leiden. Op de N11 neemt u vervolgens de afslag naar de N207 richting Boksoop en Gouda. <br> Op de N207 neemt u de afslag Boskoop. Aan het einde van de afslag gaat u naar rechts, richting het centrum en u gaat de hefbrug over. <br> Op deze weg gaat u rechtdoor. Bij de eerste rotonde gaat u ook rechtdoor. Bij de tweede rotonde gaat u linksaf richting Boskoop-Snijdelwijk en Waddinxveen. Deze weg gaat u weer rechtdoor, totdat u de volgende rotonde tegenkomt. Bij deze rotonde gaat u wederom linksaf (de dijk af). <br> Vervolgens neemt u de eerste weg links (u ziet ons pand al aan uw linkerhand liggen), dan neemt u weer de eerste links en vervolgens het eerste parkeerterrein aan uw linkerhand hoort bij ons pand. Als het parkeerterrein vol is kunt u ook op het grote parkeerterrein aan uw rechterhand parkeren.</b> </p>
							  </dd>
							  <dt class="accordion__title">Vanaf de A12 (uit de richting van Den Haag)</dt>
							  <dd class="accordion__content">
							    <p><b>U neemt de afslag naar de N209 richting Benthuizen, Alphen aan den Rijn, Boskoop. <br> De N209 volgt u totdat u bij een rotonde komt daar gaat u rechtdoor, dan vervolgt u de weg tot nog een rotonde (u bent dan al in Boskoop). Bij deze rotonde gaat u rechtsaf. Dan komt u weer bij een rotonde en daar gaat u linksaf (de dijk af). <br> Vervolgens neemt u de eerste weg links (u ziet ons pand al aan uw linkerhand liggen), dan neemt u weer de eerste links en vervolgens het eerste parkeerterrein aan uw linkerhand hoort bij ons pand. Als het parkeerterrein vol is kunt u ook op het grote parkeerterrein aan uw rechterhand parkeren.</b> </p>
							  </dd>
							  <dt class="accordion__title">Vanaf de A4 (uit de richting van Amsterdam)</dt>
							  <dd class="accordion__content">
							    <p><b>Neem bij Leiden de afslag N11 richting Zoeterwoude Rijndijk, Alphen aan den Rijn, Utrecht. <br> Op de N11 neemt u de afslag naar de N209 richting Hazerswoude, Koudekerk aan den Rijn, Zoetermeer. Aan het einde van de N209 komt u een rotonde tegen en daar gaat u naar links, de N455 op richting Boskoop. Dan komt u vanzelf weer bij een rotonde. Bij deze rotonde gaat u rechtsaf. <br> Daarna komt u weer bij een rotonde en daar gaat u linksaf (de dijk af). Vervolgens neemt u de eerste weg links (u ziet ons pand al aan uw linkerhand liggen), dan neemt u weer de eerste links en vervolgens het eerste parkeerterrein aan uw linkerhand hoort bij ons pand. Als het parkeerterrein vol is kunt u ook op het grote parkeerterrein aan uw rechterhand parkeren.</b></p>
							  </dd>
							  <dt class="accordion__title">Vanaf de A4 (uit de richting van Den Haag)</dt>
							  <dd class="accordion__content">
							    <p><b>De route is hetzelfde als dat u uit de richting van Amsterdam komt, want op de A4 moet u ook de afslag naar de N11 hebben richting Zoeterwoude Rijndijk, Alphen aan den Rijn en Utrecht.</b> </p>
							  </dd>
							  </dd>
							  <dt class="accordion__title">vanaf de A20 (uit de richting van Rotterdam):</dt>
							  <dd class="accordion__content">
							    <p><b>Vanaf de A20 bij Gouda vervolgt u uw weg op de A12. Op de A12 neemt u afslag Gouda, Boskoop en u vervolgt uw weg op de N452 richting Waddinxveen en Boskoop. <br> Als u deze weg vervolgt, komt u bij een kruising met de hefbrug van Waddinxveen en die gaat u over, dus u gaat daar naar links. Vervolgens neemt u de eerste afslag naar rechts. Die weg vervolgt u. U gaat daarbij Waddinxveen uit en daarna komt u Boskoop in. <br> Dan komt u bij een kruising en daar gaat u naar links. Die weg volgt u en die maakt ter hoogte van de Hoogvliet een bocht naar rechts en die gaat u mee. Verderop maakt de weg een bocht naar links en die gaat u ook mee en dan gaat u het spoor over. Over het spoor blijft u rechtdoor gaan, verderop maakt de weg een bocht naar rechts en direct daarna een bocht naar links. <br> In die bocht naar links is een zijweg naar rechts. Die gaat u in (u ziet ons pand al rechtdoor / aan uw linkerhand liggen). Daarna neemt u de eerste straat links en vervolgens het eerste parkeerterrein aan uw linkerhand hoort bij ons pand. Als het parkeerterrein vol is kunt u ook op het grote parkeerterrein aan uw rechterhand parkeren.</b> </p>
							  </dd>
							  <dt class="accordion__title">Kaarten</dt>
							  <dd class="accordion__content">
							    <p><b>De kaartjes worden van boven naar beneden steeds gedetailleerder. Alle kaartjes worden in een nieuw scherm geopend. Vanuit dat scherm kunt u de kaartjes ook printen. De kaartjes zijn zodanig gemaakt, dat ze precies op een vel passen als u ze print. <br> Onze straatnaam is op de kaartjes niet te zien, omdat het maar een kleine straat is, maar wij bevinden ons op de hoek van de Snijdelwijklaan en de Puttelaan, zoals ook aangegeven staat in de kaartjes.</b> </p> <br>
							  	<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/kaart1.png" target="_blank"><li>Kaart van de regio</li></a>
							  	<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/kaart1.png" target="_blank"><li>Kaart van Boskoop</li></a>
							  	<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/kaart-west-boskoop-3.png" target="_blank"><li>Kaart van west-Boskoop</li></a>
							  	<a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/kaart-snijdelwijk-4.png" target="_blank"><li>Kaart van de wijk waar wij gevestigd zijn</li></a>
							  </dd>
							  <dt class="accordion__title">Openbaar Vervoer</dt>
							  <dd class="accordion__content">
							  	<p><b>Uiteraard kun u ons ook met het openbaar vervoer bereiken. Vanaf Gouda en Leiden gaan de bussen 186 en 187 door Boskoop en stoppen (redelijk) vlakbij ons pand. U moet ofwel halte Snijdelwijklaan hebben ofwel halte Ritzema Bosstraat. Bus 186 rijdt alleen langs de laatsgenoemde halte en bus 187 rijdt overdag langs halte Snijdelwijklaan en vanaf 18.00 uur langs halte Ritzema Bosstraat.</b></p> <br>
							  	<p><b>Vanaf Den Haag rijdt bus 382 naar Boskoop. Deze bus komt ook langs halte Snijdelwijklaan.</b></p> <br>
							  	<p><b>Vanaf Gouda en Alphen aan den Rijn kunt u met de lightrail naar het station van Boskoop en vanaf daar kunt u met bus 382 naar halte Snijdelwijklaan. Om uw precieze treinroute te plannen, ga naar <a href="http://9292.nl/" target="_blank">de site van 9292</a>.</b></p> <br>
							  	<p><b>Vanaf halte Snijdelwijklaan loopt u de dijk af naar beneden (evenwijdig aan de flat) en onderaan ligt ons pand aan uw linkerhand. U moet dan nog even om ons pand heen lopen om bij de kantoorbel te komen.</b></p> <br>
							  	<p><b>Vanaf halte Ritzema Bosstraat loopt u weg van de hoogvliet met aan uw linkerhand een flat. U volgt de weg en komt dan vanzelf het spoor over. U vervolgt daarna de weg verder en deze maakt een stuk verderop dan een bocht naar rechts en direct daarna een bocht naar links (de weg slingerd tussen de flats door). In de bocht naar links is een zijweg naar rechts en die loopt u in. U ziet dan al ons pand voor u liggen, maar u moet nog even naar de andere kant lopen, want daar zit de kantoorbel.</b></p> <br>
							  </dd>
							</dl>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
		</article>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>