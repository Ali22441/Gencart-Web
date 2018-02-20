<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Store;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class StoreController extends Controller
{
    public $successStatus = 200;
    /**
     * Return a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function all(Request $request)
    {
        $stores = Store::get();
        
	
        foreach($stores as $store){     
        
            $store['distance'] = custom_distance($request->input('origin'), $store->lat_long);
       
        }
        
         return response()->json(['success' => $stores], $this->successStatus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search($request , $offset,  $limit){

        $store =  Store::Where('name', 'like', '%' . $request. '%')->offset($offset)->limit($limit)->orderBy('id', 'desc')->get();

        return response()->json(['success' => $store], $this->successStatus);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreRequest $request)
    { 

            $request->request->add(['user_id'=> Auth::user()->id]);

            $store = Store::create($request->except(['logo',  'banner']));

            if($store) {

                        if (!empty($request->input('logo'))) {
                            $store->logo =  image_decoder($request->input('logo') , 'logos',$store->id);
                            $store->save();  
                        }

                        if (!empty($request->input('banner'))) {
                            $store->banner =  image_decoder($request->input('banner') , 'banners',$store->id);
                            $store->save();    
                        }
                    return response()->json(['success' => $store], $this->successStatus);
                    }
            else{
                    return response()->json(['error'=>'Unauthorised'], 401);
            }
          
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StoreRequest $request, $id)
    {
        $user = Auth::user(); 

        $store  =   Store::findOrFail($id);
    
        if ($user->can('update', $store)){
        
            $store->fill($request->except(['logo',  'banner']))->save();
            
            if($store){

            if (!empty($request->input('logo'))) {
                    $store->logo =  image_decoder($request->input('logo') , 'logos',$store->id);
                    $store->save();  
                }

            if (!empty($request->input('banner'))) {
                    $store->banner =  image_decoder($request->input('banner') , 'banners',$store->id);
                    $store->save();    
                }
                return response()->json(['success' => $store], $this->successStatus);
            }
           
        }
        else{
                    return response()->json(['error'=>'Unauthorised'], 401);
        }  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user(); 
       
        $store = Store::find($id);
       
         if ($user->can('delete', $store)) {
           
            if($store->delete()){

                return response()->json(['success' => $store], $this->successStatus);
            }else{

                 return response()->json(['failure' => ''], 200);
            }
        
        } else {

            return response()->json(['error'=>'Unauthorised'], 401);
         }
    }

    public function getStore($id){

        $store = Store::with(['departments', 'products', 'shelves'])->whereId($id)->first();
        
        return response()->json(['success' => $store], $this->successStatus);
    }

    public function getOrders($store_id){

        $store = Store::find($store_id);

        $user =  Auth::user();
       
        if ($user->can('view_orders', $store)) 
        {
           
           $store = Store::with(['orders'])->whereId($store_id)->first();

            return response()->json(['success' => $store], $this->successStatus);
        }
        echo 'no';
        
    }
    

    
}
