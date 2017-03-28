<?php
/**
 * Template Name: Full Width Wide Template
 *
 * @package WordPress
 * @subpackage Jolene
 * @since Jolene 1.0
 */
 __( 'Full Width Wide ', 'jolene' );

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>