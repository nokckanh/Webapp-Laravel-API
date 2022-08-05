@extends('flatform')
@section('title')
	Dịch vụ
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="css/service.css">
	
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
				<li class="seperate">Dịch vụ của nhà xe</li>
			</ol>
		</div>
	</header>
	
	<div class="service container-fluid">
		<div class="main container">
			<div class="content-main">
				<div class="title-main">
					<h4>Dịch vụ</h4>
				</div>
				<hr class="light-50">
				<div class="row">
					<div class="col-md-4 col-sx-12">
						<div class="card" style="width: 100%;">
						  <img class="card-img-top" src="img/dichvu.png" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title">Xe khách liên tỉnh </h5>
							<p class="card-text">Với đoàn xe mới đời  2015, tiện nghi, hiện đại, lái xe và đội ngũ nhân viên thân thiện, lịch sự và chu đáo.</p>
							<a href="{{ route('trancer') }}" class="btn btn-primary">Xem chi tiết</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-sx-12">
						<div class="card" style="width: 100%;">
						  <img class="card-img-top" src="img/vanchuyen.jpg" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title">Vận chuyển hàng hóa</h5>
							<p class="card-text">VươngChi cung cấp vận chuyển hàng hóa bằng đường bộ.</p>
							<a href="{{ route('ware') }}" class="btn btn-primary">Xem chi tiết</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-sx-12">
						<div class="card" style="width: 100%;">
						  <img class="card-img-top" src="img/hopdong.jpg" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title">Chạy hợp đồng</h5>
							<p class="card-text">Vương Chi cung cấp dịch vụ chạy hợp đồng chở đoàn thể ngắn hạn .</p>
							<a href="#" class="btn btn-primary">Xem chi tiết</a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection