<?php
/**
 * Title: Default Header
 * Slug: furnishop/default-header
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"0","right":"0"}}},"backgroundColor":"btn-primary","className":"header-wrapper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull header-wrapper has-btn-primary-background-color has-background" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"header-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-section" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"21px"}},"className":"navbar-section   header-nav-section","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group navbar-section header-nav-section"><!-- wp:site-title {"textColor":"background"} /-->

<!-- wp:group {"className":"header-right","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group header-right"><!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"btn-primary","overlayTextColor":"background","style":{"spacing":{"blockGap":"20px"}}} /-->

<!-- wp:group {"className":"search-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group search-form"><!-- wp:template-part {"slug":"search-form","theme":"furnishop"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"className":"cart-whislist-icon","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group cart-whislist-icon"><!-- wp:template-part {"slug":"mini-cart","theme":"furnishop"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->