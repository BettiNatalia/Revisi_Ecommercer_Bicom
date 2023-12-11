<?php
/**
 * Title: Product Sidebar
 * Slug: furnishop/product-sidebar
 * Categories: furnishop
 *
 * @package furnishop
 * @since 1.0.0
 */

?>
<?php if (class_exists('WooCommerce')) { ?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"lineHeight":"1.5"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="line-height:1.5"><!-- wp:heading {"className":"font-weight-wrapper"} -->
<h2 class="wp-block-heading font-weight-wrapper"><?php echo esc_html__( 'PRODUCT CATEGROIES', 'furnishop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-categories {"hasCount":false,"isHierarchical":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:heading {"className":"font-weight-wrapper"} -->
<h2 class="wp-block-heading font-weight-wrapper"><?php echo esc_html__( 'FILTER BY STOCK', 'furnishop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true},"textColor":"paragraph"} -->
<div class="wp-block-woocommerce-stock-filter is-loading has-paragraph-color has-text-color" data-show-counts="true" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"filter-by-price","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-by-price"><!-- wp:group {"style":{"typography":{"fontSize":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-size:18px"><!-- wp:heading {"className":"font-weight-wrapper"} -->
<h2 class="wp-block-heading font-weight-wrapper"><?php echo esc_html__( 'FILTER BY PRICE', 'furnishop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/price-filter {"inlineInput":true,"showFilterButton":true,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="true" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"font-weight-wrapper"} -->
<h2 class="wp-block-heading font-weight-wrapper"><?php echo esc_html__( 'FILTER BY COLOR', 'furnishop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="0" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"fontSize":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-size:18px"><!-- wp:heading {"className":"font-weight-wrapper"} -->
<h2 class="wp-block-heading font-weight-wrapper"><?php echo esc_html__( 'FILTER BY SIZE', 'furnishop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="0" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->
<?php } ?>