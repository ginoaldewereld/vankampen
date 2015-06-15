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
		  <dt class="accordion__title">Financiële administratie</dt>
		  <dd class="accordion__content">
		    <p><b>Doet u nog steeds zelf uw administratie en boekt u alle facturen en bonnetjes nog in en doet u ook uw eigen btw aangifte? Denkt u dat u alle aftrekposten meeneemt en niets vergeet? Besteed uw administratie toch aan ons uit en gebruik de vrijgekomen tijd om extra omzet voor uw bedrijf te genereren. Minder sores voor u en u weet dat uw administratie bij ons in goede handen is. Wij werken voornamelijk met de administratiepakketten van Exact Globe en Exact Online. Met dit laatste pakket kunnen wij in heel veel vormen samenwerken met de klant, waarbij we in overleg met u bepalen wat u toch wel graag zelf wilt doen en waarmee wij u kunnen helpen. 
			Indien we samen gaan werken met Exact Online kunt u ten allen tijden meekijken of deels zelf boeken  in uw administratie en zien hoe u er voor staat, wie er nog moet betalen enz.  U kunt desgewenst ook uw in- en verkoopfacturen uploaden waarna wij ze op de juiste plek in de administratie zetten. Uw zakelijke bankrekeningen kunnen wij direct koppelen waarna de mutaties iedere nacht automatisch worden ingelezen in het pakket. Hoeveel simpeler wilt u het hebben?
			Uiteraard verzorgen wij dan ook de periodieke btw aangifte voor u.
			</b> </p>
		  </dd>
		  <dt class="accordion__title">Tussentijdse rapportages</dt>
		  <dd class="accordion__content">
		    <p><b>Wilt u periodiek een rapportage hebben hoe uw onderneming er voorstaat, dan is dat voor ons geen enkel probleem.  Wilt u een vergelijking van uw huidige cijfers met uw budget of juist met het voorgaande jaar? Of wilt u weten welke debiteuren er nog moeten betalen? U vraagt en wij draaien. Indien we in Exact Online samenwerken kunt u dergelijke rapportages zelfs dagelijks opvragen.</b> </p>
		  </dd>
		  <dt class="accordion__title">Loonadministratie</dt>
		  <dd class="accordion__content">
		    <p><b>Heeft u personeel in dienst dan geeft dat voor u weer extra werk en zorgen. Wij kunnen u daarbij helpen door voor u de gehele loonadministratie te verzorgen, vanaf het opstellen van het contract tot de loonstaten en de periodieke aangiften aan belastingdienst en pensioenfonds.</b> </p>
		  </dd>
		  <dt class="accordion__title">Samenstellen jaarrekening en publicatiestukken</dt>
		  <dd class="accordion__content">
		    <p><b>Is het jaar  ten einde dan wilt u toch wel graag weten wat u dat jaar heeft verdiend en hoe u er financieel voor staat. Na afloop van het boekjaar stellen wij voor u dan ook een rapport inzake de jaarrekening op, welke tevens als basis dient voor de aangifte inkomsten- of vennootschapsbelasting. Tevens verzorgen wij voor BV’s  de jaarlijkse publicatiestukken voor de Kamer van Koophandel en versturen wij deze digitaal voor u via de  SBR snelweg.</b></p>
		  </dd>
		  <dt class="accordion__title">Inkomsten en vennootschapsbelasting</dt>
		  <dd class="accordion__content">
		    <p><b>Uiteindelijk moet er  ieder jaar ook nog aangifte gedaan worden van het bedrijfsresultaat en uw overige inkomsten, waarbij we uiteraard alle aftrekposten mee zullen nemen van zowel uw BV als van u zelf.   Blijkt er ook nog recht te zijn op zorgtoeslag dan zullen we dat ook gelijk voor u in orde maken.</b> </p>
		  </dd>
		  <dt class="accordion__title">SBR kredietrapportages</dt>
		  <dd class="accordion__content">
		    <p><b>Wellicht heeft u ook al een brief van uw bank gehad dat ze de jaarstukken voortaan niet meer op papier willen hebben of in gescand als PDF , maar dat u ze vanaf 2017 alleen nog maar digitaal via SBR aan mag leveren op straffe van een forse jaarlijkse kosten post. Wij hebben al in het beginstadium van deze ontwikkeling hierin geparticipeerd en wij zijn in het bezit van het bronzen predicaat van het banken RapportagePortaal!</b> </p>
		  </dd>
		  </dd>
		  <dt class="accordion__title">Ondersteuning financieringsaanvragen</dt>
		  <dd class="accordion__content">
		    <p><b>Wilt u een nieuwe onderneming starten? Heeft u uitbreidingsplannen of wilt u een pand kopen? Heeft u daarvoor financiering nodig? Dan helpen wij u graag bij het opstellen van prognoses, ondernemingsplannen en de onderhandelingen met de bank.</b> </p>
		  </dd>
		  </dd>
		  <dt class="accordion__title">Verklaringen NIWO</dt>
		  <dd class="accordion__content">
		    <p><b>Bent u een eigen rijder of gebruikt u vrachtwagens binnen uw onderneming en heeft u een NIWO verklaring nodig? Weet dan dat wij als NOAB kantoor dergelijke verklaringen, zowel nieuwe als verlengingen, voor u kunnen en mogen verzorgen. </b> </p>
		  </dd>
		  </dd>
		</dl>
	<?php endwhile; endif; ?>
	</div>
	</div>

<?php get_footer(); ?>
