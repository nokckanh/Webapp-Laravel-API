@extends('layouts.master')

@section('title')
Edit-register | Thêm Xe

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> THÊM XE </h4>
					
				</div>
				<div class="card-body">
					<form action="../update-addxe-nhaxe/{{ $nhaxe ->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Nhà xe</label>
								
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons users_single-02"></i>
						      </div>      
						    </div>
						    <input type="text" class="form-control form-control-success" name="id" value="{{ $nhaxe ->name }}">
						  </div>
						</div>

						<div class="form-group has-success">
							<label for="exampleInputEmail1">Số Ghế</label>
								
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons users_single-02"></i>
						      </div>      
						    </div>
						    <input type="text" class="form-control form-control-success" name="seats" >
						  </div>
						</div>

						<div class="form-group has-success">
							<label for="exampleInputEmail1">Biển số xe</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons ui-1_email-85"></i>
						      </div>      
						    </div>
							<input type="text" name="BSX" class="form-control"  ">			
						</div>
						

						<div class="form-group has-success">
							<label for="exampleInputEmail1">Số điện thoại</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons ui-1_email-85"></i>
						      </div>      
						    </div>
							<input type="text" name="phone" class="form-control"  value="">			
						</div>

									   
				</div>			
				<button type="submit" class="btn btn-info">Thêm xe</button>
				<a href="{{ route('nhaxe') }}" class="btn btn-danger">Bỏ</a>
			</form>
		</div>
	</div>
</div>
</div>
</div>				

@endsection
