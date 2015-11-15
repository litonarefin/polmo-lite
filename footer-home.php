<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Polmo
 */

$jeweltheme_polmo_map_contact_center = get_theme_mod('jeweltheme_polmo_map_contact_center',__('-37.817331, 144.955652','jeweltheme_polmo'));
$jeweltheme_polmo_map_contact_lat_lang = get_theme_mod('jeweltheme_polmo_map_contact_lat_lang',__('23.709921, 90.407143','jeweltheme_polmo'));
$jeweltheme_polmo_socials_facebook = get_theme_mod('jeweltheme_polmo_socials_facebook',__('1,203','jeweltheme_polmo'));
$jeweltheme_polmo_socials_twitter = get_theme_mod('jeweltheme_polmo_socials_twitter',__('2,305','jeweltheme_polmo'));
$jeweltheme_polmo_socials_dribbble = get_theme_mod('jeweltheme_polmo_socials_dribbble',__('1,101','jeweltheme_polmo'));
?>



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
							<span class="count-number counter">
								<?php echo __("1,203","jeweltheme_polmo");?>
							</span>
						</div><!-- /.coundown -->
						<span class="about-item">
							<?php echo __("Likes","jeweltheme_polmo");?>
						</span>
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
							<span class="count-number counter">
								<?php echo __("2,305","jeweltheme_polmo");?>
							</span>
						</div><!-- /.coundown -->
						<span class="about-item">
							<?php echo __("Followers","jeweltheme_polmo");?>
						</span>
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
							<span class="count-number counter">
								<?php echo __("1,101","jeweltheme_polmo");?>
							</span>
						</div><!-- /.coundown -->
						<span class="about-item">
							<?php echo __("Fans","jeweltheme_polmo");?>
						</span>
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
						echo "No Sidebar here, please add Sidebar";
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

  <script>
		/*
		!function(e){"use strict";e(".bxslider").bxSlider({auto:!0,preloadImages:"all",mode:"horizontal",captions:!1,controls:!0,pause:4e3,speed:1200,onSliderLoad:function(){e(".bxslider>li .slide-inner").eq(1).addClass("active-slide"),e(".slide-inner.active-slide .slider-title").addClass("wow animated bounceInDown"),e(".slide-inner.active-slide .slide-description").addClass("wow animated bounceInRight"),e(".slide-inner.active-slide .btn").addClass("wow animated zoomInUp")},onSlideAfter:function(i,n,t){console.log(t),e(".active-slide").removeClass("active-slide"),e(".bxslider>li .slide-inner").eq(t+1).addClass("active-slide"),e(".slide-inner.active-slide").addClass("wow animated bounceInRight")},onSlideBefore:function(){e(".slide-inner.active-slide").removeClass("wow animated bounceInRight"),e(".one.slide-inner.active-slide").removeAttr("style")}}),e(document).ready(function(){function i(){return"ontouchstart"in document.documentElement}function n(){if("undefined"!=typeof google){var n={center:[-37.817331,144.955652],zoom:15,mapTypeControl:!0,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU},navigationControl:!0,scrollwheel:!1,streetViewControl:!0};i()&&(n.draggable=!1),e("#googleMaps").gmap3({map:{options:n},marker:{latLng:[23.709921,90.407143],options:{icon:"images/mapicon.png"}}})}}e("#masthead #main-menu").onePageNav(),n()}),e("#contactform").on("submit",function(i){i.preventDefault(),$this=e(this),e.ajax({type:"POST",url:$this.attr("action"),data:$this.serialize(),success:function(){alert("Message Sent Successfully")}})})}(jQuery);
		*/

		! function(e) {
			"use strict";
			e(".bxslider").bxSlider({
				auto: !0,
				preloadImages: "all",
				mode: "horizontal",
				captions: !1,
				controls: !0,
				pause: 4e3,
				speed: 1200,
				onSliderLoad: function() {
					e(".bxslider>li .slide-inner").eq(1).addClass("active-slide"), e(".slide-inner.active-slide .slider-title").addClass("wow animated bounceInDown"), e(".slide-inner.active-slide .slide-description").addClass("wow animated bounceInRight"), e(".slide-inner.active-slide .btn").addClass("wow animated zoomInUp")
				},
				onSlideAfter: function(i, n, t) {
					console.log(t), e(".active-slide").removeClass("active-slide"), e(".bxslider>li .slide-inner").eq(t + 1).addClass("active-slide"), e(".slide-inner.active-slide").addClass("wow animated bounceInRight")
				},
				onSlideBefore: function() {
					e(".slide-inner.active-slide").removeClass("wow animated bounceInRight"), e(".one.slide-inner.active-slide").removeAttr("style")
				}
			}), e(document).ready(function() {
				function i() {
					return "ontouchstart" in document.documentElement
				}

				function n() {
					if ("undefined" != typeof google) {
						var n = {
							center: [<?php echo esc_attr($jeweltheme_polmo_map_contact_center);?>],
							zoom: 15,
							mapTypeControl: !0,
							mapTypeControlOptions: {
								style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
							},
							navigationControl: !0,
							scrollwheel: !1,
							streetViewControl: !0
						};
						i() && (n.draggable = !1), e("#googleMaps").gmap3({
							map: {
								options: n
							},
							marker: {
								latLng: [<?php echo esc_attr($jeweltheme_polmo_map_contact_lat_lang);?>],
								options: {
									icon: "<?php echo get_template_directory_uri();?>/images/mapicon.png"
								}
							}
						})
					}
				}
				e("#masthead #main-menu").onePageNav(), n()
			}), e("#contactform").on("submit", function(i) {
				i.preventDefault(), $this = e(this), e.ajax({
					type: "POST",
					url: $this.attr("action"),
					data: $this.serialize(),
					success: function() {
						alert("Message Sent Successfully")
					}
				})
			})
		}(jQuery);


  </script>

</body>
</html>
