<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">
    <ul class="product__meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

    <?php if ( !$product->is_in_stock() ) {
    echo '<li class="soldout">'.__('Availability: ').'<span class="text-success">'.__('no stock').'</span></li>';
    }
    else{
        echo '<li class="soldout">'.__('Availability: ').'<span class="text-success">'.__('in stock').'</span></li>';
    }?>

        <?php  $values = $product->get_attribute('brand');
            echo '<li>'.__('Brand').': '.$values.'</li>';
        ?>

        <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

            <li><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></li>

        <?php endif; ?>

    </ul>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
