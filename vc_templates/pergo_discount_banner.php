<?php
$args = pergo_discount_banner_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$dark_color_class = pergo_default_dark_color_classes();
if( in_array($bg_class, $dark_color_class) ){
	$bg_class .= ' white-color';	
}
$titleClass = apply_filters('perch_vc_class_filter', 'h2-xl animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-xl animated', 'lead_text', $atts);
?>
<div class="discount-banner <?php echo esc_attr($bg_class) ?>">							
	<!-- Title -->
	<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="900"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
	   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts); ?>
	</p>

	<!-- Text -->
	<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="1000"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
	   <?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts); ?>
	</h2>

	<!-- Buttons -->
	<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="1200">
		<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
	</div>
</div>