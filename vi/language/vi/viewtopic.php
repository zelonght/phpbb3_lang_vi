<?php
/** 
*
* viewtopic [Vietnamese]
*
* @package language
* @version $Id: viewtopic.php,v 1.21 2010/08/24 20:11:00
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
	'ATTACHMENT'						=> 'Tập tin đính kèm',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Chức năng gửi tập tin đính kèm đã bị vô hiệu.',

	'BOOKMARK_ADDED'		=> 'Đã đánh dấu chủ đề thành công.',
	'BOOKMARK_ERR'			=> 'Đánh dấu chủ đề thất bại. Hãy thử lại.',
	'BOOKMARK_REMOVED'		=> 'Đã gỡ bỏ đánh dấu chủ đề thành công.',
	'BOOKMARK_TOPIC'		=> 'Đánh dấu chủ đề',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Gỡ bỏ đánh dấu',
	'BUMPED_BY'				=> 'Được đẩy lên lần cuối bởi <strong>%1$s</strong> vào ngày %2$s.',
	'BUMP_TOPIC'			=> 'Đẩy chủ đề lên',

	'CODE'					=> 'Mã',
	'COLLAPSE_QR'			=> 'Ẩn Gửi trả lời nhanh',

	'DELETE_TOPIC'			=> 'Xoá chủ đề',
	'DOWNLOAD_NOTICE'		=> 'Bạn không được cấp phép để xem tập tin đính kèm trong bài viết này.',

	'EDITED_TIMES_TOTAL'	=> 'Sửa lần cuối bởi <strong>%1$s</strong> vào ngày %2$s với %3$d lần sửa trong tổng số.',
	'EDITED_TIME_TOTAL'		=> 'Sửa lần cuối bởi <strong>%1$s</strong> vào ngày %2$s với %3$d lần sửa trong tổng số.',
	'EMAIL_TOPIC'			=> 'Gửi Email giới thiệu',
	'ERROR_NO_ATTACHMENT'	=> 'Tập tin đính kèm bạn vừa chọn không tồn tại.',

	'FILE_NOT_FOUND_404'	=> 'Tập tin <strong>%s</strong> không tồn tại.',
	'FORK_TOPIC'			=> 'Sao chép chủ đề',
	'FULL_EDITOR'			=> 'Trình soạn thảo đầy đủ',

	'LINKAGE_FORBIDDEN'		=> 'Bạn không được phép xem, tải về hoặc liên kết đến website này.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Hãy vui lòng đăng nhập để xem chủ đề này.',
	'LOGIN_VIEWTOPIC'		=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem chủ đề này.',

	'MAKE_ANNOUNCE'				=> 'Thay đổi thành “Thông báo”',
	'MAKE_GLOBAL'				=> 'Thay đổi thành “Thông báo chung”',
	'MAKE_NORMAL'				=> 'Thay đổi thành “Bài viết bình thường”',
	'MAKE_STICKY'				=> 'Thay đổi thành “Chú ý”',
	'MAX_OPTIONS_SELECT'		=> 'Bạn có thể chọn đến <strong>%d</strong> đối tượng bình chọn',
	'MAX_OPTION_SELECT'			=> 'Bạn chỉ có thể chọn <strong>1</strong> đối tượng bình chọn',
	'MISSING_INLINE_ATTACHMENT'	=> 'Tập tin đính kèm <strong>%s</strong> hiện tại không còn trên máy chủ',
	'MOVE_TOPIC'				=> 'Di chuyển chủ đề',

	'NO_ATTACHMENT_SELECTED'=> 'Bạn chưa chọn tập tin đính kèm để xem hoặc tải về.',
	'NO_NEWER_TOPICS'		=> 'Không có chủ đề nào mới hơn trong chuyên mục này.',
	'NO_OLDER_TOPICS'		=> 'Không có chủ đề nào cũ hơn trong chuyên mục này.',
	'NO_UNREAD_POSTS'		=> 'Không có bài viết chưa xem mới nào trong chủ đề này.',
	'NO_VOTE_OPTION'		=> 'Bạn phải chọn một đối tượng khi bình chọn.',
	'NO_VOTES'				=> 'Không có bình chọn',

	'POLL_ENDED_AT'			=> 'Bình chọn này sẽ kết thúc vào ngày %s',
	'POLL_RUN_TILL'			=> 'Bình chọn cho đến ngày %s',
	'POLL_VOTED_OPTION'		=> 'Bạn đã bình chọn cho đối tượng này',
	'PRINT_TOPIC'			=> 'Xem bản in',

	'QUICK_MOD'				=> 'Công cụ',
	'QUICKREPLY'			=> 'Trả lời nhanh',
	'QUOTE'					=> 'Trích dẫn',

	'REPLY_TO_TOPIC'		=> 'Gửi bài trả lời',
	'RETURN_POST'			=> '%sQuay về bài viết đang xem%s',

	'SHOW_QR'				=> 'Trả lời nhanh',
	'SUBMIT_VOTE'			=> 'Chấp nhận bình chọn',

	'TOTAL_VOTES'			=> 'Tổng số bình chọn',

	'UNLOCK_TOPIC'			=> 'Mở khoá chủ đề',

	'VIEW_INFO'				=> 'Thông tin chi tiết về bài viết',
	'VIEW_NEXT_TOPIC'		=> 'Chủ đề kế tiếp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Chủ đề trước',
	'VIEW_RESULTS'			=> 'Xem kết quả bình chọn',
	'VIEW_TOPIC_POST'		=> '1 bài viết',
	'VIEW_TOPIC_POSTS'		=> '%d bài viết',
	'VIEW_UNREAD_POST'		=> 'Bài viết chưa xem đầu tiên',
	'VISIT_WEBSITE'			=> 'Ghé thăm website của người gửi',
	'VOTE_SUBMITTED'		=> 'Bạn đã tham gia bình chọn xong.',
	'VOTE_CONVERTED'		=> 'Thay đổi bình chọn không được hỗ trợ cho các bình chọn được chuyển đổi.',

));

?>