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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Phần mở rộng',
	'EXTENSIONS'				=> 'Phần mở rộng',
	'EXTENSIONS_ADMIN'			=> 'Quản lí phần mở rộng',
	'EXTENSIONS_EXPLAIN'		=> 'Công cụ quản lí phần mở rộng giúp bạn dễ dàng cài đặt, xem thông tin yêu cầu cũng như vô hiệu các chức năng mới bổ sung cho hệ thống phpBB của mình.',
	'EXTENSION_INVALID_LIST'	=> 'Phần mở rộng “%s” không hợp lệ.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Phần mở rộng đã chọn không thể sử dụng trên hệ thống này. Bạn hãy vui lòng kiểm tra lại phiên bản phpBB cũng như PHP được hỗ trợ bên dưới.',
	'EXTENSION_DIR_INVALID'		=> 'Phần mở rộng đã chọn có cấu trúc thư mục không hợp lệ và không thể cài đặt.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Phần mở rộng đã chọn không thể sử dụng, vui lòng kiểm tra lại yêu cầu cài đặt.',
	'EXTENSION_NOT_INSTALLED'	=> 'Phần mở rộng “%s” không thể sử dụng. Vui lòng kiểm tra lại quá trình cài đặt.',

	'DETAILS'				=> 'Thông tin chi tiết',

	'EXTENSIONS_NOT_INSTALLED'	=> 'Tiện ích mở rộng chưa được cài đặt',
	'EXTENSIONS_DISABLED'		=> 'Phần mở rộng đã vô hiệu',
	'EXTENSIONS_ENABLED'		=> 'Phần mở rộng đang dùng',

	'EXTENSION_DELETE_DATA'	=> 'Xóa dữ liệu',
	'EXTENSION_DISABLE'		=> 'Vô hiệu',
	'EXTENSION_ENABLE'		=> 'Cài đặt',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Thao tác này sẽ xóa sạch mọi tập tin hay thiết lập mà phần mở rộng đã tạo ra. Các tập tin ban đầu của phần mở rộng vẫn được giữ lại, vì thế bạn có thể cài đặt lại nếu muốn.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Việc vô hiệu sẽ không xóa đi các tập tin, dữ liệu hay thiết lập của một phần mở rộng, nhưng các chức năng của nó sẽ không còn hoạt động.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Bạn phải cài đặt một phần mở rộng trước khi có thể sử dụng chức năng của nó trên hệ thống.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Dữ liệu của phần mở rộng đang được xóa. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Phần mở rộng đang được vô hiệu. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Phần mở rộng đang được cài đặt. Vui lòng đừng đóng hay nạp lại trang này cho đến khi hoàn tất.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Dữ liệu của phần mở rộng đã được xóa thành công.',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Phần mở rộng đã được vô hiệu thành công.',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Phần mở rộng đã được bật thành công.',

	'EXTENSION_NAME'			=> 'Tên phần mở rộng',
	'EXTENSION_ACTIONS'			=> 'Thao tác',
	'EXTENSION_OPTIONS'			=> 'Tùy chọn',
	'EXTENSION_INSTALL_HEADLINE'=> 'Cài đặt phần mở rộng',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol><li>Tải một tiện ích mở rộng từ cơ sở dữ liệu tiện ích mở rộng của phpBB</li><li>Giải nén tiện ích và tải nó lên thư mục <samp>ext/</samp> của diễn đàn phpBB</li><li>Kích hoạt tiện ích tại đây, trong Trình quản lý tiện ích mở rộng</li></ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Cập nhật phần mở rộng',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol><li>Vô hiệu hóa tiện ích mở rộng</li><li>Xóa các tập tin của tiện ích khỏi hệ thống tập tin</li><li>Tải các tập tin mới lên</li><li>Kích hoạt tiện ích mở rộng</li></ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Gỡ bỏ toàn bộ phần mở rộng khỏi hệ thống',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol><li>Vô hiệu hóa tiện ích mở rộng</li><li>Xóa dữ liệu của tiện ích</li><li>Xóa các tập tin của tiện ích khỏi hệ thống tập tin</li></ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Bạn có chắc chắn muốn xóa dữ liệu được tạo ra bởi “%s”?<br /><br />Mọi dữ liệu và thiết lập đã xóa sẽ không thể phục hồi lại!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Bạn có chắc chắn muốn vô hiệu phần mở rộng “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Bạn có chắc chắn muốn cài đặt phần mở rộng “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Bạn có chắc chắn muốn sử dụng phiên bản đang thử nghiệm?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Quay về danh sách phần mở rộng',

	'EXT_DETAILS'			=> 'Thông tin gói cài đặt',
	'DISPLAY_NAME'			=> 'Tên hiển thị',
	'CLEAN_NAME'			=> 'Tên gốc',
	'TYPE'					=> 'Loại',
	'DESCRIPTION'			=> 'Giới thiệu',
	'VERSION'				=> 'Phiên bản',
	'HOMEPAGE'				=> 'Trang chủ',
	'PATH'					=> 'Đường dẫn tập tin',
	'TIME'					=> 'Ngày phát hành',
	'LICENSE'				=> 'Bản quyền',

	'REQUIREMENTS'			=> 'Yêu cầu',
	'PHPBB_VERSION'			=> 'Phiên bản phpBB',
	'PHP_VERSION'			=> 'Phiên bản PHP',
	'AUTHOR_INFORMATION'	=> 'Thông tin tác giả',
	'AUTHOR_NAME'			=> 'Tên',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Website',
	'AUTHOR_ROLE'			=> 'Chức vụ',

	'NOT_UP_TO_DATE'		=> '%s có bản cập nhật mới',
	'UP_TO_DATE'			=> '%s là bản mới nhất',
	'ANNOUNCEMENT_TOPIC'	=> 'Thông báo phát hành',
	'DOWNLOAD_LATEST'		=> 'Tải về phiên bản mới',
	'NO_VERSIONCHECK'		=> 'Không hỗ trợ kiểm tra phiên bản mới.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Kiểm tra lại phiên bản mới toàn bộ',
	'FORCE_UNSTABLE'					=> 'Kiểm tra cả những phiên bản mới đang thử nghiệm',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Thiết lập kiểm tra phiên bản',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Tìm phần mở rộng',

	'META_FIELD_NOT_SET'	=> 'Mục thông tin yêu cầu “%s” không được khai báo.',
	'META_FIELD_INVALID'	=> 'Mục thông tin “%s” không hợp lệ.',
));
