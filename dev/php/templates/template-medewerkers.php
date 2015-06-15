<?php
/*
Template Name: Medewerkers
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
	</div>
	<div class="backgroundcoverhead"></div>
<div class="u-gridContainer">

			<h1>Medewerkers</h1>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
		<br>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
			  	<div class="keynote">
			    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkerpetra2.png">
			    	<div class="keynote-desc">
			     		<p class="keynote-name">Petra van Kampen</p>
			     		<p class="keynote-bio">Petra van Kampen is de kantoorleider en verzorgt daarnaast het meeste advieswerk voor de klanten. Petra werkt van maandag tot en met vrijdag.<a href="mailto:Petra.vkampen@kampen-ak.nl" class="more">Mail Petra</a></p>
			   		</div>
			  	</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Petra van Kampen is de kantoorleider en verzorgt daarnaast het meeste advieswerk voor de klanten. Petra werkt van maandag tot en met vrijdag.</b></p>
			</div>
		</div>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkersjon.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Sjon Hoogendijk</p>
				     	<p class="keynote-bio">Sjon Hoogendijk verzorgt jaarwerk en belastingaangiften en doet ook advieswerk aan klanten. Sjon werkt meestal op woensdag  en verder op afspraak.<a href="mailto:s.hoogendijk@kampen-ak.nl" class="more">Mail Sjon</a>
				    </div>
				</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Sjon Hoogendijk verzorgt jaarwerk en belastingaangiften en doet ook advieswerk aan klanten. Sjon werkt meestal op woensdag  en verder op afspraak.</b></p>
			</div>
		</div>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkejan.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Jan van Veen</p>
				     	<p class="keynote-bio">Jan van Veen verzorgt jaarrekeningen en belastingaangiften. Jan werkt van maandag tot en met vrijdag.<a href="mailto:jan.vveen@kampen-ak.nl" class="more">Mail Jan</a>
				    </div>
				</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Jan van Veen verzorgt jaarrekeningen en belastingaangiften. Jan werkt van maandag tot en met vrijdag.</b></p>
			</div>
		</div>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkerhenk.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Henk Stellaart</p>
				     	<p class="keynote-bio">Henk Stellaart verzorgt alle loonadministraties en de particuliere aangiften inkomstenbelasting. Henk werkt van maandag tot en met woensdag.<a href="mailto:Henk.stellaart@kampen-ak.nl" class="more">Mail Henk</a>
				    </div>
				</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Henk Stellaart verzorgt alle loonadministraties en de particuliere aangiften inkomstenbelasting. Henk werkt van maandag tot en met woensdag.</b></p>
			</div>
		</div>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkerirena.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Irena Jonker</p>
				     	<p class="keynote-bio">Irena Jonker verzorgt zowel klantadministraties en btw aangiften, als jaarwerk en belastingaangiften. Irena werkt op maandag, dinsdag, donderdag en vrijdag.<a href="mailto:Irena.jonker@kampen-ak.nl" class="more">Mail Irena</a>
				    </div>
				</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Irena Jonker verzorgt zowel klantadministraties en btw aangiften, als jaarwerk en belastingaangiften. Irena werkt op maandag, dinsdag, donderdag en vrijdag.</b></p>
			</div>
		</div>
		<div class="u-gridCol12 jaarstukken">
			<hr>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol6">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medewerkercoby.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Coby Bakker</p>
				     	<p class="keynote-bio">Coby Bakker verzorgt onze eigen administratie alsmede  de administraties en btw aangiften van klanten. Coby werkt op maandag, woensdag, donderdag en vrijdag.<a href="mailto:Coby.bakker@kampen-ak.nl" class="more">Mail Coby</a>
				    </div>
				</div>
			</div>
			<div class="u-gridCol6 padding">
				<p><b>Coby Bakker verzorgt onze eigen administratie alsmede  de administraties en btw aangiften van klanten. Coby werkt op maandag, woensdag, donderdag en vrijdag.</b></p>
			</div>
		</div>
</div>

<?php get_footer(); ?>
