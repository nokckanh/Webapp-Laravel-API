<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;
use App\Http\Controllers\Api\IssueTokenTrait;
use Illuminate\Support\Str;
use Laravel\Passport\RefreshTokenRepository;
use App\chithu;
use App\lichtrinh;
use App\CTchuyendi;
use App\khachhang;
use App\hanghoa;

class AuthController extends Controller
{   
    private $client;

    public function __construct(){
        $this->client = Client::find(2);
    }

    use IssueTokenTrait;

    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {   
        /*
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10','min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'usertype' => $request->usertype,
            'password' => bcrypt($request->password)
        ]);

        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
        */
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10','min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'usertype' => $request->usertype,
            'password' => bcrypt($request->password)
        ]);

        $params = [
            'username' => request('email'),
            'password' => request('password'),
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,  
            'scope' => '*'
        ];
        $request->request->add($params);

        $proxy = Request::create('oauth/token','POST');

        return Route::dispatch($proxy);
    }
  
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Sai mat khau hoc password'
            ], 401);

        if (Auth::user()->usertype =='actor') {
            /*
            $xe = Auth::user()->xe_id;
            $user = $request->user();
          
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            
            $token->save();
            return response()->json([$user,
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ]);
            */
            $params = [
                'username' => request('email'),
                'password' => request('password'),
                'grant_type' => 'password',
                'client_id' => $this->client->id,
                'client_secret' => $this->client->secret,  
                'scope' => '*'
            ];
            $request->request->add($params);
    
            $proxy = Request::create('oauth/token','POST');
    
            return Route::dispatch($proxy);
        }
        else {
            $params = [
            'username' => request('email'),
            'password' => request('password'),
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,  
            'scope' => '*'
        ];
        $request->request->add($params);

        $proxy = Request::create('oauth/token','POST');

        return Route::dispatch($proxy);

        }
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $accessToken = Auth::user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);

        $accessToken->revoke();

        return response()->json([], 204);

    }
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {   
        $users = $request->user();
        
        return response()->json([$users],200,[],JSON_NUMERIC_CHECK);
    }


    public function refresh(Request $request){
        $this->validate($request, [
            'refresh_token' => 'required'
        ]);

        $params = [
            'username' => request('email'),
            'password' => request('password'),
            'grant_type' => 'refresh_token',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,  
            'scope' => '*'
        ];
        $request->request->add($params);

        $proxy = Request::create('oauth/token','POST');

        return Route::dispatch($proxy);

    }
    // DS chi thu
    public function getChithu($id){
    
    if (chithu::where('lichtrinh_id',$id)->exists()) {
            $data = chithu::where('lichtrinh_id',$id)->get();
            return response( $data, 200,[],JSON_NUMERIC_CHECK);
          } else {
            return response()->json([
              "message" => "ko co danh sach"
            ], 404);
          }
    }

    public function addChithu(Request $request){

        $data = chithu::create([
            'lichtrinh_id'     => $request->lichtrinh_id,
            'name' => $request->name,
            'chithu' =>$request->chithu,
            'ghichu' =>$request->ghichu,    
        ]);
        $lichtrinh = lichtrinh::where('id',$request->lichtrinh_id)->get();
        return response()->json($lichtrinh,200,[],JSON_NUMERIC_CHECK); 
    }

    public function getLichtrinh($idxe){
        if (lichtrinh::where('xe_id',$idxe)->exists()) {
            $data = lichtrinh::where('xe_id',$idxe)->get();
            return response()->json($data,200,[],JSON_NUMERIC_CHECK);
          } else {
            return response()->json([
              "message" => "Ko co lich trinh"
            ], 404);
          }
    }

    public function addlichtrinh(Request $request)
    {   
        try {
            DB::beginTransaction();
             $idlt = lichtrinh::create([
                'xe_id'     => $request->xe_id,
                'tuyen_id' => $request->tuyen_id,
                'xuatben' =>$request->xuatben,
                'ngaydi' =>$request->ngaydi
            ]);
            
             CTchuyendi::create([
                'lichtrinh_id' => $idlt->id
            ]);
            DB::commit();
            return response()->json(["message" => "Them thanh cong"],200,[],JSON_NUMERIC_CHECK); 
            } catch (Exception $e) {
                DB::rollBack();
            }

    }
     

    public function lichtrinhxe()
	{	
		$lichtrinhs = DB::table('lichtrinh as lt')
        ->select('lt.*', 't.noidi','t.noiden','x.BSX','nx.name','t.dongia')
        ->join('tuyen as t', 't.id', '=', 'lt.tuyen_id')
        ->join('xe as x', 'x.id', '=', 'lt.xe_id')
        ->join('nhaxe as nx','x.nhaxe_id', '=', 'nx.id')
        ->orderBy('lt.id','asc')
        ->get();

        return response()->json($lichtrinhs,200,[],JSON_NUMERIC_CHECK);
		
	}

    public function tongthunhap($idlichtrinh)
    {
       // $thunhap = chithu::where('lichtrinh_id',$idlichtrinh)
       // ->sum('chithu');

       $thunhap = DB::table('chithu')
       ->select(DB::raw('SUM(chithu) as tongthunhap') )
       ->where('lichtrinh_id',$idlichtrinh)
       ->get();
    

       return response()->json($thunhap,200,[],JSON_NUMERIC_CHECK);
    }
    public function tongchitieu($idlichtrinh)
    {
       // $thunhap = chithu::where('lichtrinh_id',$idlichtrinh)
       // ->sum('chithu');

       $chitieu = DB::table('chithu')
       ->select(DB::raw('SUM(chithu) as tongchitieu') )
       ->where('lichtrinh_id',$idlichtrinh)
       ->where('chithu','<',0)
       ->get();
    

       return response()->json($chitieu,200,[],JSON_NUMERIC_CHECK);
    }

    public function danhsachve($idlichtrinh){
        $idctchuyendis = CTchuyendi::where('lichtrinh_id',$idlichtrinh)->first();

        $dskh = DB::table('ctchuyendi_khachhang as ct')
        ->select('ct.*','kh.*')
        // ->orderBy('ngaydi','asc')
        ->where('ct.CTchuyendi_id','=',$idctchuyendis->id)
        ->join('ctchuyendi as c', 'c.id', '=', 'ct.Ctchuyendi_id')
        ->join('khachhang as kh', 'kh.id', '=', 'ct.khachhang_id')
        ->get();

         return response()->json($dskh,200,[],JSON_NUMERIC_CHECK);
    }

    public function danhsachhanghoa($idlichtrinh)
    {

        $idctchuyendis = CTchuyendi::where('lichtrinh_id',$idlichtrinh)->first();

        $dshh = DB::table('ctchuyendi_hanghoa as ct')
        ->select('ct.*','hh.*')
        // ->orderBy('ngaydi','asc')
        ->where('ct.CTchuyendi_id','=',$idctchuyendis->id)
        ->join('ctchuyendi as c', 'c.id', '=', 'ct.Ctchuyendi_id')
        ->join('hanghoa as hh', 'hh.id', '=', 'ct.hanghoa_id')
        ->get();

        return response()->json($dshh,200,[],JSON_NUMERIC_CHECK);
    }

    public function addKhachhang(Request $request)
    {
         try {
            DB::beginTransaction();

            $idctchuyendi = CTchuyendi::where('lichtrinh_id',$request->lichtrinh_id)->first();

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
                'CTchuyendi_id'=> $idctchuyendi->id,
                'created_at'=>$time,
                'updated_at'=>$time
            ]);

            
            DB::commit();
            return response()->json(["message" => "Them thanh cong"],200,[],JSON_NUMERIC_CHECK); 
            
          
            } catch (Exception $e) {
                DB::rollBack();
            }
    }

    public function addHanghoa(Request $request)
    {
        try {
            DB::beginTransaction();

            $idctchuyendi = CTchuyendi::where('lichtrinh_id',$request->lichtrinh_id)->first();

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
                'CTchuyendi_id'=>$idctchuyendi->id,
                'created_at'=>$time,
                'updated_at'=>$time
            ]);

            // $idcd = CTchuyendi::findorFail($request['idchuyendi']);
            
            
            
            DB::commit();
            
            return response()->json(["message" => "Them thanh cong"],200,[],JSON_NUMERIC_CHECK); 
            
          
            } catch (Exception $e) {
                DB::rollBack();
            }
    }


     
}

