<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'vi',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Bạn không vượt qua được bài kiểm tra nhập liệu.',
	'RECAPTCHA_NOSCRIPT'				=> 'Vui lòng bật JavaScript trên trình duyệt để tiếp tục.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Để sử dụng được reCaptcha, bạn phải tạo tài khoản tại trang <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'CAPTCHA này thực sự ẩn. Để xác minh nó hoạt động, một biểu tượng nhỏ sẽ xuất hiện ở góc dưới bên phải của trang này.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Bạn đã vượt quá số lần đăng nhập tối đa cho phép.<br>Ngoài tên thành viên và mật khẩu, reCAPTCHA v3 ẩn sẽ được dùng để xác thực phiên của bạn.',

	'RECAPTCHA_PUBLIC'				=> 'Khóa reCaptcha công cộng',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Khóa sử dụng reCaptcha công cộng mà bạn được cung cấp. Các khóa này được cung cấp tại trang <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Khóa reCAPTCHA của trang web. Bạn có thể lấy khóa tại <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vui lòng dùng reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Khóa reCaptcha cá nhân',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Khóa sử dụng reCaptcha cá nhân mà bạn được cung cấp. Các khóa này được cung cấp tại trang <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Khóa bí mật reCAPTCHA. Bạn có thể lấy khóa tại <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vui lòng dùng reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Tên miền yêu cầu',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Tên miền dùng để tải tập lệnh và xác minh yêu cầu.<br>Hãy dùng <samp>recaptcha.net</samp> khi không thể truy cập <samp>google.com</samp>.',

	'RECAPTCHA_V3_METHOD'				=> 'Phương thức yêu cầu',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Phương thức dùng để xác minh yêu cầu.<br>Các tùy chọn bị vô hiệu hóa không khả dụng trong cấu hình của bạn.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Ngưỡng mặc định',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Được dùng khi không có hành động nào khác phù hợp.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Ngưỡng đăng nhập',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Ngưỡng đăng bài',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Ngưỡng đăng ký',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Ngưỡng báo cáo',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Các ngưỡng',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 trả về một điểm số (<samp>1.0</samp> rất có thể là tương tác hợp lệ, <samp>0.0</samp> rất có thể là bot). Tại đây bạn có thể đặt điểm tối thiểu cho từng hành động.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 cần biết bạn muốn dùng phương thức khả dụng nào để xác minh yêu cầu.',
]);
