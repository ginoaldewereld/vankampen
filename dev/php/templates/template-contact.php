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
								<p>Van Kampen</p>
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