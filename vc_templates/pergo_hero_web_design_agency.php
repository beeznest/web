<?php
$args = pergo_hero_web_design_agency_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$titleClass = apply_filters('perch_vc_class_filter', 'h2-lg animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-3
============================================= -->	
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-3">
		<div class="row">

			<!-- HERO TEXT -->
			<div class="col-lg-12">
				<div class="hero-txt text-center">

					<!-- Title -->
					<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300" <?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					   <?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
					</h2>

					<!-- Text -->
					<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="500"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
					   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
					</p>

					<!-- Play Button -->
					<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="700">
						<div class="video-btn-sm">

							<!-- Change the link HERE!!! -->
							<a class="video-popup1" href="<?php echo esc_url($video_link) ?>" title="<?php echo esc_attr($video_title) ?>"> 
								<div class="video-block-wrapper">
									<div class="play-icon-rose"><div class="ico-bkg"></div>
										<i class="fas fa-play-circle"></i>
									</div>
								</div>
							</a>

						</div>
					</div>	

					<!-- Play Button Text -->
					<span class="play-btn-txt animated" data-animation="fadeInUp" data-animation-delay="800">
					   <?php echo esc_attr($video_title) ?>
					</span>

				</div>
			</div>	<!--END  HERO TEXT -->


		</div>	 <!-- End row -->				
</div>	<!-- END HERO-3 -->	
