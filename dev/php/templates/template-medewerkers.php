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
			<h2>Personeel</h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
		<div class="u-gridCol12">
			<h1>Directrice en uw adviseuze</h1>
			<hr>
		</div>
		<div class="u-gridCol5">
			<div class="container">
			  	<div class="keynote">
			    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/petra1.png">
			    	<div class="keynote-desc">
			     		<p class="keynote-name">Petra van Kampen</p>
			     		<p class="keynote-bio">Petra werkt van maandag tot en vrijdag van 9.00 uur tot 17.00 uur, maar legt regelmatig cliëntbezoeken af en is daardoor niet altijd op kantoor te vinden. <a href="mailto:Petra.vkampen@kampen-ak.nl" class="more">Mail Petra</a></p>
			   		</div>
			  	</div>
			</div>
		</div>
		<div class="u-gridCol11 jaarstukken">
			<h1>Administratie en aangifte omzetbelasting</h1>
			<hr>
		</div>
		<div class="u-gridCol6">
			<div class="container">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coby.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Coby Bakker</p>
				     	<p class="keynote-bio">Coby is tevens onze bureaumanager. Coby werkt op dinsdag tot en met vrijdag van 8.30 uur tot 17.00 uur.<a href="mailto:Coby.bakker@kampen-ak.nl" class="more">Mail Coby</a>
				    </div>
				</div>
			</div>
		</div>
		<div class="u-gridCol5">
			<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/irena.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Irena Jonker</p>
				     	<p class="keynote-bio">Irena werkt maandag, dinsdag, donderdag en vrijdag van 8.30 uur tot 17.00 uur.<a href="mailto:Irena.jonker@kampen-ak.nl" class="more">Mail Irena</a>
				    </div>
			</div>
		</div>
		<div class="u-gridCol11 jaarstukken">
			<h1>De jaarstukken, inkomstenbelasting en vennootschapbelasting</h1>
			<hr>
		</div>
		<div class="u-gridCol6">
			<div class="container">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jan.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Jan van Veen</p>
				     	<p class="keynote-bio">Jan werkt van maandag tot en met vrijdag van 8.30 uur tot 17.00 uur.<a href="mailto:jan.vveen@kampen-ak.nl" class="more">Mail Jan</a>
				    </div>
				</div>
			</div>
		</div>
		<div class="u-gridCol5">
			<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sjon.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Sjon Hoogendijk</p>
				     	<p class="keynote-bio">Sjon is onregelmatig aanwezig op ons kantoor en heeft geen vaste werktijden.<a href="mailto:s.hoogendijk@kampen-ak.nl" class="more">Mail Sjon</a>
				    </div>
			</div>
		</div>
		<div class="u-gridCol6 jaarstukken">
			<h1>De salarisadministratie</h1>
			<hr>
		</div>
		<div class="u-gridCol5 jaarstukken">
			<h1>Webmaster en PR-medewerker</h1>
			<hr>
		</div>
		<div class="u-gridCol6">
			<div class="container">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/henk.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Henk Stellaart</p>
				     	<p class="keynote-bio">Henk werkt van maandag tot en met woensdag van 8.30 uur tot 17.30 uur.<a href="mailto:Henk.stellaart@kampen-ak.nl" class="more">Mail Henk</a>
				    </div>
				</div>
			</div>
		</div>
		<div class="u-gridCol6">
			<div class="container">
				<div class="keynote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marielle.png">
				    <div class="keynote-desc">
				     	<p class="keynote-name">Mariëlle van Kampen</p>
				     	<p class="keynote-bio"><a href="mailto:webmaster@kampen-ak.nl" class="more">Mail Mariëlle</a>
				    </div>
				</div>
			</div>
		</div>








	</div>

<?php get_footer(); ?>
