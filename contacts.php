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
                <h1>Contact Us</h1>
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
                                <h4 class="contact-us__header card-title">Our Address</h4>
                                <div class="contact-us__address">
                                    <p>
                                        715 Fake Ave, Apt. 34, New York, NY 10021 USA<br>
                                        Email: stroyka@example.com<br>
                                        Phone Number: +1 754 000-00-00
                                    </p>
                                    <p>
                                        <strong>Opening Hours</strong><br>
                                        Monday to Friday: 8am-8pm<br>
                                        Saturday: 8am-6pm<br>
                                        Sunday: 10am-4pm
                                    </p>
                                    <p>
                                        <strong>Comment</strong><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                        tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">Leave us a Message</h4>
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