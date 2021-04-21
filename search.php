<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package olynk
 */

get_header();
?>

	<section id="primary" class="content-area block">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
            <div class="page-header__container container">
			<header class="page-header page-header__title ">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( pll__( 'Search Results for: %s', 'olynk' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
            </div>
        <div class="products-list__body container">
            <div class="products-list" data-layout="list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </div>
        </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
