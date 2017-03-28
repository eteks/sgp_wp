<?php
/**
 * Template Name: Full Width Template
 *
 * @package WordPress
 * @subpackage sgpincwp
 * @since sgpincwp 1.0
 */
 __( 'Full Width Template', 'sgpincwp' );

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>