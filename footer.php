<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Polmo
 */

?>


		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /#main-content -->

<!-- Footer Section -->

<footer id="colophon" class="footer site-footer" role="contentinfo">

	<div class="footer-social text-center">
		<div class="social-contact">
			<div class="col-xs-4">
				<div class="social-item wow animated fadeInRight" data-wow-delay=".75s">
					<div class="section-padding">
						<div class="social-icon">
							<i class="fa fa-facebook"></i>
						</div><!-- /.social-icon -->
						<div class="countdown">
							<span class="count-number counter">1,203</span>
						</div><!-- /.coundown -->
						<span class="about-item">likes</span>
					</div><!-- /.section-padding -->
				</div><!-- /.social-item -->
			</div>

			<div class="col-xs-4">
				<div class="social-item wow animated fadeInRight" data-wow-delay=".55s">
					<div class="section-padding">
						<div class="social-icon">
							<i class="fa fa-twitter"></i>
						</div><!-- /.social-icon -->
						<div class="countdown">
							<span class="count-number counter">2,305</span>
						</div><!-- /.coundown -->
						<span class="about-item">followers</span>
					</div><!-- /.section-padding -->
				</div><!-- /.social-item -->
			</div>

			<div class="col-xs-4">
				<div class="social-item wow animated fadeInRight" data-wow-delay=".35s">
					<div class="section-padding">
						<div class="social-icon">
							<i class="fa fa-dribbble"></i>
						</div><!-- /.social-icon -->
						<div class="countdown">
							<span class="count-number counter">1,101</span>
						</div><!-- /.coundown -->
						<span class="about-item">fans</span>
					</div><!-- /.section-padding -->
				</div><!-- /.social-item -->
			</div>
		</div><!-- /.social-contact -->
	</div><!-- /.footer-social -->


	<div class="footer-top">
		<div class="section-padding">
			<div class="container">
				<div class="row">

					<?php 
					if ( is_active_sidebar( 'footer-sidebar' ) ) { 
						dynamic_sidebar('footer-sidebar'); 
					} else{
						get_sidebar();
					}
					?>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.section-padding -->
	</div><!-- /.footer-top -->

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-menu pull-left">
				<?php 
				if ( is_active_sidebar( 'footer-menu' ) ) { 
					dynamic_sidebar('footer-menu'); 
				} 
				?>

			</div><!-- /.footer-menu -->
			
			<?php echo jeweltheme_polmo_footer_credit();?>

		</div><!-- /.container -->
	</div><!-- /.footer-bottom -->
</footer><!-- /#colophon -->

<!-- Footer Section -->



<div id="scroll-to-top" class="scroll-to-top">
	<span>
		<i class="fa fa-chevron-up"></i>    
	</span>
</div><!-- /#scroll-to-top -->


<?php wp_footer(); ?>

</body>
</html>
