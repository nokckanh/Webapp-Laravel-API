@extends('layouts.master')

@section('title')
Trang Chủ | Danh sách tuyến
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title"> DANH SÁCH TUYẾN</h4>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm Tuyến</button>
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
													<h5 class="modal-title" id="exampleModalLabel">Nhập thông tin tuyến</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>

												</div>
												<div class="modal-body has-success">
													<form action="add-tuyen" method="POST">
														{{ csrf_field() }}
														{{-- {{ method_field('PUT') }} --}}
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Mã Tuyến:</label>
															<input type="text" class="form-control" name="id" id="recipient-name">
														</div>

														<div class="form-group">
															<label for="recipient-email" class="col-form-label">Nơi Đi:</label>
															<input type="text" class="form-control" name="noidi" id="recipient-email">
														</div>
														<div class="form-group">
															<label for="recipient-pass" class="col-form-label">Nơi đến :</label>
															<input type="text" class="form-control" name="noiden" id="recipient-pass">
														</div>
														<div class="form-group">
															<label for="recipient-pass" class="col-form-label">Giá tuyến:</label>
															<input type="text" class="form-control" name="dongia" id="recipient-pass">
														</div>


													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
														<button type="submit" class="btn btn-primary">Thêm tuyến</button>
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
												<th> Mã tuyến</th>
												<th> Nơi đi </th>
												<th> Nơi đến</th>
												<th> Giá tuyến </th>
												<th class="text-center">Tác vụ</th>
											</thead>
											<tbody >
												
												@foreach ($tuyen  as $row)
												<tr>
													<td>{{ $row->id}}</td>
													<td>{{ $row->noidi }}</td>
													<td>{{ $row->noiden }}</td>
													<td>{{ $row->dongia }}</td>

													<td class="td-actions text-center">

														<a href="{{-- add-xe/{{ $row->id}} --}}#">
															<button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
																<i class="now-ui-icons users_single-02"></i>
															</button>

														</a>
														<a href="#">
															<button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
																<i class="now-ui-icons ui-2_settings-90"></i>
															</button></a>

															<a>
																<form action="delete-tuyen/{{ $row->id }}" method="POST" class="btn btn-sm btn-icon">
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
														{{ $tuyen->links() }}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								@endsection


								@section('scripts')
								{{-- expr --}}
								@endsection