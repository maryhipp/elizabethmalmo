<?php
/**
 * Template Name: Template - Generic
 * Description: Generic Sub Page Template
 *
 * @package WordPress
 * @subpackage themename
 */

get_header();the_post(); ?>
<div class="page-generic mid-cont">
	<h1 class="title"><?php the_title() ?></h1>
	<?php if (is_page('contact') || is_page('about')) { ?>
		<div class="content table">
			<?php $image = wp_get_attachment_url( get_post_thumbnail_id() ) ?>
			<div class="table-cell half" style="background-image:url(<?php echo $image ?>)"></div>
			<div class="table-cell half"><?php the_content(); ?></div>
		</div>
	<?php } ?>
	
	<?php if (is_page('social')) { ?>
		<div id="instafeed"></div>
	<?php } ?>
	
	<?php if (is_page('projects')) { ?>
		<?php $projects = new WP_query(array('post_type' => 'projects', 'posts_per_page' => -1)) ?>
		<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
		<?php $image = wp_get_attachment_url( get_post_thumbnail_id() ) ?>
			<a class="project" href="<?php the_permalink() ?>" style="background-image:url(<?php echo $image ?>)">
				<h3><?php the_title() ?></h3>
			</a>
		<?php endwhile; ?>
	<?php } ?>
</div>
<?php get_footer(); ?>
