<?php
/**
 * Title: Featured Products
 * Slug: furnishop/featured-products
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'LATEST PRODUCT', 'furnishop' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#7e7f7c"}}} -->
<p class="has-text-align-center has-text-color" style="color:#7e7f7c"><?php echo esc_html__( 'DISCOVER THE CUTTING-EDGE FEATURES OF OUR NEWEST PRODUCT', 'furnishop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"72px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:72px">
<!-- wp:template-part {"slug":"recent-product","theme":"furnishop"} /--> 
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->