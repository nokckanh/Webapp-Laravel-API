@extends('layouts.master')

@section('title')
Dashboard | Danh sách nhà xe
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title"> DANH SÁCH NHÀ XE</h4>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm nhà xe</button>
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
								<h5 class="modal-title" id="exampleModalLabel">Thêm nhà xe</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								
							</div>
							<div class="modal-body has-success">
								<form action="add-nhaxe" method="POST">
									{{ csrf_field() }}
									{{-- {{ method_field('PUT') }} --}}
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Tên nhà xe:</label>
										<input type="text" class="form-control" name="name" id="recipient-name">
									</div>
									
									<div class="form-group">
										<label for="recipient-email" class="col-form-label">Địa chỉ :</label>
										<input type="text" class="form-control" name="address" id="recipient-email">
									</div>
									<div class="form-group">
										<label for="recipient-pass" class="col-form-label">Thành phố:</label>
										<input type="text" class="form-control" name="location" id="recipient-pass">
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
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<th></th>
							<th> Tên nhà xe 	</th>
							<th> Địa chỉ</th>
							<th> Thành phố</th>
							<th class="text-center">Tác vụ</th>
						</thead>
						<tbody>
						@php
						$count = 1;
						@endphp

						@foreach($nhaxe as $row)
						<tr>
							<td class="text-center">{{$count++ }}</td>
							<td>{{ $row->name }}</td>
							<td>{{ $row->address }}</td>
							<td>{{ $row->localtion }}</td>
			
							<td class="td-actions text-center">

								<a href="add-xe/{{ $row->id}}">
									<button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
									<i class="now-ui-icons ui-1_simple-add"></i>
								</button>

								</a>
								<a href="edit-nhaxe/{{ $row->id}}">
									<button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
									<i class="now-ui-icons ui-2_settings-90"></i>
								</button></a>

								<a>
									<form action="delete-nhaxe/{{ $row->id }}" method="POST" class="btn btn-sm btn-icon">
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
							{{ $nhaxe->links() }}
						</div>
					</div>
					</table>
				</div>
			</div>
		</div>
	</div>
	
@endsection


@section('scripts')
{{-- expr --}}
@endsection