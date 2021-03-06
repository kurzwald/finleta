<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package olynk
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title not-found__404"><?php echo pll__( 'Oops! Error 404.'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content not-found__content">
                    <h1 class="not-found__title"><?php echo pll__('Page Not Found'); ?></h1>
					<p><?php echo pll__( "We can't seem to find the page you're looking for. Try to use the search."); ?></p>
					<?php
					get_search_form();

					//the_widget( 'WP_Widget_Recent_Posts' );
					?>
                    <p class="not-found__text">
                        <?php echo pll__('Or go to the home page to start over.'); ?>
                    </p>
                    <a class="btn btn-secondary btn-sm" href="<?php echo home_url(); ?>"><?php echo pll__('Go To Home Page'); ?></a>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
