<?php
/**
 * The request form template
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
?>

    <!-- form
        ============================================= -->
    <section class="request">
        <div   class="container">
            <div class="row">
                <div class="request-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="305" height="117" viewBox="0 0 305 117">
                            <image id="Olynk_logo_svg" width="305" height="117" xlink:href="data:img/png;base64,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"/>
                        </svg>
                    </a> </div>
            </div>
            <div class="row">
                <div class="request-title">   Request Beta Version</div>
                <div class="request-desc">  </div>
            </div>
            <form action="/" class="request-form">
                <div class="row">
                <div class="col-sm request-block">
                    <input type="text" name="full-name" value=""  class="request-text"  placeholder="full name">
                    <input type="email" name="email" placeholder="e-mail adress" value=""  class="request-email" >
                    <input type="text" name="phone" value=""  class="request-text"  placeholder="phone number">
                    <select name="platform" class="request-select"  data-placeholder="Select a state">
                        <option class="request-select" ></option>
                        <option class="request-select"  value="Android">Android</option>
                        <option class="request-select" value="iOS">iOS</option>
                    </select>
                </div>
                <div class="col-sm request-block">
                    <textarea name="message" cols="40" rows="6" class="request-textarea"   placeholder="Message"></textarea>
                    <input type="submit"   value="Get Beta of Olynk" class="request submit">
                </div>
            </div>
            </form>
        </div>
    </section>











