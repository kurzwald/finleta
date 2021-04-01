<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper product-tabs product-tabs--sticky">
        <div class="product-tabs product-tabs--sticky">
            <div class="product-tabs__list">
                <div class="product-tabs__list-body">
                    <div class="product-tabs__list-container container">
                        <?php
                        $i=0;
                        foreach ( $product_tabs as $key => $product_tab ) : ?>
                       <?php if($i==0){
                                echo '<a href="#tab-'.esc_attr($key).'" class="product-tabs__item product-tabs__item--active">'
                                          .wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ).
                                      '</a>';
                                $i=1;
                            }
                            else{
                                echo '<a href="#tab-'.esc_attr($key).'" class="product-tabs__item">'
                                    .wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ).
                                    '</a>';
                            }?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="product-tabs__content">
                <?php
                $j=0;
                foreach ( $product_tabs as $key => $product_tab ) :
                  if($j==0){
                      echo '<div class="product-tabs__pane product-tabs__pane--active" id="tab-'.esc_attr( $key ).'">';
                      if ( isset( $product_tab['callback'] ) ) {
                        call_user_func( $product_tab['callback'], $key, $product_tab );
                    }
                      echo '</div>';
                      $j=1;
                      }
                  else{
                      echo '<div class="product-tabs__pane" id="tab-'.esc_attr( $key ).'">';
                      if ( isset( $product_tab['callback'] ) ) {
                        call_user_func( $product_tab['callback'], $key, $product_tab );
                    }
                      echo '</div>';
                  }
                  endforeach; ?>
            </div>
    </div>
	</div>
    <?php do_action( 'woocommerce_product_after_tabs' ); ?>
<?php endif; ?>
