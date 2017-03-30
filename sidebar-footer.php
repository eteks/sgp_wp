<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage sgpinc_wp
 * @since sgpinc wp 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-4' )  ) : ?>
	<div id="secondary" class="footer-widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .sidebar .widget-area -->
<?php endif; ?>
