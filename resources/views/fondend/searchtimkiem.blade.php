@extends('flatform')
@section('title')
Tìm kiếm
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="css/lichtrinh.css">
<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.min.css" >
<link rel="stylesheet" type="text/css" href="js/JSC/jquery-ui/jquery-ui.css" >
<style>
::-webkit-datetime-edit-year-field:not([aria-valuenow]),
::-webkit-datetime-edit-month-field:not([aria-valuenow]),
::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
    color: transparent;
}
</style>
@endsection
@section('content')
<div class="container-fluid lt" >
	<div class="main container">
		<div class="paddding">
			<div class="title-main">
				<h4>Lịch trình Tìm kiếm</h4>
				<hr class="light-50">
			</div>

			<section>
				<div class="content-sub box-title">
					<h5 class="new-sub">
						{{$tuyen->noidi}}
						<span class="ui-icon ui-icon-arrow-1-e"></span>{{$tuyen->noiden}}
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
								<td style="vertical-align: middle;">{{ date('d-m-Y', strtotime($row->ngaydi)) }}</td>
							<td style="vertical-align: middle;">
								{{ 
									date('H:i:A ',strtotime($row->xuatben))
								}} 
							</td >
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
				</div>
			</section>

		</div>
	</div>
</div>
	


@endsection