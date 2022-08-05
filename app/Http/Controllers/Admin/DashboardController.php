<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\nhaxe;
use App\xe;
use App\tuyen;
use App\lichtrinh;
use App\CTchuyendi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function register(Request $request)
    {	
    	$users = User::all();

    	$users = User::paginate(10);

       
        $page =1;
        if(isset($request->page)){
            $page = $request->page;
        }

        $index = ($page-1)*10+1;
        return view('admin.register')->with([
            'users' =>$users,
            'index' =>$index
        ]);
    }

    public function registeredit(Request $request,$id )
    {	
       $users = User::findOrFail($id);

       return view('admin.register-edit')->with('users',$users);
   }

   public function registerupdate(Request $request,$id)
   {
       $users = User::find($id);
       $users ->name = $request->input('username');
       $users ->usertype = $request->input('usertype');
       $users ->email = $request->input('email');
       $users ->update();

       return redirect()->route('role-register')->with('status','Cập nhật thành công');
   }

   public function registerdelete(Request $request,$id)
   {
       $users =User::findOrFail($id);
       $users->delete();
       return redirect()->route('role-register')->with('status','Xóa thành công');
   }

   public function registeradd(Request $request)
   {
        	// $users = new User;

        	// $users ->name = $request->input('name');
        	// $users ->phone = $request->input('phone');
        	// $users ->email = $request->input('email');
        	// $users ->password = Hash::make($request -> input('password') );

            // $request->input('password');
        	// $users->save();
        User::insert([
            'name' => $request['name'],
            'phone'=>$request['phone'],
            'email' => $request['email'],
            'usertype' =>'customer',
            'password' => Hash::make($request['password'])
        ]);
        return redirect()->route('role-register')->with('status','Thêm thành công');
    }

    public function nhaxe()
    {   
        $nhaxes = nhaxe::all();
        $nhaxes = nhaxe::paginate(10);

        return view('admin.nhaxe')->with('nhaxe',$nhaxes);
    }

    public function nhaxeadd(Request $request)
    {
        nhaxe::create([
            'name' => $request['name'],
            'address'=>$request['address'] ,
            'localtion' =>$request['location'] 
        ]);
        return redirect()->route('nhaxe')->with('status','Thêm thành công');
    }

    public function nhaxedelete(Request $request,$id)
    {
        $nhaxes =nhaxe::findOrFail($id);
        $nhaxes->delete();
        return redirect()->route('nhaxe')->with('status','Xóa thành công');
    }

    public function nhaxeedit(Request $request,$id )
    {   
        $nhaxes = nhaxe::findOrFail($id);

        return view('admin.nhaxe-edit')->with('nhaxe',$nhaxes);
    }

    public function nhaxeupdate(Request $request,$id)
    {
        $nhaxes = nhaxe::find($id);
        $nhaxes ->name = $request->input('name');
        $nhaxes ->address = $request->input('address');
        $nhaxes ->localtion = $request->input('localtion');
        $nhaxes ->update();

        return redirect()->route('nhaxe')->with('status','Cập nhật thành công');
    }

    public function nhaxeaddxe(Request $request,$id)
    {
        $nhaxes = nhaxe::findOrFail($id);

        return view('admin.nhaxe-add')->with('nhaxe',$nhaxes);
    }

    public function xeaddactor(Request $request,$id)
    {
                // $users = new User;

                // $users ->name = $request->input('name');
                // $users ->phone = $request->input('phone');
                // $users ->email = $request->input('email');
                // $users ->password = Hash::make($request -> input('password') );

             //    // $request->input('password');
                // $users->save();
        User::insert([
            'xe_id' =>$id,
            'name' => $request['name'],
            'phone'=>$request['phone'],
            'email' => $request['email'],
            'usertype' =>'actor',

            'password' => Hash::make($request['password'])
        ]);

        return redirect()->route('role-register')->with('status','Thêm thành công');
    }

    public function nhaxeupdateaddxe(Request $request,$id)
    {
        $nhaxes = nhaxe::find($id);

        xe::create([
            'nhaxe_id' => $id,
            'seats' => $request['seats'],
            'BSX'=>$request['BSX'] ,
            'phonecar' =>$request['phone'] 

        ]);

        return redirect()->route('nhaxe')->with('status','Cập nhật thành công');
    }

    public function xe(Request $request)
    {

        $data = DB::table('xe as x')
        ->select('x.*', 'nx.name')
        ->orderBy('x.id','asc')

        ->join('nhaxe as nx', 'nx.id', '=', 'x.nhaxe_id')

        ->paginate(10);

        $page =1;
        if(isset($request->page)){
            $page = $request->page;
        }

        $index = ($page-1)*10+1;

        return view('admin.xe')->with([
            'xe'=>$data, 
            'index'=> $index,

        ]);
    }

    public function xeedit(Request $request,$id)
    {
        $xes = xe::findOrFail($id);

        return view('admin.xe-edit')->with('xe',$xes);
    }


    public function xeupdate(Request $request,$id)
    {
        $xes = xe::find($id);
        $xes ->nhaxe_id = $request->input('name');
        $xes ->seats = $request->input('address');
        $xes ->BSX = $request->input('localtion');
        $xes ->update();

        return redirect()->route('xe')->with('status','Cập nhật thành công');
    }  

    public function xedelete(Request $request,$id)
    {
        $xes =xe::findOrFail($id);
        $xes->delete();
        return redirect()->route('xe')->with('status','Xóa thành công');
    }

    public function xelichtrinh(Request $request,$id)
    {
       $xes = xe::findOrFail($id);
       $tuyens = tuyen::all();
       return view('admin.xe-lichtrinh')->with([
        'xe'=>$xes,
        'tuyen'=>$tuyens
    ]);
    }

    public function xeupdatelichtrinh(Request $request,$id)
    {   
            try {
            DB::beginTransaction();
            $xe = xe::find($id);

           $idlt = lichtrinh::create([
                'xe_id'     => $id,
                'tuyen_id' => $request['tuyenxe'],
                'xuatben' =>$request['xuatben'],
                'ngaydi' =>$request['ngaydi'] 
            ]);
            
             CTchuyendi::create([
                'lichtrinh_id' => $idlt->id

                
            ]);
            
            DB::commit();
            
            
            return redirect()->route('lichtrinh')->with('status','Cập nhật thành công');  
            } catch (Exception $e) {
                DB::rollBack();
            }
            
    }

        // Tuyến

    public function tuyen(Request $request)
    {   
       $tuyen = DB::table('tuyen as x')
       ->select('x.*')

       ->paginate(10);

       return view('admin.tuyen')->with('tuyen',$tuyen );
    }

    public function tuyenadd(Request $request)
    {

        tuyen::create([
            'id' => $request['id'],
            'noidi' => $request['noidi'],
            'noiden'=>$request['noiden'] ,
            'dongia' =>$request['dongia'] 

        ]);

        return redirect()->route('tuyen')->with('status','Thêm thành công');
    }

    public function tuyendelete(Request $request,$id)
    {
        $tuyens =tuyen::findOrFail($id);
        $tuyens->delete();
        return redirect()->route('tuyen')->with('status','Xóa thành công');
    }


        //lịch trình

    public function lichtrinh(Request $request)
    {
        $lichtrinhs = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','x.BSX','nx.name')
        ->orderBy('id','desc')
        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
         ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        ->paginate(10);



        $page =1;
        if(isset($request->page)){
            $page = $request->page;
        }

        $index = ($page-1)*10+1;

        return view('admin.lichtrinh')->with([
            'lichtrinh'=>$lichtrinhs,
            'index' =>$index
        ]);
    }

    public function lichtrinhdelete(Request $request,$id)
    {
        $lichtrinhs =lichtrinh::findOrFail($id);
        $lichtrinhs->delete();

        return redirect()->route('lichtrinh')->with('status','Xóa thành công');
    }

    public function lichtrinhedit(Request $request,$id)
    {
        $lichtrinhs = lichtrinh::findOrFail($id);
        $tuyen = tuyen::all();


         return view('admin.lichtrinh-edit')->with([
            'lichtrinh'=>$lichtrinhs,
            'tuyen'=>$tuyen, 
            ]);
    }
    public function lichtrinhupdate(Request $request,$id)
   {
       $lichtrinh = lichtrinh::find($id);
       $lichtrinh ->tuyen_id = $request->input('tuyenxe');
       $lichtrinh ->xuatben = $request->input('xuatben');
       $lichtrinh ->ngaydi = $request->input('ngaydi');
       $lichtrinh ->update();

       return redirect()->route('lichtrinh')->with('status','Cập nhật thành công');
   }

    // Employeess

    // public function dashemployee(Request $request,$xe)
    // {
    //     // $users = user::findOrFail($xe);

    //     return view('employees.dashemployee');
    // }
}



