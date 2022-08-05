@extends('flatform')

@section('title')
	Liên hệ
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="css/contact.css">
@endsection

@section('content')
	<header class="fancy">
		<div class="container head">
			<div class="title">
				<h3>
					<span>Liên hệ nhà xe</span>
				</h3>
			</div>
			<ol class="anime">
				<li class="Home">
					<a href="#">Home</a>
				</li>
				<li class="seperate">Liên hệ</li>
			</ol>
		</div>
	</header>
	
	<div class="contact-form container-fluid">
		<div class="container">
			<div class="padding">
				<div class="title-padding">
					<h4>Thông tin liên hệ</h4>
					<hr class="light-25">
				</div>
				<section>
					<div class="main-padding row">
						<div class="col-md-6 col-sx-12">
							<h5>Địa chỉ</h5>
							<hr class="light-25">
							<section>
								<span>- Cơ sở tại nhà : 331 Nguyễn Văn Cừ , Phương Tân Lập , TP Buôn Ma Thuột </span>
								<p>Di động : 0917058877</p>
								<p>SĐT bàn : (0500)866547</p>
								<span>- Phòng vé số 5 : Bến xe Phía Nam , TP Buôn Ma Thuột  </span>
								<p>SĐT : 0917058877</p>
								<span>- Phòng vé số 2 : Bến xe Giáp Bát , TP Hà Nội  </span>
								<p>SĐT : 0917058877</p>
								
							</section>
						</div>
						
						<div class="col-md-6 col-sx-12">
							<form class="form-row">
								<div class="col-12">
									<h5>Chúng tôi sẽ trả lời bạn sớm nhất </h5>
									<hr class="light-25">
								</div>
								<div class="col-md-4 col-sx-12">
									<input type="text" class="form-control" placeholder="Họ tên">
								</div>
								<div class="col-md-4 col-sx-12">
									<input type="email" class="form-control" placeholder="Mail">
								</div>
								<div class="col-md-4 col-sx-12">
									<input type="text" class="form-control" placeholder="Số điện thoại">
								</div>
								<div class="nd col-12">
									<input class="form-control" type="text" placeholder="Nội dung hoặc yêu cầu đặt biệt khi Đặt vé">
								</div>
								<div class="col-6">
									<button class="btn btn-primary btn-block" type="reset">Hủy</button>
								</div>
								<div class="col-6">
									<button class="btn btn-primary btn-block" type="submit">Gửi</button>
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
@endsection