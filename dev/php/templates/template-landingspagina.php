<?php
/*
Template Name: landingspagina
*/
?>
<?php get_header(); ?>

<div class="contentBackground">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="welcomeTekst">
				<h2>Welkom bij Van Kampen Administratie en Kantoorservice</h2>
			</div>
			<div class="Slider">
	        <?php
	            $args = array(
	                'post_type' => 'slides',
	                'posts_per_page'=>999
	            );
	            $slides = new WP_Query( $args );
	            $num = count($slides);
	            $counter = 0;
	            if( $slides->have_posts() ) {
	                while( $slides->have_posts() ) {
	                    $slides->the_post();
	                    $counter++;
	                    ?>
	                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	                          $image_url = $image[0];
	                    ?>
	                    <div class="slide" style="">
	                        <div class="slider-box">
	                            <h1><?php the_title(); ?></h1>
	                        </div>
	                        <img src="<?php echo $image_url; ?>" />
	                    </div>
	                    <?php
	                }
	            }
	        ?>
	    	</div>
		</div>
			<div class="u-gridRow">
				<div>
					<p>Bij ons kunt u terecht voor al uw verschillende administraties. Van bedrijfsadministraties tot privé-administraties, van belastingaangiften tot jaarwerk en uiteraard kunnen wij u ook voorzien van uitstekend advies op het gebied van belasting- en administratiezaken. Via de contactpagina kunt u zien hoe u ons kunt bereiken. Neem gerust contact op voor een vrijblijvende afspraak. Wij hopen u spoedig te kunnen verwelkomen in ons kantoor.</p>
				</div>
			</div>
	</div>
	<div class="whiteBackground">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="columnBeads">
					<div class="u-gridCol4 columnBeadsAdministratie">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/administratieicon.png">
					</div>
					<div class="u-gridCol4 columnBeadsBelasting">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/belastingicon.png">
					</div>
					<div class="u-gridCol4 columnBeadsAdvies">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/adviesicon.png">
					</div>
				</div>
								<div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>