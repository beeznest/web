<?php
$args = pergo_hero_startup_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$titleClass = apply_filters('perch_vc_class_filter', 'txt-500 animated', 'title', $atts);
$subtitleClass = apply_filters('perch_vc_class_filter', 'p-hero animated', 'lead_text', $atts);
?>
<!-- HERO-1
============================================= -->	
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-1">	
	<div class="row">

		<!-- HERO TEXT -->
		<div class="col-md-10 offset-md-1">
			<div class="hero-txt text-center">
				<!-- Title -->
				<h2 class="<?php echo esc_attr($titleClass) ?>" data-animation="fadeInUp" data-animation-delay="300"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'title', $atts) ?>>
					<?php echo apply_filters('perch_modules_text_filter', $title, 'title', $atts) ?>
				</h2>
				<!-- Text -->
				<p class="<?php echo esc_attr($subtitleClass) ?>" data-animation="fadeInUp" data-animation-delay="400"<?php echo apply_filters('perch_vc_inline_css_filter', '', 'lead_text', $atts) ?>>
				   <?php echo apply_filters('perch_modules_text_filter', $lead_text, 'lead_text', $atts) ?>
				</p>

				<?php if( $enable_form == 'yes' ): ?>
				<!-- HERO NEWSLETTER FORM -->
				<div class="hero-form animated" data-animation="fadeInUp" data-animation-delay="500">
						
					<?php 
					if( class_exists('ES_Shortcode') ){ 
						$args = array();
						$group = 'Pergo';
						$args['email'] = esc_attr($placeholder);
						$args['button_text'] = 'fas fa-arrow-right';
						$args['button_style'] = 'btn-rose';
						$args['enable_name'] = false;
						$args['name'] = false;
						$args['el_class'] = false;
						$args['group'] = esc_attr($group);
						echo PergoNewsletter::es_get_form_simple( $args );
					}else{
						echo 'Please Install Theme Required & Recommended PLugins.';
					}
					?>									
				</div>	
				<?php endif; ?>							

				<?php if( !empty($paramsArr) ): ?>
				<!-- HERO LINKS -->
				<div class="hero-links animated" data-animation="fadeInUp" data-animation-delay="600">
					<?php foreach ($paramsArr as $key => $value): ?>						
						<span>
							<?php echo isset( $value['link_before'] )? esc_attr($value['link_before']) : ''; ?>
							<?php if( isset($value['add_link']) && ($value['link_title'] != '') ):  ?>
								<a href="<?php echo isset($value['link_url'])? esc_url($value['link_url']) : '#'; ?>"><?php echo esc_attr($value['link_title']) ?></a> 
							<?php endif; ?>
							<?php echo isset( $value['title'] )? esc_attr( $value['title'] ) : ''; ?>
						</span>	
					<?php endforeach; ?>
				</div>

				<?php endif; ?>

			</div>
		</div>	<!-- END HERO TEXT -->


	</div>	  <!-- End row -->
</div>	<!-- END HERO-1 -->	