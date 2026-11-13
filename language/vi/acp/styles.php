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
	'ACP_STYLES_EXPLAIN'						=> 'Với công cụ này, bạn có thể quản lý tất cả các giao diện có sẵn trong hệ thống. Một gói giao diện gồm có một khuôn mẫu, kiểu dáng và gói hình ảnh giao diện được đính kèm bên trong. Bạn có thể thay đổi những giao diện hiện có, xoá, ngưng kích hoạt, kích hoạt lại, tạo và nhập vào những gói giao diện mới. Bạn cũng có thể sử dụng chức năng xem trước để xem giao diện được hiển thị như thế nào trong hệ thống. Giao diện mặc định hiện tại của hệ thống được đánh dấu * để phân biệt. Công cụ này cũng liệt kê có bao nhiêu thành viên sử dụng mỗi giao diện, lưu ý thiết lập thay thế toàn bộ giao diện của thành viên không phải nằm trong phần này.',

	'CANNOT_BE_INSTALLED'						=> 'Không thể cài đặt',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Bạn có chắc chắn muốn gỡ bỏ giao diện đã chọn?',
	'COPYRIGHT'									=> 'Bản quyền',

	'DEACTIVATE_DEFAULT'						=> 'Bạn không thể ngưng kích hoạt giao diện mặc định.',
	'DELETE_FROM_FS'							=> 'Xoá từ hệ thống tập tin giao diện',
	'DELETE_STYLE_FILES_FAILED'					=> 'Có lỗi xảy ra khi xóa giao diện “%s”.',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Các tập tin của giao diện “%s” đã được xóa hết.',
	'DETAILS'									=> 'Thông tin chi tiết',

	'INHERITING_FROM'							=> 'Kế thừa từ',
	'INSTALL_STYLE'								=> 'Cài đặt giao diện',
	'INSTALL_STYLES'							=> 'Cài đặt giao diện',
	'INSTALL_STYLES_EXPLAIN'					=> 'Bạn có thể cài đặt giao diện mới tại đây và những thành phần đi kèm giao diện nếu thấy cần thiết. Nếu bạn đã cài đặt sẵn các thành phần giao diện này rồi thì chúng sẽ bị thay thế bởi các thành phần giao diện mới. Một vài giao diện yêu cầu các thành phần giao diện đi kèm phải được cài đặt. Nếu bạn đang cài đặt một giao diện và không có thành phần giao diện nào bắt buộc phải cài đặt thì bạn sẽ được thông báo.',
	'INVALID_STYLE_ID'							=> 'Mã ID giao diện không hợp lệ.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Không có giao diện nào trùng khớp với truy vấn của bạn.',
	'NO_UNINSTALLED_STYLE'						=> 'Không có giao diện nào được gỡ bỏ.',

	'PURGED_CACHE'								=> 'Bộ đệm đã được dọn sạch.',

	'REQUIRES_STYLE'							=> 'Giao diện này yêu cầu giao diện khác là “%s” phải được cài đặt trước.',

	'STYLE_ACTIVATE'							=> 'Kích hoạt',
	'STYLE_ACTIVE'								=> 'Đang sử dụng',
	'STYLE_DEACTIVATE'							=> 'Ngưng kích hoạt',
	'STYLE_DEFAULT'								=> 'Chọn làm giao diện mặc định',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Bạn phải kích hoạt giao diện trước khi chọn làm giao diện mặc định.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Giao diện kế thừa không hợp lệ.',
	'STYLE_ERR_NAME_EXIST'						=> 'Tên giao diện này đã được sử dụng.',
	'STYLE_ERR_STYLE_NAME'						=> 'Bạn phải nhập tên cho giao diện này.',
	'STYLE_INSTALLED'							=> 'Giao diện “%s” đã được cài đặt thành công.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Quay về danh sách giao diện đã cài',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Cài thêm giao diện khác',
	'STYLE_NAME'								=> 'Tên giao diện',
	'STYLE_NAME_RESERVED'						=> 'Giao diện “%s” không thể cài đặt vì tên này dành riêng cho hệ thống sử dụng.',
	'STYLE_NOT_INSTALLED'						=> 'Giao diện “%s” chưa được cài đặt.',
	'STYLE_PATH'								=> 'Đường dẫn giao diện',
	'STYLE_UNINSTALL'							=> 'Gỡ bỏ',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Không thể gỡ bỏ giao diện “%s” vì nó đang được các giao diện khác sử dụng kế thừa lại.',
	'STYLE_UNINSTALLED'							=> 'Giao diện “%s” đã được gỡ bỏ thành công.',
	'STYLE_PHPBB_VERSION'						=> 'Phiên bản phpBB',
	'STYLE_USED_BY'								=> 'Số người sử dụng (Bao gồm máy tìm kiếm)',
	'STYLE_VERSION'								=> 'Phiên bản giao diện',

	'UNINSTALL_PROSILVER'						=> 'Bạn không thể gỡ cài đặt giao diện “prosilver”.',
	'UNINSTALL_DEFAULT'							=> 'Bạn không thể gỡ bỏ giao diện mặc định.',

	'BROWSE_STYLES_DATABASE'					=> 'Tìm giao diện',
]);
