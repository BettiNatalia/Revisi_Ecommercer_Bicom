<?php
/**
 * The default template for displaying content
 * @package Storefront Eshop
 * @since 1.0.0
 */

$storefront_eshop_default = storefront_eshop_get_default_theme_options();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

	<?php if( has_post_thumbnail() ){
		
		if( is_single() ){ ?>

				<div class="post-thumbnail">

					<?php storefront_eshop_post_thumbnail(); ?>
						
				</div>

			<?php

		}else{ ?>

			<div class="post-thumbnail">
			
				<?php storefront_eshop_post_thumbnail(); ?>

			</div>

		<?php
		}

	}

	if ( is_singular() ) { ?>

		<header class="entry-header entry-header-1">

			<h1 class="entry-title entry-title-large">

	            <span><?php the_title(); ?></span>

	        </h1>

		</header>

	<?php }

	if( is_single() && 'post' === get_post_type() ){ ?>

		<div class="entry-meta">

			<?php
			storefront_eshop_posted_by();
			storefront_eshop_posted_on();
			storefront_eshop_entry_footer( $cats = true, $tags = false, $edits = false );
			?>

		</div>

	<?php } ?>
	<div class="post-content-wrap">

		<div class="post-content">

			<div class="entry-content">

				<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Read More %s <span class="meta-nav">&rarr;</span>', 'storefront-eshop' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'storefront-eshop' ),
					'after'  => '</div>',
				) ); ?>

			</div>

			<?php
			if ( is_singular() && 'post' === get_post_type() ){ ?>

				<div class="entry-footer">
                    <div class="entry-meta">
                        <?php storefront_eshop_entry_footer( $cats = false, $tags = true, $edits = true ); ?>
                    </div>
				</div>

			<?php } ?>

		</div>

	</div>

</article>