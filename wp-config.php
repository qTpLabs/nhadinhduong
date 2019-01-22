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
define('DB_NAME', 'ndd');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'C5EWA`^bMD1>R; {o=zck|WvU1dX_Grb+ku<0Tr!9=_U[iI]OOcC#h2/NoudjLg9');
define('SECURE_AUTH_KEY',  'hTfmgRmZ>S{+kjd5`vVHi}}&m:{]D<Da9[-^)1O:O(bX;}(e|;6S#Jyt%s<M,|P-');
define('LOGGED_IN_KEY',    ',+rvmGX)vgmMHL:ekXLn,&KHFum3?jMnSlbm[;:=vhO$Q7w]K/J v&R<&Jv1GSVt');
define('NONCE_KEY',        '[|t?xrWYQh!(507XS@i[b50?&Cyu*9A:qHQ69$#`Y3o%~BC+p!0z`m+%g1*9(P^R');
define('AUTH_SALT',        '7  qR!zzbT4xqLWVtxhWf2tJzX5{_y!@6T7,:(5YRyURxE/Uela#MJ#N`6cI`Fw_');
define('SECURE_AUTH_SALT', '2$(ky`)_|@e6t9+d*>$K:YK_s+))YrF}gI0HTBX{{OM-FZaye!eMo!*.-8sPt=7R');
define('LOGGED_IN_SALT',   'P.!$o9m^,^n}m|M!D661@s;7u0!<`^{=0]I3Ux7uxbpy%XTO-:f^8TTr_0.O<7r+');
define('NONCE_SALT',       'M.EiFL70ILq n_Z,fO{Z,rws?GqvT)0ywmJfrZ+!owWTO=nL1~T6qx-dindFr{Mo');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'ndd_';

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
