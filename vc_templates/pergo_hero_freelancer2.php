<?php
$args = pergo_hero_freelancer2_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', '', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-16
============================================= -->
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-16">	
		<div class="row d-flex align-items-center">


			<!-- HERO TEXT -->
			<div class="col-md-6">
				<div class="hero-txt">

					<!-- Title -->
					<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
						<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
					</h2>

					<!-- Text -->
					<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
					   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
					</p>

				</div>	
			</div>	<!-- END HERO TEXT -->


			<!-- HERO IMAGE -->
			<div class="col-md-6">
				<div class="hero-img animated" data-animation="fadeInLeft" data-animation-delay="400">
					<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>" />
				</div>
			</div>


		</div>	<!-- End row -->
</div>	<!-- END HERO-16 -->