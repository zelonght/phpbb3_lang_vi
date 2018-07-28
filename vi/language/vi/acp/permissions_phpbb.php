<?php
/** 
* acp_permissions (phpBB Permission Set) [Vietnamese]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.23 2010/08/26 03:06:00
* @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a seperate file too by
*	prefixing the new file with permissions_ and putting it into the ACP
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Thao tác',
		'content'		=> 'Nội dung',
		'forums'		=> 'Chuyên mục',
		'misc'			=> 'Linh tinh',
		'permissions'	=> 'Cấp phép',
		'pm'			=> 'Tin nhắn',
		'polls'			=> 'Bình chọn',
		'post'			=> 'Bài viết',
		'post_actions'	=> 'Thao tác bài viết',
		'posting'		=> 'Gửi bài',
		'profile'		=> 'Thông tin cá nhân',
		'settings'		=> 'Thiết lập',
		'topic_actions'	=> 'Thao tác chủ đề',
		'user_group'	=> 'Thành viên &amp; nhóm',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Cấp phép thành viên',
		'a_'			=> 'Cấp phép quản trị viên',
		'm_'			=> 'Cấp phép điều hành viên',
		'f_'			=> 'Cấp phép chuyên mục',
		'global'		=> array(
			'm_'			=> 'Cấp phép điều hành viên chính',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Có thể xem thông tin cá nhân, danh sách thành viên và những người đang trực tuyến', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Có thể thay đổi tên thành viên', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Có thể thay đổi mật khẩu', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Có thể thay đổi địa chỉ Email', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Có thể thay đổi hình đại diện', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Có thể thay đổi nhóm mặc định', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Có thể đính kèm tập tin', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Có thể tải về tập tin', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Có thể lưu bản nháp', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Có thể tắt chế độ kiểm duyệt từ', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Có thể sử dụng chữ ký cá nhân', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Có thể gửi tin nhắn', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Có thể gửi tin nhắn đến nhiều thành viên và nhóm', 'cat' => 'pm'),	
	'acl_u_masspm_group'=> array('lang' => 'Có thể gửi tin nhắn đến nhóm', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Có thể xem tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Có thể sửa tin nhắn của mình', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Có thể gỡ bỏ tin nhắn từ thư mục của mình', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Có thể chuyển tiếp tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Có thể gửi Email tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Có thể in tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Có thể đính kèm tập tin trong tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Có thể tải về tập tin trong tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Có thể sử dụng BBCode trong tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Có thể sử dụng biểu tượng vui trong tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Có thể sử dụng hình ảnh trong tin nhắn', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Có thể sử dụng tập tin Flash trong tin nhắn', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Có thể gửi Email', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Có thể gửi tin nhắn nhanh', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Không bị giới hạn thời gian gửi bài giữa hai bài viết', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Có thể ẩn trạng thái trực tuyến', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Có thể xem các thành viên ẩn đang trực tuyến', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Có thể tìm kiếm', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Có thể nhìn thấy chuyên mục', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Có thể xem chuyên mục', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Có thể tạo chủ đề mới', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Có thể trả lời bài viết', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Có thể sử dụng biểu tượng cho chủ đề/bài viết', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Có thể tạo thông báo', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Có thể tạo chú ý', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Có thể tạo bình chọn', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Có thể tham gia bình chọn', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Có thể thay đổi bình chọn đã tham gia', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Có thể đính kèm tập tin', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Có thể tải về tập tin', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Có thể sử dụng chữ ký cá nhân', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Có thể sử dụng BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Có thể sử dụng biểu tượng vui', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Có thể sử dụng hình ảnh trong bài viết', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Có thể sử dụng tập tin Flash trong bài viết', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Có thể sửa bài viết của mình', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Có thể xoá bài viết của mình', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Có thể khoá chủ đề của mình', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Có thể đẩy chủ đề lên', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Có thể báo cáo bài viết', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Có thể theo dõi chuyên mục', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Có thể in chủ đề', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Có thể gửi Email chủ đề', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Có thể tìm kiếm chuyên mục', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Không bị giới hạn thời gian gửi bài giữa hai bài viết', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Đếm số bài viết<br /><em>Lưu ý rằng thiết lập này chỉ có tác dụng đối với những bài viết mới.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Có thể gửi bài mà không cần chờ được chấp nhận', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Có thể sửa bài viết', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Có thể xoá bài viết', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Có thể chấp nhận bài viết', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Có thể kết thúc và xoá báo cáo', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Có thể thay đổi tác giả bài viết', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Có thể di chuyển chủ đề', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Có thể khoá chủ đề', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Có thể chia nhỏ chủ đề', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Có thể nhập chung chủ đề', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Có thể xem thông tin về bài viết', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Có thể cảnh cáo thành viên<br /><em>Thiết lập này chỉ được chọn toàn bộ và nó không phụ thuộc vào chuyên mục.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Có thể quản lý danh sách cấm<br /><em>Thiết lập này chỉ được chọn toàn bộ và nó không phụ thuộc vào chuyên mục.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Có thể thay đổi thiết lập hệ thống/kiểm tra cập nhật', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Có thể thay đổi thiết lập máy chủ', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Có thể thay đổi thiết lập Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Có thể xem thông tin PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Có thể quản lý chuyên mục', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Có thể tạo chuyên mục mới', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Có thể xoá chuyên mục', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Có thể dọn dẹp chuyên mục', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Có thể thay đổi biểu tượng của chủ đề/bài viết và biểu tượng vui', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Có thể thay đổi từ kiểm duyệt', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Có thể xác định thẻ BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Có thể thay đổi thiết lập tập tin đính kèm', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Có thể quản lý thành viên<br /><em>Thiết lập này cũng bao gồm việc cho phép xem chữ ký trình duyệt của thành viên trong danh sách những ai đang trực tuyến.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Có thể xoá/dọn dẹp thành viên', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Có thể quản lý nhóm', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Có thể tạo nhóm mới', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Có thể xoá nhóm', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Có thể quản lý xếp hạng', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Có thể quản lý mục thông tin cá nhân tuỳ biến', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Có thể quản lý tên thành viên cấm', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Có thể quản lý danh sách cấm', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Có thể xem thiết lập cấp phép', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Có thể thay đổi thiết lập cấp phép cho những nhóm riêng lẻ', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Có thể thay đổi thiết lập cấp phép cho những thành viên riêng lẻ', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Có thể thay đổi thiết lập cấp phép của chuyên mục', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Có thể thay đổi thiết lập cấp phép của điều hành viên', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Có thể thay đổi thiết lập cấp phép của quản trị viên', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Có thể thay đổi thiết lập cấp phép của thành viên', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Có thể quản lý nhiệm vụ', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Có thể chuyển đổi thiết lập cấp phép khác', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Có thể quản lý giao diện', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Có thể xem ghi nhận', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Có thể xoá ghi nhận', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Có thể quản lý gói thành phần chức năng', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Có thể quản lý gói ngôn ngữ', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Có thể gửi Email thành viên', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Có thể quản lý máy tìm kiếm', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Có thể quản lý báo cáo/nguyên nhân từ chối', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Có thể sao lưu/phục hồi cơ sở dữ liệu', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Có thể quản lý thiết lập tìm kiếm', 'cat' => 'misc'),
));

?>