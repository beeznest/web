<?php
extract(shortcode_atts(array(
		'title' => 'Stay up to date with our news, ideas and updates',
		'placeholder' => 'Your email address',
), $atts));
?>
<div class="row d-flex align-items-center" id="newsletter-1">
	<!-- NEWSLETTER TEXT -->
	<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-0">
		<div class="newsletter-txt">
			<h3 class="h3-xs"><?php echo pergo_parse_text($title) ?></h3>
		</div>
	</div>

	<!-- NEWSLETTER FORM -->
	<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-0">
		<div class="p-left-30">						
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
	</div>
</div>
