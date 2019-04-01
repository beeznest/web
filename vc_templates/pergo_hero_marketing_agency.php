<?php
$args = pergo_hero_marketing_agency_shortcode_vc(true);
$__content = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
$titleClass = apply_filters('perch_vc_class_filter', 'h2-lg txt-600 animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-11
============================================= -->	
<div class="hero-class white-color" data-class="hero-section division" data-section_id="hero-11">

	<!-- HERO-11 TEXT -->
	<div id="hero-11-txt" class="bg-scroll division"<?php echo $style ?>>
		<div class="container">	
			<div class="row ">


				<!-- HERO TEXT -->
				<div class="col-md-10 offset-md-1">
					<div class="hero-txt text-center">

						<!-- Title -->
						<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
							<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
						</h2>

						<!-- Text -->
						<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
						    <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
						</p>

					</div>
				</div>	<!-- END HERO TEXT -->


			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 	
	</div>	 <!-- END HERO-11 TEXT -->


	<!-- HERO-11 INNER CONTENT -->	
	<div class="container">	
		<div class="animated" data-animation="fadeInUp" data-animation-delay="600">		
			<?php echo wpb_js_remove_wpautop( $__content ); ?> 
	 	</div>
	</div> 	<!-- END HERO-11 INNER CONTENT -->


</div>	<!-- END HERO-11 -->
