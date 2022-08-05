@extends('flatform')

@section('title')
Lịch trình
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="css/lichtrinh.css">
<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.min.css" >
<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.css" >
@endsection
@section('content')
<header class="fancy">
	<div class="container head">
		<div class="title">
			<h3>
				<span>Lịch trình của nhà xe</span>
			</h3>
		</div>
		<ol class="anime">
			<li class="Home">
				<a href="#">Home</a>
			</li>
			<li class="seperate">Lịch trình nhà xe</li>
		</ol>
	</div>
</header>
<div class="container-fluid lt" >
	<div class="main container">
		<div class="paddding">
			<div class="title-main">
				<h4>Lịch trình - Tuyến đi</h4>
				<hr class="light-50">
			</div>

			<section>
				<div class="content-sub box-title">
					<h5 class="new-sub">
						Các tuyến xe cố định
					</h5>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<caption>Nhà xe sẽ liên hệ trước 30 phút nếu khách đón xe dọc đường !</caption>
						<thead >
							<tr class="table-info">
								<th scope="col">Nhà xe</th>
								<th scope="col">Biển số xe</th>
								<th scope="col">Nơi đi</th>	
								<th scope="col">Nơi đến</th>
								<th scope="col">Ngày đi</th>
								<th scope="col">Giờ chạy</th>

								<th scope="col">Giá vé</th>
								<th scope="col"></th>
								
							</tr>
						</thead>
						<tbody>
							@foreach ($lichtrinh as $row)
							<tr>
								<td style="vertical-align: middle;">{{ $row->name}}</td>
								<td style="vertical-align: middle;">{{ $row->BSX}}</td>
								<td style="vertical-align: middle;">{{ $row->noidi }}</td>
								<td style="vertical-align: middle;">{{ $row->noiden }}</td>
								<td style="vertical-align: middle;">{{ date('d/m/Y', strtotime($row->ngaydi)) }}</td>
							<td style="vertical-align: middle;">
								{{ 
									date('H:i:A ',strtotime($row->xuatben))
								}} 
							</td>
							<td style="vertical-align: middle;">{{ $row->dongia}}</td>
							<td>
								<a href="{{ route('datvexe',$row->id)}}">
										<button class="btn btn-primary btn-sm">
									Đặt vé
								</button>					

								<a>

							</td>
							</tr>
							
							@endforeach
						</tbody>
					</table>
					<div class="d-flex justify-content-center">
						{{ $lichtrinh->links()}}
					</div>
				</div>
			</section>

		</div>
	</div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="js/JSC/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="js/JSC/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="js/JSC/jquery-ui-bootstrap-jquery-ui-bootstrap-71f2e47/assets/js/google-code-prettify/prettify.js"></script>
@endsection