<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<?php
	/**
	* Main loop. If not altered its the latest posts.
	* In CMS usage this generally changes with custom queries
	*/
?>
	<div class="site-content">

		Default Page

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>				

			<?php endwhile; ?>
		<?php endif; ?>

		<?php get_sidebar(); ?>

	</div><!-- .site-content -->

<?php get_footer(); ?>