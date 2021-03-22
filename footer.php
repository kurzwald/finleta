<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package olynk
 */
global $redux_options;
?>

	</div><!-- #content -->

<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <?php dynamic_sidebar( 'footer_first' ); ?>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <?php dynamic_sidebar( 'footer_second' ); ?>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <?php dynamic_sidebar( 'footer_third' ); ?>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <?php dynamic_sidebar( 'footer_fourth' ); ?>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
        <div class="site-footer__copyright">
            <!-- copyright -->
            Powered by HTML — Design by <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
            <!-- copyright / end -->
        </div>
        <div class="site-footer__payments">
            <img src="<?php echo get_template_directory_uri(); ?>/images/payments.png" alt="">
        </div>
     </div>
        </div>
        <div class="totop">
        <div class="totop__body">
            <div class="totop__start"></div>
            <div class="totop__container container"></div>
            <div class="totop__end">
                <button type="button" class="totop__button">
                    <svg width="13px" height="8px">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-up-13x8"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>
