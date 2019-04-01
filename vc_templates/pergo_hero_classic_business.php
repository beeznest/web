<?php
$args = pergo_hero_classic_business_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h3-xl txt-500 animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-18
============================================= -->
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-18">

	<!-- HERO TEXT -->
	<div class="row">
		<div class="col-md-12">
			<div class="hero-txt text-center white-color">

				<!-- Title -->
				<h3 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h3>

				<!-- Text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>						

				<!-- VIDEO PREVIEW -->
				<div class="video-preview hero-img m-top-60 animated" data-animation="fadeInUp" data-animation-delay="600">	

					<!-- Change the link HERE!!! -->						
					<a class="video-popup2" href="<?php echo esc_url($video_link) ?>" title="<?php echo esc_attr($video_title) ?>"> 

						<!-- Play Icon -->
						<div class="video-btn-lg animated" data-animation="fadeInUp" data-animation-delay="800">	
							<div class="video-block-wrapper">
								<div class="play-icon-<?php echo pergo_default_color(); ?>"><div class="ico-bkg"></div>
									<i class="fas fa-play-circle"></i>
								</div>
							</div>
						</div>

						<!-- Preview Image -->
						<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($video_title) ?>">

					</a>

 				</div>	<!-- END VIDEO PREVIEW -->

			</div>
		</div>
	</div>	<!-- END HERO TEXT -->
</div>	<!-- END HERO-18 -->	
