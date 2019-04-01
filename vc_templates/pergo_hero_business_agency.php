<?php
$args = pergo_hero_business_agency_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'h2-lg animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-4
============================================= -->	
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-4">
	<div class="row">

		<!-- HERO TEXT -->
		<div class="col-sm-10 col-md-7">
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
				<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="700">
					<?php echo pergo_get_button_groups($paramsArr) ?>
				</div>	

			</div>
		</div>	<!-- END HERO TEXT -->

	</div>	  <!-- End row -->	
</div>	<!-- END HERO-4 -->
