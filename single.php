<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

<?php
/**
 * MODEL AREA
 * Put any query, variable, calcution etc. here.
 * Unless you really have no other option, you can do within content part
 */
?>	

	<div class="site-content">

		Single Page

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>				

			<?php endwhile; ?>
		<?php endif; ?>

		<?php get_sidebar(); ?>

	</div><!-- .site-content -->

<?php get_footer(); ?>