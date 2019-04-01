<?php
$args = pergo_inner_content_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$order = ( $position == 'yes' )? ' order-md-last order-lg-last' : '';
$text_align = ( $position == 'yes' )? ' ' : ' text-right';
$extraclass = ( $position == 'yes' )? 'image-right '.$bg : 'image-left '.$bg;
$titleClass = apply_filters('perch_vc_class_filter', 'h3-xs animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-md animated', 'lead_text', $atts);
?>
<div class="hero-inner-block <?php echo esc_attr($extraclass) ?>">	
	<div class="row d-flex align-items-center">


 	<!-- HERO INNER IMAGE -->
	<div class="col-md-6 col-lg-6<?php echo esc_attr($order) ?>">
		<div class="hero-inner-img video-preview">

			<?php if($enable_video == 'yes'): ?>						
			<a class="video-popup2" href="<?php echo esc_url($url) ?>"> 

				<!-- Play Icon -->									
				<div class="video-btn-md animated" data-animation="fadeInUp" data-animation-delay="600">	
					<div class="video-block-wrapper">
						<div class="play-icon-<?php echo pergo_default_color(); ?>"><div class="ico-bkg"></div>
							<i class="fas fa-play-circle"></i>
						</div>
					</div>
				</div>

				<!-- Preview Image -->
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>" />

			</a>
			<?php else: ?>
				<!-- Preview Image -->
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>" />
			<?php endif; ?>	

 		</div>
	</div>


 	<!-- HERO INNER TEXT -->
 	<div class="col-md-6 col-lg-6">
 		<div class="hero-inner-txt <?php echo esc_attr($text_align) ?>">

 			<!-- Section ID -->	
 			<span class="section-id animated" data-animation="fadeInUp" data-animation-delay="1000">
 			   <?php echo esc_attr($subtitle) ?>
 			</span>

 			<!-- Title -->	
			<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="1000"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
			   <?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
			</h3>

			<!-- Text -->
			<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
			    <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
			</p>

			<!-- Button -->
			<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="1300">
				<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
			</div>									

 		</div>
 	</div>	  <!-- END HERO INNER TEXT -->


	</div>	
</div>  