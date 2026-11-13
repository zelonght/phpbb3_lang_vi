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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML, bản thân tương tự gần giống như HTML, cho phép bạn tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những thẻ BBCode tuỳ chọn.',
	'ADD_BBCODE'				=> 'Tạo thẻ BBCode mới',

	'BBCODE_DANGER'				=> 'BBCode bạn đang thêm có vẻ không an toàn. Nếu BBCode dùng mã {TEXT} trong ngữ cảnh nhạy cảm, hãy thử một loại hạn chế hơn. Chỉ tiếp tục nếu bạn hiểu rõ các rủi ro liên quan.',
	'BBCODE_DANGER_PROCEED'		=> 'Tiến hành', //'I understand the risk',

	'BBCODE_ADDED'				=> 'Thẻ BBCode đã được tạo thành công.',
	'BBCODE_EDITED'				=> 'Thẻ BBCode đã được chỉnh sửa thành công.',
	'BBCODE_DELETED'			=> 'Thẻ BBCode đã được gỡ bỏ thành công.',
	'BBCODE_NOT_EXIST'			=> 'Thẻ BBCode bạn vừa chọn không tồn tại.',
	'BBCODE_HELPLINE'			=> 'Hướng dẫn sử dụng thẻ BBCode',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Mục thông tin hướng dẫn sử dụng này sẽ được hiển thị khi rê chuột lên thẻ BBCode tương ứng trong phần soạn bài viết.',
	'BBCODE_HELPLINE_TEXT'		=> 'Nội dung hướng dẫn',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Nội dung hướng dẫn bạn nhập quá dài.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Tên thẻ BBCode bạn vừa chọn đã được sử dụng.',
	'BBCODE_INVALID'			=> 'Thẻ BBCode của bạn được tạo từ một biểu mẫu không hợp lệ.',
	'BBCODE_INVALID_TEMPLATE'	=> 'Mẫu BBCode của bạn không hợp lệ.',
	'BBCODE_TAG'				=> 'Thẻ BBCode',
	'BBCODE_TAG_TOO_LONG'		=> 'Tên của thẻ BBCode bạn vừa nhập quá dài.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Tên định danh của thẻ BBCode bạn vừa nhập quá dài. Hãy vui lòng sử dụng tên định danh cho thẻ ngắn hơn.',
	'BBCODE_USAGE'				=> 'Cách sử dụng thẻ BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Bạn có thể xác định cách sử dụng thẻ BBCode tại đây. Thay thế bất kỳ biến nào nhập vào bằng mã tương ứng (%sXem bên dưới%s).',

	'EXAMPLE'						=> 'Ví dụ:',
	'EXAMPLES'						=> 'Các ví dụ:',

	'HTML_REPLACEMENT'				=> 'Mã HTML thay thế',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Bạn có thể xác định mã HTML thay thế cho thẻ BBCode tại đây. Đừng quên đặt lại những mã thay thế mà bạn đã sử dụng ở bên trên!',

	'TOKEN'					=> 'Mã thay thế',
	'TOKENS'				=> 'Những mã thay thế',
	'TOKENS_EXPLAIN'		=> 'Mã thay thế là phần giữ chỗ cho dữ liệu do người dùng nhập. Dữ liệu chỉ được chấp nhận nếu khớp với định nghĩa tương ứng. Khi cần, bạn có thể đánh số bằng cách thêm một số làm ký tự cuối bên trong dấu ngoặc, ví dụ {TEXT1}, {TEXT2}.<br /><br />Trong phần HTML thay thế, bạn cũng có thể dùng bất kỳ chuỗi ngôn ngữ nào có trong thư mục language/ theo dạng {L_<em>&lt;STRINGNAME&gt;</em>}, trong đó <em>&lt;STRINGNAME&gt;</em> là tên chuỗi đã dịch cần chèn. Ví dụ, {L_WROTE} sẽ hiển thị “wrote” hoặc bản dịch tương ứng với ngôn ngữ của thành viên.<br /><br /><strong>Lưu ý rằng chỉ các mã thay thế liệt kê bên dưới mới có thể dùng trong BBCode tùy chỉnh.</strong>',
	'TOKEN_DEFINITION'		=> 'Định danh mã thay thế',
	'TOO_MANY_BBCODES'		=> 'Bạn không thể tạo quá nhiều thẻ BBCode. Hãy gỡ bỏ một hay nhiều thẻ BBCode rồi thử lại.',

	'tokens'	=>	array(
		'TEXT' => 'Mọi loại văn bản, bao gồm ký tự nước ngoài, chữ số, v.v…',
		'SIMPLETEXT' => 'Ký tự trong bảng chữ cái Latinh (A-Z), chữ số, khoảng trắng, dấu phẩy, dấu chấm, dấu trừ, dấu cộng, dấu gạch nối và dấu gạch dưới',
		'INTTEXT' => 'Ký tự chữ Unicode, chữ số, khoảng trắng, dấu phẩy, dấu chấm, dấu trừ, dấu cộng, dấu gạch nối, dấu gạch dưới và ký tự khoảng trắng.',
		'IDENTIFIER' => 'Ký tự trong bảng chữ cái Latinh (A-Z), chữ số, dấu gạch nối và dấu gạch dưới',
		'NUMBER' => 'Một chuỗi chữ số bất kỳ',
		'EMAIL' => 'Địa chỉ email hợp lệ',
		'URL' => 'URL hợp lệ dùng bất kỳ giao thức được phép nào (http, ftp, v.v.; không thể dùng để khai thác JavaScript). Nếu không có giao thức, hệ thống sẽ thêm tiền tố “http://”.',
		'LOCAL_URL' => 'URL cục bộ. URL phải tương đối với trang chủ đề, không được chứa tên máy chủ hay giao thức vì liên kết sẽ được thêm tiền tố “%s”',
		'RELATIVE_URL' => 'URL tương đối. Có thể dùng để khớp một phần URL, nhưng hãy thận trọng: URL đầy đủ cũng là URL tương đối hợp lệ. Khi muốn dùng URL tương đối của diễn đàn, hãy dùng mã LOCAL_URL.',
		'COLOR' => 'Màu HTML, có thể ở dạng số <samp>#FF1234</samp> hoặc một <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">từ khóa màu CSS</a> như <samp>fuchsia</samp> hay <samp>InactiveBorder</samp>',
		'ALNUM' => 'Ký tự trong bảng chữ cái Latinh (A-Z) và chữ số.',
		'CHOICE' => 'Một lựa chọn trong các giá trị chỉ định, ví dụ <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. Mặc định không phân biệt hoa thường; thêm tùy chọn <samp>caseSensitive</samp> để phân biệt: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT' => 'Giá trị thập phân, ví dụ <samp>0.5</samp>.',
		'HASHMAP' => 'Ánh xạ chuỗi sang nội dung thay thế theo dạng <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp>. Phân biệt hoa thường. Mặc định giữ nguyên giá trị không xác định.',
		'INT' => 'Giá trị số nguyên, ví dụ <samp>2</samp>.',
		'IP' => 'Địa chỉ IPv4 hoặc IPv6 hợp lệ.',
		'IPPORT' => 'Địa chỉ IPv4 hoặc IPv6 hợp lệ kèm số cổng.',
		'IPV4' => 'Địa chỉ IPv4 hợp lệ.',
		'IPV6' => 'Địa chỉ IPv6 hợp lệ.',
		'MAP' => 'Ánh xạ chuỗi sang nội dung thay thế theo dạng <samp>{MAP=string1:replacement1,string2:replacement2}</samp>. Không phân biệt hoa thường. Mặc định giữ nguyên giá trị không xác định.',
		'RANGE' => 'Chấp nhận số nguyên trong khoảng chỉ định, ví dụ <samp>{RANGE=-10,42}</samp>.',
		'REGEXP' => 'Kiểm tra giá trị bằng biểu thức chính quy, ví dụ <samp>{REGEXP=/^foo\\w+bar$/}</samp>.',
		'TIMESTAMP' => 'Dấu thời gian như <samp>1h30m10s</samp>, được chuyển thành số giây. Cũng chấp nhận một con số.',
		'UINT' => 'Giá trị số nguyên không dấu. Tương tự <samp>{INT}</samp> nhưng từ chối giá trị nhỏ hơn 0.',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, gỡ bỏ hoặc chỉnh sửa những biểu tượng bài viết mà thành viên có thể thêm vào trong chủ đề hay bài viết của họ. Những biểu tượng bài viết này thường được hiển thị trước tên chủ đề trong phần xem chuyên mục hoặc tiêu đề bài viết trong phần xem chủ đề. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng bài viết mới.',
	'ACP_SMILIES_EXPLAIN'	=> 'Biểu tượng vui thông thường là những hình ảnh nhỏ, chủ yếu là những hình vui nhộn được sử dụng để truyền đạt cảm xúc của thành viên trong bài viết. Với công cụ này, bạn có thể thêm vào, gỡ bỏ hay chỉnh sửa những biểu tượng vui mà thành viên có thể sử dụng trong bài viết và tin nhắn của họ. Bạn cũng có thể cài đặt và tạo ra các gói biểu tượng vui mới.',
	'ADD_SMILIES'			=> 'Thêm nhiều biểu tượng vui',
	'ADD_SMILEY_CODE'		=> 'Thêm mã xác định biểu tượng vui',
	'ADD_ICONS'				=> 'Thêm nhiều biểu tượng bài viết',
	'AFTER_ICONS'			=> 'Sau biểu tượng bài viết %s',
	'AFTER_SMILIES'			=> 'Sau biểu tượng vui %s',

	'CODE'						=> 'Mã xác định biểu tượng vui',
	'CURRENT_ICONS'				=> 'Biểu tượng bài viết hiện tại',
	'CURRENT_ICONS_EXPLAIN'		=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng bài viết đã cài đặt hiện tại của mình.',
	'CURRENT_SMILIES'			=> 'Biểu tượng vui hiện tại',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Chọn yêu cầu bạn muốn thực hiện với những biểu tượng vui đã cài đặt hiện tại của mình.',

	'DISPLAY_ON_POSTING'		=> 'Hiển thị trong trang gửi bài',
	'DISPLAY_POSTING'			=> 'Hiển thị trong trang gửi bài',
	'DISPLAY_POSTING_NO'		=> 'Không hiển thị trong trang gửi bài',

	'EDIT_ICONS'				=> 'Sửa biểu tượng bài viết',
	'EDIT_SMILIES'				=> 'Sửa biểu tượng vui',
	'EMOTION'					=> 'Cảm xúc',
	'EXPORT_ICONS'				=> 'Xuất và tải về <samp>icons.pak</samp>',
	'EXPORT_ICONS_EXPLAIN'		=> '%sBằng cách bấm vào liên kết này, các giá trị cấu hình cho những biểu tượng bài viết đã cài đặt của bạn sẽ được đóng gói lại thành tập tin <samp>icons.pak</samp> để bạn sau khi tải về có thể sử dụng để tạo ra tập tin nén <samp>.zip</samp> hay <samp>.tgz</samp> chứa tất cả các biểu tượng bài viết của bạn có trong tập tin cấu hình <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Xuất và tải về <samp>smilies.pak</samp>',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sBằng cách bấm vào liên kết này, các giá trị cấu hình cho những biểu tượng vui đã cài đặt của bạn sẽ được đóng gói lại thành tập tin <samp>smilies.pak</samp> để bạn sau khi tải về có thể sử dụng để tạo ra tập tin nén <samp>.zip</samp> hay <samp>.tgz</samp> chứa tất cả các biểu tượng vui của bạn có trong tập tin cấu hình <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Đầu tiên',

	'ICONS_ADD'				=> 'Thêm biểu tượng bài viết mới',
	'ICONS_ADDED'			=> array(
	0 => 'Không có biểu tượng nào để thêm vào.',
	1 => 'Biểu tượng bài viết đã được thêm vào thành công.',
),
	'ICONS_CONFIG'			=> 'Cấu hình biểu tượng bài viết',
	'ICONS_DELETED'			=> 'Biểu tượng bài viết đã được gỡ bỏ thành công.',
	'ICONS_EDIT'			=> 'Sửa biểu tượng bài viết',
	'ICONS_EDITED'			=> array(
	0 => 'Không có biểu tượng nào để cập nhật.',
	1 => 'Biểu tượng bài viết đã được cập nhật thành công.',
),
	'ICONS_HEIGHT'			=> 'Chiều cao',
	'ICONS_IMAGE'			=> 'Hình dùng làm biểu tượng bài viết',
	'ICONS_IMPORTED'		=> 'Gói biểu tượng bài viết đã được cài đặt thành công.',
	'ICONS_IMPORT_SUCCESS'	=> 'Gói biểu tượng bài viết đã được nhập thành công.',
	'ICONS_LOCATION'		=> 'Tên tập tin hình',
	'ICONS_NOT_DISPLAYED'	=> 'Những biểu tượng bài viết dưới đây không được hiển thị trong phần gửi bài viết',
	'ICONS_ORDER'			=> 'Sắp xếp',
	'ICONS_URL'				=> 'Hình biểu tượng bài viết',
	'ICONS_WIDTH'			=> 'Chiều rộng',
	'IMPORT_ICONS'			=> 'Cài đặt gói biểu tượng bài viết',
	'IMPORT_SMILIES'		=> 'Cài đặt gói biểu tượng vui',

	'KEEP_ALL'			=> 'Bỏ qua tất cả',

	'MASS_ADD_SMILIES'	=> 'Thêm vào nhiều biểu tượng vui',

	'NO_ICONS_ADD'		=> 'Không biểu tượng nào có sẵn để thêm vào.',
	'NO_ICONS_EDIT'		=> 'Không biểu tượng nào có sẵn để chỉnh sửa.',
	'NO_ICONS_EXPORT'	=> 'Bạn không có biểu tượng bài viết nào để tạo gói biểu tượng.',
	'NO_ICONS_PAK'		=> 'Không tìm thấy gói biểu tượng bài viết nào.',
	'NO_SMILIES_ADD'	=> 'Không biểu tượng vui nào có sẵn để thêm vào.',
	'NO_SMILIES_EDIT'	=> 'Không biểu tượng vui nào có sẵn để chỉnh sửa.',
	'NO_SMILIES_EXPORT'	=> 'Bạn không có biểu tượng vui nào để tạo gói biểu tượng.',
	'NO_SMILIES_PAK'	=> 'Không tìm thấy gói biểu tượng vui nào.',

	'PAK_FILE_NOT_READABLE'		=> 'Không thể đọc được tập tin <samp>.pak</samp> của gói biểu tượng.',

	'REPLACE_MATCHES'	=> 'Kết quả thay thế',

	'SELECT_PACKAGE'			=> 'Chọn một gói biểu tượng',
	'SMILIES_ADD'				=> 'Thêm biểu tượng vui mới',
	'SMILIES_ADDED'				=> array(
	0 => 'Không có biểu tượng nào để thêm vào.',
	1 => 'Biểu tượng vui đã được thêm vào thành công.',
),
	'SMILIES_CODE'				=> 'Mã nhập',
	'SMILIES_CONFIG'			=> 'Cấu hình biểu tượng vui',
	'SMILIES_DELETED'			=> 'Biểu tượng vui đã được gỡ bỏ thành công.',
	'SMILIES_EDIT'				=> 'Sửa biểu tượng vui',
	'SMILIE_NO_CODE'			=> 'Biểu tượng cảm “%s” đã bị bỏ qua, vì không có mã được nhập vào.',
	'SMILIE_NO_EMOTION'			=> 'Biểu tượng cảm “%s” đã bị bỏ qua, vì không có thiếu dữ liệu nhập vào.',
	'SMILIE_NO_FILE'			=> 'Biểu tượng cảm “%s” đã bị bỏ qua, vì tập tin tương ứng không tìm thấy.',
	'SMILIES_EDITED'			=> array(
	0 => 'Không có biểu tượng nào để cập nhật.',
	1 => 'Biểu tượng vui đã được cập nhật thành công.',
),
	'SMILIES_EMOTION'			=> 'Cảm xúc',
	'SMILIES_HEIGHT'			=> 'Chiều cao',
	'SMILIES_IMAGE'				=> 'Hình dùng làm biểu tượng vui',
	'SMILIES_IMPORTED'			=> 'Gói biểu tượng vui đã được cài đặt thành công.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Gói biểu tượng vui đã được nhập thành công.',
	'SMILIES_LOCATION'			=> 'Tên tập tin hình',
	'SMILIES_NOT_DISPLAYED'		=> 'Những biểu tượng vui dưới đây không được hiển thị trong phần gửi bài viết',
	'SMILIES_ORDER'				=> 'Sắp xếp',
	'SMILIES_URL'				=> 'Hình biểu tượng vui',
	'SMILIES_WIDTH'				=> 'Chiều rộng',

	'TOO_MANY_SMILIES'			=> array(
	1 => 'Vượt giới hạn %d biểu tượng vui.',
),

	'WRONG_PAK_TYPE'	=> 'Gói biểu tượng bạn vừa chọn không chứa dữ liệu thích hợp.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa và gỡ bỏ những từ kiểm duyệt tự động trong hệ thống. Ngoài ra, mọi người sẽ không được phép sử dụng tên thành viên có chứa những từ kiểm duyệt này để đăng ký thành viên. Bạn có thể sử dụng dấu đại diện * trong từ kiểm duyệt, Ví dụ như <strong>*test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>detestable</strong>, <strong>test*</strong> cũng sẽ kiểm duyệt luôn từ <strong>testing</strong>, <strong>*test</strong> cũng sẽ kiểm duyệt luôn từ <strong>detest</strong>.',
	'ADD_WORD'				=> 'Thêm từ kiểm duyệt mới',

	'EDIT_WORD'		=> 'Sửa từ kiểm duyệt',
	'ENTER_WORD'	=> 'Bạn phải nhập vào từ kiểm duyệt và từ thay thế.',

	'NO_WORD'	=> 'Không có từ kiểm duyệt nào được chọn để chỉnh sửa.',

	'REPLACEMENT'	=> 'Từ thay thế',

	'UPDATE_WORD'	=> 'Cập nhật từ kiểm duyệt',

	'WORD'				=> 'Từ kiểm duyệt',
	'WORD_ADDED'		=> 'Từ kiểm duyệt đã được thêm vào thành công.',
	'WORD_REMOVED'		=> 'Từ kiểm duyệt bạn vừa chọn đã được gỡ bỏ thành công.',
	'WORD_UPDATED'		=> 'Từ kiểm duyệt bạn vừa chọn đã được cập nhật thành công.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào, chỉnh sửa, xem và xoá các xếp hạng. Bạn cũng có thể chỉ định những xếp hạng đặc biệt áp dụng cho thành viên thông qua phần quản lý thành viên.',
	'ADD_RANK'				=> 'Thêm xếp hạng mới',

	'MUST_SELECT_RANK'		=> 'Bạn phải chọn một xếp hạng.',

	'NO_ASSIGNED_RANK'		=> 'Không có xếp hạng đặc biệt nào được chỉ định.',
	'NO_RANK_TITLE'			=> 'Bạn chưa nhập vào tên xếp hạng.',
	'NO_UPDATE_RANKS'		=> 'Xếp hạng đã được xoá thành công. Tuy nhiên, những tài khoản thành viên đang sử dụng xếp hạng này chưa được cập nhật. Bạn sẽ phải tự mình thay đổi lại xếp hạng cho những tài khoản thành viên này.',

	'RANK_ADDED'			=> 'Xếp hạng đã được thêm vào thành công.',
	'RANK_IMAGE'			=> 'Hình ảnh xếp hạng',
	'RANK_IMAGE_EXPLAIN'	=> 'Hình ảnh xác định nhỏ hiển thị cùng với xếp hạng này. Đường dẫn đến hình ảnh phải nằm trong thư mục hệ thống.',
	'RANK_IMAGE_IN_USE'		=> '(đang sử dụng)',
	'RANK_MINIMUM'			=> 'Số bài viết tối thiểu',
	'RANK_REMOVED'			=> 'Xếp hạng đã được gỡ bỏ thành công.',
	'RANK_SPECIAL'			=> 'Chọn làm xếp hạng đặc biệt',
	'RANK_TITLE'			=> 'Tên xếp hạng',
	'RANK_UPDATED'			=> 'Xếp hạng đã được cập nhật thành công.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý các tên thành viên cấm sử dụng. Với những tên thành viên bị cấm sử dụng, bạn có thể dùng dấu đại diện * để cấm thành viên sử dụng nhiều tên thành viên cùng loại. Lưu ý rằng bạn không thể cấm sử dụng những tên thành viên đã được thành viên sử dụng để đăng ký mà trước hết bạn cần xoá tên này rồi hãy cấm sử dụng nó tại đây.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Bạn có thể cấm sử dụng một tên thành viên bằng cách dùng dấu đại diện * để cấm nhiều ký tự đi cùng.',
	'ADD_DISALLOW_TITLE'	=> 'Thêm tên thành viên cấm sử dụng',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bạn có thể gỡ bỏ một tên thành viên đã bị cấm sử dụng bằng cách chọn tên thành viên đó từ danh sách này và bấm vào nút chấp nhận.',
	'DELETE_DISALLOW_TITLE'		=> 'Gỡ bỏ tên thành viên cấm sử dụng',
	'DISALLOWED_ALREADY'		=> 'Tên thành viên bạn vừa nhập không thể bị cấm sử dụng. Có thể tên này đã tồn tại trong danh sách tên thành viên cấm sử dụng, trong danh sách từ kiểm duyệt hay đã được một thành viên nào đó sử dụng.',
	'DISALLOWED_DELETED'		=> 'Tên thành viên cấm sử dụng đã được gỡ bỏ thành công.',
	'DISALLOW_SUCCESSFUL'		=> 'Tên thành viên cấm sử dụng đã được thêm vào thành công.',

	'NO_DISALLOWED'				=> 'Không có tên thành viên nào bị cấm sử dụng',
	'NO_USERNAME_SPECIFIED'		=> 'Bạn chưa chọn hoặc nhập vào tên thành viên.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý những nguyên nhân được sử dụng trong các báo cáo và nội dung từ chối khi từ chối những bài viết. Có một nguyên nhân mặc định trong đây được đánh dấu * mà bạn không thể gỡ bỏ được, nguyên nhân này được sử dụng cho tất cả các báo cáo khi từ chối mà không chọn nguyên nhân.',
	'ADD_NEW_REASON'		=> 'Thêm nguyên nhân mới',
	'AVAILABLE_TITLES'		=> 'Các nguyên nhân đã được phiên dịch có sẵn',

	'IS_NOT_TRANSLATED'			=> 'Nguyên nhân <strong>chưa được</strong> phiên dịch',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Đây là những nguyên nhân <strong>chưa được</strong> phiên dịch. Nếu bạn muốn cung cấp nội dung trong phần phiên dịch, hãy xác định một khóa chính xác từ các tập tin trong gói ngôn ngữ để báo cáo về nguyên nhân trên.',
	'IS_TRANSLATED'				=> 'Nguyên nhân đã được phiên dịch',
	'IS_TRANSLATED_EXPLAIN'		=> 'Đây là những nguyên nhân đã được phiên dịch. Nếu tên nguyên nhân bạn nhập vào ở đây đã được xác định từ các tập tin trong gói ngôn ngữ để báo cáo về nguyên nhân trên, phần nội dung phiên dịch của tên và nội dung nguyên nhân sẽ được sử dụng.',

	'NO_REASON'					=> 'Không thể tìm thấy nguyên nhân.',
	'NO_REASON_INFO'			=> 'Bạn phải nhập vào tên và nội dung của nguyên nhân này.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Bạn không thể gỡ bỏ nguyên nhân mặc định <strong>Những nguyên nhân khác</strong>.',

	'REASON_ADD'				=> 'Thêm báo cáo/nguyên nhân từ chối',
	'REASON_ADDED'				=> 'Báo cáo/nguyên nhân từ chối đã được thêm vào thành công.',
	'REASON_ALREADY_EXIST'		=> 'Một nguyên nhân hiện tại đã sử dụng tên này, hãy nhập vào tên khác cho nguyên nhân này.',
	'REASON_DESCRIPTION'		=> 'Nội dung nguyên nhân',
	'REASON_DESC_TRANSLATED'	=> 'Nội dung nguyên nhân được hiển thị',
	'REASON_EDIT'				=> 'Sửa báo cáo/nguyên nhân từ chối',
	'REASON_EDIT_EXPLAIN'		=> 'Với công cụ này, bạn có thể thêm vào hoặc chỉnh sửa các nguyên nhân. Nếu nguyên nhân đã được phiên dịch trong gói ngôn ngữ thì nội dung phiên dịch này sẽ thay thế cho nội dung nguyên nhân bạn nhập vào tại đây.',
	'REASON_REMOVED'			=> 'Báo cáo/nguyên nhân từ chối đã được gỡ bỏ thành công.',
	'REASON_TITLE'				=> 'Tên nguyên nhân',
	'REASON_TITLE_TRANSLATED'	=> 'Tên nguyên nhân được hiển thị',
	'REASON_UPDATED'			=> 'Báo cáo/nguyên nhân từ chối đã được cập nhật thành công.',

	'USED_IN_REPORTS'		=> 'Đã sử dụng trong báo cáo',
));
