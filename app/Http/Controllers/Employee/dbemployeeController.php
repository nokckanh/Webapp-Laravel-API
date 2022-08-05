<?php

namespace App\Http\Controllers\Employee;
use App\xe;
use App\lichtrinh;
use App\khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\CTchuyendi;
use Session;
use App\hanghoa;

class dbemployeeController extends Controller
{	
	public function dashemployee(Request $request,$idxe)
    {
    	$xe = xe::where('id' ,$idxe)->first();

        $request->session()->flash('xeid',$idxe);
        

        $data = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','x.BSX','nx.name')
        // ->orderBy('ngaydi','asc')
        ->where('lt.xe_id','=',$idxe)

        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
        ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        ->paginate(10);

        
        
       $d = Carbon::today()->toDateString();
       
        $setrow = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','nx.name')
       	->where('lt.xe_id','=',$idxe)

       ->where(function ($query) {
            	$d = Carbon::now();
            	$date = $d->format('Y-m-d');      	
                $query->where('lt.ngaydi', '=',''.date('Y-m-d').'');                   
        })
       
        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
        ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        ->get();

        $page =1;
        if(isset($request->page)){
            $page = $request->page;
        }

        $index = ($page-1)*10+1;

        return view('employees.dashemployee')->with([
        	'set' => $setrow,
        	'xe' =>$xe,
        	'data' =>$data,
        	'index' =>$index
        ]);
    }
	
    public function dashemployeedanhsachve(Request $request,$id)
    {   
        $request->session()->keep(['xeid']);
        $lichtrinhs = lichtrinh::find($id);


        $idctchuyendis = CTchuyendi::where('lichtrinh_id',$id)->first();

        $dskh = DB::table('ctchuyendi_khachhang as ct')
        ->select('ct.*','kh.*')
        // ->orderBy('ngaydi','asc')
        ->where('ct.CTchuyendi_id','=',$idctchuyendis->id)
        ->join('ctchuyendi as c', 'c.id', '=', 'ct.Ctchuyendi_id')
        ->join('khachhang as kh', 'kh.id', '=', 'ct.khachhang_id')
        ->get();
        


    	return view('employees.khachhang')->with([
            'lichtrinh' =>$lichtrinhs,
            'idctchuyendi'=>$idctchuyendis,
            'dskh' =>$dskh
        ]);
    }



    public function khachhangadd(Request $request)
    {
        $request->session()->keep(['xeid']);

        try {
            DB::beginTransaction();

            $khachhang = khachhang::create([
            'name' => $request['name'],
            'phone'=>$request['sdt'] ,
            'noidi' =>$request['noidi'],
            'noidon' =>$request['noidon'],
            'trangthai' => $request['trangthai'],
            ]);
            
            $time = date('Y-m-d H:i:s');
            \DB::table('ctchuyendi_khachhang')->insert([
                'khachhang_id' => $khachhang->id,
                'CTchuyendi_id'=>$request['idchuyendi'],
                'created_at'=>$time,
                'updated_at'=>$time
            ]);

            // $idcd = CTchuyendi::findorFail($request['idchuyendi']);
            
            DB::commit();
             $request->session()->keep(['xeid']);
             return redirect()->back()->with('status','thêm thành công');
            
          
            } catch (Exception $e) {
                DB::rollBack();
            }
        
      
    }

    public function updatett(Request $request,$id)
    {
        $request->session()->keep(['xeid']);
        $kh = khachhang::find($id);

        $kh ->trangthai = $request->input('trangthai');

        $kh->update();

        return redirect()->back()->with('status','cập nhập thành công');

    }

    public function chondsve(Request $request)
    {   
        $request->session()->keep(['xeid']);

        $lichtrinhs = lichtrinh::find($request['ngaydi']);


        $idctchuyendis = CTchuyendi::where('lichtrinh_id',$request['ngaydi'])->first();

        $dskh = DB::table('ctchuyendi_khachhang as ct')
        ->select('ct.*','kh.*')
        // ->orderBy('ngaydi','asc')
        ->where('ct.CTchuyendi_id','=',$idctchuyendis->id)
        ->join('ctchuyendi as c', 'c.id', '=', 'ct.Ctchuyendi_id')
        ->join('khachhang as kh', 'kh.id', '=', 'ct.khachhang_id')
        ->get();
        



        return view('employees.danhsachvengay')->with([
            'lichtrinhngay' => $lichtrinhs,
            'dskh' => $dskh,
            'idctchuyendi'=>$idctchuyendis,
        ]);
       
    }

    public function danhsachvenhap(Request $request)
    {   
        $request->session()->keep(['xeid']);

        $lichtrinhabc = lichtrinh::where('xe_id',session()->get('xeid'))->get();
        
        $request->session()->reflash();
        
        return view('employees.chondsve')->with([
            'lichtrinh' => $lichtrinhabc,
        ]);    

    }

    // Hàng Hóa

    public function danhsachhangnhap(Request $request)
    {   
        $request->session()->keep(['xeid']);
        
        $lichtrinhabc = lichtrinh::where('xe_id',session()->get('xeid'))->get();
        
        $request->session()->reflash();
        
        return view('employees.chondshang')->with([
            'lichtrinh' => $lichtrinhabc,
        ]);    

    }

    public function chondshang(Request $request)
    {
        $request->session()->keep(['xeid']);

        $lichtrinhs = lichtrinh::find($request['ngaydi']);


        $idctchuyendis = CTchuyendi::where('lichtrinh_id',$request['ngaydi'])->first();

        $dshh = DB::table('ctchuyendi_hanghoa as ct')
        ->select('ct.*','hh.*')
        // ->orderBy('ngaydi','asc')
        ->where('ct.CTchuyendi_id','=',$idctchuyendis->id)
        ->join('ctchuyendi as c', 'c.id', '=', 'ct.Ctchuyendi_id')
        ->join('hanghoa as hh', 'hh.id', '=', 'ct.hanghoa_id')
        ->get();
        


        return view('employees.danhsachhangngay')->with([
            'lichtrinhngay' => $lichtrinhs,
            'dshh' => $dshh,
            'idctchuyendi'=>$idctchuyendis,
        ]);
    }

    public function updatehanghoa(Request $request,$id)
    {
        $request->session()->keep(['xeid']);

        $hh = hanghoa::find($id);

        $hh ->trangthai = $request->input('trangthai');

        $hh->update();

        return redirect()->back()->with('status','cập nhập thành công');

    }

    public function hanghoaadd(Request $request)
    {
        $request->session()->keep(['xeid']);

        try {
            DB::beginTransaction();

            $hanghoa = hanghoa::create([
            'tennguoinhan' => $request['name'],
            'sdtnguoinhan'=>$request['sdt'] ,
            'noiden' =>$request['noiden'],
            'soluong' =>$request['soluong'],
            'loaihang' => $request['loaihang'],
            'trangthai' => $request['trangthai'],
            'Giacuoc' => $request['Giacuoc'],
            ]);
            
            $time = date('Y-m-d H:i:s');
            \DB::table('ctchuyendi_hanghoa')->insert([
                'hanghoa_id' => $hanghoa->id,
                'CTchuyendi_id'=>$request['idchuyendi'],
                'created_at'=>$time,
                'updated_at'=>$time
            ]);

            // $idcd = CTchuyendi::findorFail($request['idchuyendi']);
            
            
            
            DB::commit();
             $request->session()->keep(['xeid']);
             return redirect()->back()->with('status','thêm thành công');
            
          
            } catch (Exception $e) {
                DB::rollBack();
            }
        
      
    }
}
