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
        <div class="shop-layout__content">
            <div claas="block">
                <div class="products-view">

                    <div class="products-view__options">
                        <div class="view-options view-options--offcanvas--mobile">
                            <div class="view-options__filters-button">
                                <button type="button" class="filters-button">
                                    <svg class="filters-button__icon" width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#filters-16"></use>
                                    </svg>
                                    <span class="filters-button__title">Filters</span>
                                    <span class="filters-button__counter">3</span>
                                </button>
                            </div>
                            <div class="view-options__layout">
                                <div class="layout-switcher">
                                    <div class="layout-switcher__list">
                                        <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button  layout-switcher__button--active ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#layout-grid-16x16"></use>
                                            </svg>
                                        </button>
                                        <!--<button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#layout-grid-with-details-16x16"></use>
                                            </svg>
                                        </button>-->
                                        <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#layout-list-16x16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="view-options__legend"><?php echo pll__('Showing'); ?> <span id="count-products"></span> <?php echo pll__('of'); ?> <span id="count-all-products"></span> <?php echo pll__('products'); ?></div>
                            <div class="view-options__divider"></div>
                            <div class="view-options__control">
                                <label for=""><?php echo pll__('Sort By'); ?></label>
                                <div>
                                    <select class="form-control form-control-sm" name="" id="control-name">
                                        <option value="default"><?php echo pll__('Default'); ?></option>
                                        <option value="ABC"><?php echo pll__('Name (A-Z)'); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="view-options__control">
                                <label for=""><?php echo pll__('Show'); ?></label>
                                <div>
                                    <select class="form-control form-control-sm" name="" id="control-number">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-view__options">
                        <div class="view-options view-options--offcanvas--mobile">

                        </div>
                    </div>
                    <?php // echo do_shortcode("[recent_products]"); ?>
                    <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                        <div class="products-list__body">
                        <?php
                            $args=array(
                                'post_type' => 'product',
                                'orderby' => 'rand',

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
                                 $rating=$product->get_average_rating();
                                 if ( comments_open() ) {
                                     if ( $num_comments == 0 ) {
                                     $comments=pll__('No Rewievs');
                                 } elseif ( $num_comments > 1 ) {
                                     $comments=$num_comments.' '.pll__('Rewievs');
                                 } else {
                                     $comments=pll__('1 Rewiev');
                                 }
                                 $write_comments='<a href="' . get_comments_link() .'">'. $comments.'</a>';
                                 }
                                  else {
                                    $write_comments = pll__(' Rewievs are off.');
                                }
                                ?>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__badges-list">
                                            <?php if($sale){ ?>
                                            <div class="product-card__badge product-card__badge--sale"><?php echo __('Sale','woocommerce'); ?></div>
                                            <?php } ?>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="<?php echo $queryProd_link; ?>" class="product-image__body">
                                                <img class="product-image__img" src="<?php echo $queryProd_image; ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="<?php echo $queryProd_link; ?>"><?php echo $queryTitle; ?></a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body woocommerce">
                                                            <?php echo wc_get_rating_html( $rating, $num_comments );?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend"><?php echo $write_comments; ?></div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <!--<li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>-->
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                <?php
                                                    if ($product->is_in_stock()) {$stock=pll__('In stock');}
                                                    else{$stock=pll__('No stock');}
                                                        ?>
                                                <?php echo pll__('Availability'); ?>: <span class="text-success"><?php echo $stock; ?></span>
                                            </div>
                                            <div class="product-card__prices">
                                                <?php
                                                if($sale==0){
                                                    echo $queryProd_cours.$price;
                                                }
                                                else{
                                                  echo '<span class="product-card__new-price">'.$queryProd_cours.$sale.'</span>
                                                        <span class="product-card__old-price">'.$queryProd_cours.$price.'</span>';
                                                }
                                                ?>
                                            </div>
                                            <div class="product-card__buttons catalog">
                                                <?php woocommerce_simple_add_to_cart(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                 // wc_get_template_part( 'content', 'product' );
                            }

                            wp_reset_postdata();
                        ?>
                          </div>
                    </div>
                    <div class="products-view__pagination" >
                        <ol class="pagination justify-content-center" id="pagination">
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php
get_footer();
