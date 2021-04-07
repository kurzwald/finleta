<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class="woocommerce-customer-details row mt-3 no-gutters mx-n2">

	<?php if ( $show_shipping ) : ?>

	<section class="col-sm-6 col-12 px-2 woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="card address-card woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>

            <address class="address-card__body">
                <h2 class="address-card__badge address-card__badge--muted woocommerce-column__title"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>
		<?php
        $adress_string=wp_kses_post( $order->get_formatted_billing_address( esc_html__( 'N/A', 'woocommerce' ) ) );
        ?>
                <?php
                $string_adr=explode('<br />',$adress_string);
                $i=0;
                $adr='';
                foreach ($string_adr as $arr){
                    if($i==0){
                        $name=$arr;
                        $i++;
                    }
                    else{
                        $adr.=$arr.'<br />';
                    }
                }
                ?>
                <div class="address-card__name"><?php echo $name; ?></div>
                <div class="address-card__row"><?php echo $adr; ?></div>
		<?php if ( $order->get_billing_phone() ) : ?>
        <div class="address-card__row">
			<p class="address-card__row-content woocommerce-customer-details--phone"><?php echo esc_html( $order->get_billing_phone() ); ?></p>
        </div>
        <?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
                <div class="address-card__row">
			<p class="address-card__row-content woocommerce-customer-details--email"><?php echo esc_html( $order->get_billing_email() ); ?></p>
                </div>
                    <?php endif; ?>
	</address>
	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3 woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
            <div class="card address-card">
            <address  class="address-card__body">
                <h2 class="address-card__badge address-card__badge--muted woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
				<?php
                $adress_string=wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) );
                $string_adr=explode('<br />',$adress_string);
                $i=0;
                $adr='';
                foreach ($string_adr as $arr){
                    if($i==0){
                        $name=$arr;
                        $i++;
                    }
                    else{
                        $adr.=$arr.'<br />';
                    }
                }
                ?>
                <div class="address-card__name"><?php echo $name; ?></div>
                <div class="address-card__row"><?php echo $adr; ?></div>
            </address>
            </div>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
