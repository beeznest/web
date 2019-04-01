<?php
$args = pergo_hero_creative_business_shortcode_vc(true);
$__content = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
$titleClass = apply_filters('perch_vc_class_filter', 'h2-xs txt-400 animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg animated', 'lead_text', $atts);
?>
<div class="hero-class" data-class="hero-section" data-section_id="hero-13">	

	<!-- HERO TEXT -->
	<div id="hero-13-txt" class="bg-scroll division"<?php echo $style ?>>
		<div class="container white-color">	
			<div class="row">
				<div class="col-md-7">
					<div class="hero-txt">
								
						<!-- Title -->
						<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
							<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
						</h2>

						<!-- Text -->
						<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
						   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
						</p>

						<!-- Button -->
						<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="600">
							<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
						</div>

					</div>	
				</div>	
			</div>
		</div>
	</div>	   <!-- END HERO TEXT -->


	<!-- HERO DISCOUNT BANNER -->
	<div class="container">	
		<div class="row">
			<div class="col-md-5 col-lg-4 offset-md-7 offset-lg-8">
				
				<div class="animated" data-animation="fadeInUp" data-animation-delay="700">
					<?php echo wpb_js_remove_wpautop( $__content ); ?> 
				</div>	
			</div>	
		</div>
	</div>	   <!-- END HERO DISCOUNT BANNER -->

</div>	<!-- END HERO-13 -->	
