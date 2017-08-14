<?php
/**
 * gipspanels functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gipspanels
 */

if ( ! function_exists( 'gipspanels_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gipspanels_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gipspanels, use a find and replace
		 * to change 'gipspanels' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gipspanels', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'gipspanels' ),
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
		add_theme_support( 'custom-background', apply_filters( 'gipspanels_custom_background_args', array(
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
			'height'      => 260,
			'width'       => 110,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gipspanels_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gipspanels_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gipspanels_content_width', 640 );
}
add_action( 'after_setup_theme', 'gipspanels_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gipspanels_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные иконки.Фейсбук', 'gipspanels' ),
		'id'            => 'fb-icon',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#" class="social social_fb">фэйсбук</a>', 'gipspanels' ),
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные иконки.Вконтакте', 'gipspanels' ),
		'id'            => 'vk-icon',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#" class="social social_vk">Вконтакте</a>', 'gipspanels' ),
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные иконки.Одноклассники', 'gipspanels' ),
		'id'            => 'ok-icon',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#" class="social social_ok">Одноклассники</a>', 'gipspanels' ),
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные иконки.Инстаграмм', 'gipspanels' ),
		'id'            => 'in-icon',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#" class="social social_in">Инстаграмм</a>', 'gipspanels' ),
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты.Городской', 'gipspanels' ),
		'id'            => 'top-phone',
		'description'   => esc_html__( 'Добавить запись вида: <a href="tel:88001004148"><span>
		</span>8 (800) 100 41 48 <p>звонок бесплатный</p></a>', 'gipspanels' ),
		'before_widget' => '<div class="top-header__phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты.Месенджеры', 'gipspanels' ),
		'id'            => 'top-mesanger',
		'description'   => esc_html__( 'Добавить запись вида: <a href="tel:88001004148"><span>
		</span>8 (800) 100 41 48 <p>звонок бесплатный</p></a>', 'gipspanels' ),
		'before_widget' => '<div class="top-header__mesanger">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты.Подвал', 'gipspanels' ),
		'id'            => 'contacts-f',
		'description'   => esc_html__( '<span>Режим работы:</span><br>
		пн - пт с 9:00 до 18:00<br>
		в выходные дни: по договоренности<br>
		Россия, Московская область<br>
		г.Красногорск, ул. Ново-Никольская 31<br>
		тел.:<a href="tel:8(800)100-41-48">8(800)100-41-48</a><br>
		(звонок бесплатный)<br>
		<a href="tel:8(800)100-41-48">+7(985)149-00-33</a><br>
		WhatsApp, Viber<br>
		<a href="mailto:kamengibkiy@gmail.com">kamengibkiy@gmail.com</a><br>', 'gipspanels' ),
		'before_widget' => '<div class="cols col-6 contats__work">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Кнопки: реквизиты, сертификаты, обратная связь', 'gipspanels' ),
		'id'            => 'footer-btn',
		'description'   => esc_html__( 'Добавить запись вида: <a class="contats__link requisites"href="#">
		Наши реквизиты:</a>
		<a class="contats__link sertificates"href="#">Наши сертификаты:</a>
		<a class="contats__link request"href="#">Отправить заявку</a>', 'gipspanels' ),
		'before_widget' => '<div class="cols col-6 contats__links">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Виджет карты', 'gipspanels' ),
		'id'            => 'footer-map',
		'description'   => esc_html__( 'Вставить код виджета карты здесь', 'gipspanels' ),
		'before_widget' => '<div class="contats__map">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ссылка на каталог', 'gipspanels' ),
		'id'            => 'link-download',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#">
		Скачать каталог</a>', 'gipspanels' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ссылка на сайт по камню', 'gipspanels' ),
		'id'            => 'link-stone',
		'description'   => esc_html__( 'Добавить запись вида: <a href="#">
		Скачать каталог</a>', 'gipspanels' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gipspanels_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gipspanels_scripts() {
	wp_enqueue_style( 'gipspanels-normalize', get_template_directory_uri() . '/css/normalize.css' );

	wp_enqueue_style( 'gipspanels-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gipspanels-jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '20170813', true );

	wp_enqueue_script( 'gipspanels-main', get_template_directory_uri() . '/js/main.js', array(), '20170813', true );

	wp_enqueue_script( 'gipspanels-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gipspanels_scripts' );

/**
 * Add new wrapper for woocommerce pages.
 *
 * @since Stained Glass 1.0.0
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'stainedglass_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'stainedglass_wrapper_end', 10);

function stainedglass_wrapper_start() {
  echo '<main id="main>';
}

function stainedglass_wrapper_end() {
  echo '</main>';
}

/**
 * Change related products number
 *
 * @since Stained Glass 1.0.0
 */
add_filter( 'woocommerce_output_related_products_args', 'stainedglass_related_products_args' );
function stainedglass_related_products_args( $args ) {

	$args['posts_per_page'] = 3;
	$args['columns'] = 3;
	return $args;
}

/**
 * Custom woocommerce
 * Добавление краткого описания в карточку каталога
*/

add_action( 'woocommerce_after_shop_loop_item_title', 'my_add_short_description', 9 );
function my_add_short_description() {
echo '<span class="title-description">' . the_excerpt() . '</span><br />';
}

// Добавляем Рубли в WooCommerce

add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Российские рубли', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = 'руб.'; break;
     }
     return $currency_symbol;
}

// Удаляем ненужные вкладки

function woo_remove_product_tab($tabs) {

    unset( $tabs['description'] );              // Remove the description tab
    unset( $tabs['reviews'] );                     // Remove the reviews tab
    unset( $tabs['additional_information'] );      // Remove the additional information tab

     return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tab', 98);

//Удаляем ненужную сортировку

/*
function custom_woocommerce_catalog_orderby( $orderby ) {
unset($orderby["popularity"]);
unset($orderby["rating"]);
unset($orderby["date"]);
unset($orderby["price"]);
unset($orderby["price-desc"]);
return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "custom_woocommerce_catalog_orderby", 20 );
*/

/**
* WooCommerce: выводим пользовательское свойство товара над кнопкой "Добавить в корзину" на странице отдельного товара.
*/
function devise_woo_get_pa_dim(){

	global $product;
	$attributes = $product->get_attributes();
	$attribute = isset($attributes['pa_dim']) ? $attributes['pa_dim'] : '';

	if ( ! $attribute ) {
			return;
	}

	if ( $attribute['is_taxonomy'] ) {
			// backwards compatibility
			$out = '<p> Размеры: ' . implode( ', ', woocommerce_get_product_terms( $product->id, $attribute['name'], 'names' ) ) . '</p>';
	} else {
			$out .= '<p> Размеры: ' . $attribute['value'] . '</p>';
	}

			echo $out;
}

function devise_woo_get_pa_price(){

	global $product;
	$attributes = $product->get_attributes();
	$attribute = isset($attributes['pa_price-m']) ? $attributes['pa_price-m'] : '';

	if ( ! $attribute ) {
			return;
	}

	if ( $attribute['is_taxonomy'] ) {
			// backwards compatibility
			$out = '<p>' . implode( ', ', woocommerce_get_product_terms( $product->id, $attribute['name'], 'names' ) ) . '</p>';
	} else {
			$out .= '<p>' . $attribute['value'] . '</p>';
	}

			echo $out;
}

add_action('woocommerce_single_product_summary', 'devise_woo_get_pa_dim');
add_action('woocommerce_single_product_summary', 'devise_woo_get_pa_price');

// Меняем название кнопки в корзину

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +

function woo_custom_single_add_to_cart_text() {

    return __( 'Заказать', 'woocommerce' );

}

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
 * Required TGM plugin.
 */
require get_template_directory() . '/tgm/gipspanels.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
