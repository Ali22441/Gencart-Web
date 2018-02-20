<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User;
use DB;
use App\Addresses;
use Illuminate\Support\Facades\Auth;
use Authy\AuthyApi as AuthyApi;
use Validator;
use App\Transformers\Json;

use Intervention\Image\ImageManagerStatic as Image;
class UserController extends Controller
{
    public $successStatus = 200;
 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'zipcode' => 'nullable|string|min:5',
            'lat_lng' => 'nullable|string',
            'phone' => 'required|unique:users',
            'place_id' => 'nullable|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(!isset($data['login_type'])){
            $data['login_type'] = 'normal';
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'zipcode' => $data['zipcode'],
            'role'  => $data['role'],
            'place_id' => $data['place_id'],
            'phone' => $data['phone'],
            'lat_lng' => $data['lat'].','.$data['lng'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'login_type' => $data['login_type'],
            'password' => bcrypt($data['password']),
            'country_code' => $data['country_code'],
            'authy_id' => null
           
            
        ]);

    }
   
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request, AuthyApi $authyApi)
    {
	
        
        if($this->validator($request->all())->fails()){
            $error = $this->validator($request->all())->errors();
            return response()->json(Json::response(null,$error->first()), 401); 
        };
        DB::beginTransaction();

        $user = $this->create($request->all());

        $authyUser = $authyApi->registerUser(
        $user->email,
        $user->phone_number,
        $user->country_code
        );
        
        if ($authyUser->ok()) {
             $newUser->authy_id = $authyUser->id();
            }
        $sms = $authyApi->requestSms($newUser->authy_id);
         DB::commit();
		$success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['data'] =  $user;

        return response()->json(['success'=>$success], $this->successStatus);
       
   }

       public function login(){
         
        if(Auth::attempt(['email' => request('email'),  'password' => request('password')])){
            $user = Auth::user();
            
			$success['token'] =  $user->createToken('MyApp')->accessToken;
			
			return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

     public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');  
        $user->zipcode = $request->input('zipcode'); 
        $user->phone = $request->input('phone'); 
        $user->save();
        if($user && ($request->input('image') != '')){
             $user->image =  image_decoder($request->input('image') , 'users',$user->id);
              $user->save();
                return response()->json(['success' => $user], $this->successStatus);
        }else{
             return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function social_login(Request $request){

        $data ['email'] = $request->input('email');
        $data ['name'] = $request->input('name');
        $data ['lat'] = $request->input('lat');
        $data ['lng'] = $request->input('lng');
        $data ['phone'] = $request->input('phone' , null);
        $data ['zipcode']= $request->input('zipcode' , null);
        $data ['place_id']= $request->input('place_id' , null);
        $data ['role'] = $request->input('role');
        $data ['address'] = $request->input('address');
        $data ['lat_lng'] = $request->input('lat') + $request->input('lng')  ;
        $data ['password'] = $request->input('id');
        if($request->input('login_type') == 'facebook'){
            $data ['image'] = "https://graph.facebook.com/{$request->input('id')}/picture?type=normal";     
        }
        if($request->input('login_type') == 'twitter'){
            $data ['image'] = "https://graph.facebook.com/{$request->input('id')}/picture?type=normal";     
        }
        $data ['login_type'] = $request->input('login_type');
        $user = $this->create($data);

        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['data'] =  $user;

        return response()->json(['success'=>$success], $this->successStatus);
    }


}
