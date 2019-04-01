<?php
$args = pergo_faq_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h5-sm', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', '', 'subtitle', $atts);
?>
<div class="questions-holder ind-30">	
	<div class="question animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>		
		<h5 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>><?php echo esc_attr($title); ?></h5><!-- Question -->
		
		<p class="<?php echo esc_attr($subtitleClass); ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
 			   <?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts); ?>
 		</p><!-- Answer -->
	</div>
</div>
