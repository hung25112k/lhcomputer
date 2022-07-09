<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'websitebanmaytinh' );

/** Username của database */
define( 'DB_USER', 'websitebanmaytinh' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S3HZ?gW3w<eAj-UE5a5|%&Bt1PW^[jb1X>]?gG*T;uDQ:rVDGq1dCPp@|lk;7E`t' );
define( 'SECURE_AUTH_KEY',  '[$u<vR+Fpi@h{6jJ]$8H1{&]~]^_to?-L?,RbaJPIxxyPOI(U>`}*ei6zhpzkt]!' );
define( 'LOGGED_IN_KEY',    'nlNgUja*4<zqBX bgYE^Y!)1{5;_#%>>55rqw/>}Z$%f+AUZF.Z4A$DIu! [n+*}' );
define( 'NONCE_KEY',        ')6(?^TUX,4,/<zzklqs)T(;D&X#d/!%0VjZYd5`Z.)z%6LUTsgKI[@x.$2*,<g&=' );
define( 'AUTH_SALT',        'wPd j.,[gcZ=hyEx0<e4HZ_#RAywk|]]=C3~hKRe3ka8cB/qQ`bChq5R$cEr*(gQ' );
define( 'SECURE_AUTH_SALT', 'hGzA00?D~+I3 Wk;9E8w[=W*2r3rJew8rN7gu/x83ZMC=N[owqH=6`|1DQ%;8:x3' );
define( 'LOGGED_IN_SALT',   'oW?tU|+(Oj!0TyNHh[vmA#&T]!Ewc^jd36_!!i=>ejs>LUro+76&eQ*L+0}T(Y`2' );
define( 'NONCE_SALT',       '=ZXdvN%5j+tN[6IaC>>`va4[BOkZ=mM<or5Z#hUFJOuCS`lc*2_rrB{JIu{rt*tt' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_admin';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
