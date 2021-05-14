<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package olynk
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
                    </ol>
                </nav>
            </div>
	<header class="entry-header page-header__title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
        </div>
    </div>
	<?php olynk_post_thumbnail(); ?>

	<div class="entry-content block">
        <div class="container products-view">
            <?php
            if(is_shop()|| is_product_category()){?>
            <div class="shop-layout shop-layout--sidebar--start">
                <div class="shop-layout__sidebar">
                    <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                        <div class="block-sidebar__backdrop"></div>
                        <div class="block-sidebar__body">

                        <?php dynamic_sidebar( 'shop_left_sitebar' ); ?>
                        </div>
                    </div>
                </div>
            <?}
            ?>
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'olynk' ),
			'after'  => '</div>',
		) );
		?>
        </div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'olynk' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
