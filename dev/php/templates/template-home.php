<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<div class="contentBackground">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="welcomeTekst">
				<h2>Welkom bij van Kampen Administraties en Kantoorservice</h2>
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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
				</div>
			</div>
	</div>
	<div class="whiteBackground">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="columnBeads">
					<div class="u-gridCol4 columnBeadsAdministratie">
						<a href="http://vankampen.lokaalgevonden.nl/administratie/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homebuttonadministratie.png"></a>
					</div>
					<div class="u-gridCol4 columnBeadsBelasting">
						<a href="http://vankampen.lokaalgevonden.nl/belasting/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homebuttonbelastingen.png"></a>
					</div>
					<div class="u-gridCol4 columnBeadsAdvies">
						<a href="http://vankampen.lokaalgevonden.nl/advies/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homebuttonadvies.png"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>