<?php
/**
 * csot-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package csot-theme
 */

if ( ! function_exists( 'csot_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function csot_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on csot-theme, use a find and replace
		 * to change 'csot-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'csot-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'csot-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'csot_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'csot_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function csot_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'csot_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'csot_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/**function csot_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'csot-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'csot-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'csot_theme_widgets_init' );
**/
/**
 * Enqueue scripts and styles.
 */
function csot_theme_scripts() {
	wp_enqueue_style( 'csot-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'csot-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'csot-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'jquery-latest', get_template_directory_uri() . '/js/jquery-latest.min.js', ' ' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', ' ' );
	wp_enqueue_style( 'stellarnav', get_template_directory_uri() . '/css/stellarnav.css' );
	wp_enqueue_script( 'stellarnav', get_template_directory_uri() . '/js/stellarnav.js', ' ' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'csot_theme_scripts' );

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

// регистрация меню

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'secondery', 'Sidebar-menu' );
}

// создание типа записей наружное освещение

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('naruzhnoe', array(
		'labels'             => array(
			'name'               => 'Наружное освещение', // Основное название типа записи
			'singular_name'      => 'Наружное освещение', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое наружное освещение',
			'edit_item'          => 'Редактировать наружное освещение',
			'new_item'           => 'Новое наружное освещение',
			'view_item'          => 'Посмотреть новое наружное освещение',
			'search_items'       => 'Найти наружное освещение',
			'not_found'          => 'Наружного освещения не найдено',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Наружное освещение'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true, //менял в ручную
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail'),
		'taxonomies'         => array('taxonomy_naruzhnoe'),
	) );

// создание типа записей внутреннее освещение

	register_post_type('vnutrennee', array(
		'labels'             => array(
			'name'               => 'Внутреннее освещение', // Основное название типа записи
			'singular_name'      => 'Внутреннее освещение', // отдельное название записи типа Book
			'add_new'            => 'Добавить внутреннее освещение',
			'add_new_item'       => 'Добавить новое внутреннее освещение',
			'edit_item'          => 'Редактировать внутреннее освещение',
			'new_item'           => 'Новое внутреннее освещение',
			'view_item'          => 'Посмотреть внутреннее освещение',
			'search_items'       => 'Найти внутреннее освещение',
			'not_found'          => 'Внутреннего освещения не найдено',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Внутреннее освещение'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true, //менял в ручную
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail'),
		'taxonomies'         => array(),
	) );

// создание типа записей тепличное освещение

	register_post_type('teplichnoe', array(
		'labels'             => array(
			'name'               => 'Тепличное освещение', // Основное название типа записи
			'singular_name'      => 'Тепличное освещение', // отдельное название записи типа Book
			'add_new'            => 'Добавить тепличное освещение',
			'add_new_item'       => 'Добавить новое тепличное освещение',
			'edit_item'          => 'Редактировать тепличное освещение',
			'new_item'           => 'Новое тепличное освещение',
			'view_item'          => 'Посмотреть тепличное освещение',
			'search_items'       => 'Найти тепличное освещение',
			'not_found'          => 'Тепличного освещения не найдено',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Тепличное освещение'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true, //менял в ручную
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail'),
		'taxonomies'         => array(),
	) );

// создание типа записей специальное освещение

	register_post_type('specialnoe', array(
		'labels'             => array(
			'name'               => 'Специальное освещение', // Основное название типа записи
			'singular_name'      => 'Специальное освещение', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое специальное освещение',
			'add_new_item'       => 'Добавить новое специальное освещение',
			'edit_item'          => 'Редактировать специальное освещение',
			'new_item'           => 'Новое специальное освещение',
			'view_item'          => 'Посмотреть специальное освещение',
			'search_items'       => 'Найти специальное освещение',
			'not_found'          => 'Специального освещения не найдено',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Специальное освещение'
		    ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true, //менял в ручную
		'menu_position'      => 4,
		'supports'           => array('title','editor','thumbnail','excerpt'),
		'taxonomies'         => array(),
	    ) );

// создание типа записей инновации

	register_post_type('innovation', array(
		'labels'             => array(
			'name'               => 'Инновации', // Основное название типа записи
			'singular_name'      => 'Инновации', // отдельное название записи типа Book
			'add_new'            => 'Добавить инновации',
			'add_new_item'       => 'Добавить новую инновацию',
			'edit_item'          => 'Редактировать инновацию',
			'new_item'           => 'Новая инновацию',
			'view_item'          => 'Посмотреть новую инновацию',
			'search_items'       => 'Найти инновацию',
			'not_found'          => 'Инновация не найдена',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Инновации'

		  ),
		'menu_icon'           => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail','editor'),
		'taxonomies'         => array(''),
	) );



// создание типа записей материалы для скачивания

	register_post_type('download_materials', array(
		'labels'             => array(
			'name'               => 'Материалы для скачивания', // Основное название типа записи
			'singular_name'      => 'Материалы для скачивания', // отдельное название записи типа Book
			'add_new'            => 'Добавить материалы для скачивания',
			'add_new_item'       => 'Добавить материалы для скачивания',
			'edit_item'          => 'Редактировать материалы для скачивания',
			'new_item'           => 'Новый материал для скачивания',
			'view_item'          => 'Посмотреть материалы для скачивания',
			'search_items'       => 'Найти материалы для скачивания',
			'not_found'          => 'Материалы для скачивания не найдены',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Материалы для скачивания'

		  ),
		'menu_icon'           => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail','editor'),
		'taxonomies'         => array(''),
	) );
// создание типа записей противодействие коррупции

	register_post_type('protivodejstvie_korrupcii', array(
		'labels'             => array(
			'name'               => 'Противодействие коррупции', // Основное название типа записи
			'singular_name'      => 'Противодействие коррупции', // отдельное название записи типа Book
			'add_new'            => 'Добавить противодействие коррупции',
			'add_new_item'       => 'Добавить противодействие коррупции',
			'edit_item'          => 'Редактировать противодействие коррупции',
			'new_item'           => 'Новое противодействие коррупции',
			'view_item'          => 'Посмотреть противодействие коррупции',
			'search_items'       => 'Найти противодействие коррупции',
			'not_found'          => 'Противодействие коррупции не найдено',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Противодействие коррупции'

		  ),
		'menu_icon'           => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail','editor'),
		'taxonomies'         => array(''),
	) );   
	 
}

// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_naruzhnoe' );
function create_taxonomy_naruzhnoe(){
	register_taxonomy('taxonomy_naruzhnoe', array('naruzhnoe'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории наружного освещения',
			'singular_name'     => 'Категории наружного освещения',
			'search_items'      => 'Найти категории наружного освещения',
			'all_items'         => 'Все категории наружного освещения',
			'view_item '        => 'Смотреть категории наружного освещения',
			'parent_item'       => 'Родительская категория наружного освещения',
			'parent_item_colon' => 'Родительская категория наружного освещения:',
			'edit_item'         => 'Изменить категорию наружного освещения',
			'update_item'       => 'Обновить категорию наружного освещения',
			'add_new_item'      => 'Добавить категорию нового наружного освещения',
			'new_item_name'     => 'Новое название для категории наружного освещения',
			'menu_name'         => 'Категории наружного освещения',
		),
		'description'           => 'Категории наружного освещения', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}
// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_vnutrennee' );
function create_taxonomy_vnutrennee(){
	register_taxonomy('taxonomy_vnutrennee', array('vnutrennee'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории внутреннего освещения',
			'singular_name'     => 'Категории внутреннего освещения',
			'search_items'      => 'Найти категории внутреннего освещения',
			'all_items'         => 'Все категории внутреннего освещения',
			'view_item '        => 'Смотреть категории внутреннего освещения',
			'parent_item'       => 'Родительская категория внутреннего освещения',
			'parent_item_colon' => 'Родительская категория внутреннего освещения:',
			'edit_item'         => 'Изменить категорию внутреннего освещения',
			'update_item'       => 'Обновить категорию внутреннего освещения',
			'add_new_item'      => 'Добавить категорию нового внутреннего освещения',
			'new_item_name'     => 'Новое название для категории внутреннего освещения',
			'menu_name'         => 'Категории внутреннего освещения',
		),
		'description'           => 'Категории внутреннего освещения', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_teplichnoe' );
function create_taxonomy_teplichnoe(){
	register_taxonomy('taxonomy_teplichnoe', array('teplichnoe'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории тепличного освещения',
			'singular_name'     => 'Категории тепличного освещения',
			'search_items'      => 'Найти тепличное освещение',
			'all_items'         => 'Всё тепличное освещение',
			'view_item '        => 'Смотреть тепличное освещение',
			'parent_item'       => 'Родительское тепличное освещение',
			'parent_item_colon' => 'Родительское тепличное освещение:',
			'edit_item'         => 'Изменить тепличное освещение',
			'update_item'       => 'Обновить тепличное освещение',
			'add_new_item'      => 'Добавить категорию нового тепличного освещения',
			'new_item_name'     => 'Новое название для тепличного освещения',
			'menu_name'         => 'Категории тепличного освещения ',
		),
		'description'           => 'Тепличное освещение', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_specialnoe' );
function create_taxonomy_specialnoe(){
	register_taxonomy('specialnoe', array('specialnoe'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории специального освещения',
			'singular_name'     => 'Категории специального освещения',
			'search_items'      => 'Найти специальное освещение',
			'all_items'         => 'Всё специальное освещение',
			'view_item '        => 'Смотреть специальное освещение',
			'parent_item'       => 'Родительское специальное освещение',
			'parent_item_colon' => 'Родительское специальное освещение:',
			'edit_item'         => 'Изменить специальное освещение',
			'update_item'       => 'Обновить специальное освещение',
			'add_new_item'      => 'Добавить категорию нового специального освещения',
			'new_item_name'     => 'Новое название для специального освещения',
			'menu_name'         => 'Категории специального освещения ',
		),
		'description'           => 'Специальное освещение', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_project' );
function create_taxonomy_project(){
	register_taxonomy('taxonomy_project', array('projects'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории проектов',
			'singular_name'     => 'Категория проекта',
			'search_items'      => 'Найти категории проектов',
			'all_items'         => 'Все категории проектов',
			'view_item '        => 'Смотреть категории проектов',
			'parent_item'       => 'Родительская категория проектов',
			'parent_item_colon' => 'Родительская категория проектов:',
			'edit_item'         => 'Изменить категорию проекта',
			'update_item'       => 'Обновить категорию проекта',
			'add_new_item'      => 'Добавить категорию нового проекта',
			'new_item_name'     => 'Новое название для категории проекта',
			'menu_name'         => 'Категории проектов',
		),
		'description'           => 'Категории проектов', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui

	) );
}

// добавляет bootstrap классы в меню header

// add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
// function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
// 	if( $args->theme_location === 'menu-1' ){
// 		$classes[] = 'nav-item';
// 	}

// 	return $classes;
// }

// фильтр, добовляет к элементам li a главного меню стили bootstrap
// add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
// function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) { 
// 	if ($item->ID == 26 || $item->ID == 382 || $item->ID == 28 || $item->ID == 27 || $item->ID == 23 || $item->ID == 22 ) {
// 		$atts['class'] .= 'nav-link';
// 	}
// 	return $atts;
// }



// удаление меню записей, комментариев и инструментов из админки
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	remove_menu_page( 'edit.php' ); 
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'tools.php' );
}

// форма поиска

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s">Запрос для поиска:</label>
		<input type="text" size="25" placeholder="Искать..." value="' . get_search_query() . '" name="s" id="s" />
		<button><img src=" '.get_template_directory_uri().'/images/icon1.ico" width="32" height="22"></button>
	</form>';

	return $form;
}

// обрезка статьи

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '&nbsp;<a href="'. get_permalink($post) . '">(читать дальше)</a>';
}

add_filter( 'excerpt_length', function(){
	return 20;
} );

// добавление класса в ul


add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );

function change_wp_nav_menu( $classes, $args, $depth ) {
	if ( $args->theme_location == 'menu-1' ) {
		$classes[] = 'drop-down_menu';

	}

	return $classes;
}
