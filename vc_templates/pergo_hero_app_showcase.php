<?php
$args = pergo_hero_app_showcase_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'h2-xl txt-500 animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-8
============================================= -->
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-8">
	<div class="row d-flex align-items-center">


		<!-- HERO TEXT -->
		<div class="col-md-7 col-lg-6">
			<div class="hero-txt">

				<!-- Title -->
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>

				<!-- Text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>

				<!-- HERO STORE BADGES -->													
				<div class="hero-stores-badge animated" data-animation="fadeInUp" data-animation-delay="500">
					<?php foreach ($paramsArr as $key => $value) : ?>
						<a href="<?php echo esc_url($value['link']) ?>" class="store">
							<img class="appstore" src="<?php echo esc_url($value['image']) ?>" width="160" height="50" alt="<?php echo esc_attr($value['title']) ?>" />
						</a>
					<?php endforeach; ?>
					<!-- OS Prerequisite -->
					<span class="os-version"><?php echo esc_attr($require) ?></span>
									
				</div>	<!-- End Store Badges -->

			</div>
		</div>	<!-- END HERO TEXT -->


		<!-- HERO IMAGE -->
		<div class="col-md-5 col-lg-5 offset-lg-1 animated" data-animation="fadeInLeft" data-animation-delay="400">	
			<div class="hero-img">				
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
			</div>
		</div>


	</div>	  <!-- End row -->
</div>	<!-- END HERO-8 -->	
