@extends('flatform')

@section('title')
Đặt vé xe
@endsection
@section('link')
../
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lichtrinh.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('js/JSC/jquery-ui/jquery-ui.min.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('js/JSC/jquery-ui/jquery-ui.css') }}" >	

@endsection

@section('content')
<div class="container-fluid lt" >
	<div class="main container">
		<div class="paddding">
			<div class="title-main">
				<h4>Đặt vé xe</h4>
				<hr class="light-50">
			</div>
			@if (session('status'))
                        <div class="alert alert-success text-center" role="alert" >
                            {{ session('status') }}
                          {{-- 	<button   type="submit" rel="tooltip"  class="flex-row-reverse btn btn-danger btn-sm btn-icon navbar-right" >
											<i class="now-ui-icons ui-1_simple-remove"></i>
										</button> --}}
                        </div>
                    @endif
                    <div class="content-sub box-title">
					<h5 class="new-sub">
						{{$tuyen->noidi}}
						<span class="ui-icon ui-icon-arrow-1-e"></span>{{$tuyen->noiden}}
					</h5>
				</div>
			<section>
				<div class="row">
					<div class="col-md-6 col-sm-12 mx-auto">
						<div class="card">
							<div class="card-body">
								<h5 class=" card-title text-center text-success">Thông tin xe</h5>
							</div>
							<ul class="list-group">
								<li class="list-group-item" style="text-align: left;">Nhà xe : {{$nhaxe->name}}</li>
								<li class="list-group-item" style="text-align: left;">Biển số xe : {{$xe->BSX}}</li>
								<li class="list-group-item" style="text-align: left;">Ghế đặt : Xác nhận khi nhà xe liên hệ</li>
								<li class="list-group-item" style="text-align: left;">Ngày đi : {{date('d/m/Y', strtotime($lichtrinh->ngaydi)) }}</li>
								<li class="list-group-item" style="text-align: left;">Nơi đi : {{$tuyen->noidi}}</li>
								<li class="list-group-item" style="text-align: left;">Nơi đến : {{$tuyen->noiden}}</li>
								<li class="list-group-item" style="text-align: left;">Giờ xe chạy : {{ $lichtrinh->xuatben}}</li>
								<li class="list-group-item" style="text-align: left;">Giá vé : {{ $tuyen->dongia}}</li>
							</ul>
							<div class="card-body">
								<a href="#" class="btn btn-success btn-sm">Thông tin chi tiết</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						@if (Route::has('login'))
						@auth
							<form action="../khachdatve" method="POST">
							{{ csrf_field() }}
							<legend class="text-center text-danger">Thông tin đặt vé</legend>
							<div class="form-group col-xs-6">
								<label for="name-field">Họ và tên</label>
								<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
							</div>
							<div class="form-group col-xs-6">
								<label for="email-field">Số điện thoại</label>
								<input type="text" class="form-control" name="sdt" value="{{ Auth::user()->phone }}"  required>
							</div>
							<div  class="form-group col-xs-6 ">
								<label for="other-subject-field">Nơi đến</label>
								<input type="text" class="form-control" name="noidi" placeholder="Nhập nơi đến khác nếu có" />
							</div>
							<div class="form-group col-xs-12">
								<label for="body-field">Nơi đón</label>
								<textarea  class="form-control" name="noidon" placeholder="Nơi đón khách (dọc đường)" required></textarea>
							</div>
							<input type="hidden" name="idchuyendi" value="{{ $idctchuyendi->id }}">
							<input type="hidden" name="trangthai" value="Khách Online chưa liên lạc">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-primary btn-sm btn-block">Đặt vé</button>  
							</div>
						</form>
						@else
						<form action="../khachdatve" method="POST">
							{{ csrf_field() }}
							<legend class="text-center text-danger">Thông tin đặt vé</legend>
							<div class="form-group col-xs-6">
								<label for="name-field">Họ và tên</label>
								<input type="text" class="form-control" name="name" placeholder="Nhập tên" required>
							</div>
							<div class="form-group col-xs-6">
								<label for="email-field">Số điện thoại</label>
								<input type="text" class="form-control" name="sdt" placeholder="Nhập số điện thoại"  required>
							</div>
							<div  class="form-group col-xs-6 ">
								<label for="other-subject-field">Nơi đến</label>
								<input type="text" class="form-control" name="noidi" placeholder="Nhập nơi đến khác nếu có" />
							</div>
							<div class="form-group col-xs-12">
								<label for="body-field">Nơi đón</label>
								<textarea  class="form-control" name="noidon" placeholder="Nơi đón khách (dọc đường)" required></textarea>
							</div>
							<input type="hidden" name="idchuyendi" value="{{ $idctchuyendi->id }}">
							<input type="hidden" name="trangthai" value="Khách Online chưa liên lạc">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-primary btn-sm btn-block">Đặt vé</button>  
							</div>
						</form>
					@endauth
					@endif
					</div>
				</div>
			</section>
		</div>
	</div>
</div>



@endsection