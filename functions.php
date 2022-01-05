<?php
/**
 * isupb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package isupb
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'isupb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function isupb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on isupb, use a find and replace
		 * to change 'isupb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'isupb', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Главное меню', 'isupb' ),
				'footer1-menu' => esc_html__( 'Подвал-1 меню', 'isupb' ),
				'footer2-menu' => esc_html__( 'Подвал-2 меню', 'isupb' ),
				'footer3-menu' => esc_html__( 'Подвал-3 меню', 'isupb' ),
				'copy-menu' => esc_html__( 'Copyright меню', 'isupb' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'isupb_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 243,
				'width'       => 88,
				'flex-width'  => true,
				'flex-height' => true,
				'unlink-homepage-logo' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'isupb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function isupb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'isupb_content_width', 640 );
}
add_action( 'after_setup_theme', 'isupb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function isupb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'isupb' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'isupb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'isupb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function isupb_scripts() {
	wp_enqueue_style( 'isupb-style', get_stylesheet_uri(), array(), '' );
//	wp_style_add_data( 'isupb-style', 'rtl', 'replace' );
	wp_enqueue_style( 'vendors-style', get_template_directory_uri() . '/assets/css/vendors~main.css', array(), '' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '' );
	wp_enqueue_style( 'other-style', get_template_directory_uri() . '/assets/css/other.css', array(), '' );


	wp_enqueue_script('jquery');
	wp_enqueue_script( 'vendors-script', get_template_directory_uri() . '/assets/js/vendors~main.js', array(), '', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), false, true);
	wp_enqueue_script( 'sticky-script', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.min.js', array(), '', true );
	wp_enqueue_script( 'readmore-script', get_template_directory_uri() . '/assets/js/readmore.min.js', array(), '', true );
	wp_enqueue_script( 'other-script', get_template_directory_uri() . '/assets/js/other.js', array(), '', true );
//	wp_enqueue_script( 'live_search', get_template_directory_uri() . '/assets/js/live_search.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'isupb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'isupb_scripts' );

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



/**
 * Customize breadcrumbs.
 */
require get_template_directory() . '/inc/customize/breadcrumbs.php';


/**
 * Customize pagination.
 */
require get_template_directory() . '/inc/customize/pagination.php';


/**
 * Customize theme-options
 */
require get_template_directory() . '/inc/customize/theme-options.php';


/**
 * Customize fix upload svg files
 */
require get_template_directory() . '/inc/customize/fix-svg.php';


/**
 * Customize post views
 */
require get_template_directory() . '/inc/customize/post-views.php';


/*
 * excerpt_length
 */
require get_template_directory() . '/inc/customize/excerpt.php';



// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

//Удаляем category из УРЛа категорий
add_filter( 'category_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );


add_image_size( 'main-slide', 646, 746, true);
add_image_size( 'page-thumb', 598, 624, true);

add_image_size( 'post-home', 505, 269, true);
add_image_size( 'post', 600, 320, true);
add_image_size( 'post-small', 480, 208, true);
add_image_size( 'sotrudnik', 260, 300, true);
add_image_size( 'review', 258, 364, true);
add_image_size( 'certificate', 258, 364, true);
add_image_size( 'about-us', 1027, 700, true);

add_action( 'init', 'isu_register_pattern_category', 25 );
 
function isu_register_pattern_category() {
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
 
		register_block_pattern_category(
			'isu_article',
			array( 'label' => 'Статьи' )
		);
 
	}
}

add_action( 'init', 'isu_register_block_pattern', 25 );
 
function isu_register_block_pattern() {
 
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
 		register_block_pattern(
			'isu_article/hero-pattern',
			array(
				'title'       => 'Блок с фото',
				'description' => 'Этот паттерн позволяет вам вставить несколько блоков с изображением и текстом.',
				'content'     => "<!-- wp:media-text {\"mediaType\":\"image\",\"verticalAlignment\":\"top\",\"className\":\"isu-art__block\"} --> <div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top isu-art__block\"> <figure class=\"wp-block-media-text__media \"> <img src=\"\"/> </figure> <div class=\"wp-block-media-text__content\"> <!-- wp:paragraph {\"placeholder\":\"Заголовок...\",\"className\":\"isu-art__heading\"} --> <p class=\"isu-art__heading\"></p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>We help ambitious businesses like yours generate more profits building driving web traffice</p> <!-- /wp:paragraph --> <!-- wp:list --> <ul> <li>We provide a revolutionary level of transpa</li> <li>There are many variations of passages of Lorem</li> <li>Available, but the majority have suffered</li> </ul> <!-- /wp:list --> </div> </div> <!-- /wp:media-text -->",
				'categories'  => array( 'isu_article' ),
			)
		);
 
	}
 
}

add_action( 'init', 'isu_register_blockquote_pattern', 25 );
 
function isu_register_blockquote_pattern() {
 
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
 		register_block_pattern(
			'isu_article/blockquote-pattern',
			array(
				'title'       => 'Цитата',
				'description' => 'Этот паттерн позволяет вам вставить несколько блоков с цитатой',
				'content'     => "<!-- wp:group {\"className\":\"isu__blockquote\"} --> <div class=\"wp-block-group isu__blockquote\"><div class=\"wp-block-group__inner-container\"><!-- wp:quote --> <blockquote class=\"wp-block-quote\"><p>We help businesses elevate their through custom service software development product design.</p><cite>Adam Jonson /Founder</cite></blockquote> <!-- /wp:quote --></div></div> <!-- /wp:group -->",
				'categories'  => array( 'isu_article' ),
			)
		);
 
	}
 
}

add_action( 'init', 'isu_register_utp_pattern', 25 );
 
function isu_register_utp_pattern() {
 
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
 		register_block_pattern(
			'isu_article/utp-pattern',
			array(
				'title'       => 'Блок с иконкой',
				'description' => 'Этот паттерн позволяет вам вставить несколько блоков с иконкой',
				'content'     => "<!-- wp:media-text {\"mediaType\":\"image\",\"verticalAlignment\":\"top\",\"className\":\"isu-art__utp\"} --> <div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top isu-art__utp\"><figure class=\"wp-block-media-text__media\"><img alt=\"\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Содержимое...\",\"className\":\"isu-art__heading\"} --> <p class=\"isu-art__heading\">Search Optimization</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>We help businesses elevate their through custom service software development product design randomised words which don't look even slightly believable .</p> <!-- /wp:paragraph --></div></div> <!-- /wp:media-text -->",
				'categories'  => array( 'isu_article' ),
			)
		);
 
	}
 
}

add_action( 'init', 'isu_register_expert_pattern', 25 );
 
function isu_register_expert_pattern() {
 
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
 		register_block_pattern(
			'isu_article/expert-pattern',
			array(
				'title'       => 'Эксперт',
				'description' => 'Этот паттерн позволяет вам вставить несколько блоков с экспертом',
				'content'     => "<!-- wp:media-text {\"verticalAlignment\":\"top\",\"className\":\"isu-art__expert\"} --> <div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top isu-art__expert\"><figure class=\"wp-block-media-text__media\"></figure><div class=\"wp-block-media-text__content\"> <!-- wp:paragraph {\"placeholder\":\"Эксперт...\",\"className\":\"isu-art__expert-name\"} --> <p class=\"isu-art__expert-name\">Эксперт</p> <!-- /wp:paragraph --> <!-- wp:paragraph {\"placeholder\":\"Фамилия Имя Отчество\"} --> <p>Фамилия Имя Отчество</p> <!-- /wp:paragraph --> <!-- wp:paragraph {\"placeholder\":\"+7 (953) 948 23 85\"} --> <p>+7 (953) 948 23 85</p> <!-- /wp:paragraph --> <!-- wp:paragraph {\"placeholder\":\"pr.oparin@yandex.ru\"} --> <p>pr.oparin@yandex.ru</p> <!-- /wp:paragraph --> <!-- wp:paragraph {\"className\":\"isu-art__expert-text\"} --> <p class=\"isu-art__expert-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet facilisis magna etiam tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. </p> <!-- /wp:paragraph --> </div></div> <!-- /wp:media-text -->",
				'categories'  => array( 'isu_article' ),
			)
		);
 
	}
 
}