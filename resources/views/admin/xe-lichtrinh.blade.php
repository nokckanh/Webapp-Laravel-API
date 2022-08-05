@extends('layouts.master')

@section('title')
Edit-register | Cập nhập lịch trình

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">THÊM LỊCH TRÌNH XE</h4>
					
				</div>
				<div class="card-body">
					<form action="../update-xe-lichtrinh/{{ $xe ->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Biển Số Xe</label>

							<div class="input-group has-success ">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons users_single-02"></i>
									</div>      
								</div>
								<input type="text" class="form-control form-control-success" name="xe_id" value="{{$xe->BSX }}">
							</div>
						</div>

						
						<div class="form-group has-success">
							<label for="check">Tuyến xe </label>
							<div class="input-group has-success ">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons business_badge"></i>
									</div>      
								</div>
								<select name="tuyenxe" class="form-control form-control-success">
									@foreach ($tuyen as $row)
									<option value="{{ $row->id }}">{{ $row->id}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group has-success">
								<label for="exampleInputEmail1">Giờ xuất bến</label>
								<div class="input-group has-success ">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="now-ui-icons ui-1_email-85"></i>
										</div>      
									</div>
									<input type="time" name="xuatben" class="form-control"  >			
								</div>


							</div>


							<div class="form-group has-success">
								<label for="exampleInputEmail1">Ngày đi</label>
								<div class="input-group has-success ">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="now-ui-icons ui-1_email-85"></i>
										</div>      
									</div>
									<input type="date" name="ngaydi" class="form-control"  >			
								</div>


							</div>			
							<button type="submit" class="btn btn-info">Cập nhật</button>
							<a href="{{ route('lichtrinh') }}" class="btn btn-danger">Bỏ</a>
						</form>

					</div>

				</div>
			</div>
		</div>
	</div>				

	@endsection

	@section('scripts')
		
	@endsection