@extends('layouts.master')

@section('title')
Edit-register | Sửa thông tin

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> SỬA THÔNG TIN XE</h4>
					
				</div>
				<div class="card-body">
					<form action="../update-xe/{{ $xe ->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Tên xe</label>
								
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons users_single-02"></i>
						      </div>      
						    </div>
						    <input type="text" class="form-control form-control-success" name="name" value="{{$xe->nhaxe_id }}">
						  </div>
						</div>
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Số ghế</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons ui-1_email-85"></i>
						      </div>      
						    </div>
							<input type="text" name="address" class="form-control"  value="{{$xe->seats }}">			
						</div>
						

						<div class="form-group has-success">
							<label for="exampleInputEmail1">Biển Số Xe</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons ui-1_email-85"></i>
						      </div>      
						    </div>
							<input type="text" name="localtion" class="form-control"  value="{{$xe->BSX }}">			
						</div>

									   
				</div>			
				<button type="submit" class="btn btn-info">Cập nhật</button>
				<a href="../xe"><button type="" class="btn btn-danger">Bỏ</button></a>
			</form>
		</div>
	</div>
</div>
</div>
</div>				

@endsection
