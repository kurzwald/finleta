<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package olynk
 */
global $redux_options;
?>

	</div><!-- #content -->

	<footer  class="site-footer">
            <div class="container">
                <div class="row flex-column">
                    <div class="footer-branding_title"> <?php echo  $redux_options['site-branding-title']; ?> </div>
                    <a href="tel:<?php echo  $redux_options['site-branding-button-link']; ?>">  <div class="footer-branding_button"> <?php echo  $redux_options['site-branding-button-text']; ?> </div></a>
                </div>
            </div>
        <div class="container copyright">
            <div class="row flex-row">
                <div class="footer-copyright_left">  All right reserved  / 2020</div>
                <div class="footer-copyright_right">   Website  Development - <a href="https://sitelab.by">sitelab.by</a></div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
