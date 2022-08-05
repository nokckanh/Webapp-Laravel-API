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
					<h4 class="card-title"> SỬA THÔNG TIN TÀI KHOẢN</h4>
					
				</div>
				<div class="card-body">
					<form action="../role-register-update/{{ $users ->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Tên tài khoản</label>
								
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons users_single-02"></i>
						      </div>      
						    </div>
						    <input type="text" class="form-control form-control-success" name="username" value="{{$users->name }}">
						  </div>
						</div>
						
						<div class="form-group has-success">
							<label for="exampleInputEmail1">Email</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons ui-1_email-85"></i>
						      </div>      
						    </div>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->email }}">			
						</div>
						
						<div class="form-group has-success">
							<label for="check">Chức vụ</label>
							<div class="input-group has-success ">
						    <div class="input-group-prepend">
						      <div class="input-group-text">
						        <i class="now-ui-icons business_badge"></i>
						      </div>      
						    </div>
							<select name="usertype" class="form-control form-control-success">
								<option value="admin">Admin</option>
								<option value="actor">Nhân viên</option>
								<option value="customer">khách</option>
							</select>
						</div>
					</div>				   
				</div>			
				<button type="submit" class="btn btn-info">Cập nhật</button>
				<a href="{{ route('role-register') }}"><button type="" class="btn btn-danger">Bỏ</button></a>
			</form>
		</div>
	</div>
</div>
</div>
</div>				

@endsection
