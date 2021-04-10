<?php
/*
Template Name: Prices Page Template
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
                <h1><?php echo __( 'Prices'); ?></h1>
            </div>
        </div>
    </div>
    <div class="block prices-wrapper">
        <div class="container prices-wrapper-iframe">
            <?php echo do_shortcode( $redux_options['prices-form-desc'] ); ?>
        </div>
    </div>
<?php
/*include "request-form.php";
*/
get_footer();