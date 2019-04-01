<?php
$args = pergo_hero_slide_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'h4-lg txt-400 animated', 'lead_text', $atts);
?>

<li class="hero-slide">
			
	<!-- Slide Text -->
	<div class="hero-content white-color">

		<!-- Title -->
		<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
			<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
		</h2>

		<!-- Text -->
		<h4 class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
		   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
		</h4>

		<!-- Buttons -->
		<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="600">
			<?php echo pergo_get_button_groups($paramsArr, 'tra-hover m-left-15 m-right-15') ?>
		</div>	
																																					
	</div>
		
	<!-- Slide Background Image  -->
	<img src="<?php echo esc_url($image) ?>" alt="hero-slider">
									
</li>	<!-- END SLIDE #1 -->