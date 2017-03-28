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
			
	       <div class="footer-bg">
				<div class="container">
				<div class="row ">
				                 <div class="col-sm-4 col-xs-12 no-padding-left"><div class="address"><span>Specialty Glass Products</span>
                                <br> 2885 Terwood Road, Willow Grove,PA
                                <br> 19090 U.S.A.</div></div>
				                 <div class="col-md-4 col-sm-4 col-xs-12"><div class="contact-list">Phone: 215-659-8400 <br> Fax: 215-659-7217 <br/>Email: sales@sgpinc.com</div></div>
				                 <div class="col-md-4 col-sm-4 col-xs-12 iso no-padding-right">
				                         <div class="row">
			                                <div class="col-md-9 col-sm-7 col-xs-12 text-right copy no-padding-right">Copyright &copy; Speciality Glass
			                                    <br> Products 2017. All Rights Reserved</div>
			                                <div class="col-md-3 col-sm-5 col-xs-12 no-padding"><img src="http://globalentechnologies.com/SGP/wp-content/uploads/2017/03/iso.jpg" alt="iso"></div>
			                            </div>
				                 </div>
				</div>
				</div>
           </div>
          <div class="footer-menu">
			<?php get_sidebar( 'footer' ); ?>
	       </div>

			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
