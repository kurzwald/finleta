<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
    <div class="product-card__prices">
        <?php if($product->get_sale_price()){?>
        <span class="product-card__new-price"><?php echo get_woocommerce_currency_symbol().$product->get_sale_price(); ?></span>
        <span class="product-card__old-price"><?php echo get_woocommerce_currency_symbol().$product->get_regular_price(); ?></span>
        <?php }else{
            echo get_woocommerce_currency_symbol().$product->get_regular_price();
        }?>
	 <!-- <span class="price"><?php //echo $price_html; ?></span>  -->
   </div>
<?php endif; ?>
