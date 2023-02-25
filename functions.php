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
