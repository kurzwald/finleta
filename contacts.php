<?php
/*
Template Name: Contacts
*/

get_header();
?>
    <div id="map" class="contact-map-wrapper">
    </div>
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
                <h1><?php echo pll__( 'Our contacts'); ?></h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">
                                    <?php echo pll__($redux_options['contacts-form-header']); ?>
                                </h4>
                                <div class="contact-us__address">
                                    <?php echo pll__($redux_options['contacts-form-desc']); ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">
                                    <?php echo pll__( 'Send message'); ?>
                                </h4>
                                <?php
                                $lang_site=pll_current_language();
                                switch ($lang_site) {
                                    case "ru":
                                        echo do_shortcode($redux_options['contacts-form-ru']);
                                        break;
                                    case "en":
                                        echo do_shortcode($redux_options['contacts-form-en']);
                                        break;
                                    case "де":
                                        echo do_shortcode($redux_options['contacts-form-lt']);
                                        break;
                                    default:
                                        echo do_shortcode($redux_options['contacts-form-ru']);
                                        break;
                                }
                               ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC909uIFrT8U5sLeNqS9gEfpYO86XnskxE&callback=initMap">
    </script>
<?php
/*include "request-form.php";
*/
get_footer();