<?php
$args = pergo_card_box_shortcode_vc(true);
$__content = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h5-lg', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'app-cat', 'subtitle', $atts);
?>
<div class="cbox-1 more-item-box animated text-<?php echo esc_attr($align) ?>"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>
	<?php 
	$image_html = '<img class="img-fluid" src="'.esc_url($image).'" alt="'.esc_attr($title).'"><!-- Image -->';
	echo apply_filters('pergo_add_link_filter', $image_html, 'title', $atts); 
	?>
	
	
	<div class="cbox-txt">
		<?php if( $title != '' ): ?>
		<h5 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
			<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>				
		</h5>
		<?php endif; ?>	
		<?php if( $subtitle != '' ): ?>
		<span class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
			<?php echo wpautop(apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts)); ?>				
		</span>
		<?php endif; ?>	
		<?php echo wpautop($__content); ?>
		<?php if( $enable_button == 'yes' ): ?>
			<div class="card-buttons m-top-30">
			<?php 
			$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
			echo pergo_get_button_groups($paramsArr); 
			?>
			</div>
		<?php endif; ?>	
	</div>	<!-- Text -->
</div>