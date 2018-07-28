<?php
/** 
*
* acp_language [Vietnamese]
*
* @package language
* @version $Id: language.php,v 1.11 2010/08/23 23:54:00
* @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	$lang = array();
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Tập tin ngôn ngữ dùng trong bảng điều khiển của quản trị viên',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Bảng điều khiển này sẽ giúp bạn cài đặt hoặc gỡ bỏ các gói ngôn ngữ trong hệ thống.',

	'EMAIL_FILES'			=> 'Tập tin ngôn ngữ dùng trong Email',

	'FILE_CONTENTS'				=> 'Nội dung tập tin',
	'FILE_FROM_STORAGE'			=> 'Tập tin từ thư mục lưu trữ',

	'HELP_FILES'				=> 'Tập tin ngôn ngữ dùng trong trợ giúp',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã cài đặt',
	'INVALID_LANGUAGE_PACK'		=> 'Gói ngôn ngữ bạn vừa chọn dường như không hợp lệ. Hãy kiểm tra lại gói ngôn ngữ này và tải lên lại lần nữa nếu cần thiết.',
	'INVALID_UPLOAD_METHOD'		=> 'Phương pháp tải lên bạn vừa chọn không hợp lệ. Hãy vui lòng chọn phương pháp tải lên khác.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Thông tin chi tiết về gói ngôn ngữ đã được cập nhật thành công.',
	'LANGUAGE_ENTRIES'					=> 'Mục từ ngôn ngữ',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Công cụ này sẽ giúp bạn thay đổi nội dung các mục từ hiện có trong gói ngôn ngữ hoặc những mục từ chưa được phiên dịch hoàn chỉnh.<br /><strong>Lưu ý:</strong> Khi bạn thay đổi các tập tin ngôn ngữ, những thay đổi sẽ được lưu trữ trong một thư mục xác định của hệ thống để bạn tải về. Những thành viên khác trong hệ thống sẽ không nhận ra những thay đổi trong gói ngôn ngữ cho đến khi bạn thay thế những tập tin ngôn ngữ gốc bằng các tập tin này trên máy chủ bằng cách tự tải chúng lên.',
	'LANGUAGE_FILES'					=> 'Tập tin ngôn ngữ',
	'LANGUAGE_KEY'						=> 'Khóa ngôn ngữ',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Gói ngôn ngữ này đã được cài đặt.',
	'LANGUAGE_PACK_DELETED'				=> 'Gói ngôn ngữ <strong>%s</strong> đã được gỡ bỏ thành công. Tất cả thành viên đang sử dụng gói ngôn ngữ này sẽ được tự động thay bằng gói ngôn ngữ mặc định của hệ thống.',
	'LANGUAGE_PACK_DETAILS'				=> 'Thông tin chi tiết về gói ngôn ngữ',
	'LANGUAGE_PACK_INSTALLED'			=> 'Gói ngôn ngữ <strong>%s</strong> đã được cài đặt thành công.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Chuỗi ngôn ngữ của các trường tùy biến đã được xao chép từ gói ngôn ngữ mặc định. Hãy thay đổi chúng nếu cần.',
	'LANGUAGE_PACK_ISO'					=> 'Mã ISO của gói ngôn ngữ',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Tên hệ thống',
	'LANGUAGE_PACK_NAME'				=> 'Tên',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Gói ngôn ngữ bạn vừa chọn không tồn tại.',
	'LANGUAGE_PACK_USED_BY'				=> 'Số người sử dụng (Bao gồm máy tìm kiếm)',
	'LANGUAGE_VARIABLE'					=> 'Biến ngôn ngữ',
	'LANG_AUTHOR'						=> 'Tác giả gói ngôn ngữ',
	'LANG_ENGLISH_NAME'					=> 'Tên tiếng Anh',
	'LANG_ISO_CODE'						=> 'Mã ISO',
	'LANG_LOCAL_NAME'					=> 'Tên hệ thống',

	'MISSING_LANGUAGE_FILE'		=> 'Tập tin ngôn ngữ bị thiếu: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Những biến ngôn ngữ bị thiếu',
	'MODS_FILES'				=> 'Tập tin ngôn ngữ dùng trong các gói MOD',

	'NO_FILE_SELECTED'				=> 'Bạn chưa xác định một tập tin ngôn ngữ.',
	'NO_LANG_ID'					=> 'Bạn chưa xác định gói ngôn ngữ.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Bạn không thể gõ bỏ gói ngôn ngữ mặc định.<br />Nếu bạn muốn gõ bỏ gói ngôn ngữ này, trước hết hãy thay đổi ngôn ngữ mặc định của hệ thống.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Không có gói ngôn ngữ nào được gỡ bỏ',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Gỡ bỏ từ thư mục lưu trữ',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Chọn định dạng tải về',
	'SUBMIT_AND_DOWNLOAD'		=> 'Chấp nhận và tải về tập tin',
	'SUBMIT_AND_UPLOAD'			=> 'Chấp nhận và tải lên tập tin',

	'THOSE_MISSING_LANG_FILES'			=> 'Những tập tin ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Những biến ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã gỡ bỏ',

	'UNABLE_TO_WRITE_FILE'		=> 'Tập tin không thể ghi đến %s.',
	'UPLOAD_COMPLETED'			=> 'Quá trình tải lên đã hoàn tất.',
	'UPLOAD_FAILED'				=> 'Quá trình tải lên đã thất bại mà không rõ nguyên nhân. Bạn có thể cần phải tự mình thay thế tập tin ngôn ngữ có liên quan.',
	'UPLOAD_METHOD'				=> 'Phương pháp tải lên',
	'UPLOAD_SETTINGS'			=> 'Thiết lập tải lên',

	'WRONG_LANGUAGE_FILE'		=> 'Tập tin ngôn ngữ bạn vừa chọn không hợp lệ.',
));

?>