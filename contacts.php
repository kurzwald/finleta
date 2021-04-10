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
                <h1><?php echo __( 'Contact Us'); ?></h1>
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
                                    <?php echo do_shortcode( $redux_options['contacts-form-header'] ); ?>
                                </h4>
                                <div class="contact-us__address">
                                    <?php echo do_shortcode( $redux_options['contacts-form-desc'] ); ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">
                                    <?php echo __( 'Leave us a Message'); ?>
                                </h4>

                                <?php echo do_shortcode( $redux_options['contacts-form'] ); ?>
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