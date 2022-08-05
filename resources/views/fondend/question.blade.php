@extends('flatform')

@section('title')
Câu hỏi thường gặp
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/question.css">
@endsection

@section('content')
<header class="fancy">
	<div class="container head">
		<div class="title">
			<h3>
				<span>Giới thiệu về Nhà xe</span>
			</h3>
		</div>
		<ol class="anime">
			<li class="Home">
				<a href="#">Home</a>
			</li>
			<li class="seperate">Câu hỏi thường gặp</li>
		</ol>
	</div>
</header>

<div class="main container-fluid">
	<div class="container">
		<div class="content-ques">
			<div class="title-main">
				<h4>Câu hỏi thường gặp</h4>
			</div>
			<section class="box-ques">
				<div class="content-sub box-title">
					<h5 class="new-sub">
						Câu hỏi về nhà xe
					</h5>
				</div>
				<hr class="light-100">
				<h6>Tôi là khách quen của công ty, xuất vé luôn cho tôi, mai tôi thanh toán!</h6>
				<div class="box-main">
					<span>
						- Xin lỗi anh/chị, bên em không được phép xuất vé khi chưa nhận được tiền của khách, nếu em xuất trước sẽ bị công ty phạt về số tiền vé của anh/chị, anh/chị thông cảm và vui lòng thanh toán trước khi vé bị hủy giúp em. 
					</span>
				</div>
				<h6>Tại sao tôi gọi đến những số hotline lúc nào cũng bận hoặc không nghe máy là sao?</h6>
				<div class="box-main">
					<span>
						- Em rất xin lỗi anh/chị vì sự bất tiện này ạ. có thể tại thời điểm a/c gọi nhân viên công ty bên e các bạn không có đang làm việc tại văn phòng hoặc đang tiếp khách tại vp, rất mong a/c thông cảm và bỏ qua sơ suất này của bên em. Bên em sẽ kiểm tra lại việc này và cố gắng khắc phục trong thời gian sớm nhất.
					</span>
				</div>
				<h6>Tại sao trên web chị kiểm tra vẫn còn giá 180.000 mà em lại bảo giá thấp nhất 220.000 ?</h6>
				<div class="box-main">
					<span>
						- Dạ, giá vé trên website bên em được cập nhật liên tục, và thời điểm hiện tại, e kiểm tra giá vé cho hành trình của mình thì lại không còn giá vé đó nữa rồi anh/chị ạ. Anh/ chị vui lòng quay lại trang chủ, làm lại các thao tác giúp em để tham khảo và cập nhật giá vé mới nhất giúp em với ạ!
					</span>
				</div>
			</section>
			<section class="box-ques">
				<div class="content-sub box-title">
					<h5 class="new-sub">
						Tư vấn về vé
					</h5>
				</div>
				<hr class="light-100">
				<h6>Hành khách muốn đặt hai ghế được không?</h6>
				<div class="box-main">
					<span>
						- Được, đặt mua và thanh toán tiền vé cho 2 ghế trên chuyến , và tên hành khách thứ 2 sẽ có ghi chú thêm EXST để nhận biết chỗ ngồi mua thêm 
					</span>
				</div>
				<h6>Làm thế nào để phân biệt được vé thật, vé giả khi tôi đã đặt vé xong?</h6>
				<div class="box-main">
					<span>
						- Khi anh/chị đặt vé xong đã có mã đặt chỗ anh/chị có thể gọi trực tiếp lên hãng để check lại thông tin vé của anh/chị. SDT :0914091577
					</span>
				</div>
				<h6>Mua vé khứ hồi có được giảm giá không?</h6>
				<div class="box-main">
					<span>
						- Khi mua vé khứ hồi cho các chuyến xe, tất cả các hãng xe đều không có chính sách này, giá vé tính theo từng tuyến đường, vì vậy anh/chị nên chọn những chuyến xe có giá hợp lý nhất để mua, có thể chiều đi và về ko cùng 1 hãng xe.
					</span>
				</div>
				<h6>Tôi bị mất vé, tôi phải xử lý như thế nào?</h6>
				<div class="box-main">
					<span>
						- Mất vé là trường hợp rủi ro không ai muốn. Nhưng hiện nay vé được gửi qua nhiều hình thức như vé giấy, gửi qua mã code, email và sms nên xử lý vấn đề này không khó. Nếu bị mất vé giấy thì còn mã code, sms… Còn nếu mất cả, bạn cần thông báo cho nơi đặt mua về sự cố mất vé, đồng thời cung cấp cho họ số vé bị mất, tên người bay, số điện thoại, email, ngày đặt vé họ sẽ cấp lại cho bạn mã code vé. Nếu bạn mua vé điện tử thì không cần lo lắng.
					</span>
				</div>
				<h6>Khi bị thất lạc hành lý, tôi phải làm gì?</h6>
				<div class="box-main">
					<span>
						- Khi bị thất lạc hành lý, anh chị có thể hỏi trực tiếp nhân viên chuyên chở hoặc liên hệ trực tiếp VươngChi để được hỗ trợ ạ!
					</span>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection
@section('js')
	
@endsection