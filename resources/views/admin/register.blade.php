@extends('layouts.master')

@section('title')
Dashboard | Danh sách bảng

@endsection

@section('content')
{{ csrf_field() }}
<div class="row">
	<div class="col-md-12">
		<div class="card ">
			<div class="card-header">
				<h4 class="card-title"> DANH SÁCH TÀI KHOẢN</h4>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm tài khoản</button>
				<div class="input-group no-border">
                <input id="myInput" type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
				@if (session('status'))
                        <div class="alert alert-success" role="alert" >
                            {{ session('status') }}
                          {{-- 	<button   type="submit" rel="tooltip"  class="flex-row-reverse btn btn-danger btn-sm btn-icon navbar-right" >
											<i class="now-ui-icons ui-1_simple-remove"></i>
										</button> --}}
                        </div>
                    @endif

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								
							</div>
							<div class="modal-body has-success">
								<form action="add-acc" method="POST">
									{{ csrf_field() }}
									{{-- {{ method_field('PUT') }} --}}
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Name:</label>
										<input type="text" class="form-control" name="name" id="recipient-name">
									</div>
									<div class="form-group">
										<label for="recipient-phone" class="col-form-label">Phone:</label>
										<input type="text" class="form-control" name="phone" id="recipient-phone">
									</div>
									<div class="form-group">
										<label for="recipient-email" class="col-form-label">Email:</label>
										<input type="email" class="form-control" name="email" id="recipient-email">
									</div>
									<div class="form-group">
										<label for="recipient-pass" class="col-form-label">Mật khẩu:</label>
										<input type="password" class="form-control" name="password" id="recipient-pass">
									</div>
									
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
								<button type="submit" class="btn btn-primary">Thêm</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table" id="myTable" >
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Tên</th>
							<th>Di Động</th>
							<th>Email</th>
							<th>Loại tài khoản</th>
							<th class="text-center">Tác vụ</th>
						</tr>
					</thead>
					<tbody >
						
						@foreach ($users as $row)
						<tr>
							<td class="text-center">{{$index++ }}</td>
							<td>{{ $row->name }}</td>
							<td>{{ $row->phone }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ $row->usertype }}</td>
							<td class="td-actions text-center">

								<button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
									<i class="now-ui-icons users_single-02"></i>
								</button>
								<a href="role-edit/{{ $row->id}}"><button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
									<i class="now-ui-icons ui-2_settings-90"></i>
								</button></a>

								<a>
									<form action="role-delete/{{ $row->id }}" method="POST" class="btn btn-sm btn-icon">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button   type="submit" rel="tooltip"  class="btn btn-danger btn-sm btn-icon" >
											<i class="now-ui-icons ui-1_simple-remove"></i>
										</button>
									</form>
								</a>
							</td>
							<tr>

								@endforeach
							</tbody>
							
						</table>
					</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
							{{ $users->links() }}
						</div>
					</div>
				</div>					
			</div>
		</div>


		@endsection

		@section('js')

		@endsection
		@section('scripts')
{{-- <script type="text/javascript">
	function deleteUser(id) {
		$.post("{{ route('delete-register') }}",
			  {
			    '_token': $('[name=_token]').val();
			    id:id
			  },
			  function(data, status){
			    alert("Data: " + data + "\nStatus: " + status);
			  });
	}
</script> --}}
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > 10)
    });
  });
});
</script>
@endsection