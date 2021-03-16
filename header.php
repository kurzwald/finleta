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
<html <?php language_attributes(); ?>>
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
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <!-- mobile-logo -->
                            <img src="<?php echo $redux_options['opt-logo']['url'];?>" />
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <form class="search__form" action="">
                                    <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <button class="search__button search__button--type--close" type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                            </div>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                </button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none">
                                <a href="wishlist.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                </a>
                            </div>
                            <div class="indicator indicator--mobile">
                                <a href="cart.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
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
    <header  class="site__header d-lg-block d-none">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <object type="image/svg+xml" data="<?php echo $redux_options['opt-logo']['url'];?>"  ></object>

                            </a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <object type="image/svg+xml" data="<?php echo $redux_options['opt-logo']['url'];?>"  ></object>
                            </a></p>
                    <?php endif; ?>

                </div><!-- .site-branding -->
                <div class="row flex-column">

                    <?php // echo  $redux_options['site-branding-button-link']; ?>
                    <div class="site-branding_title"> <?php echo  $redux_options['site-branding-title']; ?> </div>
                    <div class="site-branding_desc"> <?php echo  $redux_options['site-branding-desc']; ?></div>
                    <a href="tel:<?php echo  $redux_options['site-branding-button-link']; ?>"> <div class="site-branding_button"> <?php echo  $redux_options['site-branding-button-text']; ?> </div></a>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site__body">
