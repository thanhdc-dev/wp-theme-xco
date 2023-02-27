<?php

/**
 * Khai báo hằng giá trị
 */
define( 'THEME_DIR', get_template_directory() ); // Đường dẫn tuyệt đối đến thư mục theme
define( 'THEME_URL', get_template_directory_uri() ); // Đường dẫn tương đối đến thư mục theme
define( 'THEME_VER', wp_get_theme()->get( 'Version' ) ); // Đường dẫn đến thư mục /core
define( 'CORE', THEME_DIR . "/core" );

/**
 * Nhũng file /core/init.php
 */
require_once( CORE . "/init.php" );

/**
 * Carbon field
 */
require_once( CORE . "/carbon-field.php" );

/**
 * Khai báo chức năng của theme
 */
if ( ! function_exists( 'thanhdc_theme_setup' ) ) {
	function thanhdc_theme_setup() {

		/** Tự động thêm link RSS lên <head>*/
		add_theme_support( 'automatic-feed-links' );

		/** Thêm post thumbnail */
		add_theme_support( 'post-thumbnails' );

		/** Thêm post format */
		add_theme_support(
			'post-formats',
			[
				'aside',
				'gallery',
				'image',
			]
		);

		/** Thêm title-tag */
		add_theme_support( 'title-tag' );

		/**Thêm menu */
		register_nav_menu( 'primary-menu', __( 'Primary menu', 'Primary menu' ) );

	}

	add_action( 'init', 'thanhdc_theme_setup' );
}

/**
 * Lấy đường dẫn đến folder assets
 */
if ( ! function_exists( 'get_assets_path' ) ) {
	function get_assets_path( string $path = '' ): string {
		return THEME_URL . '/assets/' . $path;
	}
}

/**
 * Register Custom Post Type
 */
function register_service_post_type() {

	$labels = array(
		'name'                  => 'Services',
		'singular_name'         => 'Service',
		'menu_name'             => 'Services',
		'name_admin_bar'        => 'Service',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args   = array(
		'label'               => 'Service',
		'description'         => 'Service',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-building',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'template' => array(
			array( 'core/columns', array(), array(
				array( 'core/column', array(), array(
					array( 'core/image', array() ),
				) ),
				array( 'core/column', array(), array(
					array( 'core/paragraph', array(
						'placeholder' => 'Add a inner paragraph'
					) ),
				) ),
			) )
		),
	);
	register_post_type( 'service', $args );

}

add_action( 'init', 'register_service_post_type', 0 );

/**
 * Hàm tạo phân trang
 */
if ( ! function_exists( 'thanhdc_pagination' ) ) {
	function thanhdc_pagination() {
		if ( $GLOBALS['wp_query']->max_num_pages ) {
			return '';
		}
		?>
        <nav class="pagination" role="pagination">
			<?php if ( get_next_post_link() ) : ?>
                <div class="prev">
					<?php next_post_link( __( 'Older Posts', 'thanhdc' ) ); ?>
                </div>
			<?php endif; ?>
			<?php if ( get_previous_post_link() ) : ?>
                <div class="next">
					<?php previous_post_link( __( 'Newest Posts', 'thanhdc' ) ) ?>
                </div>
			<?php endif; ?>
        </nav>
		<?php
	}
}
