<?php



/**
 * Khai báo hằng giá trị
 *  THEME_DIR = lấy đường dẫn tuyệt đối thư mục theme
 *  THEME_URL = lấy đường dẫn tương đối thư mục theme
 *  CORE = lấy đường dẫn thư mục /core
 **/
define('THEME_DIR', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_VER', wp_get_theme()->get('Version'));
define('CORE', THEME_DIR . "/core");

/**
 * Nhũng file /core/init.php
 */
require_once(CORE . "/init.php");

/**
 * Carbon field
 */
require_once(CORE . "/carbon-field.php");

/**
 * Khai báo chức năng của theme
 */
if (!function_exists('thanhdc_theme_setup')) {
  function thanhdc_theme_setup()
  {

    /** Tự động thêm link RSS lên <head>*/
    add_theme_support('automatic-feed-links');

    /** Thêm post thumbnail */
    add_theme_support('post-thumbnails');

    /** Thêm post format */
    add_theme_support(
      'post-formats',
      [
        'aside',
        'gallery',
        // 'link',
        'image',
        // 'quote',
        // 'status',
//                'video',
        // 'audio',
        // 'chat',
      ]
    );

    /** Thêm title-tag */
    add_theme_support('title-tag');

    /**Thêm custom background */
    $default_backgrounds = array(
      'default-image' => '',
      'default-preset' => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
      'default-position-x' => 'left',    // 'left', 'center', 'right'
      'default-position-y' => 'top',     // 'top', 'center', 'bottom'
      'default-size' => 'auto',    // 'auto', 'contain', 'cover'
      'default-repeat' => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
      'default-attachment' => 'scroll',  // 'scroll', 'fixed'
      'default-color' => '',
      'wp-head-callback' => '_custom_background_cb',
      'admin-head-callback' => '',
      'admin-preview-callback' => '',
    );
    add_theme_support('custom-background', $default_backgrounds);

    /**Thêm menu */
    register_nav_menu('primary-menu', __('Primary menu', 'Primary menu'));

    /** Tạo sidebar */
//    $sidebar = array(
//      'name' => __('Main Sidebar', 'thanhdc'),
//      'id' => 'main-sidebar',
//      'description' => __('Default sidebar'),
//      'class' => 'main-sidebar',
//      'before_title' => '<h3 class="widgettitle"',
//      'after_title' => '</h3>'
//    );
//    register_sidebar($sidebar);

  }

  add_action('init', 'thanhdc_theme_setup');
}

/**
 * Lấy đường dẫn đễ folder assets
 */
if (!function_exists('get_assets_path')) {
  function get_assets_path(string $path = ''): string
  {
      return THEME_URL . '/assets/' . $path;
  }
}


/** Thêm post type lưu slider */
function createSliderPostType()
{
  $label = array(
    'name' => 'Slider hình ảnh', //Tên post type dạng số nhiều
    'singular_name' => 'Slider hình ảnh' //Tên post type dạng số ít
  );

  /** Biến $args là những tham số quan trọng trong Post Type */
  $args = array(
    'labels' => $label,
    'description' => 'Slider hình ảnh trang chủ',
    'supports' => array(
      'title',
      'thumbnail',
      'gallery',
    ),
    'public' => true, //Kích hoạt post type
    'show_ui' => true, //Hiển thị khung quản trị như Post/Page
    'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
    'show_in_nav_menus' => false, //Hiển thị trong Appearance -> Menus
    'show_in_admin_bar' => false, //Hiển thị trên thanh Admin bar màu đen.
    'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
    'menu_icon' => 'dashicons-format-gallery', // icon sẽ hiển thị https://developer.wordpress.org/resource/dashicons
    'can_export' => true, //Có thể export nội dung bằng Tools -> Export
    'has_archive' => true, //Cho phép lưu trữ (month, date, year)
    'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
    'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
    'capability_type' => 'post' //
  );

  register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
}

//add_action('init', 'createSliderPostType');


/**
 * Thiết lập menu
 */
//if (!function_exists('thanhdc_menu')) {
//  function thanhdc_menu($location)
//  {
//    $menu = array(
//      'theme_location' => $location,
//      'container' => 'nav',
//      'container_class' => 'col-12 header3-wrapper',
//      'menu_class' => 'header3-menu',
//    );
//    wp_nav_menu($menu);
//  }
//}

/**
 * Hàm tạo phân trang
 */
if (!function_exists('thanhdc_pagination')) {
  function thanhdc_pagination()
  {
    if ($GLOBALS['wp_query']->max_num_pages) {
      return '';
    }
    ?>
      <nav class="pagination" role="pagination">
        <?php if (get_next_post_link()) : ?>
            <div class="prev">
              <?php next_post_link(__('Older Posts', 'thanhdc')); ?>
            </div>
        <?php endif; ?>
        <?php if (get_previous_post_link()) : ?>
            <div class="next">
              <?php previous_post_link(__('Newest Posts', 'thanhdc')) ?>
            </div>
        <?php endif; ?>
      </nav>
    <?php
  }
}

/**
 * Hàm lấy hình thumbnail
 */
if (!function_exists('thanhdc_thumbnail')) {
  function thanhdc_thumbnail($size)
  {
    if ((!is_single() && has_post_thumbnail() && !post_password_required()) || has_post_format('image')) : ?>
        <figure class="post-thumbnail"><?php the_post_thumbnail($size) ?></figure>
    <?php endif; ?>
    <?php
  }
}
