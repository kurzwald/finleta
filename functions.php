<?php
/**
 * olynk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package olynk
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'olynk_register_required_plugins' );

function olynk_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Contact Form 7', // The plugin name.
            'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
          //  'source'             => 'https://downloads.wordpress.org/plugin/contact-form-7.5.1.7.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
         //   'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        //    'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
       //     'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
       //     'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        //    'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(
            'name'               => 'Redux Framework', // The plugin name.
            'slug'               => 'redux-framework', // The plugin slug (typically the folder name).
           // 'source'             => 'https://downloads.wordpress.org/plugin/redux-framework.3.6.17.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
          //  'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
          //  'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
          //  'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
          //  'external_url'       => '', // If set, overrides default API URL and points to an external URL.
          //  'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),


    );


    $config = array(
        'id'           => 'olynk',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );
}

/**
 * unit redux options page
 */
require_once(dirname(__FILE__) . '/inc/redux-config.php');


if ( ! function_exists( 'olynk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function olynk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on olynk, use a find and replace
		 * to change 'olynk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'olynk', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'olynk' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'olynk_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'olynk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function olynk_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'olynk_content_width', 640 );
}
add_action( 'after_setup_theme', 'olynk_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function olynk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'olynk' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'olynk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'olynk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function olynk_scripts() {
	wp_enqueue_style( 'olynk-style', get_stylesheet_uri() );
    wp_enqueue_style( 'olynk-style-main', get_template_directory_uri(). '/assets/build/css/main.min.css' , '', null, 'all');
	wp_enqueue_script( 'olynk-js', get_template_directory_uri() . '/assets/build/js/main.min.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'olynk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if (function_exists('register_sidebar')){
   register_sidebar( array(
        'name'          => 'Top header', //название виджета в админ-панели
        'id'            => 'top_bar', //идентификатор виджета
        'description'   => 'Блок над шапкой', //описание виджета в админ-панели
        'before_widget' => '', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '', //открывающий тег заголовка виджета
        'after_title'   => '',//закрывающий тег заголовка виджета
        ) );
}
if (function_exists('register_sidebar')){
   register_sidebar( array(
        'name'          => 'Top header right', //название виджета в админ-панели
        'id'            => 'top_bar-right', //идентификатор виджета
        'description'   => 'Блок над шапкой справа', //описание виджета в админ-панели
        'before_widget' => '', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<div class="topbar__item">', //открывающий тег заголовка виджета
        'after_title'   => '</div>',//закрывающий тег заголовка виджета
        ) );
}
function hstngr_register_widget() {
register_widget( 'hstngr_widget' );
}

add_action( 'widgets_init', 'hstngr_register_widget' );

class hstngr_widget extends WP_Widget {

function __construct() {
parent::__construct(
// widget ID
'hstngr_widget',
// widget name
__('Текст и ссылка для top-бар', ' hstngr_widget_domain'),
// widget description
array( 'description' => __( 'Вставка текста и ссылки с тор', 'hstngr_widget_domain' ), )
);
}
public function widget( $args, $instance) {
$title = apply_filters( 'widget_title', $instance['title'] );
$link = apply_filters( 'widget_title', $instance['link'] );
echo $args['before_widget'];
//if title is present
if ( ! empty( $title ) ){
	if ( ! empty( $link ) ){
	echo $args['before_title'].'<div class="topbar__item topbar__item--link"><a class="topbar-link" href="'.$link.'">' . $title.'</a>'.$args['after_title'].'</div>';
	}
	else{
		echo $args['before_title'].'<div class="topbar__item topbar__item--text">'. $title.$args['after_title'].'</div>';
	}
}
else{
	if ( ! empty( $link ) ){
		echo $args['before_title'].'<div class="topbar__item topbar__item--link"><a class="topbar-link" href="'.$link.'">Ссылка</a>'.$args['after_title'].'</div>';
	}
}
//output
//echo __( 'Текст', 'hstngr_widget_domain' );
echo $args['after_widget'];
}
public function form( $instance) {
if ( isset( $instance[ 'title' ] ) )
$title = $instance[ 'title' ];
else
$title = __( 'Введите текст', 'hstngr_widget_domain' );
if ( isset( $instance[ 'link' ] ) )
$link = $instance[ 'link' ];
else
$link = __( 'Введите ссылку', 'hstngr_widget_domain' );
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
</p>
<?php
}
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
return $instance;
}

}
