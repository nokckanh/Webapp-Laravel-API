<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tuyen;
use App\lichtrinh;
use App\xe;
use App\nhaxe;
use App\khachhang;
use App\CTchuyendi;
class FordendController extends Controller
{
	public function index(){
		return view('trangchu');
	}
	public function about()
	{
		return view('fondend.about-us');
	}
	public function question()
	{
		return view('fondend.question');
	}
	public function service()
	{
		return view('fondend.service');
	}
	public function servicetraner()
	{
		return view('fondend.traner');
	}
	public function serviceware()
	{
		return view('fondend.ware');
	}
	public function lichtrinhxe()
	{	
		$lichtrinhs = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','x.BSX','nx.name','t.dongia')
        ->orderBy('lt.id','asc')
        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
        ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        ->paginate(15);

		return view('fondend.lich-trinh')->with([
			'lichtrinh'=>$lichtrinhs,
		]);
	}
	public function contact()
	{
		return view('fondend.contact');
	}
	public function timkiem(Request $request)
	{	
		$tuyen = tuyen::where([
   	 	['noidi', '=', $request['Placefrom']],
   		['noiden','=' ,$request['Placeto']]
		])->first();
       	
        $setrow = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','x.BSX','nx.name','t.dongia')
        ->where('lt.ngaydi','=',$request['day'])
        // ->where('t.noidi','=',$request['noidi'])
        // ->where('t.noiden','=',$request['noiden'])
        ->where(function ($query) use($request) {
                $query->where('t.noidi', '=',''.$request['Placefrom'].'');  
                $query->where('t.noiden', '=',''.$request['Placeto'].'');                
        })
        ->orderBy('ngaydi','asc')
        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
        ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        
         ->get();
        

        return view('fondend.searchtimkiem')->with([
			'lichtrinh'=>$setrow,
			'tuyen'=>$tuyen
		]);
	}
	public function datvexe(Request $request,$id)
	{
		$lichtrinh = lichtrinh::where('id',$id)->first();

		$xe = xe::where('id',$lichtrinh->xe_id)->first();

		$tuyen = tuyen::where('id',$lichtrinh->tuyen_id)->first();

		$nhaxe = nhaxe::where('id',$xe->nhaxe_id)->first();

		$chuyendi = CTchuyendi::where('lichtrinh_id',$id)->first();

		return view('fondend.datvexe')->with([
			'lichtrinh'=>$lichtrinh,
			'xe'=>$xe, 
			'tuyen' =>$tuyen,
			'nhaxe' =>$nhaxe,
			'idctchuyendi'=>$chuyendi
		]);
	}
	public function khachdatve(Request $request)
    {
    
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
   
            DB::commit();
             return redirect()->back()->with('status','Bạn đã đặt vé thành công Nhà xe sẽ liên hệ lại cho bạn sớm thôi !!!');
            
          
            } catch (Exception $e) {
                DB::rollBack();
            }
        
      
    }
// 	public function logout()
// 	{
		
// 		return view('trangchu');
// 	}
}

