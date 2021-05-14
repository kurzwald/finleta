<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package olynk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
    global $redux_options;
    ?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo $redux_options['opt-typography']['font-family']?>:100,300,400,500,700,900&display=swap&subset=<?php echo $redux_options['opt-typography']['subsets']?>" rel="stylesheet">

	<?php wp_head();

	?>
    <style>
        .about-block_icon1 {
            background-image: url("<?php echo  $redux_options['about-img-first']['url']; ?>");
        }
        .about-block_icon2 {
            background-image: url("<?php echo  $redux_options['about-img-second']['url']; ?>");
        }
        .about-block_icon3 {
            background-image: url("<?php echo  $redux_options['about-img-third']['url']; ?>");
        }
        .team-block_icon1 {
            background-image: url("<?php echo  $redux_options['team-img-first']['url']; ?>");
        }
        .team-block_icon2 {
            background-image: url("<?php echo  $redux_options['team-img-second']['url']; ?>");
        }
        .team-block_icon3 {
            background-image: url("<?php echo  $redux_options['team-img-third']['url']; ?>");
        }
        body{
            font: 100% <?php echo $redux_options['opt-typography']['font-family']?>!important;

            font-family: <?php echo $redux_options['opt-typography']['font-family']?>!important;
        }
        </style>
</head>

<body <?php body_class(); ?>>
<!-- site -->
<div id="page" class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <!-- mobile-logo -->
                            <img src="<?php echo $redux_options['opt-mob-logo']['url'];?>" />
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <?php echo do_shortcode('[fibosearch]'); ?>
                                <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                            </div>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                </button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none">
                                <a href="<?php echo get_site_url(); ?>/список-желаний" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value wishlist_products_counter_number"><?php //echo do_shortcode('[ti_wishlist_products_counter]'); ?></span>
                                        </span>
                                </a>
                            </div>
                            <div class="indicator indicator--mobile">
                                <?php
                                //global $woocommerce; ?>
                                <a href="<?php echo wc_get_cart_url() ?>" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->

    <header id="site-header" class="site__header d-lg-block d-none" role="banner">
        <div class="site-header">
			  <!-- .topbar -->
			   <div class="site-header__topbar topbar">
					<div class="topbar__container container">
						<div class="topbar__row">
							<?php dynamic_sidebar( 'top_bar' ); ?>
							<div class="topbar__spring"></div>
                            <?php dynamic_sidebar( 'top_bar-right' ); ?>

						</div>
					</div>
			   </div>
			   <!-- .topbar / end -->
            <div class="site-header__middle container">
                <div class="site-header__logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php echo $redux_options['opt-logo']['url'];?>" />
                    </a>
                </div>
                <div class="site-header__search">
                    <div class="search search--location--header ">
                        <?php echo do_shortcode('[fibosearch]'); ?>
                    </div>
                </div>
                <div class="site-header__phone">
                    <div class="site-header__phone-number"><?php echo  $redux_options['phone-number']; ?></div>
                    <div class="site-header__phone-title">
                        <a href="<?php echo  $redux_options['link-call-to-action']; ?>" target="_blank"><?php echo  pll__($redux_options['link-call-to-action-text']); ?></a>
                    </div>
                </div>
            </div>
            <header class="site-header__nav-panel">
                <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments">
                                <?php
                                $class_mega_menu='departments';
                                if(is_front_page()){
                                    $class_mega_menu.='  departments--open departments--fixed';
                                }
                                ?>
                                <div class="<?php echo $class_mega_menu; ?>" data-departments-fixed-by=".block-slideshow">
                                    <div class="departments__body">
                                        <div class="departments__links-wrapper">
                                            <div class="departments__submenus-container"></div>
                                               <?php
                                               $category = 0;
                                               $r = '';
                                               $args = array(
                                                   'parent' => $category,
                                               );
                                               $next = get_terms('product_cat', $args);
                                               if ($next) {
                                                   foreach ($next as $cat) {
                                                       $r .= '<ul  class="departments__links">';
                                                       $args = array(
                                                           'parent' => $cat->term_id,
                                                       );
                                                       $next_sub = get_terms('product_cat', $args);
                                                       if ($next_sub) {
                                                           foreach ($next_sub as $cat_sub) {
                                                               $r .= '<li class="departments__item"><a class="departments__item-link" href=" ' . get_term_link($cat_sub->slug, $cat_sub->taxonomy) . '" title="' . sprintf(pll__("View all products in %s"), $cat_sub->name) . '" ' . '>' .
                                                                   $cat_sub->name;
                                                               $args = array(
                                                                   'parent' => $cat_sub->term_id,
                                                               );
                                                               $next_sub_child = get_terms('product_cat', $args);
                                                               if ($next_sub_child) {

                                                                   $r .= '<svg class="departments__item-arrow" width="6px" height="9px">
                                                                      <use xlink:href="'.get_template_directory_uri() .'/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                   </svg>
                                                                </a>';
                                                                   $thumbnail_id = get_term_meta($cat_sub->term_id, 'thumbnail_id', true);
                                                                   $image = wp_get_attachment_url($thumbnail_id);
                                                                   $r .= '<div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                                      <div class="megamenu  megamenu--departments ">
                                                                          <div class="megamenu__body" style="background-image:url(' . $image . ')">
                                                                             <div class="row">
                                                                                 <div class="col-3">
                                                                                     <ul class="megamenu__links megamenu__links--level--0">';
                                                                   foreach ($next_sub_child as $cat_sub_child) {
                                                                       $r .= '<li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                <a href="' . get_term_link($cat_sub_child->slug, $cat_sub_child->taxonomy) . '"title="' . sprintf(__("View all products in %s"), $cat_sub_child->name) . '" >' . $cat_sub_child->name . '</a>';
                                                                       if ($cat_sub_child->term_id !== 0) {
                                                                           $args = array(
                                                                               'parent' => $cat_sub_child->term_id,
                                                                           );
                                                                           $next_sub_child_last = get_terms('product_cat', $args);
                                                                           $r .= '<ul class="megamenu__links megamenu__links--level--1">';
                                                                           foreach ($next_sub_child_last as $cat_sub_child_last) {
                                                                               $r .= '<li class="megamenu__item">
                                                                                 <a href="' . get_term_link($cat_sub_child_last->slug, $cat_sub_child_last->taxonomy) . '"title="' . sprintf(__("View all products in %s"), $cat_sub_child_last->name) . '">' . $cat_sub_child_last->name . '</a>
                                                                              </li>';
                                                                           }
                                                                           $r .= '</ul>';
                                                                       }
                                                                       $r .= '</li>';
                                                                   }
                                                                   $r .= '</div></div></div></div></div></ul>';
                                                               } else {
                                                                   $r .= '</a>';
                                                               }
                                                               $r .= '</li>';
                                                           }

                                                       }
                                                       $r .= '</ul>';
                                                   }
                                               }
                                               echo $r;
                                                ?>
                                        </div>
                                    </div>
                                    <button class="departments__button">
                                        <svg class="departments__button-icon" width="18px" height="14px">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#menu-18x14"></use>
                                        </svg>
                                        <?php echo pll__('Shop by category'); ?>
                                        <svg class="departments__button-arrow" width="9px" height="6px">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="nav-panel__nav-links nav-links">
                            <?php wp_nav_menu(array('menu_class'=>'nav-links__list','link_before' =>'<div class="nav-links__item-body">','link_after' =>'</div>')); ?>
                            </div>
                            <div class="nav-panel__indicators">
                                <div class="mobile-header__indicators">


                                    <div class="indicator indicator--mobile d-sm-flex d-none">
                                        <a href="<?php echo get_site_url(); ?>/список-желаний" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--mobile">
                                        <?php
                                        // global $woocommerce; ?>
                                        <a href="<?php echo wc_get_cart_url(); ?>" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                        <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                        </button>
                                    </div>


                            </div
                        </div>
                    </div>
                </div>
            </div>
    </header>
        </div>
        </header>
    <div id="content" class="site__body">
