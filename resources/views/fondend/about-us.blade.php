@extends('flatform')
@section('title')
	Về chúng tôi
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="js/JSC/slick-master/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="js/JSC/slick-master/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="  {{ asset('css/aboutus.css') }}">
	<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.min.css" >
	<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.css" >
	
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
				<li class="seperate">Giới thiệu về nhà xe</li>
			</ol>
		</div>
	</header>
	<div class="purpose container-fluid">
		<div class="container-purpose">
			<div class="content-sub box-title">
				<h5 class="new-sub">
					Chúng tôi là ai ?
				</h5>
			</div>
			<div class="content-sub">
				<h6>Nhà xe Vương Chi là chuỗi hệ thống xe giường nằm cao cấp đi tuyến Bắc Nam thuộc công ty giao thông vận tải Cao Nguyên</h6>
			</div>
			<div class="row">
				<div class="col-md-6 col-sx-12">
					<div class="content-sub box-title">
						<h5 class="new-sub">
							Trách nhiệm của chúng tôi
						</h5>
					</div>
					<div class="container">
						<div class="content-TN">
							<ul>
							  <li ><strong>Thái độ làm việc :</strong> Chúng tôi luôn thực hiện những thực cam kết thái độ làm việc Trung thực - Uy tín - Trách nhiệm đối với quý khách hàng đảm bảo chuyến đi của quý khách được thoái mái nhất 
							  </li>
							  <li ><strong>Nhân viên dày dặn kinh nghiệm</strong>:Các tài xế nhân viên được tuyển chọn và đào tạo bài bản có kiến thực chuyên môn cao và tinh thần trách nhiệm cao trong công việc .Có khả năng chạy các tuyến đường dài giúp quý khách có 1 chuyến đi thoái mái và thân thiện
							  </li>
							  <li ><strong>Phục vụ tận tình</strong>:Nhà xe ra đời từ những mong muốn chân tình của hành khách về những chuyến đi đường dài thoải mái và thân thiện. Đến với nhà xe Vương Chi, bạn sẽ được tận hưởng cảm giác như ngồi trên chính chiếc xe riêng của mình.Bạn sẽ được phục vụ nước uống, khăn lạnh, thức ăn nhẹ miễn phí và nhận được sự quan tâm tận tình từ nhân viên xe  </li>
							</ul> 
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sx-12">
					<div class="container">
						<div>
							<figure class="img-fluid">
								<div class="reponsi-img">
									<img src="img/kynang.jpg" alt="">
								</div>
							</figure>
						</div>
						<div class="progressbars">
							<div class="progressbar">
								<div class="progressbar-title">
									An toàn
								</div>
								<div class="ui-progressbar" id="at"></div>
							</div>
							<div class="progressbar">
								<div class="progressbar-title">
									Tiện nghi
								</div>
								<div class="ui-progressbar" id="tt"></div>
							</div>
							<div class="progressbar">
								<div class="progressbar-title">
									Sạch sẽ
								</div>
								<div class="ui-progressbar" id="ss"></div>
							</div>
							<div class="progressbar">
								<div class="progressbar-title ">
									Tin cậy
								</div>
								<div class="ui-progressbar" id="tc"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="customer container-fluid">
		<div class="title-customer text-center">
			<h4> Đánh giá của khách hàng</h4>
			<hr class="light-25">
		</div>
		
		<section class="center slider">
		<div>
			<div>
			  <img src="http://placehold.it/350x300?text=1" alt="">
			</div>
			<div class="text-center">
				<h6>Ngân huỳnh</h6>
				<p>0976 151 079</p>
			</div>
			<div><span>Dịch vụ ổn, chăm sóc khách hàng rất tốt , tôi sẽ quay lại nhà xe Vương Chi nếu có dịp</span></div>
		</div>
		<div>
			<div>
			  <img src="http://placehold.it/350x300?text=2" alt="">
			</div>
			<div class="text-center">
				<h6>Vũ Thanh Minh</h6>
				<p>0938 217 771</p>
			</div>
			<div><span>Website giao diện khá dễ nhìn, chức năng rất tiện cho người dùng xem lịch , báo vé</span></div>
		</div>
		<div>
			<div>
			  <img src="http://placehold.it/350x300?text=3" alt="">
			</div>
			<div class="text-center">
				<h6>Nguyễn Thế Phong</h6>
				<p>0935 010 933</p>
			</div>
			<div><span>Dịch vụ ổn, chăm sóc khách hàng rất tốt, sẽ quay lại nếu có dịp</span></div>
		</div>
		<div>
			<div>
			  <img src="http://placehold.it/350x300?text=4" alt="">
			</div>
			<div class="text-center">
				<h6>Ngân huỳnh</h6>
				<p>0976 151 079</p>
			</div>
			<div><span>Nhiều thông tin du lịch khá là bổ ích, mong các bạn tiếp tục cập nhật nhiều hơn</span></div>
		</div> 
    </section>
@endsection
@section('js')
	
	<script type="text/javascript" src="js/JSC/jquery-ui/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="js/JSC/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/JSC/jquery-ui/jquery-ui.js"></script>
	<script src="js/JSC/slick-master/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="{{ asset('js/aboutus.js') }}"></script>
@endsection