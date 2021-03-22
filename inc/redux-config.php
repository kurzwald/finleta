<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Olynk Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Olynk Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );



    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
    } else {
    }

    // Add content after the form.

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields

Redux::setSection( $opt_name, array(
    'title'      => __( 'Fonts', 'redux-framework-demo' ),
    'desc'       => __( '  ', 'redux-framework-demo' ) ,
    'id'         => 'opt-fonts',
    'subsection' => false,
    'fields'     => array(

        array(
            'id'          => 'opt-typography',
            'type'        => 'typography',
            'title'       => __('Typography', 'redux-framework-demo'),
            'google'      => true,
            'font-backup' => true,

            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
            'default'     => array(
                'subsets' => 'cyrillic',
                'font-style'  => '300',
                'font-family' => 'Roboto',
                'google'      => true,



            ),
        ),
    )
) );
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header  ', 'redux-framework-demo' ),
        'id'    => 'header',
        'desc'  => __( 'header options.', 'redux-framework-demo' ),
        'icon'  => 'el el-brush'
    ) );




Redux::setSection( $opt_name, array(
    'title'      => __( 'Logo', 'redux-framework-demo' ),
    'desc'       => __( '  ', 'redux-framework-demo' ) ,
    'id'         => 'opt-text-subsection',
    'subsection' => true,
    'fields'     => array(

        array(
            'id'       => 'opt-logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Logo ', 'redux-framework-demo'),
            'desc'     => __('Basic logo  on the header', 'redux-framework-demo'),
            'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
            'default'  => array(
                'url'=>'/wp-content/themes/olynk/assets/build/img/logo.svg'
            ),
        ),
    )
) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header phone and link  ', 'redux-framework-demo' ),
        'desc'       => __( '', 'redux-framework-demo' ) . '',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'phone-number',
                'type'     => 'text',
                'title'    => __( 'Phone number', 'redux-framework-demo' ),

                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Phone number',
            ),
            array(
                'id'       => 'link-call-to-action-text',
                'type'     => 'text',
                'title'    => __( 'Link text "Request a call"', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => ' Text',
            ),
            array(
                'id'       => 'link-call-to-action',
                'type'     => 'text',
                'title'    => __( 'link "Request a call"', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => ' #',
            ),

        )
    ) );
        Redux::setSection( $opt_name, array(
            'title' => __( 'Header slider  ', 'redux-framework-demo' ),
            'id'    => 'slider',
            'desc'  => __( 'slider options.', 'redux-framework-demo' ),
            'icon'  => 'el el-list-alt'
        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Options slider  ', 'redux-framework-demo' ),
            'desc'       => __( '', 'redux-framework-demo' ) . '',
            'id'         => 'opt-slider',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'slide-title-1',
                    'type'     => 'text',
                    'title'    => __( 'Slide   Title 1', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Slide title',
                ),
                array(
                    'id'       => 'slide-desc-1',
                    'type'     => 'textarea',
                    'title'    => __( 'Slide Description 1', 'redux-framework-demo' ),
                    'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '  Some small description',
                ),
                array(
                    'id'       => 'slide-button-1',
                    'type'     => 'text',
                    'title'    => __( 'Slide button link 1', 'redux-framework-demo' ),
                    'subtitle' => __( 'link', 'redux-framework-demo' ),
                    'desc'     => __( 'link to page or popup', 'redux-framework-demo' ),
                    'default'  => '#',
                ),
                array(
                    'id'       => 'slide-img-1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Image for slide 1 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 840x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-img-mobile-1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Mobile image for slide 1 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 510x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3-mobile.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-title-2',
                    'type'     => 'text',
                    'title'    => __( 'Slide   Title 2', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Slide title',
                ),
                array(
                    'id'       => 'slide-desc-2',
                    'type'     => 'textarea',
                    'title'    => __( 'Slide Description 2', 'redux-framework-demo' ),
                    'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '  Some small description',
                ),
                array(
                    'id'       => 'slide-button-2',
                    'type'     => 'text',
                    'title'    => __( 'Slide button link 2', 'redux-framework-demo' ),
                    'subtitle' => __( 'link', 'redux-framework-demo' ),
                    'desc'     => __( 'link to page or popup', 'redux-framework-demo' ),
                    'default'  => '#',
                ),
                array(
                    'id'       => 'slide-img-2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Image for slide 1 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 840x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-img-mobile-2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Mobile image for slide 2 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 510x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3-mobile.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-title-3',
                    'type'     => 'text',
                    'title'    => __( 'Slide   Title 1', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Slide title',
                ),
                array(
                    'id'       => 'slide-desc-3',
                    'type'     => 'textarea',
                    'title'    => __( 'Slide Description 1', 'redux-framework-demo' ),
                    'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '  Some small description',
                ),
                array(
                    'id'       => 'slide-button-3',
                    'type'     => 'text',
                    'title'    => __( 'Slide button link 1', 'redux-framework-demo' ),
                    'subtitle' => __( 'link', 'redux-framework-demo' ),
                    'desc'     => __( 'link to page or popup', 'redux-framework-demo' ),
                    'default'  => '#',
                ),
                array(
                    'id'       => 'slide-img-3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Image for slide 1 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 840x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-img-mobile-3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Mobile image for slide 3 ', 'redux-framework-demo'),
                    'desc'     => __('Advantages image 510x395', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>'/wp-content/uploads/2021/03/slide-3-mobile.jpg'
                    ),
                ),
                array(
                    'id'       => 'slide-button-text',
                    'type'     => 'text',
                    'title'    => __('Text button', 'redux-framework-demo'),
                    'desc'     => __('Text button', 'redux-framework-demo'),
                    'subtitle' => __('Enter text for the button', 'redux-framework-demo'),
                    'default'  => 'Show Now'
                ),

            )
        ) );
        Redux::setSection( $opt_name, array(
            'title' => __( 'Notice block  ', 'redux-framework-demo' ),
            'id'    => 'notice',
            'desc'  => __( 'Notice options.', 'redux-framework-demo' ),
            'icon'  => 'el el-list-alt'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Notice Slogan  ', 'redux-framework-demo' ),
            'desc'       => __( '', 'redux-framework-demo' ) . '',
            'id'         => 'opt-notice',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'notice-title',
                    'type'     => 'text',
                    'title'    => __( 'Site header  title', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Get notified about launching',
                ),
                array(
                    'id'       => 'notice-form',
                    'type'     => 'text',
                    'title'    => __( 'Site header  description', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '[contact-form-7 id="53" title="телефон"]',
                ),


            )
        ) );
        Redux::setSection( $opt_name, array(
            'title' => __( 'Team block  ', 'redux-framework-demo' ),
            'id'    => 'team',
            'desc'  => __( 'Team options.', 'redux-framework-demo' ),
            'icon'  => 'el el-list-alt'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Team Slogan  ', 'redux-framework-demo' ),
            'desc'       => __( '', 'redux-framework-demo' ) . '',
            'id'         => 'opt-team',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'team-title-1',
                    'type'     => 'text',
                    'title'    => __( '  Team  title 1', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Title team',
                ),
                array(
                    'id'       => 'team-desc-1',
                    'type'     => 'text',
                    'title'    => __( '  Team  description 1', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Description team',
                ),
                array(
                    'id'       => 'team-icon-1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Team   icon 1 ', 'redux-framework-demo'),
                    'desc'     => __('Team icon', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>''
                    ),
                ),
                array(
                    'id'       => 'team-title-2',
                    'type'     => 'text',
                    'title'    => __( '  Team  title 2', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Title team',
                ),
                array(
                    'id'       => 'team-desc-2',
                    'type'     => 'text',
                    'title'    => __( '  Team  description 2', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Description team',
                ),
                array(
                    'id'       => 'team-icon-2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Team   icon 2 ', 'redux-framework-demo'),
                    'desc'     => __('Team icon', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>''
                    ),
                ),
                array(
                    'id'       => 'team-title-3',
                    'type'     => 'text',
                    'title'    => __( '  Team  title 3', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Title team',
                ),
                array(
                    'id'       => 'team-desc-3',
                    'type'     => 'text',
                    'title'    => __( '  Team  description 3', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Description team',
                ),
                array(
                    'id'       => 'team-icon-3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Team   icon 3 ', 'redux-framework-demo'),
                    'desc'     => __('Team icon', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>''
                    ),
                ),
                array(
                    'id'       => 'team-title-4',
                    'type'     => 'text',
                    'title'    => __( '  Team  title 4', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Title team',
                ),
                array(
                    'id'       => 'team-desc-4',
                    'type'     => 'text',
                    'title'    => __( '  Team  description 4', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Description team',
                ),
                array(
                    'id'       => 'team-icon-4',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __('Team   icon 4 ', 'redux-framework-demo'),
                    'desc'     => __('Team icon', 'redux-framework-demo'),
                    'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
                    'default'  => array(
                        'url'=>''
                    ),
                ),


            )
        ) );
        Redux::setSection( $opt_name, array(
            'title' => __( 'Price block  ', 'redux-framework-demo' ),
            'id'    => 'price',
            'desc'  => __( 'Price options.', 'redux-framework-demo' ),
            'icon'  => 'el el-list-alt'
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Price Slogan  ', 'redux-framework-demo' ),
            'desc'       => __( '', 'redux-framework-demo' ) . '',
            'id'         => 'opt-price',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'price-title',
                    'type'     => 'text',
                    'title'    => __( 'Site header  title', 'redux-framework-demo' ),

                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Pricing',
                ),
                array(
                    'id'       => 'price-adv-header1',
                    'type'     => 'text',
                    'title'    => __( ' Price tarif title  1', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Day tarif  ',
                ),
                array(
                    'id'       => 'price-adv-header2',
                    'type'     => 'text',
                    'title'    => __( ' Price tarif title  2', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Evening ',
                ),
                array(
                    'id'       => 'price-adv-header3',
                    'type'     => 'text',
                    'title'    => __( ' Price tarif title 3', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Night  ',
                ),
                array(
                    'id'       => 'price-adv-header4',
                    'type'     => 'text',
                    'title'    => __( ' Price tarif title  4', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'Morning ',
                ),
                array(
                    'id'       => 'price-adv-price1',
                    'type'     => 'text',
                    'title'    => __( ' Price 1', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '130$ ',
                ),
                array(
                    'id'       => 'price-adv-price2',
                    'type'     => 'text',
                    'title'    => __( ' Price 2', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '130$ ',
                ),
                array(
                    'id'       => 'price-adv-price3',
                    'type'     => 'text',
                    'title'    => __( ' Price 3', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '130$ ',
                ),
                array(
                    'id'       => 'price-adv-price4',
                    'type'     => 'text',
                    'title'    => __( ' Price 4', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '130$ ',
                ),
                array(
                    'id'       => 'price-adv-time1',
                    'type'     => 'text',
                    'title'    => __( ' Time  1', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'from 7:00 to 21:00 ',
                ),
                array(
                    'id'       => 'price-adv-time2',
                    'type'     => 'text',
                    'title'    => __( ' Time  2', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'from 21:00 to 2:00 ',
                ),
                array(
                    'id'       => 'price-adv-time3',
                    'type'     => 'text',
                    'title'    => __( ' Time  3', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'from 2:00 to 5:00',
                ),
                array(
                    'id'       => 'price-adv-time4',
                    'type'     => 'text',
                    'title'    => __( ' Time  4', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'from 5:00 to 7:00 ',
                ),
                array(
                    'id'       => 'price-adv-notice',
                    'type'     => 'text',
                    'title'    => __( ' Notice on price ', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => 'The price of the service depends on the time of order acceptance ',
                ),
                array(
                    'id'       => 'price-adv-phone',
                    'type'     => 'text',
                    'title'    => __( ' Phone to call ', 'redux-framework-demo' ),
                    'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                    'default'  => '+1445505500',
                ),
            )
        ) );
    /*
     * <--- END SECTIONS
     */
