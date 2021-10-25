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
define( 'DB_NAME', 'shop_thangvm' );

/** Username của database */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'xQ_=EfKv9w/Rf^n<1n!aqRzk%`*ns=VA_wF!,Uy[*D@q-^y)LrbolJ[||v!Re0UE' );
define( 'SECURE_AUTH_KEY',  'yE8R|T?q)$$gZpiE|9-FL?;#7Y>/tG|,V.9W0N@_Ur&WJqE{wBpyNdFIE{+ke&Pr' );
define( 'LOGGED_IN_KEY',    '1Id8sGuA4R?+phozd9}.f]uvFv5RrNhqso[T3!p/)Qv/&1@z*pwpMT{/P)M&@q08' );
define( 'NONCE_KEY',        'KQ[h_9&`>e(p[ltA:Ita52zhzQotPW 2Sb49]l`mVr;w /NTApe}+<IR4FuZW7$5' );
define( 'AUTH_SALT',        'c1J(u2i};^n]smw 0HM?SblvOS5f,uYOn=o3>Q=|D^G18oFCX(n@6{vCj[2}Kte:' );
define( 'SECURE_AUTH_SALT', 'tx50MaDSb1QnKpne4 !L_@9{vs9p!6:=%G%QCCEDj9~eaAVB-tg#ooB,=6mi`A[`' );
define( 'LOGGED_IN_SALT',   '|]#,XQ=k}p]srLPHyVz>ecki&;$8l8%6@b;BCPlm=k{PrXHgNcieqb|x>$21pfQB' );
define( 'NONCE_SALT',       '8w(nc@}Wtm5M7:zaZ2=TBHTRIhBh,sP=>1%-sYgIpgJ<fvJ^Vy*4E^G}{&M~CAxQ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
