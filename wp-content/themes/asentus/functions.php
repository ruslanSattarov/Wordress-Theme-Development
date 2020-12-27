<?php

add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0 );
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' );
// add_theme_support( 'woocommerce' );
// add_theme_support( 'wc-product-gallery-zoom' );
// add_theme_support( 'wc-product-gallery-lightbox' );
// add_theme_support( 'wc-product-gallery-slider' );

show_admin_bar(false);

// require_once( get_stylesheet_directory().'/theme-options.php');

function do_excerpt($string, $word_limit) {
	if (!$string) {return false;}
  $words = explode(' ', $string, ($word_limit + 1));
  if (count($words) > $word_limit)
  array_pop($words);
  echo implode(' ', $words).' ...';
}

add_filter( 'wpseo_xml_sitemap_img', '__return_false' );

add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(970, 295, false);

add_theme_support( 'menus' );

add_image_size('customfunctionsizes', 190, 72, false);
add_image_size('abou_tsize', 640, 380, false);
register_nav_menus( array(
	'left_menu' => 'Main-Menu',
	'footer_menu' => 'Footer-Menu',
) );



function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
};
add_action( 'after_setup_theme', 'register_navwalker' );


$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'maxbar',
	'before_widget' => '<div class="box boxx">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
);

register_sidebar( $args );

add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro/acf.php'] );
	return $value;
};


add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'sider', [
		'labels' => [
			'name'               => 'Slider', // основное название для типа записи
			'singular_name'      => 'Slide', // название для одной записи этого типа
			'add_new'            => 'Добавить Slid', // для добавления новой записи
			'add_new_item'       => 'Добавление Slid', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Slid', // для редактирования типа записи
			'new_item'           => 'Новое Slid', // текст новой записи
			'view_item'          => 'Смотреть Slid', // для просмотра записи этого типа.
			'search_items'       => 'Искать Slid', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Slider', // название меню
		],

		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-image',//icon change
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,

	] );




	register_post_type( 'products', [
		'labels' => [
			'name'               => 'Products', // основное название для типа записи
			'singular_name'      => 'Product', // название для одной записи этого типа
			'add_new'            => 'Добавить Product', // для добавления новой записи
			'add_new_item'       => 'Добавление Product', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Product', // для редактирования типа записи
			'new_item'           => 'Новое Product', // текст новой записи
			'view_item'          => 'Смотреть Product', // для просмотра записи этого типа.
			'search_items'       => 'Искать Product', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Products', // название меню
		],

		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-add-page',//icon change
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,

	] );
	register_post_type( 'reviews', [
		'labels' => [
			'name'               => 'Reviews', // основное название для типа записи
			'singular_name'      => 'Reviews', // название для одной записи этого типа
			'menu_name'          => 'Reviews', // название меню
		],

		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-visibility',//icon change
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,

	] );
	register_post_type( 'team', [
		'labels' => [
			'name'               => 'Team', // основное название для типа записи
			'singular_name'      => 'Team', // название для одной записи этого типа
			'menu_name'          => 'Team', // название меню
		],

		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-money',//icon change
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,

	] );
};






