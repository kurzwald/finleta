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
    <section class="about">
        <div   class="container">
            <div class="row">
                <div class="about-title"> <?php echo  $redux_options['about-title']; ?></div>
                <div class="about-desc"> <?php echo  $redux_options['about-desc']; ?> </div>
                <div class="col-sm about-block">
                        <div class="about-block_icon1"></div>
                        <div class="about-block_triangle"></div>
                        <div class="about-block_wrap ">
                        <h4><?php echo  $redux_options['about-adv-header1']; ?></h4>
                        <p><?php echo  $redux_options['about-adv-text1']; ?>
                               </p>
                        </div>
                </div>
                <div class="col-sm about-block">
                        <div class="about-block_icon2"></div>
                        <div class="about-block_triangle"></div>
                        <div class="about-block_wrap">
                        <h4><?php echo  $redux_options['about-adv-header2']; ?></h4>
                        <p><?php echo  $redux_options['about-adv-text2']; ?></p>
                        </div>
                </div>
                <div class="col-sm about-block">
                        <div class="about-block_icon3"></div>
                        <div class="about-block_triangle"></div>
                        <div class="about-block_wrap">
                        <h4><?php echo  $redux_options['about-adv-header3']; ?></h4>
                        <p><?php echo  $redux_options['about-adv-text3']; ?> </p>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="notify">
        <div   class="container">
            <div class="row">
                <div class="notify-title"><?php echo  $redux_options['notice-title']; ?>  </div>
                <div class="col-sm notify-block">
                    <?php

                    $red_form = $redux_options['notice-form'];
                    echo  do_shortcode($red_form);

                    ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="team">
        <div   class="container">
            <div class="row">
                <div class="team-title">   <?php echo  $redux_options['team-title']; ?></div>
                <div class="col-sm team-block">
                    <div class="team-block_icon1"></div>

                    <div class="team-block_wrap ">
                        <h4><?php echo  $redux_options['team-adv-header1']; ?></h4>

                        <p><?php echo  $redux_options['team-adv-text1']; ?>  </p>
                    </div>
                </div>
                <div class="col-sm team-block">
                    <div class="team-block_icon2"></div>

                    <div class="team-block_wrap">
                        <h4><?php echo  $redux_options['team-adv-header2']; ?></h4>

                        <p>  <?php echo  $redux_options['team-adv-text2']; ?> </p>
                    </div>
                </div>
                <div class="col-sm team-block">
                    <div class="team-block_icon3"></div>

                    <div class="team-block_wrap">
                        <h4><?php echo  $redux_options['team-adv-header3']; ?></h4>
                        <p> <?php echo  $redux_options['team-adv-text3']; ?></p>
                     </div>
                </div>

                <div class="team-title"> <?php echo  $redux_options['price-title']; ?>     </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <h2><?php echo  $redux_options['price-adv-header1']; ?></h2>
                        </div>
                        <div class="price">
                            <h4><?php echo  $redux_options['price-adv-price1']; ?></h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li> <i class="fa fa-check" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-time1']; ?> </li>

                                <li> <i class="fa fa-times" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-notice']; ?>
                                </li>
                            </ul>
                        </div>
                        <a href="tel:<?php echo  $redux_options['price-adv-phone']; ?>"><?php echo  $redux_options['price-adv-phone']; ?> </a>
                    </div>
                </div>
                <!-- END Col one -->
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-plane" aria-hidden="true"></i>
                            <h2><?php echo  $redux_options['price-adv-header2']; ?></h2>
                        </div>
                        <div class="price">
                            <h4> <?php echo  $redux_options['price-adv-price2']; ?></h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li> <i class="fa fa-check" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-time2']; ?> </li>
                                <li> <i class="fa fa-times" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-notice']; ?>
                                </li>
                            </ul>
                        </div>
                        <a href="tel:<?php echo  $redux_options['price-adv-phone']; ?>"><?php echo  $redux_options['price-adv-phone']; ?> </a>
                    </div>
                </div>
                <!-- END Col two -->
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                            <h2><?php echo  $redux_options['price-adv-header3']; ?></h2>
                        </div>
                        <div class="price">
                            <h4> <?php echo  $redux_options['price-adv-price3']; ?></h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li> <i class="fa fa-check" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-time3']; ?> </li>
                                <li> <i class="fa fa-times" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-notice']; ?>
                                </li>
                            </ul>
                        </div>
                        <a href="tel:<?php echo  $redux_options['price-adv-phone']; ?>"><?php echo  $redux_options['price-adv-phone']; ?> </a>
                    </div>
                </div>
                <!-- END Col three -->
                <div class="col-sm">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                            <h2><?php echo  $redux_options['price-adv-header4']; ?></h2>
                        </div>
                        <div class="price">
                            <h4> <?php echo  $redux_options['price-adv-price4']; ?></h4>
                        </div>
                        <div class="option">
                            <ul>
                                <li> <i class="fa fa-check" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-time4']; ?></li>
                                <li> <i class="fa fa-times" aria-hidden="true"></i> <?php echo  $redux_options['price-adv-notice']; ?>
                                </li>
                            </ul>
                        </div>
                        <a href="tel:<?php echo  $redux_options['price-adv-phone']; ?>"><?php echo  $redux_options['price-adv-phone']; ?> </a>
                    </div>
                </div>
                <!-- END Col three -->
            </div>
        </div>
    </section>



<?php
include "request-form.php";

get_footer();
