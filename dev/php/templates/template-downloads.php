<?php
/*
Template Name: Downloads
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		<div class="u-gridRow">
			<div class="u-gridCol12">
				<h5> Gegevens aangifte inkomstenbelasting </h5>
				<br>
				<p>Download hier de documenten om uw aangifte belasting formulier in te vullen.</p>
				<br>
				<ul>
					<li><b><a href="http://vankampen.lijktmeduidelijk.nl/files/2015/03/Checklist-IB-2013.doc" target="_blank">Gegevens aangifte inkomstenbelasting 2013</a></b></li>
					<li><b><a href="http://vankampen.lijktmeduidelijk.nl/files/2015/04/checklist_ib_2014.docx" target="_blank">Gegevens aangifte inkomstenbelasting 2014</a></b></li>
				</ul>
			</div>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol12">
				<br>
				<h5>Leveringsvoorwaarden</h5>
				<br>
				<p>Hieronder zijn de leveringsvoorwaarden van de NOAB die wij volgen. Bekijk het document met de link hieronder.</p>
				<br>
				<ul>
					<li><b><a href="https://www.noab.nl/sites/default/files/visual_select_file/noab_leveringsvoorwaarden-2014_0.pdf" target="blank_">NOAB - leveringsvoorwaarden</a></b></li>
				</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
