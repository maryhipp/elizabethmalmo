<?php get_header(); ?>
<div class="slider">
<?php while ( have_rows('slider') ) : the_row(); ?>

	<li style="background-image:url(<?php the_sub_field('image'); ?>)"></li>

<?php endwhile; ?>
</div>	
<?php get_footer(); ?>