<?php
$args = pergo_hero_business_consultancy_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
$titleClass = apply_filters('perch_vc_class_filter', 'h2-lg animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-lg animated', 'lead_text', $atts);
?>
<div class="hero-class" data-class="hero-section division" data-section_id="hero-6">
	
	<div class="bg-scroll hero-6-text division"<?php echo $style ?>>
		<div class="container">		
			<div id="hero-6-content" class="row white-color">
				<div class="col-md-10 offset-md-1 hero-txt text-center">

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
		</div>	 <!-- End container -->		
	</div> 	  <!-- END HERO TEXT -->	
	

</div>	<!-- END HERO-6 -->
<!-- HERO IMAGE -->
<div class="hero-6-image division animated" data-animation="fadeInUp" data-animation-delay="600">
	<div class="container">		
		<div id="hero-6-img" class="row">								
			<div class="col-md-12 text-center">																		
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
			</div>							
		</div>												
	</div>
</div> 