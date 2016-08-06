<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<h1 class="title"><?php the_title(); ?></h1>

		<ul class="masonry-container mid-cont">
			<?php while ( have_rows('images') ) : the_row(); 
				$image = get_sub_field('image');
				$caption = get_sub_field('caption'); ?>
				<a rel="project" class="masonry-item fancybox" href="<?php echo $image ?>">
					<img src="<?php echo $image ?>">
				</a>
				<div class="my-fancybox-title" style="display: none">
					<?php if ($caption) { ?>
						<p><?php echo $caption ?></p>
					<?php } ?>
				</div>
				
			<?php endwhile; ?>
		</ul>
	<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
