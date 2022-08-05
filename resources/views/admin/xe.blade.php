@extends('layouts.master')

@section('title')
Dashboard | Danh sách xe
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">DANH SÁCH XE</h4>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm xe</button>
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
													<h5 class="modal-title" id="exampleModalLabel">Thêm xe</h5>
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
														<button type="submit" class="btn btn-primary">Thêm xe</button>
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
												<th>Nhà xe</th>
												<th> Biển số xe </th>
												<th> Số ghế </th>
												<th> Số điện thoại </th>
												<th class="text-center">Tác vụ</th>
											</thead>
											<tbody >
												
												@foreach ($xe  as $row )
												<tr>
													<td class="text-center">{{$index++ }}</td>
													<td>{{ $row->name}}</td>
													<td>{{ $row->BSX }}</td>
													<td>{{ $row->seats }}</td>
													<td>{{ $row->phonecar }}</td>

													<td class="td-actions text-center">
														<a href="#">
															
															<button type="button" rel="tooltip" class="btn btn-dark btn-sm btn-icon " data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Tạo tài khoản" data-target="#acc{{$row->id}}" data-whatever="@getbootstrap"><i class="now-ui-icons business_badge"></i></button>
														</a>

														<div class="modal fade" id="acc{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>

																	<div class="modal-body has-success">
																		<form action="addacc-actor/{{ $row->id}}" method="POST">
																			{{ csrf_field() }}
																			{{ method_field('PUT') }}
																			
																			<fieldset disabled>
																				<div class="form-group">
																		      	<label for="disabledTextInput">Mã xe</label>
																		      	<input type="text" id="disabledTextInput" class="form-control"  name="xeid" value="{{ $row->id}}" >
																		    	</div>
																			</fieldset>
																			<div class="form-group">
																				<label for="recipient-name" class="col-form-label" style=" text-right:none!important">Name:</label>
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


													<a href="xe-lichtrinh/{{ $row->id}}">
														<button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="Thêm lịch trình xe">
															<i class="now-ui-icons ui-1_simple-add"></i>
														</button>

													</a>
													<a href="edit-xe/{{ $row->id}}" >
														<button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon " data-toggle="tooltip" data-placement="left" title="Sửa thông tin">
															<i class="now-ui-icons ui-2_settings-90"></i>
														</button></a>

														<a>
															<form action="delete-xe/{{ $row->id }}" method="POST" class="btn btn-sm btn-icon">
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
													{{ $xe->links() }}
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