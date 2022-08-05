@extends('layouts.employee')

@section('title')
Trang chủ
@endsection

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">DANH SÁCH CHUYẾN ĐI <span style="color: #0782b1">{{ $xe->BSX}}</span></h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ $xe->BSX}}</li>
        </ol>
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
                <h4 class="card-title">HÔM NAY </h4>
                <div class="table-responsive">
                    <table class="table">                                   
                        <thead>                     
                            <tr>
                                <th>Tuyến</th>
                                <th>Ngày hôm nay</th>
                                <th>Nơi đi</th>
                                <th>Nơi đến</th>
                                <th class="text-center">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($set as $setrow)
                                <tr>
                                <td>{{ $setrow->tuyen_id }}</td>
                                <td>{{ $setrow->ngaydi }}</td>

                                <td>{{ $setrow->noidi }}</td>
                                <td>{{ $setrow->noiden}}</td>

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
                        <h4 class="card-title">DANH SÁCH</h4>
                        <div class="table-responsive">
                            <table class="table">                                   
                                <thead>

                                    <tr>
                                        <th>Tuyến</th>
                                        <th>Ngày đi</th>
                                        <th>Nơi đi</th>
                                        <th>Nơi đến</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->tuyen_id }}</td>
                                        <td>{{ $row->ngaydi }}</td>

                                        <td>{{ $row->noidi }}</td>
                                        <td>{{ $row->noiden}}</td>

                                        <td class="td-actions text-center">

                                            <a href="../danhsachve/idlichtrinh={{$row->id}}">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                                    <i class="fa fa-address-card-o"></i>
                                                </button>

                                            </a>
                                            <a href="edit-nhaxe/{{ $row->id}}">
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
                                    {{ $data->links() }}
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

        @endsection