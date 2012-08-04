<?php
require_once 'libs/control.php';
require_once 'libs/meta.php';
require_once 'libs/widget.php';

//Register Sidebar
if (function_exists('register_sidebars'))
	register_sidebar(array('name' => 'Sidebar',
		'before_widget' => '<li>',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

//Legacy Comments
add_filter('comments_template', 'legacy_comments');

function legacy_comments($file)
{

	if (!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;

	return $file;
}

// WordPress 3.0 Menus
function register_custom_menu()
{
	register_nav_menu('custom_menu', 'Произвольное меню');
}

add_action('init', 'register_custom_menu');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

$meta = new Fruitframe_AddMetaBox();
$meta->create('params', array(
	'show-on-main'	=> array(
		'label'   => 'Показывать на главной',
		'type'    => 'checkbox',
		'default' => 0
	),
	'is_featured'	=> array(
		'label'   => 'Избранный товар',
		'type'    => 'checkbox',
		'default' => 0
	),
), 'ps_catalog', 'Опции товара');

