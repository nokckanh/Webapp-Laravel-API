@extends('layouts.employee')

@section('title')
Hàng Hóa / Chọn ngày
@endsection

@section('content')

<div class="row">
    <div class="card text-center mx-auto">
      <div class="card-header">
       <h3>NHẬP NGÀY ĐI<h3>
    </div>
    <div class="card-body">
        <form action="{{ route('chondshang',session()->get('xeid')) }}" method="GET">
            {{ csrf_field() }}
            
            
            <h5 class="card-title">Danh sách Hàng theo ngày đi</h5>
                 <select name="ngaydi" class="form-control form-control-success">
                    @foreach ($lichtrinh as $row)

                        <option value="{{ $row->id }}">{{date('d-m-Y', strtotime($row->ngaydi)) }}</option>

                    @endforeach
                 </select>

            <button type="submit" class="btn btn-primary btn-sm">Thực thi</button>

        </form>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>

</div>
@endsection
@section('script')
   {{--  <script type="text/javascript">
       function search() {
              window.location='/danhsachve/idlichtrinh=' + 
                encodeURIComponent(document.getElementById('search').value);
            } 
    </script> --}}
@endsection