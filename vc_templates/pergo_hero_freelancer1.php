<?php
$args = pergo_hero_freelancer1_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h4-lg txt-300', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'h4-lg txt-300', 'lead_text', $atts);
?>
<!-- HERO-10
============================================= -->	
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-10">
	<div class="row">

		<!-- HERO TEXT -->
		<div class="col-md-12">
			<div class="hero-txt text-center">
				<!-- Title -->
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>
				<!-- Text -->
				<h4 class="<?php echo esc_attr($subtitleClass) ?>"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>><?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?></h4>
			</div>
		</div>	<!-- END HERO TEXT -->

	</div>	  <!-- End row -->
</div>	<!-- END HERO-10 -->
