@extends('flatform')
@section('title')
Xe khách liên tỉnh
@endsection

@section('css')


<link rel="stylesheet" type="text/css" href="  {{ asset('css/trancer.css') }}">
<link rel="stylesheet" type="text/css" href="../js/JSC/jquery-ui/jquery-ui.css" >
<link rel="stylesheet" type="text/css" href="../js/JSC/jquery-ui/jquery-ui.min.css" >


@endsection
@section('content')
<header class="fancy">
	<div class="container head">
		<div class="title">
			<h3>
				<span>Dịch vụ của nhà xe</span>
			</h3>
		</div>
		<ol class="anime">
			<li class="Home">
				<a href="#">Home</a>
			</li>
			<li class="seperate">Vận chuyển khách </li>
		</ol>
	</div>
</header>

<div class="main container-fluid">
	<div class="container">
		<div class="main-box">
			<div class="row">
				<div class="col-12 title-main">
					<h4>Xe khách liên tỉnh</h4>
					<hr class="light-50">
				</div>

				<section class="col-12">
					<div class="img">
						<img src="../img/dichvu.png" alt="">
					</div>
					<div class="content-sub box-title">
						<h5 class="new-sub">
							Tiêu chí của Nhà xe
						</h5>
					</div>
					<div class="text-main">
						<p>- Vương Chi ra đời từ những mong muốn chân tình của hành khách về những chuyến đi đường dài thoải mái và thân thiện. Đến với Xe Nhà, bạn sẽ được tận hưởng cảm giác như ngồi trên chính chiếc xe riêng của mình.</p>
						<p>- Xe giường nằm Thaco Mobihome đời mới nhất với 40 giường được thiết kế tiện lợi và an toàn để bạn có được có những giây phút nghỉ ngơi, thư giãn hoàn hảo. Bên cạnh đó hệ thống điều chỉnh máy lạnh và đèn thông minh, bạn có thể tùy chỉnh nhiệt độ và ánh sáng phù hợp với nhu cầu và sở thích của mình.</p>
						<p>- Bạn sẽ được phục vụ nước uống, khăn lạnh, thức ăn nhẹ miễn phí và nhận được sự quan tâm tận tình từ nhân viên xe. Đặc biệt, Xe nhà cũng hỗ trợ nơi nghỉ ngơi cho khách ở TP. Buôn Ma Thuột và hướng dẫn khách vào TP. Buôn Ma Thuột khám chữa bệnh. Ngoài ra, Xe Nhà còn nhận vận chuyển hàng hóa và bưu phẩm nếu khách có nhu cầu. Với những dịch vụ tuyệt vời và giá ưu đãi. Xe Nhà sẽ giúp bạn vượt qua khoảng cách TP. Buôn Ma Thuột – Hà Nội nhẹ nhàng như một giấc mơ đẹp.</p>
					</div>
					<div class="content-sub box-title">
						<h5 class="new-sub">
							Đánh giá 
						</h5>
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
				</section>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

<script type="text/javascript" src="../js/JSC/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="../js/JSC/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/JSC/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('js/trancer.js') }}"></script>
@endsection
@section('link')
	../
@endsection