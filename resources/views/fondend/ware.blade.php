@extends('flatform')

@section('title')
	Vận chuyển hàng hóa
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ware.css') }}">

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
				<li class="seperate">Vận chuyển hàng hóa </li>
			</ol>
		</div>
	</header>
	
	<div class="main container-fluid">
		<div class="container">
			<div class="main-box">
				<div class="row">
					<div class="col-12 title-main">
						<h4>Vận chuyển hàng hóa</h4>
						<hr class="light-50">
					</div>
					
					<section class="col-12">
						<div class="img">
							<img src="../img/vanchuyen.jpg" alt="">
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								A. Các tỉnh huyện nhà xe có thể gửi 
							</h5>
						</div>
						<div class="text-main">
							<p>- Chúng tôi nhận vận chuyển hàng hóa các tỉnh TP dọc trên tuyến đường từ TP Buôn Ma Thuột tới Hà Nội  .</p>
							<p>- Thông tin chi tiết về địa chỉ gửi và nhận hàng của các địa điểm trên xin xem tại mục C phía dưới.</p>
							
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								B. Quy định gửi hàng của nhà xe
							</h5>
						</div>
						<div class="text-main">
							<p>- Hàng hóa để kinh doanh phải có chứng từ thuế theo quy định của pháp luật  .</p>
							<p>- Vật phẩm hàng hóa xuất nhập khẩu phải thực hiện theo quy định của cơ quan quản lý chuyên ngành có thẩm quyền.</p>
							<p>- Vật phẩm hàng hóa dễ bị hư hỏng, chất lòng, bột dùng đóng gói phải đảm báo không gây hư hỏng, ô nhiễm bưu gửi khác.</p>
							
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								C. Trách nhiện bồi thường
							</h5>
						</div>
						<div class="content-TN">
							<ol>
								<li ><strong>Những mặt hàng không nhận gửi :</strong> Ấn phẩm, vật phẩm, hàng hóa mà Việt Nam cấm lưu thông, vật chất gây nổ, gây cháy, gây nguy hiểm. Vật, chất làm mất vệ sinh, gây ô nhiễm môi trường.Tiền Việt Nam, giấy tờ có giá trị bằng tiền mặt Việt Nam. Ngoại hối, giấy tờ có giá trị bằng tiền nước ngoài.
							    </li>
							    <li ><strong>Vật gửi có điều kiện :</strong>
								Hàng hóa để kinh doanh phải có chứng từ thuế theo quy định của pháp luật.
								Vật phẩm hàng hóa xuất nhập khẩu phải thực hiện theo quy định của cơ quan quản lý chuyên ngành có thẩm quyền.
								Vật phẩm hàng hóa dễ bị hư hỏng, chất lòng, bột dùng đóng gói phải đảm báo không gây hư hỏng, ô nhiễm bưu gửi khác.
							    </li>
							    <li><strong>Trách nhiệm bồi thường:</strong>
									<ul>
										<li>
											<strong>Chậm chỉ tiêu thời gian :</strong> Hoàn lại cước đã sử dụng.
										</li> 
										<li>
											<strong>Bưu gửi bị mất, hư hại hoặc tráo đổi hoàn toàn:</strong>
											<br>- Hoàn lại toàn bộ cước đã thu khi chấp nhận.
											<br>- Đối với thư từ, tài liệu: Bồi thường thiệt hại bằng 5 (năm) lần cước đã thu khi chấp nhận.
											<br>- Đối với vật phẩm hàng hóa: Bồi thường theo tỷ lệ suy suyển nhưng tối đa bằng 10 (mười) lần cước đã thu khi chấp nhận kể cả trong trường hợp hư hại hoặc mất mặt hoàn toàn.
											<br>- Đối với vật phẩm được khai báo đầy đủ giá trị, cước phí sẽ được cộng thêm từ 1% - 5% trị khai và bồi hoàn 100% giá trị trong trường hợp mất mát.<br>
										</li>
										<li><strong>Các trường hợp khác</strong>: Thực hiện theo quy định của Xe Nhà ban hành.</li>
									</ul>
							  </li>
							</ol> 
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								D. Trách nhiện người gửi
							</h5>
						</div>
						<div class="text-main">
							<p>- Khai báo đúng và đủ các thông tin liên quan trên Biên nhận. Gói bọc đảm bảo an toàn cho hàng hóa. Thanh toán đầy đủ cước phí. Thông báo ngay cho nơi gửi bưu gửi trước khi phát trong trường hợp làm thất lạc biên nhận.</p>		
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								E. Trách nhiệm người nhận
							</h5>
						</div>
						<div class="text-main">
							<p>- Khách đến nhận hàng hóa cần xuất trình các giấy tờ tùy thân hợp pháp hoặc giấy giới thiệu của cơ quan/công ty.</p>
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								F. Trách Nhiệm của Nhà xe
							</h5>
						</div>
						<div class="text-main">
							<p>- Kiểm tra tính hợp pháp của bưu gửi trước khi chấp nhận.Đảm bảo an toàn bưu gửi kể từ khi nhận gửi đến khi phát cho người có quyền nhận và giải quyết khiếu nại, bồi thường cho khách hàng theo tiêu chuẩn đã công bố.</p>
						</div>
						<div class="content-sub box-title">
							<h5 class="new-sub">
								G. Các địa điểm gửi hàng của nhà xe
							</h5>
						</div>
						<div class="last row">
							<div class="col-md-6 col-sx-12">
								<div><span>331 Nguyễn Văn Cừ ,Phường Tâp Lập , TP Buôn Ma Thuột</span></div>
								<div><p>Đt: 0917058877</p></div>
								<div><span>Bến Xe Phía Nam , TP Buôn Ma Thuột</span></div>
								<div><p>Đt: 0917058877</p></div>
							</div>
							<div class="col-md-6 col-sx-12">
								<div><span>Bến Xe Nước Ngầm , Hà Nội</span></div>
								<div><p>Đt: 0917058877</p></div>
								<div><span>Bến Xe Giáp Bát , Hà nội</span></div>
								<div><p>Đt: 0917058877</p></div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('link')
	../
@endsection
