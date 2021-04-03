<?php
/*
Template Name: Shop
*/

get_header();
?>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <?php dynamic_sidebar( 'shop_left_sitebar' ); ?>
                </div>
            </div>
        </div>
        <div class="shop-layout__content">
            <div claas="block">
                <div class="products-view">
                    <div class="products-view__options">
                        <div class="view-options view-options--offcanvas--mobile">

                        </div>
                    </div>
                    <?php echo do_shortcode("[recent_products]"); ?>
                    <!-- <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                        <div class="products-list__body">
                        <?php
                            $args=array(
                                'post_type' => 'product',
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                            );
                            $query=new WP_Query($args);
                            while ( $query->have_posts() ) {
                                 $query->the_post();
                                 $queryTitle=get_the_title();
                                 $queryProd_id=get_the_ID();
                                 $queryProd_image=get_the_post_thumbnail_url( $queryProd_id, 'medium' );
                                 $queryProd_link=get_permalink();
                                 $price = get_post_meta( $queryProd_id, '_regular_price', true);
                                 $sale = get_post_meta( $queryProd_id, '_price', true);
                                 $queryProd_cours=get_woocommerce_currency_symbol();
                                 $num_comments = get_comments_number();
                                 global $product;
                                 if ( comments_open() ) {
                                     if ( $num_comments == 0 ) {
                                 }
                                     $comments = __('No Rewievs');
                                 } elseif ( $num_comments > 1 ) {
                                     $comments = $num_comments . __(' Rewievs');
                                 } else {
                                     $comments = __('1 Rewievs');
                                 }
                                 $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
                                  /*else {
                                $write_comments =  __(' Rewievs are off for this product.');*/
                                ?>

                                <?php
                               // wc_get_template_part( 'content', 'product' );
                            }

                           // wp_reset_postdata();
                        ?>
                          </div>
                    </div> -->
                    <div class="products-view__pagination"></div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
