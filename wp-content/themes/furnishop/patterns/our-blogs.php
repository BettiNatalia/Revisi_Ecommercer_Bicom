<?php
/**
 * Title: Our Blogs
 * Slug: furnishop/our-blogs
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'OUR BLOGS', 'furnishop' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#7e7f7c"}}} -->
<p class="has-text-align-center has-text-color" style="color:#7e7f7c"><?php echo esc_html__( 'WHAT WE THINK ABOUT INTERIOR DESIGN?', 'furnishop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":18,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:spacer {"height":"10px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-template {"textColor":"paragraph"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"400px"} /-->

<!-- wp:post-date {"format":"Y.m.d | g:i"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"textColor":"paragraph"} /-->

<!-- wp:post-terms {"term":"category","separator":"","style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"white","className":"category-section"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"90px"} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->