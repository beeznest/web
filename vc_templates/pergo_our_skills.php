<?php
$args = pergo_our_skills_shortcode_vc(true);
$args['content'] = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'h3-sm animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'section-id animated', 'subtitle', $atts);
?>
<div class="row d-flex align-items-center">
 	<!-- ABOUT TEXT -->
 	<div class="col-md-6">
 		<div class="about-txt ind-30">
 			<!-- Section ID -->	
 			<span class="<?php echo esc_attr($subtitleClass); ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'subtitle', $atts) ?>>
 			   <?php echo apply_filters('perch_modules_text_filter', $subtitle, 'subtitle', $atts); ?>
 			</span>
 			<!-- Title -->	
			<h3 class="<?php echo esc_attr($titleClass); ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
			   <?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts); ?>
			</h3>
			<!-- Text -->
			<div class="animated" data-animation="fadeInUp" data-animation-delay="500">
			   <?php echo wpautop($content); ?>
			</div>			
 		</div>
 	</div>	  <!-- END ABOUT TEXT -->

 	<?php if( !empty($paramsArr) ): $animation_duration = 400; ?>
 	<!-- ABOUT SKILLS -->
	<div class="col-md-6">
		<div class="about-skills ind-30">
			<!-- SKILLS -->	
			<div class="skills rose-progress m-top-30">
				<?php foreach ($paramsArr as $key => $value): ?>
					<div class="barWrapper animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_duration) ?>">	
						<p><?php echo esc_attr($value['title']) ?></p>
						<span class="skill-percent"><?php echo intval($value['count']) ?>%</span> 
						<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo intval($value['count']) ?>" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<?php $animation_duration = $animation_duration + 200; ?>
				<?php endforeach; ?>
			</div>	<!-- END SKILLS -->	

 		</div>
	</div>
	<?php endif; ?>	
</div>	   <!-- End row -->	