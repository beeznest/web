<?php
$args = pergo_hero_slide_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO SLIDE #1 -->
<li class="hero-slide">
					
	<!-- Title -->	
	<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
		<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>	   
	</h2>
					
	<!-- Text -->
	<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="500"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
	   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
	</p>
																																	
	<!-- Button -->
	<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="700">
		<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
	</div>													
						
</li>	 <!-- END HERO SLIDE #1 -->	