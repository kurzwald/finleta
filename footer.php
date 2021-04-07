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
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title"><?php echo __('Menu'); ?></div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
                <?php

                if( $menu_items = wp_get_nav_menu_items('Menu 1') ) {
                    ?>
                    <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                    <?php
                        foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                        $url = $menu_item->url;
                        ?>

                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="<?php echo $url; ?>" class="mobile-links__item-link"><?php echo $title; ?></a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                   <!-- <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?php echo $url; ?>" class="mobile-links__item-link"><?php echo $title; ?></a>
        </div> -->
        </li>
        <?php } ?>
        </ul>

                        <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- photoswipe / end -->

<?php wp_footer(); ?>


</body>
</html>
