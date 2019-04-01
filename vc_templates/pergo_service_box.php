<?php
$args = pergo_service_box_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$icon_html = '';
if( $icon_type == 'flaticon' ){
	$icon_html = '<span class="flaticon '.esc_attr($icon).'"></span><!-- Icon -->';
}
if( $icon_type == 'fontawesome' ){
	$icon_html = ($icon_2 != '')? '<span class="flaticon"><i class="fa-5x '.esc_attr($icon_2).'"></i></span><!-- Icon -->' : '';
}
if( ($icon_type == 'image') && ( $icon_image != '' ) ){
	$icon_html = '<span class="sbox-icon-img img-fluid"><img src="'.esc_url($icon_image).'" alt="'.esc_attr($title).'" width="'.esc_attr($image_width).'"></span><!-- Icon -->';
}
if(!$icon_color)  $icon_color = 'grey';

$titleClass = apply_filters('perch_vc_class_filter', 'h5-md', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'grey-color', 'subtitle', $atts);

//$href = vc_build_link( $title_url ); print_r($href) ;
?>

<!-- SERVICE BOX #1 -->
<div class="sbox <?php echo esc_attr($align) ?> animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>
	<?php if( $style == 'sbox-1' ): ?>
	<div class="sbox-1 box-icon-md <?php echo esc_attr($icon_color) ?>-icon">
		<?php echo force_balance_tags($icon_html); ?>
		<div class="sbox-1-txt">
			<h5 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
				<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts); ?>					
			</h5>
			<div class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>><?php echo wpautop(apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts)); ?></div>
		</div><!-- Text -->
	</div>
	<?php endif; ?>	

	<?php if( $style == 'sbox-2' ): 
		$icon_html = apply_filters('pergo_add_link_filter', $icon_html, 'title', $atts);
		?>
	<div class="sbox-2 box-icon-md <?php echo esc_attr($icon_color) ?>-icon">
		<?php echo force_balance_tags($icon_html); ?>
		<h5 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?></h5>
			<div class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>><?php echo wpautop(apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts)); ?></div>
	</div>	
	<?php endif; ?>

	<?php if( $style == 'sbox-4' ): ?>
	<div class="sbox-4 box-icon <?php echo esc_attr($icon_color) ?>-icon">	
		<?php echo force_balance_tags($icon_html); ?>
		<div class="sbox-4-txt">
			<h5 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts); ?></h5><!-- Title -->
			<?php if( $subtitle != '' ): ?>	
			<div class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>><?php echo wpautop(apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts)); ?></div><!-- Text -->
			<?php endif; ?>	
		</div>
	</div>	
	<?php endif; ?>	

	<?php if( $style == 'sbox-6' ):
		$titleClass = apply_filters('perch_vc_class_filter', 'h4-md', 'title', $atts); 
		$icon_html = apply_filters('pergo_add_link_filter', $icon_html, 'title', $atts);
		?>
	<div class="sbox-6 box-icon-lg <?php echo esc_attr($icon_color) ?>-icon">			
		<?php echo force_balance_tags($icon_html); ?>
		<h4 class="<?php echo esc_attr($titleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?><?php //echo pergo_parse_text($title, array('before' => '<br>')) ?></h4><!-- Title -->
		<?php if( $subtitle != '' ): ?>	
		<div class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>><?php echo wpautop(apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts)); ?></div><!-- Text -->
		<?php endif; ?>	
	</div>	
	<?php endif; ?>						
</div>
