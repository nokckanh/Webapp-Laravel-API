@extends('layouts.employee')

@section('title')
Danh sách hàng
@endsection

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <div class="center"><h3 class="text-themecolor">DANH SÁCH HÀNG</h3></div>
        {{-- <div class="center"><h3 class="text-themecolor">Tuyến {{$lichtrinh->tuyen_id}}</h3></div> --}}
        

        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="javascript:void(0)">Tuyến</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{$lichtrinhngay->tuyen_id}}</a></li>
            <li class="breadcrumb-item active"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm Hàng</button></li>
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
                <form action="../add-hanghoa" method="POST">
                    {{ csrf_field() }}
                    {{-- {{ method_field('PUT') }} --}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tên người nhận :</label>
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Số điện thoại :</label>
                        <input type="text" class="form-control" name="sdt" id="recipient-email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-pass" class="col-form-label">Nơi nhận :</label>
                        <input type="text" class="form-control" name="noiden" id="recipient-pass">
                    </div>
                    <div class="form-group">
                        <label for="recipient-pass" class="col-form-label">Só lượng :</label>
                        <input type="text" class="form-control" name="soluong" id="recipient-pass">
                    </div>
                    <input type="hidden" name="idchuyendi" value="{{ $idctchuyendi->id }}">
                    
                    <input type="hidden" name="idlichtrinh" value="{{ $idctchuyendi->lichtrinh_id }}">
                    <div class="form-group">
                        <label for="recipient-pass" class="col-form-label">Loại hàng :</label>
                        <select name="loaihang" class="form-control form-control-success">
                            <option value="Thùng">Thùng giấy</option>
                            <option value="Xốp">Xốp</option>
                            <option value="Xọt">Xọt</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-pass" class="col-form-label">Trạng thái:</label>
                        <select name="trangthai" class="form-control form-control-success">
                            <option value="Cước rồi">Cước rồi</option>
                            <option value="Chưa cước">Chưa cước</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-pass" class="col-form-label">Cước :</label>
                        <input type="text" class="form-control" name="Giacuoc" id="recipient-pass">
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
                <h4 class="card-title">Hàng đi ngày <span style="color:#20aee3">{{ date('d-m-Y', strtotime($lichtrinhngay->ngaydi))}}</span> </h4>
                
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
                                                        <th>Gửi tới</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Người Nhận</th>
                                                        <th>Số lượng</th>
                                                        <th>Loại hàng</th>
                                                        <th>Trạng thái</th>
                                                        <th>Cước</th>
                                                        <th class="text-center">Tác vụ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                   @foreach ($dshh as $setrow)
                                                   <tr>
                                                    <td>{{ $setrow->noiden }}</td>
                                                    <td>{{ $setrow->sdtnguoinhan }}</td>
                                                    <td>{{ $setrow->tennguoinhan }}</td>
                                                    <td>{{ $setrow->soluong}}</td>
                                                    <td>{{ $setrow->loaihang}}</td>
                                                    <td class="query" ><form action="../updatehanghoa/{{$setrow->id}}" >


                                                     <button type="submit" rel="tooltip" class=" btn btn-success btn-sm btn-icon" >
                                                      {{ $setrow->trangthai }}

                                                  </button>
                                                  <input type="hidden" name="trangthai" value="">

                                              </form>
                                          </td>
                                          <td>{{ $setrow->Giacuoc}}</td>



                                  <td class="td-actions text-center">

                                    <a href="add-xe/{{ $setrow->id}}">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon"> 
                                            <i class="fa fa-address-card-o"></i>
                                        </button>

                                    </a>
                                    <a href="edit-nhaxe/{{ $setrow->id}}">
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
            $(this).html('Chưa cước').toggleClass('btn-success btn-danger');
            var text = $(this).text();
            $(".query input").val(text);
        }

        else {
            $(this).html('Cước rồi').toggleClass(' btn-primary btn-success');
            var text2 = $(this).text();
            $(".query input").val(text2);
        }

    });
});

</script>
@endsection