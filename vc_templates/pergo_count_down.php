<?php
extract(shortcode_atts(array(
		'date' => '2019/11/23 09:00:00',	
		'datetxt' => 'Days:HRS:MIN:SEC',
		'css_animation' => '',
		'animation_delay' => 300,
), $atts));
wp_enqueue_script('jquery-countdown');
$arr = explode(':', $datetxt);
?>
<div class="animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>	
	<div class="row">						
		<div class="col-md-8 offset-md-2 text-center">							
			<div class="countdown"  data-date="<?php echo esc_attr($date); ?>" data-txt='<?php echo json_encode($arr); ?>'>
				<div id="clock"></div>
			</div>
		</div>	
	</div><!--  COUNTDOWN ELEMENT -->	
</div>	