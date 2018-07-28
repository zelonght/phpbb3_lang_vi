<?php
/** 
*
* help_bbcode [Vietnamese]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2010/08/30 16:51:00
* @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Giới thiệu'
	),
	array(
		0 => 'BBCode là gì?',
		1 => 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML. Việc bạn có sử dụng BBCode được hay không là tuỳ vào quyết định của người quản trị. Bạn cũng có thể tắt BBCode với lựa chọn xuất hiện sau khung soạn bài viết. Bản thân BBCode tương tự gần giống như HTML: thẻ lệnh được đóng mở bằng dấu [ và ] thay vì &lt; và &gt;. Nó cho phép tuỳ biến sử dụng và điều khiển dễ dàng hơn mã HTML. Tuỳ thuộc vào giao diện mà bạn đang sử dụng, bạn sẽ nhận thấy việc sử dụng các thẻ lệnh BBCode dễ dàng như thế nào khi chỉ cần đến các thao tác bấm chuột vào thanh công cụ BBCode nằm bên trên khung soạn thảo nội dung bài viết. Thậm chí với những công cụ dễ dàng như vậy, bạn cũng sẽ được cung cấp một tài liệu hướng dẫn sử dụng chi tiết trong phần dưới đây.'
	),
	array(
		0 => '--',
		1 => 'Định dạng văn bản'
	),
	array(
		0 => 'Làm thế nào để tạo chữ in đậm, in nghiêng và gạch chân?',
		1 => 'Sử dụng thẻ BBCode bạn có thể thay đổi nhanh chóng kiểu dáng đơn giản của văn bản. Hãy xem xét các phương pháp sau đây: <ul><li>Để in đậm một đoạn văn bản hãy đặt nó nằm trong cặp thẻ <strong>[b][/b]</strong>, ví dụ như: <br /><br /><strong>[b]</strong>Xin chào!<strong>[/b]</strong><br /><br />sẽ trở thành <strong>Xin chào!</strong></li><br /><li>Để gạch chân văn bản hãy sử dụng cặp thẻ <strong>[u][/u]</strong>, ví dụ như:<br /><br /><strong>[u]</strong>Chào buổi sáng!<strong>[/u]</strong><br /><br />sẽ thành <span style="text-decoration: underline;">Chào buổi sáng!</span></li><br /><li>Để tạo văn bản in nghiêng bạn dùng cặp thẻ <strong>[i][/i]</strong>, ví dụ như:<br /><br />Điều này thật <strong>[i]</strong>tuyệt vời!<strong>[/i]</strong><br /><br />sẽ hiển thị thành Điều này thật <em>tuyệt vời!</em></li></ul>'
	),
	array(
		0 => 'Làm thế nào để thay đổi màu hay kích thước của văn bản?',
		1 => 'Để thay đổi màu hay kích thước của văn bản, những thẻ BBCode sau đây sẽ được dùng. Hãy nhớ rằng sự hiển thị như thế nào còn tuỳ thuộc vào trình duyệt của người xem và hệ thống: <ul><li>Để thay đổi màu văn bản, bạn hãy đặt nó trong cặp thẻ <strong>[color=][/color]</strong>. Bạn có thể xác định bằng một tên màu được chấp nhận như: red, blue, yellow… hay sử dụng mã màu hex như: #FFFFFF, #000000… Ví dụ, để tạo một đoạn văn bản có chữ màu đỏ bạn có thể dùng như sau:<br /><br /><strong>[color=red]</strong>Xin chào!<strong>[/color]</strong><br /><br />hoặc<br /><br /><strong>[color=#FF0000]</strong>Xin chào!<strong>[/color]</strong><br /><br />Cả hai cách trên sẽ cho ra cùng kết quả <span style="color: red;">Xin chào!</span></li><br /><li>Thay đổi kích thước của văn bản cũng làm tương tự như trên nhưng dùng với cặp thẻ <strong>[size=][/size]</strong>. Việc sử dụng thẻ này còn tuỳ thuộc vào giao diện mà thành viên đã chọn sử dụng trong hệ thống nhưng chúng tôi khuyên bạn nên dùng kích thước là một giá trị số đếm tiêu biểu với đơn vị tính là phần trăm, bắt đầu từ 20 (rất nhỏ) cho đến 200 (rất lớn) theo mặc định. Ví dụ:<br /><br /><strong>[size=30]</strong>NHỎ XÍU<strong>[/size]</strong><br /><br />sẽ tạo ra <span style="font-size: 30%;">NHỎ XÍU</span><br /><br />nhưng ngược lại:<br /><br /><strong>[size=200]</strong>LỚN QUÁ<strong>[/size]</strong><br /><br />sẽ cho ra <span style="font-size: 200%;">LỚN QUÁ</span></li></ul>'
	),
	array(
		0 => 'Tôi có thể phối hợp các thẻ định dạng với nhau không?',
		1 => 'Vâng! Chắc chắn bạn có thể làm được điều này. Ví dụ để tạo sự chú ý của một ai đó bạn có thể viết như sau:<br /><br /><strong>[size=200][color=red][b]</strong>HÃY NHÌN TÔI!<strong>[/b][/color][/size]</strong><br /><br />nó sẽ hiển thị <span style="color: red; font-size: 200%;"><strong>HÃY NHÌN TÔI!</strong></span><br /><br />Chúng tôi khuyên bạn không nên sử dụng quá nhiều thẻ định dạng văn bản như thế! Hãy nhớ rằng khi bạn sử dụng phối hợp nhiều thẻ BBCode như thế bạn phải dùng các thẻ đóng tương ứng theo thứ tự. Ví dụ, cách dùng sau đây là sai:<br /><br /><strong>[b][u]</strong>Sai rồi!<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Trích dẫn và xuất văn bản cố định chiều rộng'
	),
	array(
		0 => 'Trích dẫn văn bản trong những bài trả lời',
		1 => 'Có hai cách để bạn trích dẫn một văn bản: trích dẫn có nguồn gốc hoặc trích dẫn không nguồn gốc.<ul><li>Khi bạn sử dụng chức năng trích dẫn để trả lời một bài viết trong diễn đàn, bạn phải đặt toàn bộ nội dung muốn trích dẫn nằm trong cặp thẻ <strong>[quote=&quot;&quot;][/quote]</strong>. Phương pháp này cho phép bạn trích dẫn một văn bản có nguồn gốc từ một người hoặc bất cứ ai, bất cứ cái gì bạn muốn thêm vào. Ví dụ, để trích dẫn một đoạn văn bản mà Mr. Blobby đã viết, bạn sẽ phải sử dụng như sau:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Đoạn văn bản muốn trích dẫn của Mr. Blobby<strong>[/quote]</strong><br /><br />Kết quả xuất ra sẽ tự động thêm vào dòng &quot;Mr. Blobby đã viết:&quot; trước đoạn văn bản bạn dùng để trích dẫn. Hãy nhớ rằng bạn <strong>phải</strong> đính kèm dấu ngoặc kép &quot;&quot; trước và sau tên người hay tên của bất cứ thứ gì mà bạn muốn dùng làm nguồn để trích dẫn. Đây là tuỳ chọn không bắt buộc phải có.</li><br /><li>Cách thứ hai cho phép bạn trích dẫn tuỳ ý bất cứ thứ gì. Để sử dụng đúng, bạn cũng phải đặt đoạn văn bản muốn trích dẫn nằm trong cặp thẻ <strong>[quote][/quote]</strong>. Khi bạn xem bài viết, nó sẽ hiển thị đoạn văn bản trong một khung trích dẫn.</li></ul>'
	),
	array(
		0 => 'Trích dẫn mã lệnh hoặc văn bản cố định chiều rộng',
		1 => 'Nếu bạn muốn trích dẫn một đoạn mã nguồn trong bài viết hoặc thực ra chỉ là một đoạn văn bản yêu cầu phải cố định chiều rộng trong khung với phông chữ Courier, bạn nên đặt nó trong cặp thẻ <strong>[code][/code]</strong>, ví dụ như<br /><br /><strong>[code]</strong>echo &quot;Mã nguồn nè…&quot;;<strong>[/code]</strong><br /><br />Tất cả định dạng hay thẻ lệnh được sử dụng trong cặp thẻ <strong>[code][/code]</strong> đều được giữ nguyên khi bạn xem bài viết. Để tô sáng cú pháp của mã PHP, bạn hãy dùng cặp thẻ <strong>[code=php][/code]</strong> và chúng tôi khuyên bạn nên gửi các mẫu ví dụ về mã PHP dưới dạng này để mọi người khác xem có thể đọc được mã lệnh dễ dàng.'
	),
	array(
		0 => '--',
		1 => 'Tạo danh sách liệt kê'
	),
	array(
		0 => 'Tạo danh sách liệt kê không theo thứ tự',
		1 => 'Thẻ lệnh BBCode hỗ trợ hai loại danh sách liệt kê: không theo thứ tự và có thứ tự. Về bản chất chúng cũng giống như những thẻ lệnh HTML tương tự. Một danh sách liệt kê không theo thứ tự sẽ xuất ra mỗi mục trong danh sách liệt kê của bạn liên tục từng dòng và tự động thụt vào trong với một ký tự hình tròn. Để tạo danh sách loại này bạn dùng cặp thẻ <strong>[list][/list]</strong> và xác định trước mỗi mục trong danh sách liệt kê một thẻ con <strong>[*]</strong>. Ví dụ, để tạo một danh sách liệt kê những màu mà mình ưa thích, bạn làm như sau:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Đỏ<br /><strong>[*]</strong>Xanh<br /><strong>[*]</strong>Vàng<br /><strong>[/list]</strong><br /><br />Kết quả sẽ tạo ra một danh sách liệt kê như sau:<ul><li>Đỏ</li><li>Xanh</li><li>Vàng</li></ul>'
	),
	array(
		0 => 'Tạo danh sách liệt kê theo thứ tự',
		1 => 'Loại danh sách liệt kê thứ hai - danh sách liệt kê có thứ tự - sẽ giúp bạn tự động đánh số thứ tự trước mỗi mục liệt kê trong danh sách. Để tạo danh sách loại này bạn dùng cặp thẻ <strong>[list=1][/list]</strong> để tạo ra một danh sách liệt kê theo thứ tự số đếm hoặc lựa chọn <strong>[list=a][/list]</strong> để tạo ra một danh sách liệt kê theo thứ tự chữ cái ABC. Giống như khi tạo danh sách liệt kê không theo thứ tự, mỗi mục liệt kê trong danh sách này đều phải có thẻ con <strong>[*]</strong> đứng trước. Ví dụ:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Đi đến cửa hàng<br /><strong>[*]</strong>Mua một chiếc máy vi tính mới<br /><strong>[*]</strong>Nguyền rủa chiếc máy tính khi nó bị hư<br /><strong>[/list]</strong><br /><br />sẽ cho ra kết quả như sau:<ol style="list-style-type: arabic-numbers;"><li>Đi đến cửa hàng</li><li>Mua một chiếc máy vi tính mới</li><li>Nguyền rủa chiếc máy tính khi nó bị hư</li></ol>Trong khi muốn tạo danh sách liệt kê theo thứ tự chữ cái ABC bạn phải làm như sau:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Câu trả lời hợp lý thứ nhất<br /><strong>[*]</strong>Câu trả lời hợp lý thứ hai<br /><strong>[*]</strong>Câu trả lời hợp lý thứ ba<br /><strong>[/list]</strong><br /><br />sẽ thành<ol style="list-style-type: lower-alpha;"><li>Câu trả lời hợp lý thứ nhất</li><li>Câu trả lời hợp lý thứ hai</li><li>Câu trả lời hợp lý thứ ba</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Tạo liên kết'
	),
	array(
		0 => 'Liên kết đến những website khác',
		1 => 'Thẻ lệnh BBCode hỗ trợ nhiều cách để tạo ra các liên kết URI (Uniform Resource Indicators) tốt hơn các dạng liên kết URL quen thuộc.<ul><li>Trước tiên cặp thẻ cần sử dụng là <strong>[url=][/url]</strong>. Bất cứ thứ gì bạn nhập sau dấu = sẽ trở thành nội dung của thẻ đó và được hiểu là một địa chỉ URL. Ví dụ, để liên kết đến website phpBB.com bạn sẽ sử dụng như sau:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Ghé thăm phpBB nào!<strong>[/url]</strong><br /><br />Một liên kết sẽ được tạo ra như sau: <a href="http://www.phpbb.com/">Ghé thăm phpBB nào!</a> Bạn cần lưu ý rằng liên kết này sẽ được mở ra trong cùng một cửa sổ hay một cửa sổ mới tùy thuộc vào thiết lập trong trình duyệt của người đang xem bài viết.</li><br /><li>Nếu bạn muốn tạo một liên kết hiển thị với chính địa chỉ URL của nó, hãy làm như sau:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Liên kết tạo ra sẽ là: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><br /><li>Ngoài ra, một chức năng trong hệ thống còn được gọi là <em>những liên kết thông minh</em>. Khi bạn gõ những địa chỉ website trong bài viết, chúng sẽ được tự động hiển thị như là các địa chỉ URL mà không cần bạn phải đặt chúng trong bất cứ thẻ lệnh nào và thậm chí không cần bắt đầu bằng cụm từ http:// quen thuộc. Ví dụ, nếu bạn gõ www.phpbb.com trong bài viết nó sẽ được tự động đặt thành <a href="http://www.phpbb.com/">www.phpbb.com</a> khi bạn xem bài viết.</li><br /><li>Cách tạo liên kết cũng được áp dụng tương tự cho địa chỉ Email. Bạn chỉ cần xác định một địa chỉ Email rõ ràng, ví dụ như:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />nó sẽ được hiển thị thành <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> hoặc bạn chỉ cần gõ no.one@domain.adr trong bài viết là nó sẽ được tự động chuyển thành một liên kết đến địa chỉ Email trên khi bạn xem bài viết.</li></ul>Giống như tất cả thẻ lệnh BBCode khác, bạn có thể sử dụng phối hợp thẻ tạo liên kết URL này với các thẻ lệnh BBCode khác, ví dụ như <strong>[img][/img]</strong> (Xem mục kế tiếp), <strong>[b][/b]</strong>… Với những thẻ định dạng như trên, bạn cần phải đặt thẻ lệnh mở bắt đầu và thẻ lệnh đóng kết thúc tương ứng theo thứ tự. Ví dụ:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />là <span style="text-decoration: underline;">không chính xác</span> và có thể làm cho bài viết của bạn bị xoá khỏi diễn đàn. Vì thế, hãy cẩn thận và kiểm tra kĩ khi sử dụng.'
	),
	array(
		0 => '--',
		1 => 'Hiển thị hình ảnh trong bài viết'
	),
	array(
		0 => 'Thêm một hình ảnh trong bài viết',
		1 => 'Các thẻ lệnh BBCode trong hệ thống phpBB kết hợp chặt chẽ với thẻ lệnh đính kèm hình ảnh trong bài viết. Có 2 điều quan trọng mà bạn cần nhớ khi sử dụng thẻ này là: Nhiều người không đánh giá cao việc dùng quá nhiều hình ảnh trong bài viết và thứ hai, hình ảnh bạn dùng hiển thị trong bài viết phải hiện hữu trên mạng, nó không thể là hình trên máy tính của bạn được trừ khi máy tính của bạn là một máy chủ Web. Để hiển thị hình ảnh, bạn phải đặt đường dẫn URL của nó nằm trong cặp thẻ <strong>[img][/img]</strong>. Ví dụ:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Bạn cũng có thể tạo ra một liên kết là một hình ảnh khi dùng cách trên phối hợp với cặp thẻ <strong>[url][/url]</strong>. Ví dụ:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />sẽ tạo thành:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Đính kèm tập tin trong bài viết',
		1 => 'Bạn có thể đặt những tập tin đính kèm ở bất kỳ đâu trong bài viết bằng cách sử dụng cặp thẻ <strong>[attachment=][/attachment]</strong>, nếu chức năng đính kèm tập tin được kích hoạt bởi người quản trị của diễn đàn và nếu thiết lập cấp phép của bạn cho phép bạn được quyền đính kèm tập tin. Trong khung gửi bài sẽ có một danh sách các tập tin đính kèm mà bạn đã tải lên tương ứng với một nút bấm cho bạn chọn lựa việc đặt chúng ở đâu trong phần nội dung bài viết của mình.'
	),
	array(
		0 => '--',
		1 => 'Những vấn đề khác'
	),
	array(
		0 => 'Tôi có thể tự tạo những thẻ BBCode cho riêng mình?',
		1 => 'Nếu bạn là quản trị viên của diễn đàn và được người sáng lập cho phép, bạn có thể tự mình tạo thêm nhiều thẻ BBCode mới trong phần tùy biến thẻ BBCode tại bảng điều khiển dành cho quản trị viên.'
	)
);

?>