@extends('layouts.employee')

@section('title')
Trang chủ
@endsection

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <div class="center"><h3 class="text-themecolor">DANH SÁCH VÉ</h3></div>
        {{-- <div class="center"><h3 class="text-themecolor">Tuyến {{$lichtrinh->tuyen_id}}</h3></div> --}}
        

        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="javascript:void(0)">Tuyến</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{$lichtrinh->tuyen_id}}</a></li>
            <li class="breadcrumb-item active"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm khách hàng</button></li>
        </ol>
        
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">THÊM VÉ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>
                            <div class="modal-body has-success">
                                <form action="../add-khachhang" method="POST">
                                    {{ csrf_field() }}
                                    {{-- {{ method_field('PUT') }} --}}
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Tên khách:</label>
                                        <input type="text" class="form-control" name="name" id="recipient-name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="recipient-email" class="col-form-label">Số điện thoại :</label>
                                        <input type="text" class="form-control" name="sdt" id="recipient-email">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-pass" class="col-form-label">Nơi đi:</label>
                                        <input type="text" class="form-control" name="noidi" id="recipient-pass">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-pass" class="col-form-label">Nơi đón:</label>
                                        <input type="text" class="form-control" name="noidon" id="recipient-pass">
                                    </div>
                                    <input type="hidden" name="idchuyendi" value="{{ $idctchuyendi->id }}">
                                    <input type="hidden" name="idlichtrinh" value="{{ $idctchuyendi->lichtrinh_id }}">
                                    <div class="form-group">
                                        <label for="recipient-pass" class="col-form-label">Trạng thái:</label>
                                        <select name="trangthai" class="form-control form-control-success">
                                            <option value="Xác nhận đón">Xác nhận đón</option>
                                            <option value="Chưa Xác Nhận">Chưa xác nhận</option>
                                            
                                        </select>
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
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Khách đi ngày <span style="color:#20aee3">{{ date('d-m-Y', strtotime($lichtrinh->ngaydi))}}</span> </h4>
                
                @if (session('status'))
                <div class="alert alert-success" role="alert" >
                    {{ session('status') }}
                          {{--  <button   type="submit" rel="tooltip"  class="flex-row-reverse btn btn-danger btn-sm btn-icon navbar-right" >
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button> --}}
                                    </div>
                                    @endif
                                    <div class="table-responsive">

                                        <div class="table-responsive">
                                            <table class="table">                                   
                                                <thead>
                                                    <tr>
                                                        <th>Tên khách</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Nơi đi</th>
                                                        <th>Nơi đón</th>
                                                        <th>Trạng thái</th>
                                                        <th>Tiền vé</th>
                                                        <th class="text-center">Tác vụ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                   @foreach ($dskh as $setrow)
                                                    <tr>
                                                        <td>{{ $setrow->name }}</td>
                                                        <td>{{ $setrow->phone }}</td>
                                                        <td>{{ $setrow->noidi }}</td>
                                                        <td>{{ $setrow->noidon}}</td>

                                                        <td class="query" ><form action="../updatett/{{$setrow->id}}">

                                                                <button type="submit" rel="tooltip" class=" btn btn-success btn-sm btn-icon" >
                                                                  {{ $setrow->trangthai }}
                                                                
                                                                </button>
                                                                 <input type="hidden" name="trangthai" value="">

                                                            </form>
                                                        </td>
                                                        <td>{{ $setrow->giatien}}</td>

                                                        <td class="td-actions text-center">

                                                            <a href="#">
                                                                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon"> 
                                                                        <i class="fa fa-address-card-o"></i>
                                                                </button>

                                                            </a>
                                                            <a href="#">
                                                                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                                                    <i class="fa fa-suitcase"></i>
                                                                </button></a>

                                                        </td>
                                                    </tr>
                                                  @endforeach
                                                 
                                                </tbody>
                                            </table>
                                            <div class="row">
                                               <div class="col-12 d-flex justify-content-center">

                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ============================================================== -->
                       <!-- End PAge Content -->
                       <!-- ============================================================== -->


                   </div>
                   @endsection
                   @section('script')
                     <script type="text/javascript">
                         $(document).ready(function () {
                                $(".query button").click(function () {
                                    if ($(this).hasClass('btn-success')) {
                                        $(this).html('Hủy kèo').toggleClass('btn-success btn-danger');
                                        var text = $(this).text();
                                        $(".query input").val(text);
                                    }
                                    
                                    else {
                                        $(this).html('Xác nhận đón').toggleClass(' btn-primary btn-success');
                                        var text2 = $(this).text();
                                        $(".query input").val(text2);
                                    }

                                });
                            });

                     </script>
                   @endsection