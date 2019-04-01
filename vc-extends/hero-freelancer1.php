<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'pergo_hero_freelancer1_shortcode_vc' );
function pergo_hero_freelancer1_shortcode_vc( $return = false ) {
    $args = array(
         'icon' => 'pergo-hero-icon',
        'name' => __( 'Header - Freelancer 1', 'pergo' ),
        'base' => 'pergo_hero_freelancer1',
        'class' => 'pergo-vc',
        'category' => __( 'Pergo', 'pergo' ),
        'description' => __( 'Display title & subtitle', 'pergo' ),
        'params' => array(        	
            array(
                 'type' => 'textfield',
                'heading' => __( 'Heading Title', 'pergo' ),
                'param_name' => 'title',
                'value' => 'Jonathan Barnes',
                'description' => __('Use {} for highlight text', 'pergo' ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'textarea',
                'heading' => __( 'Lead text', 'pergo' ),
                'param_name' => 'lead_text',
                'description' => '',
                'value' => 'Web App & UI Designer based in Los Angeles',
                'admin_label' => true 
            ),            
           
        ) 
    );

   $args = apply_filters( 'pergo_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return pergo_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Pergo_hero_freelancer1 extends WPBakeryShortCode {
}