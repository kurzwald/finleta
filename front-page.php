<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package olynk
 */

get_header();
?>

    <!-- Content
        ============================================= -->
    <!-- .block-slideshow -->
    <div class="block-slideshow block-slideshow--layout--with-departments block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block"></div>
                <div class="col-12 col-lg-9">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            <a class="block-slideshow__slide" href="<?php echo  $redux_options['slide-button-1']; ?>">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('<?php echo  $redux_options['slide-img-1']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('<?php echo  $redux_options['slide-img-mobile-1']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title"><?php echo  $redux_options['slide-title-1']; ?></div>
                                    <div class="block-slideshow__slide-text"><?php echo  $redux_options['slide-desc-1']; ?></div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg"><?php echo  $redux_options['slide-button-text']; ?></span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="<?php echo  $redux_options['slide-button-2']; ?>">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('<?php echo  $redux_options['slide-img-2']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('<?php echo  $redux_options['slide-img-mobile-2']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title"><?php echo  $redux_options['slide-title-2']; ?></div>
                                    <div class="block-slideshow__slide-text"><?php echo  $redux_options['slide-desc-2']; ?></div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg"><?php echo  $redux_options['slide-button-text']; ?></span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="<?php echo  $redux_options['slide-button-3']; ?>">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('<?php echo  $redux_options['slide-img-3']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('<?php echo  $redux_options['slide-img-mobile-3']['url']; ?>')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title"><?php echo  $redux_options['slide-title-3']; ?></div>
                                    <div class="block-slideshow__slide-text"><?php echo  $redux_options['slide-desc-3']; ?></div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg"><?php echo  $redux_options['slide-button-text']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-features -->
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <img  width="48px" height="48px" src="<?php echo  $redux_options['team-icon-1']['url']; ?>" />
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title"><?php echo  $redux_options['team-title-1']; ?></div>
                        <div class="block-features__subtitle"><?php echo  $redux_options['team-desc-1']; ?></div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <img  width="48px" height="48px" src="<?php echo  $redux_options['team-icon-2']['url']; ?>" />
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title"><?php echo  $redux_options['team-title-2']; ?></div>
                        <div class="block-features__subtitle"><?php echo  $redux_options['team-desc-1']; ?></div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <img  width="48px" height="48px" src="<?php echo  $redux_options['team-icon-3']['url']; ?>" />
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title"><?php echo  $redux_options['team-title-3']; ?></div>
                        <div class="block-features__subtitle"><?php echo  $redux_options['team-desc-1']; ?></div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <img  width="48px" height="48px" src="<?php echo  $redux_options['team-icon-4']['url']; ?>" />
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title"><?php echo  $redux_options['team-title-4']; ?></div>
                        <div class="block-features__subtitle"><?php echo  $redux_options['team-desc-1']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-features / end -->

    <!-- .block-products-carousel / start -->
<?php
$args = array(
    'post_type' => 'product',
    'tax_query' =>
        array(array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        ),
        ),
);
$featured = new WP_Query( $args );
while ( $featured->have_posts() ) {
    $featured->the_post();
}
?>
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title"><?php echo __('Featured Products','default'); ?></h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group  block-header__group--active ">All</button></li>
                    <li><button type="button" class="block-header__group ">Power Tools</button></li>
                    <li><button type="button" class="block-header__group ">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group ">Plumbing</button></li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">

                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'tax_query' =>
                            array(array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                            ),
                            ),
                    );
                    $featured = new WP_Query( $args );
                    while ( $featured->have_posts() ) {
                        $featured->the_post();
                        $featured_id=get_the_ID();
                        $featured_image=get_the_post_thumbnail_url( $featured_id, 'medium' );
                        $featured_link=get_permalink();
                        $price = get_post_meta( $featured_id, '_regular_price', true);
                        $sale = get_post_meta( $featured_id, '_price', true);
                        $featured_cours=get_woocommerce_currency_symbol();
                        ?>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--hidden-actions ">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span>
                                    </button>
                                    <div class="product-card__image product-image">
                                        <a href="<?php echo $featured_link; ?>" class="product-image__body">
                                            <img class="product-image__img" src="<?php echo $featured_image; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="<?php echo $featured_link; ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body woocommerce">
                                                        <?php wp_star_rating( ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend"><?php comments_number( __('No reviews','default'), __('1 review','default'), __('reviews','default'), $featured_id ); ?></div>
                                        </div>
                                        <ul class="product-card__features-list">

                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">
                                            <?php echo __('Availability:','default'); ?> <span class="text-success"><?php __('In Stock','default); ?>'); ?></span>
                                        </div>
                                        <div class="product-card__prices">
                                            <span class="product-card__new-price"><?php echo $featured_cours.$sale; ?></span>
                                            <span class="product-card__old-price"><?php echo $featured_cours.$price; ?></span>
                                        </div>
                                        <div class="product-card__buttons">
                                            <?php woocommerce_simple_add_to_cart(); ?>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                            </button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-banner -->
    <div class="block block-banner">
        <div class="container">
            <a href="<?php echo  $redux_options['banner-button-link-1']; ?>" class="block-banner__body">
                <div class="block-banner__image block-banner__image--desktop" style="background-image: url('<?php echo  $redux_options['banner-img-1']['url']; ?>')"></div>
                <div class="block-banner__image block-banner__image--mobile" style="background-image: url('<?php echo  $redux_options['banner-img-mob-1']['url']; ?>')"></div>
                <div class="block-banner__title"><?php echo  $redux_options['banner-title-1']; ?></div>
                <div class="block-banner__text"><?php echo  $redux_options['banner-desc-1']; ?></div>
                <div class="block-banner__button">
                    <span class="btn btn-sm btn-primary"><?php echo  $redux_options['banner-button-1']; ?></span>
                </div>
            </a>
        </div>
    </div>
    <!-- .block-banner / end -->
    <!-- .block-products -->
    <div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title"><?php echo __('New products');?></h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-products__body">
                <?php
                $query_args = array(
                    'showposts'   => 7,
                    'post_status' => 'publish',
                    'post_type'   => 'product',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                );
                $newProd = new WP_Query( $query_args );
                $ProdListBefore='<div class="block-products__list">';
                $ProdListAfter='</div>';
                $ProdList='';
                $i=0;
                while ( $newProd->have_posts() ) {
                    $newProd->the_post();
                    $newTitle=get_the_title();
                    $newProd_id=get_the_ID();
                    $newProd_image=get_the_post_thumbnail_url( $newProd_id, 'medium' );
                    $newProd_link=get_permalink();
                    $price = get_post_meta( $newProd_id, '_regular_price', true);
                    $sale = get_post_meta( $newProd_id, '_price', true);
                    $newProd_cours=get_woocommerce_currency_symbol();
                    $num_comments = get_comments_number();
                    global $product;
                    if ( comments_open() ) {
                        if ( $num_comments == 0 ) {
                            $comments = __('No Rewievs');
                        } elseif ( $num_comments > 1 ) {
                            $comments = $num_comments . __(' Rewievs');
                        } else {
                            $comments = __('1 Rewievs');
                        }
                        $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
                    } else {
                        $write_comments =  __('Rewievs are off for this product.');
                    }
                    if (get_post_meta($newProd_id, '_stock_status', true) == 'outofstock') {
                        $stock='<div class="outofstock">'.__('no stock').'</div>';
                    } else {
                        $stock='<div class="stock">'.__('in stock').'</div>';
                    }
                    if($i==0){
                        ?>
                        <?php
                        $ptodFeatured='<div class="block-products__featured">
                        <div class="block-products__featured-item">
                         <div class="product-card product-card--hidden-actions ">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--new">'.__('New').'</div>
                            </div>
                            <div class="product-card__image product-image">
                                <a href="'.$newProd_link.'" class="product-image__body">
                                    <img class="product-image__img" src="'.$newProd_image.'" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="'.$newProd_link.'">'.$newTitle.'</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body woocommerce">'.
                            wp_star_rating()
                        .'</div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">'.$write_comments.'</div>
                                </div>
                                <ul class="product-card__features-list">
                 
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">'.
                                    __('Availability').': <span class="text-success">'.$stock.'</span>
                                </div>
                                <div class="product-card__prices">
                                    <span class="product-card__new-price">'.$newProd_cours.$sale.'</span>
                                    <span class="product-card__old-price">'.$newProd_cours.$price.'</span>
                                </div>
                                <div class="product-card__buttons"><form action="'
                                    .esc_url( $product->add_to_cart_url() ).'" class="cart" method="post" enctype="multipart/form-data">
                        <button type="submit" data-quantity="1" data-product_id="'.$newProd_id.'"
                                class="btn btn-primary product-card__addtocart">'.__('Add to cart').'</button>

                        </form><button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#wishlist-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                    </button>
                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#compare-16"></use>
                                       id </svg>
                                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>';
                        $i++;
                    }
                    else{
                        $ProdList.='<div class="block-products__list-item">
                        <div class="product-card product-card--hidden-actions ">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image product-image">
                                <a href="'.$newProd_link.'" class="product-image__body">
                                    <img class="product-image__img" src="'.$newProd_image.'" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="'.$newProd_link.'">'.$newTitle.'</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body woocommerce">'
                                                .wp_star_rating().
                                            '</div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">'.$write_comments.'</div>
                                </div>
                                <ul class="product-card__features-list">
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">'.
                            __('Availability').': <span class="text-success">'.$stock.'</span>
                                </div>
                                <div class="product-card__prices">
                                    <span class="product-card__new-price">'.$newProd_cours.$sale.'</span>
                                    <span class="product-card__old-price">'.$newProd_cours.$price.'</span>
                                </div>
                                <div class="product-card__buttons">
                                    <form action="'
                            .esc_url( $product->add_to_cart_url() ).'" class="cart" method="post" enctype="multipart/form-data">
                        <button type="submit" data-quantity="1" data-product_id="'.$newProd_id.'"
                                class="btn btn-primary product-card__addtocart">'.__('Add to cart').'</button>

                        </form>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#wishlist-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                    </button>
                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="'.get_template_directory_uri().'/images/sprite.svg#compare-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>';

                    }
                }
                echo $ptodFeatured;
                echo $ProdListBefore.$ProdList.$ProdListAfter;
                wp_reset_postdata();
                ?>


            </div>
        </div>
    </div>
    <!-- .block-products / end -->






    <!-- .block-categories -->
    <div class="block block--highlighted block-categories block-categories--layout--classic">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title"><?php echo  $redux_options['services-title']; ?></h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-1']; ?>"><img src="<?php echo  $redux_options['services-img-1']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-1']; ?>"><?php echo  $redux_options['services-title-1']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-1']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-1']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-2']; ?>"><img src="<?php echo  $redux_options['services-img-2']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-2']; ?>"><?php echo  $redux_options['services-title-2']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-2']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-2']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-3']; ?>"><img src="<?php echo  $redux_options['services-img-3']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-3']; ?>"><?php echo  $redux_options['services-title-3']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-3']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-3']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-4']; ?>"><img src="<?php echo  $redux_options['services-img-4']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-4']; ?>"><?php echo  $redux_options['services-title-4']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-4']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-4']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-5']; ?>"><img src="<?php echo  $redux_options['services-img-5']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-5']; ?>"><?php echo  $redux_options['services-title-5']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-5']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-5']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                            <div class="category-card__products">
                                366 Products
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__image">
                            <a href="<?php echo  $redux_options['services-link-6']; ?>"><img src="<?php echo  $redux_options['services-img-6']['url']; ?>" alt=""></a>
                        </div>
                        <div class="category-card__content">
                            <div class="category-card__name">
                                <a href="<?php echo  $redux_options['services-link-6']; ?>"><?php echo  $redux_options['services-title-6']; ?></a>
                            </div>
                            <ul class="category-card__links">
                                <?php echo  $redux_options['services-desc-6']; ?>
                            </ul>
                            <div class="category-card__all">
                                <a href="<?php echo  $redux_options['services-link-6']; ?>"><?php echo  $redux_options['services-button-text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-categories / end -->

    <!-- .block-banner -->
    <div class="block block-banner">
        <div class="container">
            <a href="<?php echo  $redux_options['banner-button-link-2']; ?>" class="block-banner__body">
                <div class="block-banner__image block-banner__image--desktop" style="background-image: url('<?php echo  $redux_options['banner-img-2']['url']; ?>')"></div>
                <div class="block-banner__image block-banner__image--mobile" style="background-image: url('<?php echo  $redux_options['banner-img-mob-2']['url']; ?>')"></div>
                <div class="block-banner__title"><?php echo  $redux_options['banner-title-2']; ?></div>
                <div class="block-banner__text"><?php echo  $redux_options['banner-desc-2']; ?></div>
                <div class="block-banner__button">
                    <span class="btn btn-sm btn-primary"><?php echo  $redux_options['banner-button-2']; ?></span>
                </div>
            </a>
        </div>
    </div>
    <!-- .block-banner / end -->
    <!-- .block-top-sile -->
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title"><?php echo __('Top sales'); ?></h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group  block-header__group--active "><?php echo __('All'); ?></button></li>
                    <li><button type="button" class="block-header__group ">Power Tools</button></li>
                    <li><button type="button" class="block-header__group ">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group ">Plumbing</button></li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'meta_key' => 'total_sales',
                        'orderby' => 'meta_value_num',
                    );
                    $wc_query = new WP_Query($args);
                    $i=0;
                    $output='';
                    if ($wc_query->have_posts()) {
                        while ($wc_query->have_posts()) {
                            $wc_query->the_post();
                            $topTitle=get_the_title();
                            $topProd_id=get_the_ID();
                            $topProd_image=get_the_post_thumbnail_url( $topProd_id, 'medium' );
                            $topProd_link=get_permalink();
                            $topPrice = get_post_meta( $topProd_id, '_regular_price', true);
                            $topSale = get_post_meta( $topProd_id, '_price', true);
                            $cours=get_woocommerce_currency_symbol();
                            global $product;
                            if ( comments_open() ) {
                                if ( $num_comments == 0 ) {
                                    $comments = __('No Rewievs');
                                } elseif ( $num_comments > 1 ) {
                                    $comments = $num_comments . __(' Rewievs');
                                } else {
                                    $comments = __('1 Rewievs');
                                }
                                $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
                            } else {
                                $write_comments =  __('Rewievs are off for this product.');
                            }
                            if($i==0){ ?>
                                <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--hidden-actions ">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <!--<div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div> -->
                                <div class="product-card__image product-image">
                                    <a href="<?php echo $topProd_link; ?>" class="product-image__body">
                                        <img class="product-image__img" src="<?php echo $topProd_image; ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="<?php echo $topProd_link; ?>"><?php echo $topTitle; ?></a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body woocommerce">
                                                    <?php wp_star_rating(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend"><?php echo $write_comments; ?></div>
                                    </div>
                                    <ul class="product-card__features-list">
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">
                                        <?php echo __('Availability:'); ?> <span class="text-success"><?php echo __('In Stock','default'); ?></span>
                                    </div>
                                    <div class="product-card__prices">
                                        <span class="product-card__new-price"><?php echo $cours.$topSale; ?></span>
                                        <span class="product-card__old-price"><?php echo $cours.$topPrice; ?></span>
                                    </div>
                                    <div class="product-card__buttons">
                                        <?php woocommerce_simple_add_to_cart(); ?>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                        </button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <?php $i=1;  }
                            else{ ?>
                                 <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <!--<div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>-->
                                        <div class="product-card__image product-image">
                                            <a href="<?php echo $topProd_link; ?>" class="product-image__body">
                                                <img class="product-image__img" src="<?php echo $topProd_image; ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="<?php echo $topProd_link; ?>"><?php echo $topTitle; ?></a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body woocommerce">
                                                            <?php wp_star_rating(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend"><?php echo $write_comments; ?></div>
                                            </div>
                                            <ul class="product-card__features-list">

                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">
                                                <?php echo __('Availability:'); ?> <span class="text-success"><?php echo __('In Stock'); ?></span>
                                            </div>
                                            <div class="product-card__prices">
                                                <span class="product-card__new-price"><?php echo $cours.$topSale; ?></span>
                                                <span class="product-card__old-price"><?php echo $cours.$topPrice; ?></span>
                                            </div>
                                            <div class="product-card__buttons">
                                                <?php woocommerce_simple_add_to_cart(); ?>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                          <?php $i=0; }
                        }
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- .block-products-carousel / end -->
    <!-- .block-top-sile / end -->
    <!-- .block-brands -->
    <div class="block block-brands">
        <div class="container">
            <div class="block-brands__slider">
                <div class="owl-carousel">
                    <?php
                    $array_brands=$redux_options['brands'];
                    if(isset($array_brands) && !empty($array_brands)){
                        foreach ($array_brands as $brand){
                            ?>
                            <div class="block-brands__item">
                                <a href="<?php if($brand['url']){echo $brand['url']; }?>"><img src="<?php echo $brand['image']?>" alt="<?php if($brand['title']){echo $brand['title']; }?>"></a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-brands / end -->

<?php
/*include "request-form.php";*/
get_footer();
?>