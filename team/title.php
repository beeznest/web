<?php $designation = get_post_meta( get_the_ID(), 'designation', true ); ?>
<span class="<?php echo pergo_default_color(); ?>-color"><?php echo esc_attr($designation) ?></span>
<h3 class="h3-xs m-top-0 m-bottom-25"><?php the_title(); ?></h3>