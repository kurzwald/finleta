<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package olynk
 */

?>
<div class="products-list__item">
<article id="post-<?php the_ID(); ?>" <?php post_class('product-card product-card--hidden-actions '); ?>>
    <div class="product-card__image product-image">
    <?php //olynk_post_thumbnail(); ?>
    <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="product-card__info">
	<header class="entry-header search-finleta product-card__info">
		<?php the_title( sprintf( '<h2 class="entry-title product-card__name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			olynk_posted_on();
			olynk_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
    </div>
	<footer class="entry-footer product-card__actions">
		<?php olynk_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
