<?php
/** 
*
* help_faq [Vietnamese]
*
* @package language
* @version $Id: help_faq.php,v 1.45 2010/08/30 16:51:00
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
		1 => 'Những câu hỏi về đăng ký thành viên và đăng nhập'
	),
	array(
		0 => 'Tại sao tôi không thể đăng nhập được?',
		1 => 'Có một vài nguyên nhân dẫn đến việc này. Trước tiên, hãy chắc chắn rằng tên thành viên và mật khẩu của bạn đã nhập vào chính xác. Nếu bạn đã nhập chính xác mà vẫn không thể đăng nhập được, hãy liên hệ với người quản trị để chắc chắn rằng bạn không bị cấm tham gia. Cũng có thể, người quản lý website đã cấu hình sai hệ thống ở một chỗ nào đó và họ cần bạn thông báo để biết mà tiến hành khắc phục.'
	),
	array(
		0 => 'Tại sao tôi cần phải đăng ký làm thành viên?',
		1 => 'Bạn có thể không cần phải làm như thế nhưng đôi khi bạn cần phải đăng ký mới có thể gửi bài trong diễn đàn, tuỳ theo yêu cầu của người quản trị. Tuy nhiên, việc đăng ký làm thành viên sẽ giúp bạn sử dụng được hết tất cả các chức năng mà hệ thống chỉ dành cho các thành viên đã đăng ký và không dành cho khách sử dụng, ví dụ như hình đại diện, gửi tin nhắn, gửi Email đến các thành viên khác, tham gia vào các nhóm… Bạn chỉ mất vài phút để hoàn tất việc đăng ký, vì vậy hãy đăng ký làm thành viên của chúng tôi.'
	),
	array(
		0 => 'Tại sao tôi thường xuyên bị thoát ra khỏi hệ thống?',
		1 => 'Nếu bạn không đánh dấu chọn vào lựa chọn <em>Đăng nhập tự động mỗi lần ghé thăm</em> khi bạn đăng nhập, hệ thống sẽ chỉ cho phép bạn đăng nhập vào trong thời điểm hiện tại. Điều này sẽ giúp ngăn cản việc lạm dụng tài khoản của bạn bởi một ai đó. Để vẫn luôn trong trạng thái đã đăng nhập, hãy đánh dấu vào lựa chọn trên một lần trong khi đăng nhập. Điều này không được khuyến cáo sử dụng nếu bạn đang truy nhập vào hệ thống từ một máy tính dùng chung, ví dụ như trong thư viện, tiệm Internet, phòng vi tính trong trường học. Nếu bạn không nhìn thấy lựa chọn trên thì có nghĩa là người quản trị đã vô hiệu chức năng này.'
	),
	array(
		0 => 'Làm sao để tên thành viên của tôi không xuất hiện trong danh sách các thành viên đang trực tuyến?',
		1 => 'Trong bảng điều khiển dành cho thành viên của mình, tại phần “Thiết lập hệ thống”, bạn hãy tìm đến lựa chọn <em>Luôn ẩn trạng thái trực tuyến của tôi</em>. Nếu bạn chọn <samp>Đồng ý</samp>, bạn sẽ chỉ xuất hiện trực tuyến đối với các quản trị viên, các điều hành viên hoặc với chính mình. Bạn sẽ được tính như là một thành viên ẩn.'
	),
	array(
		0 => 'Tôi đã quên mật khẩu của mình!',
		1 => 'Đừng lo lắng! Tuy mật khẩu của bạn không thể phục hồi lại được nhưng có thể được tạo lại dễ dàng. Trong trang đăng nhập, bạn hãy bấm vào liên kết <em>Quên mật khẩu</em>. Hãy làm theo hướng dẫn của công cụ này và bạn sẽ có thể đăng nhập trở lại vào hệ thống một cách nhanh chóng.'
	),
	array(
		0 => 'Tôi đã đăng ký nhưng không thể đăng nhập được!',
		1 => 'Trước tiên, hãy kiểm tra tên thành viên và mật khẩu của bạn. Nếu tất cả đều chính xác thì có thể bạn rơi vào một trong hai trường hợp sau: Nếu yêu cầu COPPA được bật trong hệ thống và bạn đã xác định mình dưới 13 tuổi khi đăng ký thành viên thì bạn cần phải làm theo những hướng dẫn đã được gửi sau đó. Nếu bạn không rơi vào trường hợp trên thì có thể tài khoản của bạn chưa được kích hoạt. Một vài diễn đàn bắt buộc tài khoản thành viên phải được kích hoạt sau khi đăng ký thành công, có thể bạn được yêu cầu tự làm việc này hoặc chờ người quản trị kích hoạt trước khi bạn có thể đăng nhập vào hệ thống. Khi bạn đăng ký thành công, bạn sẽ được thông báo có phải kích hoạt tài khoản của mình hay không. Nếu bạn nhận được một Email yêu cầu kích hoạt thì hãy làm theo hướng dẫn trong đó. Nếu bạn không nhận được Email nào, có thể bạn đã cung cấp sai địa chỉ Email của mình khi đăng ký hoặc địa chỉ Email này bị chặn bởi các công cụ quét thư rác. Lý do của việc bắt buộc phải kích hoạt tài khoản này là để hạn chế sự lạm dụng của một vài người muốn quấy phá hệ thống. Nếu bạn chắc chắn mình đã nhập đúng địa chỉ Email, hãy cố gắng liên hệ với người quản trị.'
	),
	array(
		0 => 'Tôi đã từng đăng ký trước đây nhưng bây giờ không thể đăng nhập được nữa!',
		1 => 'Cố gắng tìm lại Email mà chúng tôi đã gửi cho bạn khi lần đầu tiên bạn đăng ký làm thành viên, kiểm tra tên thành viên và mật khẩu của bạn rồi thử lại. Cũng có thể người quản trị đã ngưng kích hoạt hoặc xoá tài khoản của bạn ra khỏi hệ thống vì một vài lý do nào đó. Thông thường, một vài diễn đàn sẽ xoá định kỳ các tài khoản thành viên không hoạt động trong một thời gian dài để giảm bớt dung lượng của cơ sở dữ liệu trong hệ thống. Nếu đúng như thế, bạn hãy cố gắng đăng ký trở lại và tham gia thảo luận nhiệt tình hơn với mọi người.'
	),
	array(
		0 => 'Điều khoản COPPA là gì?',
		1 => 'COPPA là tên viết tắt từ <strong>Child Online Privacy and Protection Act</strong>. Đây là một luật lệ ban hành vào năm 1998 trong hệ thống pháp luật của Mỹ. Luật lệ này yêu cầu các website có những hoạt động thu thập thông tin từ trẻ vị thành niên dưới 13 tuổi phải được sự đồng ý của cha mẹ hay người bảo hộ của chúng hoặc sử dụng một vài biện pháp khác từ hệ thống kiến thức bảo hộ pháp luật trong việc cho phép thu thập những thông tin cá nhân có thể nhận biết từ một trẻ vị thành niên dưới 13 tuổi. Nếu bạn chắc chắn rằng mình hay một vài người khác thuộc diện quy định trong điều khoản này hoặc website mà bạn đang đăng ký thành viên có áp dụng điều khoản này, bạn hãy liên hệ với các luật sư tư vấn pháp lý để tìm kiếm sự giúp đỡ. Lưu ý rằng tổ chức phpBB không thể đưa ra cho bạn bất kỳ một lời khuyên nào về pháp luật và cũng đừng liên hệ với chúng tôi về những vấn đề này ngoại trừ một vài nguyên tắc chung bên dưới.',
	),
	array(
		0 => 'Tại sao tôi không thể đăng ký thành viên?',
		1 => 'Có thể người quản lý website đã cấm địa chỉ IP của bạn hoặc không cho phép sử dụng tên thành viên mà bạn đang định sử dụng để đăng ký mới. Cũng có thể người quản lý website đã cho tạm ngưng đăng ký thành viên mới bằng cách vô hiệu chức năng này trong hệ thống vì một lý do nào đó. Bạn hãy liên hệ với người quản trị để được giúp đỡ.',
	),
	array(
		0 => 'Liên kết “Xóa tất cả dữ liệu ghi nhận từ website này” có tác dụng gì?',
		1 => 'Thao tác này sẽ xóa tất cả các dữ liệu ghi nhận được tạo ra bởi hệ thống phpBB trên máy tính của bạn. Việc tạo ra các dữ liệu ghi nhận này là nhằm giữ cho việc xác thực và đăng nhập vào hệ thống của bạn luôn ở trong trạng thái sẵn sàng đồng thời nó cũng đi kèm với một vài chức năng khác từ hệ thống như việc đánh dấu những chủ đề/bài viết đã xem nếu thiết lập này được thiết lập bởi người quản trị. Nếu bạn gặp rắc rối trong quá trình đăng nhập hay thoát khỏi hệ thống, việc xóa dữ liệu ghi nhận này có thể sẽ giúp bạn thoát khỏi rắc rối đó.',
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về thiết lập cá nhân của thành viên'
	),
	array(
		0 => 'Làm sao để tôi thay đổi thiết lập cá nhân của mình?',
		1 => 'Nếu bạn đã đăng ký làm thành viên, tất cả thiết lập cá nhân của bạn đều được lưu giữ trong cơ sở dữ liệu của hệ thống. Để thay đổi chúng, bạn hãy truy cập vào bảng điều khiển dành cho thành viên của mình. Liên kết này thường hiện ra ở đầu mỗi trang. Bảng điều khiển này cũng sẽ giúp bạn thay đổi tất cả thiết lập và thông tin cá nhân của mình.'
	),
	array(
		0 => 'Thời gian trên hệ thống chạy không chính xác!',
		1 => 'Nếu được thiết lập, thời gian có thể được hiển thị với một múi giờ khác múi giờ tại nơi bạn đang sống. Nếu rơi vào trường hợp này, bạn nên thay đổi lại múi giờ cho phù hợp trong bảng điều khiển dành cho thành viên của mình theo từng khu vực xác định, ví dụ như <em>London, Paris, New York, Sydney…</em> Bạn cũng cần lưu ý rằng thiết lập thay đổi lại múi giờ cũng như hầu hết những thiết lập cá nhân khác, chỉ dành cho những thành viên đã đăng ký. Vì thế, nếu bạn vẫn chưa đăng ký làm thành viên của chúng tôi thì đây là thời điểm thích hợp cho bạn thực hiện điều này!'
	),
	array(
		0 => 'Tôi đã thay đổi múi giờ nhưng thời gian vẫn chạy sai!',
		1 => 'Nếu bạn chắc chắn đã thiết lập múi giờ và giờ mùa hè/DST (Daylight Saving Time) chính xác mà thời gian vẫn chạy sai thì có thể giờ trên máy chủ đã chạy không chính xác. Người quản trị sẽ cần phải chỉnh sửa lại điều này nếu như bạn thông báo sớm cho họ biết.'
	),
	array(
		0 => 'Ngôn ngữ của tôi không có trong danh sách hỗ trợ!',
		1 => 'Có thể quản trị viên chưa cài đặt gói ngôn ngữ mà bạn dùng vào hệ thống hay đơn giản là chưa từng có ai phiên dịch hệ thống này sang ngôn ngữ của bạn. Hãy cố gắng yêu cầu người quản trị cài đặt gói ngôn ngữ của bạn vào hệ thống nếu nó có sẵn. Nếu chưa có, bạn có thể đề nghị cùng tham gia phiên dịch hệ thống sang ngôn ngữ của bạn. Bạn có thể tìm hiểu nhiều thông tin về các gói ngôn ngữ cho hệ thống này tại website của tổ chức phpBB có ở cuối trang.'
	),
	array(
		0 => 'Làm sao để hiển thị hình ảnh bên dưới tên thành viên của tôi?',
		1 => 'Có hai hình ảnh có thể được hiển thị bên dưới một tên thành viên trong phần xem bài viết. Tùy thuộc vào mỗi giao diện, hình đầu tiên có thể là hình ảnh đi kèm với xếp hạng hiện tại của bạn. Thông thường, chúng là những hình ngôi sao hay hình khối hiển thị tuỳ thuộc vào số lượng bài viết mà bạn đã gửi hay trạng thái, vị trí, chức vụ… của bạn trong hệ thống. Hình thứ hai, thường lớn hơn, được gọi là hình đại diện. Đây là những hình ảnh thể hiện cá tính và phong cách riêng của mỗi thành viên. Nếu người quản trị cho phép sử dụng hình đại diện, bạn có thể tự do thay đổi chúng và lựa chọn cách thức sử dụng phù hợp. Nếu bạn không thể sử dụng hình đại diện, bạn hãy liên hệ với người quản trị và hỏi họ lý do tại sao.'
	),
	array(
		0 => 'Xếp hạng thành viên là gì và làm sao tôi có thể thay đổi xếp hạng của mình?',
		1 => 'Xếp hạng thành viên, xuất hiện bên dưới tên thành viên của bạn, tượng trưng cho số lượng bài viết mà bạn đã gửi hoặc dùng để xác định một vài thành viên đặc biệt, ví dụ như điều hành viên và quản trị viên. Thông thường, bạn không thể thay đổi trực tiếp xếp hạng của mình ở bất cứ diễn đàn nào mà quản trị viên đã thiết lập cho bạn. Xin bạn đừng lạm dụng việc gửi nhiều bài viết vô ích và nhảm nhí để mong tăng xếp hạng thành viên của mình. Hầu hết mọi diễn đàn sẽ không khoan dung cho việc làm này và đơn giản là các quản trị viên hay điều hành viên chỉ cần hạ thấp số lượng bài viết của bạn xuống.'
	),
	array(
		0 => 'Khi tôi bấm vào liên kết Email của một thành viên, tôi được yêu cầu phải đăng nhập!',
		1 => 'Chỉ có những thành viên đã đăng ký mới được phép gửi Email đến các thành viên khác trong hệ thống từ công cụ gửi Email và chỉ khi người quản trị đã kích hoạt công cụ này. Điều này nhằm để ngăn cản những kẻ quấy phá ẩn danh dùng công cụ gửi Email của hệ thống để gây rối.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng gửi bài'
	),
	array(
		0 => 'Làm sao để tôi tạo chủ đề mới trong một chuyên mục?',
		1 => 'Để tạo một chủ đề mới trong chuyên mục, bạn hãy bấm vào nút tạo chủ đề mới trong trang xem chuyên mục hay trang xem chủ đề. Bạn có thể được yêu cầu phải đăng nhập trước khi gửi bài. Những chức năng của công cụ gửi bài mà bạn có thể sử dụng được liệt kê cuối mỗi trang xem chuyên mục hay trang xem chủ đề. Ví dụ như: <em>Bạn có thể tạo chủ đề mới trong chuyên mục này, Bạn có thể tham gia bình chọn trong chuyên mục này…</em>'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bài viết?',
		1 => 'Nếu bạn không phải là quản trị viên hay điều hành viên, bạn chỉ có thể sửa hay xoá những bài viết của chính mình mà thôi. Bạn có thể sửa một bài viết bằng cách bấm vào nút sửa bài trong bài viết tương ứng, thỉnh thoảng bạn có thể bị hạn chế thời gian sửa bài sau khi gửi bài viết. Nếu có một ai đó đã trả lời bài viết này, khi quay lại xem chủ đề, bạn sẽ thấy một dòng chữ bên dưới bài viết hiển thị tổng số lần mà bạn đã sửa cùng với ngày giờ sửa. Dòng chữ này chỉ xuất hiện nếu có một ai đó trả lời bài viết và nó sẽ không xuất hiện nếu như các quản trị viên hay điều hành viên sửa bài viết này. Có thể họ sẽ để lại một ghi chú nêu rõ lý do vì sao sửa bài viết của bạn theo quan điểm của họ. Bạn cũng cần lưu ý rằng những thành viên bình thường sẽ không được phép xoá một bài viết đã được trả lời dù rằng đó là bài viết của họ.'
	),
	array(
		0 => 'Làm sao để tôi đính kèm chữ ký cá nhân sau mỗi bài viết của mình?',
		1 => 'Để đính kèm chữ ký cá nhân sau mỗi bài viết của mình, trước tiên, bạn cần phải tạo chữ ký này trong bảng điều khiển dành cho thành viên của bạn. Sau khi tạo, bạn hãy đánh dấu vào ô lựa chọn <em>Đính kèm chữ ký cá nhân (Có thể thay đổi trong phần thiết lập cá nhân)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài để thêm vào chữ ký cá nhân của mình. Bạn cũng có thể thiết lập mặc định tự động chèn chữ ký cá nhân này đến tất cả bài viết của mình bằng cách chọn <samp>Đồng ý</samp> trong lựa chọn <em>Luôn đính kèm chữ ký cá nhân của tôi</em> trong phần thiết lập cá nhân của bạn. Cho dù đã chọn như thế, bạn vẫn có thể quyết định không đính kèm chữ ký này trong một số bài viết riêng lẻ bằng việc bỏ dấu chọn trong lựa chọn <em>Đính kèm chữ ký cá nhân (Chữ ký có thể thay đổi từ bảng điều khiển dành cho thành viên của bạn)</em> dưới phần soạn nội dung bài viết mỗi khi gửi bài sau này.'
	),
	array(
		0 => 'Làm sao để tôi tạo một bình chọn?',
		1 => 'Khi bạn đang tạo một chủ đề mới hoặc đang sửa bài viết đầu tiên của một chủ đề, nếu bạn được cấp phép tạo bình chọn, bạn sẽ nhìn thấy phần “Tạo bình chọn” bên dưới phần soạn thảo nội dung bài viết. Nếu bạn không nhìn thấy phần này thì có nghĩa là bạn không được cấp phép để tạo bình chọn. Bạn phải nhập tiêu đề cho bình chọn trong phần “Câu hỏi bình chọn” và ít nhất là hai đối tượng bình chọn với mỗi đối tượng xác định trên một dòng trong khung văn bản. Bạn cũng có thể thiếp lập tổng số đối tượng bình chọn mà thành viên có thể lựa chọn trong phần “Lựa chọn tối đa của mỗi thành viên”, giới hạn thời gian tham gia bình chọn (nhập vào số <strong>0</strong> cho bình chọn không giới hạn thời gian) và cho phép các thành viên có thể thay đổi lại lựa chọn của họ khi đã tham gia vào bình chọn rồi.'
	),
	array(
		0 => 'Tại sao tôi không thể thêm vào nhiều hơn nữa số lượng đối tượng bình chọn?',
		1 => 'Số lượng đối tượng bình chọn tối đa bạn có thể tạo được thiết lập bởi quản trị viên. Nếu bạn cảm thấy rằng bấy nhiêu đối tượng bình chọn đó vẫn chưa đủ cho bình chọn cần tạo của mình, bạn có thể liên hệ với người quản trị về việc này.'
	),
	array(
		0 => 'Làm sao để tôi sửa hay xoá một bình chọn?',
		1 => 'Giống như những bài viết, các bình chọn chỉ có thể được sửa bởi chính người tạo ra nó, điều hành viên hay quản trị viên. Để sửa một bình chọn, trước hết bạn hãy bấm vào nút sửa bài ứng với bài viết đầu tiên của chủ đề có bình chọn đi kèm muốn sửa. Nếu chưa có ai tham gia bình chọn, bạn có thể xoá bình chọn này hoặc sửa đổi bất kỳ đối tượng bình chọn nào. Tuy nhiên, nếu bình chọn đã có người tham gia rồi thì chỉ có điều hành viên hoặc quản trị viên mới có quyền sửa hay xoá nó. Điều này nhằm để ngăn cản một vài người muốn thay đổi tính khách quan của một bình chọn bằng cách thay đổi những đối tượng bình chọn đã được người khác bình chọn.'
	),
	array(
		0 => 'Tại sao tôi không thể truy cập vào một chuyên mục?',
		1 => 'Một vài chuyên mục có thể bị giới hạn chỉ dành cho một vài thành viên hay nhóm nhất định. Để có thể nhìn thấy chúng hiển thị, xem, gửi bài… bạn cần phải được thiết lập cấp phép đặc biệt. Vì thế, bạn hãy liên hệ với điều hành viên hay quản trị viên để yêu cầu họ cho phép bạn truy cập vào.'
	),
	array(
		0 => 'Tại sao tôi không thể đính kèm tập tin?',
		1 => 'Thiết lập cấp phép có thể đính kèm tập tin được chỉ định cho mỗi một chuyên mục, mỗi một nhóm hay cá nhân mỗi thành viên. Quản trị viên có thể đã không cho phép đính kèm tập tin trong chuyên mục mà bạn đang gửi bài hoặc có lẽ chỉ có một vài nhóm nhất định mới được phép đính kèm tập tin. Hãy liên hệ với người quản trị nếu bạn không chắc chắn lý do tại sao mình không thể đính kèm tập tin.'
	),
	array(
		0 => 'Tại sao tôi lại nhận được một cảnh cáo?',
		1 => 'Mỗi quản trị viên có những quy định riêng dành cho website của mình. Nếu bạn vi phạm một trong những nội quy của họ, bạn có thể sẽ nhận được một cảnh cáo. Bạn cần lưu ý rằng đây là quyết định của chính người quản trị tại diễn đàn mà bạn tham gia và tổ chức phpBB không có liên quan gì trong việc đưa ra những cảnh cáo này. Hãy liên hệ với người quản trị nếu bạn không chắc chắn lý do tại sao mình lại nhận được một cảnh cáo.'
	),
	array(
		0 => 'Làm sao tôi có thể báo cáo bài viết đến người điều hành?',
		1 => 'Nếu người quản trị cho phép bạn sử dụng chức năng này, hãy chuyển đến bài viết mà bạn muốn báo cáo và bạn sẽ nhìn thấy một nút bấm dành cho việc báo cáo bài viết. Bấm vào nút này, bạn sẽ được hướng dẫn từng bước để hoàn tất việc báo cáo bài viết của mình.'
	),
	array(
		0 => 'Nút “Lưu” trong phần gửi bài có tác dụng gì?',
		1 => 'Đây là chức năng cho phép bạn lưu lại những đoạn nội dung mà mình đang soạn dang dở để hoàn tất và gửi đi lúc khác. Để nạp lại những nội dung đã lưu này, bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình.'
	),
	array(
		0 => 'Tại sao bài viết của tôi cần phải được chấp nhận?',
		1 => 'Người quản trị có thể quyết định những chuyên mục nào khi có bài gửi mới cần phải được kiểm duyệt nội dung trước khi chấp nhận bài viết đó. Cũng có thể người quản trị đã đặt bạn vào một nhóm cần phải được xét duyệt nội dung bài viết trước khi gửi. Bạn hãy liên hệ với người quản trị để biết thêm thông tin.'
	),
	array(
		0 => 'Làm sao để tôi có thể đẩy chủ đề của mình lên trên danh sách chuyên mục?',
		1 => 'Bằng cách bấm vào liên kết “Đẩy chủ đề lên” khi bạn đang xem chủ đề đó, bạn có thể “đẩy” chủ đề đó lên đầu danh sách hiển thị trong chuyên mục tại trang đầu tiên. Tuy nhiên, nếu bạn không nhìn thấy liên kết này thì có nghĩa là chức năng đẩy chủ đề đã bị vô hiệu hoặc quãng thời gian giới hạn giữa hai lần “đẩy” chưa hết. Bạn cũng có thể “đẩy” chủ đề lên trên danh sách thật dễ dàng bằng việc trả lời chủ đề này. Tuy nhiên, hãy chắc chắn rằng nội quy của diễn đàn cho phép làm điều đó.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về định dạng bài viết và các loại chủ đề'
	),
	array(
		0 => 'BBCode là gì?',
		1 => 'BBCode là một dạng thức bổ sung đặc biệt của mã HTML, cho phép bạn điều khiển và định dạng tốt hơn những đối tượng liên quan trong một bài viết. Việc bạn có sử dụng BBCode được hay không là tuỳ vào quyết định của người quản trị. Bạn cũng có thể vô hiệu các thẻ BBCode với lựa chọn xuất hiện trong phần soạn bài viết. Bản thân BBCode tương tự gần giống như kiểu mẫu của HTML nhưng các thẻ lệnh được đóng mở bằng dấu [ và ] thay vì &lt; và &gt;. Để tìm hiểu nhiều thông tin hơn về BBCode, bạn hãy tham khảo tài liệu hướng dẫn sử dụng BBCode từ liên kết có trong trang gửi bài.'
	),
	array(
		0 => 'Tôi có thể sử dụng mã HTML được không?',
		1 => 'Câu trả lời là không. Bạn không thể sử dụng mã HTML trong diễn đàn cũng như bất cứ đoạn mã nào gửi trả kịch bản như ngôn ngữ HTML. Hầu hết những định dạng bài viết mà bạn muốn sử dụng bằng mã HTML đều có thể dễ dàng sử dụng thay thế bằng các thẻ BBCode tương ứng.'
	),
	array(
		0 => 'Biểu tượng vui là gì?',
		1 => 'Biểu tượng vui là những hình ảnh nhỏ dùng để biểu thị cảm xúc hiện tại của bạn với một mã tượng trưng riêng biệt, ví dụ như :) tượng trưng cho vui trong khi :( lại tượng trưng cho buồn. Bạn có thể xem toàn bộ biểu tượng vui được phép sử dụng bằng cách bấm vào liên kết <em>Xem tất cả biểu tượng vui</em> tại phần soạn bài viết. Việc bạn lạm dụng chèn quá nhiều biểu tượng vui trong bài viết sẽ làm cho bài viết đó ít người đọc đi và người điều hành có thể sẽ phải sửa lại chúng hay nghiêm khắc hơn là xoá bài viết đó đi. Người quản trị cũng có thể giới hạn số lượng hình biểu tượng vui mà bạn có thể sử dụng trong mỗi bài viết.'
	),
	array(
		0 => 'Tôi có thể gửi hình trong bài viết?',
		1 => 'Câu trả lời là có. Bạn có thể gửi hình ảnh vào trong bài viết của mình. Nếu người quản trị cho phép sử dụng chức năng đính kèm tập tin, bạn có thể tải ngay những hình ảnh này lên diễn đàn. Còn nếu không, bạn phải sử dụng hình ảnh liên kết đến từ một máy chủ lưu trữ khác có thể truy cập được, ví dụ như <code>http://www.example.com/my-picture.gif</code>. Bạn không thể sử dụng liên kết đến những hình ảnh được lưu trữ trong máy tính của mình nếu như nó không phải là một máy chủ có thể truy cập được. Bạn cũng không thể sử dụng liên kết đến những hình ảnh được lưu trữ yêu cầu phải xác thực mới có thể xem được, ví dụ như dịch vụ Hotmail, Yahoo! Mail… hay những website được bảo vệ bằng mật khẩu. Để hiển thị hình ảnh trong bài viết, bạn hãy sử dụng thẻ BBCode [img] trong phần soạn bài viết.'
	),
	array(
		0 => 'Thông báo chung là gì?',
		1 => 'Thông báo chung chứa những thông tin quan trọng và bạn nên xem qua chúng ngay khi có thể. Những thông báo chung luôn xuất hiện đầu trang trong tất cả các chuyên mục và bên trong bảng điều khiển dành cho thành viên của bạn. Thiết lập cấp phép liên quan đến thông báo chung được chỉ định bởi người quản trị.'
	),
	array(
		0 => 'Thông báo là gì?',
		1 => 'Thông báo thường chứa những thông tin quan trọng trong chuyên mục mà bạn đang xem và bạn nên xem qua chúng ngay khi có thể. Những thông báo luôn xuất hiện đầu mỗi trang của chuyên mục mà chúng được gửi lên. Giống như những thông báo chung, thiết lập cấp phép liên quan đến thông báo được chỉ định bởi người quản trị.'
	),
	array(
		0 => 'Chú ý là gì?',
		1 => 'Chú ý luôn xuất hiện sau các thông báo bên trong chuyên mục và chỉ hiển thị trong trang đầu tiên. Các chú ý cũng thường có một vài thông tin quan trọng vì thế bạn cũng nên đọc chúng ngay khi có thể. Giống như các thông báo, thiết lập cấp phép liên quan đến chú ý được chỉ định bởi người quản trị.'
	),
	array(
		0 => 'Chủ đề bị khoá là gì?',
		1 => 'Chủ đề bị khoá là chủ đề mà các thành viên không còn có thể trả lời được và bất kỳ bình chọn nào trong những chủ đề này cũng sẽ tự động kết thúc. Những chủ đề như thế có thể bị khóa vì nhiều nguyên nhân khác nhau và được thực hiện bởi điều hành viên hay quản trị viên. Bạn cũng có thể tự khóa chủ đề của chính mình tùy thuộc vào thiết lập cấp phép mà bạn được chỉ định bởi người quản trị.'
	),
	array(
		0 => 'Biểu tượng bài viết là gì?',
		1 => 'Biểu tượng bài viết là những hình ảnh mà người gửi bài đã chọn đi kèm với mỗi bài viết để nhấn mạnh nội dung của những bài viết này. Việc bạn có thể sử dụng biểu tượng bài viết khi gửi bài hay không tùy thuộc vào thiết lập cấp phép của người quản trị dành cho bạn.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về cấp bậc thành viên và nhóm'
	),
	array(
		0 => 'Quản trị viên là ai?',
		1 => 'Quản trị viên là những thành viên có quyền hạn cao nhất trong việc điều khiển toàn bộ mọi hoạt động của hệ thống. Những thành viên này có thể điều khiển tất cả các thành phần chức năng của hệ thống, bao gồm: thiết lập cấp phép, cấm thành viên, tạo nhóm hay các điều hành viên… tùy thuộc vào thiết lập cấp phép của người sáng lập dành cho các quản trị viên này. Họ cũng có đầy đủ quyền hạn của điều hành viên trong tất cả các chuyên mục và cũng tùy thuộc vào thiết lập cấp phép của người sáng lập.'
	),
	array(
		0 => 'Điều hành viên là ai?',
		1 => 'Điều hành viên là những cá nhân thành viên riêng lẻ hay nhóm gồm nhiều thành viên có nhiệm vụ quản lý thường xuyên hoạt động của các chuyên mục mỗi ngày. Họ có quyền sửa hay xoá các bài viết và khoá, mở khoá, di chuyển, xoá hay di chuyển các chủ đề trong chuyên mục mà họ quản lý. Thông thường, các quản trị viên có thể ngăn cản một vài thành viên cố ý gửi những bài viết vi phạm nội quy của diễn đàn hay câu bài, gửi những bài nhảm nhí, có nội dung thiếu văn hóa…'
	),
	array(
		0 => 'Nhóm là gì?',
		1 => 'Nhóm là tổ chức gồm nhiều thành viên nhằm phân chia cộng đồng thành nhiều khu vực quản lý khác nhau để các quản trị viên có thể làm việc dễ dàng với họ. Mỗi thành viên có thể tham gia vào nhiều nhóm khác nhau và mỗi nhóm có thể được chỉ định thiết lập cấp phép riêng biệt. Điều này tạo thuận lợi cho các quản trị viên có thể thay đổi thiết lập cấp phép cho nhiều thành viên chỉ một lần, ví dụ như thay đổi thiết lập cấp phép của điều hành viên hay cho phép những thành viên nào được truy cập vào một chuyên mục cá nhân.'
	),
	array(
		0 => 'Thông tin về nhóm nằm ở đâu và làm sao để tôi tham gia vào một nhóm?',
		1 => 'Bạn có thể xem thông tin của tất cả các nhóm bằng cách bấm vào liên kết “Nhóm” bên trong bảng điều khiển dành cho thành viên của bạn. Nếu bạn muốn tham gia vào một nhóm nào đó, hãy bấm vào nút yêu cầu thích hợp. Tuy nhiên, không phải tất cả các nhóm đều cho phép tự do tham gia vào. Một vài nhóm yêu cầu việc tham gia vào nhóm của bạn phải được chấp thuận bởi người lãnh đạo nhóm, một số khác thì đã cố định và thậm chí có một số nhóm ẩn cả tư cách thành viên đối với bạn. Nếu là nhóm tự do, bạn hãy tham gia bằng cách bấm vào nút yêu cầu thích hợp. Nếu nhóm yêu cầu việc tham gia của bạn phải được chấp thuận bởi người lãnh đạo nhóm, bạn hãy gửi yêu cầu tham gia cũng bằng cách bấm vào nút yêu cầu thích hợp. Người lãnh đạo nhóm sẽ cần phải chấp thuận yêu cầu tham gia của bạn và có thể sẽ hỏi bạn lý do vì sao bạn muốn tham gia vào nhóm của họ. Vì thế, xin bạn đừng quấy rầy người lãnh đạo nhóm nếu họ từ chối yêu cầu tham gia của bạn bởi vì họ có lý do của riêng mình.'
	),
	array(
		0 => 'Làm sao để tôi trở thành người lãnh đạo của một nhóm?',
		1 => 'Người lãnh đạo của nhóm thông thường được chỉ định khi nhóm này được tạo ra ban đầu bởi quản trị viên. Nếu bạn muốn tạo ra một nhóm mới do mình lãnh đạo, việc đầu tiên bạn làm là hãy liên hệ với người quản trị bằng cách gửi tin nhắn cá nhân.',
	),
	array(
		0 => 'Tại sao một vài nhóm xuất hiện với màu sắc khác nhau?',
		1 => 'Điều này xảy ra bởi vì người quản trị đã chỉ định một màu sắc khác nhau cho tất cả các thành viên trong mỗi nhóm để mọi người dễ dàng biết được những thành viên nào thuộc nhóm này.'
	),
	array(
		0 => '“Nhóm mặc định” là gì?',
		1 => 'Nếu bạn là thành viên của nhiều nhóm khác nhau, nhóm mặc định của bạn sẽ được sử dụng để quyết định màu nhóm và xếp hạng của nhóm nào được hiển thị như thông tin cá nhân mặc định của bạn. Người quản trị có thể chỉ định thiết lập cấp phép cho bạn được quyền thay đổi nhóm mặc định của mình từ bảng điều khiển dành cho thành viên của bạn.'
	),
	array(
		0 => 'Liên kết “Ban điều hành” là gì?',
		1 => 'Trang này cung cấp cho bạn một danh sách về những người điều hành diễn đàn, bao gồm cả các quản trị viên và điều hành viên với những thông tin chi tiết khác về các chuyên mục mà họ quản lý.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về tin nhắn'
	),
	array(
		0 => 'Tôi không thể gửi tin nhắn được!',
		1 => 'Có ba nguyên nhân cho việc này: Bạn chưa đăng ký làm thành viên hoặc đã là thành viên nhưng chưa đăng nhập vào hệ thống, quản trị viên đã tắt chức năng gửi tin nhắn trong hệ thống hoặc đã không cho phép bạn sử dụng chức năng gửi tin nhắn trong hệ thống. Bạn có thể liên hệ với người quản trị để biết thêm thông tin chi tiết.'
	),
	array(
		0 => 'Tôi nhận được những tin nhắn không muốn!',
		1 => 'Bạn có thể cấm một thành viên gửi tin nhắn đến mình bằng cách sử dụng thiết lập nội quy tin nhắn trong bảng điều khiển dành cho thành viên. Nếu bạn nhận được những tin nhắn lừa đảo, xâm phạm tính riêng tư, xúc phạm đến danh dự của mình từ một thành viên nào đó, bạn hãy thông báo ngay cho người quản trị biết về điều này bởi vì họ có quyền hạn ngăn cản một thành viên có thể gửi tin nhắn.'
	),
	array(
		0 => 'Tài khoản Email của tôi toàn nhận được thư rác từ một ai đó trong hệ thống!',
		1 => 'Chúng tôi thật sự xin lỗi bạn khi nghe điều này. Chức năng gửi Email từ hệ thống này đã cố gắng bảo vệ và kiểm tra những thành viên khi gửi Email giống như khi họ gửi bài. Bạn nên gửi Email đến người quản trị với bản sao toàn bộ của Email quấy phá mà bạn nhận được. Điều quan trọng là nhớ đính kèm cả tiêu đề Email có chứa thông tin chi tiết về thành viên đã gửi Email cho bạn. Quản trị viên sẽ có hành động cụ thể để xử lý việc này.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về thiết lập quan hệ bạn thân và kẻ thù'
	),
	array(
		0 => 'Danh sách bạn thân và danh sách kẻ thù là gì?',
		1 => 'Bạn có thể sử dụng những danh sách này để tổ chức quản lý các thành viên khác trong hệ thống. Những thành viên được thêm vào trong danh sách bạn thân sẽ được liệt kê trong bảng điều khiển dành cho thành viên của bạn để bạn bạn có thể biết nhanh trạng thái trực tuyến của họ và gửi tin nhắn cho họ. Nếu giao diện hỗ trợ, các bài viết từ những thành viên này đều được tô sáng nổi bật. Nếu bạn thêm một thành viên vào danh sách kẻ thù của mình thì bất kỳ bài viết nào của họ theo mặc định trong hệ thống sẽ ẩn đi đối với bạn.'
	),
	array(
		0 => 'Làm thế nào tôi có thể thêm/gỡ bỏ các thành viên trong danh sách bạn thân hay kẻ thù của mình?',
		1 => 'Bạn có thể thêm các thành viên vào danh sách của mình theo hai cách. Trong mỗi trang thông tin cá nhân của thành viên đó, có một liên kết để bạn thêm họ vào danh sách bạn thân hay kẻ thù của mình. Ngoài ra, trong bảng điều khiển dành cho thành viên của mình, bạn có thể thêm trực tiếp các thành viên bằng cách nhập vào tên thành viên của họ. Bạn cũng có thể gỡ bỏ các thành viên ra khỏi danh sách của mình cũng từ trang ở trên.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng tìm kiếm'
	),
	array(
		0 => 'Làm thế nào tôi có thể tìm kiếm một hay nhiều chuyên mục?',
		1 => 'Nhập vào từ khóa bạn cần tìm trong khung tìm kiếm xuất hiện trên trang chủ, trang xem chuyên mục hoặc trang xem chủ đề. Để sử dụng chức năng tìm kiếm nâng cao, bạn hãy bấm vào liên kết “Tìm kiếm nâng cao” luôn xuất hiện đầu mỗi trang trong hệ thống. Cách thức truy cập vào công cụ tìm kiếm còn có thể phụ thuộc vào giao diện bạn đang sử dụng.'
	),
	array(
		0 => 'Tại sao tìm kiếm của tôi không có kết quả?',
		1 => 'Việc tìm kiếm của bạn quá chung chung và đính kèm nhiều điều kiện tìm kiếm phổ biến nên không được lập chỉ mục tìm kiếm bởi hệ thống phpBB. Bạn hãy vui lòng xác định nhiều tìm kiện tìm kiếm và sử dụng những tùy chọn có thể trong trang tìm kiếm nâng cao.'
	),
	array(
		0 => 'Tại sao tìm kiếm của tôi lại hiện ra một trang trắng?',
		1 => 'Việc tìm kiếm của bạn có quá nhiều kết quả dẫn đến hao tổn tài nguyên của máy chủ. Bạn hãy vui lòng sử dụng chức năng “Tìm kiếm nâng cao”, xác định càng nhiều điều kiện tìm kiếm và những chuyên mục nào thực sự cần tìm bên trong càng tốt.'
	),
	array(
		0 => 'Làm thế nào tôi có thể tìm kiếm các thành viên?',
		1 => 'Bạn hãy chuyển đến trang “Thành viên” và bấm vào liên kết “Tìm một thành viên”.'
	),
	array(
		0 => 'Làm thế nào tôi có thể xem lại các chủ đề và bài viết của mình?',
		1 => 'Bạn có thể xem lại các bài viết của chính mình bằng cách bấm vào liên kết “Tìm tất cả bài viết của thành viên này” trong bảng điều khiển dành cho thành viên hoặc thông qua trang thông tin cá nhân của chính mình. Để tìm lại các chủ đề của mình, bạn hãy sử dụng trang tìm kiếm nâng cao của hệ thống và điền vào các điều kiện tìm kiếm thích hợp.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về chức năng đánh dấu và theo dõi chủ đề'
	),
	array(
		0 => 'Theo dõi chủ đề và đánh dấu chủ đề khác nhau như thế nào?',
		1 => 'Chức năng đánh dấu chủ đề trong hệ thống phpBB cũng giống như việc bạn đánh dấu các trang Web trong trình duyệt của mình. Bạn không nhất thiết phải được thông báo mỗi khi chủ đề này được cập nhật nhưng bạn có thể quay lại xem chủ đề này bất cứ khi nào bạn muốn. Ngược lại, chức năng theo dõi chủ đề sẽ thông báo cho bạn biết mỗi khi chủ đề hay chuyên mục mà bạn chọn theo dõi được cập nhật trong diễn đàn thông qua cách thông báo mà bạn đã thiết lập hay của hệ thống.'
	),
	array(
		0 => 'Làm thế nào tôi có thể theo dõi các chuyên mục hay chủ đề xác định?',
		1 => 'Để theo dõi một chuyên mục, bạn hãy bấm vào liên kết “Theo dõi chuyên mục” nằm bên trên chuyên mục đó. Để theo dõi một chủ đề, trong khi trả lời chủ đề đó, bạn hãy đánh dấu chọn vào lựa chọn thông báo bằng Email khi có bài viết trả lời hoặc bạn có thể bấm vào liên kết “Theo dõi chủ đề” nằm trong chính chủ đề.'
	),
	array(
		0 => 'Làm thế nào tôi có thể ngưng việc theo dõi của mình?',
		1 => 'Để ngưng việc theo dõi này, bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình và bấm vào liên kết đến bảng theo dõi của bạn.'
	),
	array(
		0 => '--',
		1 => 'Những câu hỏi về tập tin đính kèm'
	),
	array(
		0 => 'Những loại tập tin đính kèm nào tôi được phép sử dụng trong diễn đàn?',
		1 => 'Mỗi quản trị viên trong diễn đàn có thể cho phép hoặc cấm sử dụng một loại tập tin đính kèm nào đó. Nếu bạn không chắc chắn về những loại tập tin đính kèm nào được phép sử dụng, hãy liên hệ với người quản trị để được giúp đỡ.'
	),
	array(
		0 => 'Làm thế nào tôi có thể xem lại tất cả tập tin đính kèm của mình?',
		1 => 'Để tìm danh sách các tập tin mà bạn đã đính kèm, bạn hãy chuyển đến bảng điều khiển dành cho thành viên của mình và bấm vào liên kết trong phần tập tin đính kèm.'
	),	
	array(
		0 => '--',
		1 => 'Những câu hỏi về hệ thống phpBB'
	),
	array(
		0 => 'Ai đã viết và phát triển hệ thống này?',
		1 => 'Chương trình này với những chức năng ban đầu của nó đã được phát triển, phát hành và thuộc bản quyền của <a href="http://www.phpbb.com/">tổ chức phpBB</a>. Nó được phát hành dưới bản quyền của <em>GNU General Public License</em> và phân phối hoàn toàn miễn phí. Bạn hãy ghé thăm website chính của chúng tôi để tìm hiểu thêm thông tin về phpBB.'
	),
	array(
		0 => 'Tại sao hệ thống không có những chức năng khác?',
		1 => 'Chương trình này được phát triển và thuộc bản quyền của <em>tổ chức phpBB</em>. Nếu bạn cảm thấy một chức năng mới cần được thêm vào chương trình này, hãy ghé thăm website phpBB.com của chúng tôi và xem ý kiến đánh giá của <em>tổ chức phpBB</em>. Xin đừng gửi bài yêu cầu những chức năng mới trong diễn đàn của phpBB.com bởi vì chỉ có những thành viên của phpBB trong <em>SourceForge</em> mới có nhiệm vụ phát triển những chức năng mới. Hãy đọc qua các chuyên mục trong diễn đàn để xem ý kiến của họ, dù cho thế nào chăng nữa chúng tôi cũng cần phải quyết định thật kỹ càng về những chức năng cần thiết phải làm cho chương trình này.'
	),
	array(
		0 => 'Tôi phải liên hệ với ai về việc lạm dụng và vi phạm pháp luật liên quan đến website này?',
		1 => 'Bất kỳ người quản trị nào được liệt kê trong trang “Ban điều hành” đều là người thích hợp cho bạn cần liên hệ hay gửi các thắc mắc của mình. Nếu như việc liên hệ này không có phản hồi nào, bạn nên liên hệ với người quản lý tên miền này bằng cách thực hiện <a href="http://www.google.com/search?q=whois">tra cứu trên miền</a> hoặc nếu website này đang chạy trên một dịch vụ lưu trữ Web miễn phí như Yahoo!, free.fr, f2s.com… thì bạn hãy thử liên hệ với người quản lý hay bộ phận giải quyết các vi phạm của dịch vụ đó. Bạn cần lưu ý rằng <em>tổ chức phpBB</em> hoàn toàn <strong>không liên quan và không chịu trách nhiệm</strong> đến bất kỳ vấn đề nào xảy ra trong website này ở bất kỳ đâu và với bất kỳ ai sử dụng chương trình này. Sẽ hoàn toàn vô nghĩa nếu bạn tìm cách liên hệ với <em>tổ chức phpBB</em> về các vấn đề liên quan đến pháp luật, các trách nhiệm pháp lý, những bài viết nói xấu lẫn nhau… nếu nó <strong>không liên quan trực tiếp</strong> đến website phpBB.com hoặc những chương trình riêng biệt của chính phpBB. Nếu bạn gửi Email cho <em>tổ chức phpBB</em> về <strong>bất kỳ vấn đề nào phát sinh từ bên thứ ba</strong> trong việc sử dụng chương trình này của người dùng cuối thì có thể bạn sẽ nhận được một hồi âm ngắn gọn hoặc không có sự phản hồi nào.'
	)
);

?>