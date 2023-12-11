<?php
/**
 * Title: Banner
 * Slug: furnishop/banner
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"hero-banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-banner"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":511,"dimRatio":0,"overlayColor":"body-text","minHeight":70,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-511" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"}},"textColor":"background"} -->
<p class="has-text-align-left has-background-color has-text-color" style="font-size:20px;font-style:normal;font-weight:700"><?php echo esc_html__( 'WELCOME TO OUR', 'furnishop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"background","fontSize":"huge"} -->
<p class="has-background-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php echo esc_html__( 'FURNITURE', 'furnishop' ); ?><br><?php echo esc_html__( 'GALLERY', 'furnishop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"textColor":"background","layout":{"type":"constrained","justifyContent":"left","contentSize":""}} -->
<div class="wp-block-group has-background-color has-text-color"><!-- wp:separator {"align":"center","backgroundColor":"background","className":"is-style-default"} -->
<hr class="wp-block-separator aligncenter has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"btn-secondary","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-btn-secondary-background-color has-background wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'BROWSE OUR SELECTIONS', 'furnishop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
