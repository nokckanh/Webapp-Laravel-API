@extends('flatform')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/trangchu.css') }}">
	<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.min.css" >
	<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.css" >
@endsection

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/cal1.png" alt="First slide">
				<div class="carousel-caption  d-md-block">
    				<h5>Chất lượng</h5>
    				<p>Các loại xe giường nằm đời mới</p>
  				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/cal2.jpg" alt="Second slide">
				<div class="carousel-caption  d-md-block">
    				<h5>Chuyên nghiệp</h5>
    				<p>Đội ngũ nhân viên chuyên nghiệp</p>
  				</div>
			</div>
			<div class="carousel-item">
			    <img class="d-block w-100" src="img/cal3.jpg" alt="Third slide">
				<div class="carousel-caption  d-md-block">
    				<h5>Đảm bảo</h5>
    				<p>Úy tín - tin tưởng - an toàn</p>
  				</div>
			</div>
		</div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="search container-fluid">
		<div class="container">
			<div class="row">
				<div class="header_title col-12">
					<div class="title"></div>
					<span>VÉ XE - CHUYẾN ĐI</span>
				</div>
	
				<form action="{{ route('timkiem') }}" method="GET">
					<div class="form-row">
						<div class="form-group col-md-12 col-lg-4 ">
      						<div class="row">
								<div class="input-group col-9 ">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
								</div>
								<input id="Placefrom" class="form-control" type="text" name="Placefrom"  placeholder="Gõ vào nơi đi"  >
						 	</div>
							<div class="col-3">
								<span class="spanchange"><i class="fas fa-exchange-alt"></i></span>
							</div>
							</div>
						</div>
						<div class="form-group col-md-12 col-lg-3">
						  <div class="input-group mb-2">
							<div class="input-group-prepend">
							  <div class="input-group-text"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>	</div>
							</div>
							<input type="text" class="form-control" id="Placeto" name="Placeto" placeholder="Gõ vào nơi đến" >
						  </div>
						</div>
						<div class="form-group col-md-12 col-lg-3">
						  <div class="input-group mb-2 ">
							<div class="input-group-prepend">
							  <div class="input-group-text"><i class="fas fa-calendar-alt" aria-hidden="true"></i></div>
							</div>
							<input type="date" class="form-control"  name="day"  placeholder="Ngày đi" required>
						  </div>
						</div>
						<div class="form-group col-md-12 col-lg-2">
							<button type="submit" class="btn btn-primary btn-sm">
							Tìm kiếm
							</button>
						</div>
					</div>
				</form>	
			</div>
		</div>	
	</div>
	<div class="why container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="why-header">
						<h4>Tại sao chọn hãng xe Vương Chi</h4>
					</div>
					<hr class="light-25">
				</div>
				<div class="flip col-lg-4 col-sm-6 col-xs-12 ">
					<div class="flip-box">
					  <div class="flip-box-inner">
						<div class="flip-box-front">
							<div class="container-flip">
								<div class="align text-center" >
								<div class="circle">
									<i class="far fa-handshake"></i>
								</div>
							</div>
						  <h5>Cam kết chất lượng</h5>
							</div>
						</div>
						<div class="flip-box-back">
						 	<div class="container-back">
								<h5>Cam kết chất lượng</h5>
								<div>
									<p>Đảm bảo cam kết chất lượng dịch vụ trên hành trình cho quý khách hàng</p>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
				<div class="flip col-lg-4 col-sm-6 col-xs-6 ">
					<div class="flip-box">
					  <div class="flip-box-inner">
						<div class="flip-box-front">
							<div class="container-flip">
								<div class="align text-center" >
								<div class="circle">
									<i class="fas fa-bus"></i>
								</div>
							</div>
						  <h5>Dòng xe đời mới</h5>
							</div>
						</div>
						<div class="flip-box-back">
						 	<div class="container-back">
								<h5>Dòng xe đời mới</h5>
								<div>
									<p>Chúng tôi lun cải tiến chọn lựa những gì tốt nhất cho quý khách</p>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
				<div class="flip col-lg-4 col-sm-6 col-xs-6 ">
					<div class="flip-box">
					  <div class="flip-box-inner">
						<div class="flip-box-front">
							<div class="container-flip">
								<div class="align text-center" >
								<div class="circle">
									<i class="fas fa-link"></i>
								</div>
							</div>
						  <h5>Liên kết doanh nghiệp</h5>
							</div>
						</div>
						<div class="flip-box-back">
						 	<div class="container-back">
								<h5>Liên kết doanh nghiệp</h5>
								<div>
									<p>Liên doanh với nhiều hãng vận chuyển bán vé công nghệ ..</p>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Lv container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="why-header">
						<h4>Lĩnh vực hoạt động</h4>
					</div>
					<hr class="light-25">
				</div>
				<div class="row text-center">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<i class="fas fa-running"></i>
						<h5>Vận chuyển khách</h5>
						<p>Tất cả các ngày trong tuần chúng tôi phục vụ các chuyến đi .Xuất phát từ TP Buôn Ma thuột đến Hà nội và có thể đốn quý khách hàng trên cùng 1 tuyến và ngược lại.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<i class="fas fa-suitcase"></i>
						<h5>Vận chuyển hàng hóa</h5>
						<p >Tất cả các ngày trong tuần chúng tôi phục vụ vận chuyển hàng hóa các loại trên tuyến Bắc-Nam từ TP Buôn Ma Thuột đến Hà Nội và ngược lại</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<i class="fas fa-file-contract"></i>
						<h5>Chạy hợp đồng</h5>
						<p>Chung tôi cung cấp dịch vụ chạy hợp đồng ngắn hạn cho các đoàn thể dịch nghiệp có nhu cầu đi xa</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="New container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sx-12 col-md-4">
					<div class="box-title">
						<h5 class="new-sub">
							Tin tức nhà xe
						</h5>
					</div>
					<div class="new-list">
						<div class="media-body">
							<div class="media">
								<h6><a href="#">Xe chất lượng cao Tuyến Buôn Ma Thuột - Hà Nội</a></h6>
							</div>
							<div class="text">
								<span>Vương Chi là cái tên nhà xe khá quen thuộc của người dân Buôn Ma Thuột với các dòng xe giường nằm cao cấp</span>
							</div>
						</div>
						<div class="media-body">
							<div class="media">
								<h6><a href="#">Tin mới từ Nhà xe đến quý Khách Hàng</a></h6>
							</div>
							<div class="text">
								<span>Nhằm đáp ứng thêm cho các quý khách hàng, nên Nhà xe sẽ tăng cường thêm chuyến hành trình bắt đầu từ 10h BMT - Hà Nội, Hà Nội - BMT và 10h45 BMT - Sài gòn</span>
							</div>
						</div>
						<div class="media-body">
							<div class="media">
								<h6><a href="#">Bộ quà tặng miễn phí khi trải nghiệm xe nhà</a></h6>
							</div>
							<div class="text">
								<span>Bộ quà tặng bao gồm thức ăn, khăn, nước uống và một túi xách dành cho hành khách là hoàn toàn miễn phí...</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-md-4">
					<div class="box-title">
						<h5 class="new-sub">
							Khách hàng nói về chúng tôi
						</h5>
					</div>
					<div class="new-list">
						<div class="media-body">
							<div class="media">
								<h6 class="KH">Ngân huỳnh ( 097 6 151 079)</h6>
							</div>
							<div class="text">
								<span>Dịch vụ ổn, chăm sóc khách hàng rất tốt, sẽ quay lại nếu có dịp</span>
							</div>
						</div>
						<div class="media-body">
							<div class="media">
								<h6 class="KH">Vũ Thanh Minh ( 093 821 777 1)</h6>
							</div>
							<div class="text">
								<span>Website giao diện khá dễ nhìn, chức năng rất tiện cho người dùng nhưng chưa có p...</span>
							</div>
						</div>
						<div class="media-body">
							<div class="media">
								<h6 class="KH">Nguyễn Vũ Thế Phong ( 09 35 010 933 )</h6>
							</div>
							<div class="text">
								<span>Nhiều thông tin du lịch khá là bổ ích, mong các bạn tiếp tục cập nhật nhiều hơn</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-md-4">
					<div class="box-title">
						<h5 class="new-sub">
							Câu hỏi thường gặp
						</h5>
					</div>
					<div class="new-list">
						<div class="media-body">
							<div class="media">
								<h6 class="KH">Tôi là khách quen của công ty, xuất vé luôn cho tôi, mai tôi thanh toán!</h6>
							</div>
							<div class="text">
								<span>- Xin lỗi anh/chị, bên em không được phép xuất vé khi chưa nhận được tiền của khách, nếu em xuất trước sẽ bị công ty phạt về số tiền vé của anh/chị, anh/chị thông cảm và vui lòng thanh toán trước khi vé bị hủy giúp em</span>
							</div>
						</div>
						<div class="media-body">
							<div class="media">
								<h6 class="KH">Mua vé khứ hồi có được giảm giá không?</h6>
							</div>
							<div class="text">
								<span>- Khi mua vé khứ hồi cho các chuyến xe, tất cả các hãng xe đều không có chính sách này, giá vé tính theo từng tuyến đường, vì vậy anh/chị nên chọn những chuyến xe có giá hợp lý nhất để mua, có thể chiều đi và về ko cùng 1 hãng xe.</span>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="dki container-fluid" id="tuvan">
		<div class="box-dki container">
			<h3>Đăng kí đặt vé và tư vấn từ nhà xe</h3>
			<h2>Vương chi</h2>
			<div class="host">
				<p>Đặt vé ngay để nhận ghế tốt - Hostline : <b>0917058877</b></p>
			</div>
			<form action="#" method="post">
				<div class="form-row">
					<div class="form-group col-sm-12 col-md-3">
						<input name="name" type="text" class="form-control" placeholder="Họ tên" height="45px">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<input name="sdt" type="text" class="form-control" placeholder="Số điện thoại">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<input name="email" type="email" class="form-control" placeholder="Địa chỉ Mail">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<button type="submit" class="btn btn-warning btn-block btn-sm">Gửi</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
@endsection
@section('js')
		<script type="text/javascript" src="js/JSC/jquery-ui/external/jquery/jquery.js"></script>
		<script type="text/javascript" src="js/JSC/jquery-ui/jquery-ui.js"></script>
		<script type="text/javascript" src="js/JSC/jquery-ui-bootstrap-jquery-ui-bootstrap-71f2e47/assets/js/google-code-prettify/prettify.js"></script>
		<script type="text/javascript" src="{{ asset('js/trangchu.js') }}"></script>
@endsection
