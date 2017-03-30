<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage sgpinc_wp
 * @since sgpinc wp 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer-wrap" role="contentinfo">
			
	      
          <div class="footer-menu">
			<?php get_sidebar( 'footer' ); ?>
	       </div>

			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
