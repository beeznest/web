<?php
/**
* The VC Functions
*/
add_action( 'vc_before_init', 'pergo_newsletter_form_shortcode_vc' );
function pergo_newsletter_form_shortcode_vc( $return = false ) {
    $args = array(
         'icon' => 'pergo-icon',
        'name' => __( 'Newsletter form', 'pergo' ),
        'base' => 'pergo_newsletter_form',
        'class' => 'pergo-vc',
        'category' => __( 'Pergo', 'pergo' ),
        'description' => __( 'Display title & subscription form ', 'pergo' ),
        'params' => array(
            array(
                 'type' => 'textfield',
                'heading' => __( 'Heading Title', 'pergo' ),
                'param_name' => 'title',
                'value' => 'Stay up to date with our news, ideas and updates',
                'description' => __('Use {} for highlight text', 'pergo' ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'textfield',
                'heading' => __( 'Email placeholder', 'pergo' ),
                'param_name' => 'placeholder',
                'value' => 'Your email address',
                'admin_label' => true 
            )
            
        ) 
    );

   $args = apply_filters( 'pergo_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return pergo_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}
class WPBakeryShortCode_Pergo_newsletter_form extends WPBakeryShortCode {
}