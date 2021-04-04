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
        array(
            'name'               => 'Woocommerce', // The plugin name.
            'slug'               => 'woocommerce', // The plugin slug (typically the folder name).
            // 'source'             => 'https://downloads.wordpress.org/plugin/woocommerce.5.1.0.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            //  'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            //  'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            //  'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            //  'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            //  'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(
            'name'               => 'Polylang', // The plugin name.
            'slug'               => 'polylang', // The plugin slug (typically the folder name).
            // 'source'             => 'https://downloads.wordpress.org/plugin/polylang.3.0.2.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            //  'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            //  'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            //  'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            //  'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            //  'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(
            'name'               => 'FiboSearch — Ajax Search for WooCommerce', // The plugin name.
            'slug'               => 'ajax-search-for-woocommerce', // The plugin slug (typically the folder name).
            // 'source'             => 'https://downloads.wordpress.org/plugin/ajax-search-for-woocommerce.1.9.0.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            //  'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            //  'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            //  'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            //  'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            //  'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(
            'name'               => 'WooMS', // The plugin name.
            'slug'               => 'wooms', // The plugin slug (typically the folder name).
            // 'source'             => 'https://downloads.wordpress.org/plugin/wooms.zip', // The plugin source.
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
        'before_widget' => '<div class="topbar__item">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '', //открывающий тег заголовка виджета
        'after_title'   => '',//закрывающий тег заголовка виджета
        ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Left menu', //название виджета в админ-панели
        'id'            => 'left_menu', //идентификатор виджета
        'description'   => 'Левое меню', //описание виджета в админ-панели
        'before_widget' => '<div class="nav-panel__departments">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '', //открывающий тег заголовка виджета
        'after_title'   => '',//закрывающий тег заголовка виджета
    ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Footer col first', //название виджета в админ-панели
        'id'            => 'footer_first', //идентификатор виджета
        'description'   => 'Футер первая колонка', //описание виджета в админ-панели
        'before_widget' => '<div class="site-footer__widget footer-contacts">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<h5 class="footer-contacts__title">', //открывающий тег заголовка виджета
        'after_title'   => '</h5>',//закрывающий тег заголовка виджета
    ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Footer col second', //название виджета в админ-панели
        'id'            => 'footer_second', //идентификатор виджета
        'description'   => 'Футер вторая колонка', //описание виджета в админ-панели
        'before_widget' => '<div class="site-footer__widget footer-links">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<h5 class="footer-links__title">', //открывающий тег заголовка виджета
        'after_title'   => '</h5>',//закрывающий тег заголовка виджета
    ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Footer col fhird', //название виджета в админ-панели
        'id'            => 'footer_third', //идентификатор виджета
        'description'   => 'Футер третья колонка', //описание виджета в админ-панели
        'before_widget' => '<div class="site-footer__widget footer-links">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<h5 class="footer-links__title">', //открывающий тег заголовка виджета
        'after_title'   => '</h5>',//закрывающий тег заголовка виджета
    ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Footer col fourth', //название виджета в админ-панели
        'id'            => 'footer_fourth', //идентификатор виджета
        'description'   => 'Футер третья колонка', //описание виджета в админ-панели
        'before_widget' => '<div class="site-footer__widget footer-links">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<h5 class="footer-links__title">', //открывающий тег заголовка виджета
        'after_title'   => '</h5>',//закрывающий тег заголовка виджета
    ) );
}
if (function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => 'Left sitebar for shop', //название виджета в админ-панели
        'id'            => 'shop_left_sitebar', //идентификатор виджета
        'description'   => 'Сайтбар слева для фильтров на странице магазина', //описание виджета в админ-панели
        'before_widget' => '<div class="block-sidebar__body">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '</div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<div class="block-sidebar__header"><div class="block-sidebar__title">', //открывающий тег заголовка виджета
        'after_title'   => '</div></div>',//закрывающий тег заголовка виджета
    ) );
}
function hstngr_register_widget() {
register_widget( 'hstngr_widget' );
}

add_action( 'widgets_init', 'hstngr_register_widget' );

class hstngr_widget extends WP_Widget {

function __construct() {
parent::__construct(
'hstngr_widget',
__('Текст и ссылка для top-бар'),
array( 'description' => __( 'Вставка текста и ссылки с тор'), )
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
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $classes[] = 'nav-links__item  nav-links__item--has-submenu';
    return $classes;
}
add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);
function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }
    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
}
function get_hansel_and_gretel_breadcrumbs()
{

    $here_text        = __( '' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<ol class="breadcrumb">';
    $link_after       = '</ol>';
    $link_attr        = ' ';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ' ';              // Delimiter between crumbs
    $before           = '<li class="breadcrumb-item">'; // Tag before the current crumb
    $after            = '</li>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';


    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() )
    {

        $post_object = sanitize_post( $queried_object );

        // Set variables
        //$title          = apply_filters( 'the_title', $post_object->post_title );
        $title          = $post_object->post_title;
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';
        $breadcrumb_trail= '';

        if ( 'post' === $post_type )
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent )
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
            || is_tag()
            || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }

    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<li class="breadcrumb-item">';
    if (    is_home()
        || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</li><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}
add_action( 'woocommerce_before_single_product', 'action_function_woocommerce_breadcrumbs',10);
function action_function_woocommerce_breadcrumbs(){
    $before='<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">';
    $after='</ol>
           </nav>
        </div>
    </div>
</div>';
    $args=array(
        'delimiter'   => '',
        'wrap_before' => $before,
        'wrap_after'  => $after,
        'before'      => '<li class="breadcrumb-item">',
        'after'       => '</li>',
        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
    echo woocommerce_breadcrumb($args);

}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title',10);
add_action('woocommerce_single_product_summary', 'change_single_product_ratings', 2 );
function change_single_product_ratings(){
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10 );
    add_action('woocommerce_single_product_summary','wc_single_product_ratings', 15 );
}

function wc_single_product_ratings(){
    global $product;

    $rating_count = $product->get_rating_count();

    if ( $rating_count >= 0 ) {
        $review_count = $product->get_review_count();
        $average      = $product->get_average_rating();
        ?>
        <div class="product__rating">
            <div class="product__rating-stars"><div class="rating">
                    <?php echo wc_get_rating_html( $average, $rating_count ); ?>
                </div>
            </div>
                <?php if ( comments_open() ) : ?><div class="product__rating-legend"><a href="#reviews" class="woocommerce-review-link" rel="nofollow"><?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?></a><?php endif ?></div>
        </div>
        <?php
    }
}
add_action('woocommerce_single_product_summary', 'change_single_product_ratings', 20 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 25 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',30);
remove_action('woocommerce_single_product_summary', 'woocommerce_get_availability', 30 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',35);
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_category',45);
remove_action('woocommerce_after_single_product_summary','woocommerce_review_comment',15);
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
    $tabs['reviews']['title'] = __( 'Reviews' );
    $tabs['reviews']['callback']='woo_add_comment';
    return $tabs;

}
function woo_add_comment() {
    ?>
    <div class="reviews-view">
        <?php comments_template();?>
    </div>

    <?php
}
function woocommerce_custom_category(){
    global $product;
    $before_cat='<div class="product__footer">';
    $after_cat='</div></div>';
    $social='<div class="product__share-links share-links">
                                    <ul class="share-links__list">
                                        <!--<li class="share-links__item share-links__item--type--like"><a href="">Like</a></li>
                                        <li class="share-links__item share-links__item--type--tweet"><a href="">Tweet</a></li>
                                        <li class="share-links__item share-links__item--type--pin"><a href="">Pin It</a></li>
                                        <li class="share-links__item share-links__item--type--counter"><a href="">4K</a></li>-->
                                    </ul>
                                </div>';
    echo $before_cat.'<div class="product__tags tags"><div class="tags__list">'.wc_get_product_category_list($product->get_id(), _n('', '', count($product->get_category_ids()), 'woocommerce') ).'</div></div>'.$social.$after_cat;
}
function custom_comments( $comment, $args, $depth ){

    ?><li <?php comment_class('reviews-list__item') ?> id="comment-<?php comment_ID() ?>">
    <div class="review">
        <div class="review__avatar">
        <?php echo get_avatar( $comment, 70, '', '', array( 'class' => 'comment-avatar' ) ) ?>
        </div>
        <div class="review__content">
            <div class="review__author"><?php comment_author() ?></div>
            <div class="review__rating">
                <div class="rating">
                    <div class="rating__body">
                    <?php wp_star_rating(); ?>
                    </div>
                </div>
            </div>
            <div class="review__text"><?php comment_text() ?></div>
            <div class="review__date"><?php comment_date( 'j F Y в H:i' ) ?></div>

        </div>
    </div>
    <?php

}
function end_custom_comments(){
    echo '</li>';
}
add_filter( 'comment_form_default_fields', 'comment_form_default_add_my_fields' );
function comment_form_default_add_my_fields( $fields ) {
    unset( $fields['url'] );
    return $fields;
}

add_action( 'comment_form_before_fields', 'action_function_name_before_fil' );
function action_function_name_before_fil(){
    echo '<div class="col-12 col-lg-9 col-xl-8"><div class="form-row">';
}
add_action( 'comment_form_after_fields', 'action_function_name_after_fil' );
function action_function_name_after_fil(){
    echo '</div></div>';
}
function comment_change_checkcdpr( $fields ) {
    $fields['cookies'] = '';
    return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_change_checkcdpr' );



add_filter( 'woocommerce_after_single_product_summary', 'add_stars_to_review_tab', 98 );
function add_stars_to_review_tab( $title ) {
    global $product;

    $average_rating = $product->get_average_rating();
    $rating_count = $product->get_rating_count();
    $review_count = $product->get_review_count();

    if( ! empty($average_rating) && $average_rating > 0 ) {
        return '<div>' . $title . '</div>' . wc_get_rating_html($average_rating) . sprintf(
                '<div class="stars">%s / 5 (%s %s)</div>',
                $average_rating,
                $review_count,
                _n( "review", "reviews", $review_count, "woocommerce" )
            );
    }
    else{

    }
    return $title;
}
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo '<div class="product-card__image product-image">'.woocommerce_get_product_thumbnail().'</div>';
    }
}
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'finleta_template_loop_product_title', 10 );
function finleta_template_loop_product_title() {
    echo '<div class="product-card__info"><div class="product-card__name">' . get_the_title() . '</div></div>';
}
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'finleta_template_loop_rating', 5 );
function finleta_template_loop_rating() {
    echo '<div class="product-card__info">' . wc_get_template( 'loop/rating.php' ) . '</div>';
}

