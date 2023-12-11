<?php
/**
 * Title: Get In Touch
 * Slug: furnishop/get-in-touch
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}},"color":{"background":"#f6f6f6"}},"className":"get-in-touch","layout":{"type":"constrained"}} -->
<div class="wp-block-group get-in-touch has-background" style="background-color:#f6f6f6;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:media-text {"mediaId":153,"mediaLink":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/get-in-touch.png","mediaType":"image","mediaWidth":40} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/get-in-touch.png" alt="" class="wp-image-153 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'GET IN TOUCH', 'furnishop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"paragraph"} -->
<p class="has-paragraph-color has-text-color"><?php echo esc_html__( 'We\'d love to hear from you: connect with us for a seamless shopping experience and personalized assistance.', 'furnishop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"email-form","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group email-form"><!-- wp:template-part {"slug":"newsletter-form","theme":"furnishop"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->