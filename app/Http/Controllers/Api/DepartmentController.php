<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department; 
use App\Store;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    
    public $successStatus = 200;
    
    public function __construct()
    {
         $user = Auth::user(); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\DepartmentRequest $request, Store $store)
    {
        $user = Auth::user(); 
        
        if($user->can('create', $store)){
         
            $department = Department::create($request->except('image'));
            
            if($department){
                
                if($request->input('image') != '') {
                
                $department->image =  image_decoder($request->input('image'), 'departments', $department->id);
                
                $department->save();
                
                }
            return response()->json(['success' => $department], $this->successStatus);
                
            }else{
                return response()->json(['error'=>'Unauthorised'], 401);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\DepartmentRequest $request, $department)
    {
        $user       = Auth::user(); 

        $department = Department::find($department);

          if ($user->can('update', $department)){
        
            $department->fill($request->except(['image']))->save();

            if($department){
                
                if($request->input('image') != '') {
                
                $department->image =  image_decoder($request->input('image'), 'departments', $department->id);
                
                $department->save();
                
                }
            return response()->json(['success' => $department], $this->successStatus);
                
            }else{
                return response()->json(['error'=>'Unauthorised'], 401);
            }
           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy( $department)
    {
        $user = Auth::user(); 
       
        $department = Department::find($department);
         if ($user->can('delete', $department)) {
           
            if($department->delete()){

                return response()->json(['success' => ''], $this->successStatus);
            }else{

                 return response()->json(['failure' => ''], 200);
            }
        
        } else {

            return response()->json(['error'=>'Unauthorised'], 401);
         }
    }

      public function getDepartment($id){
        //   distance_measure('33.525550,73.112831',"33.691501,73.008058");
        $department = Department::with(['products', 'shelves'])->whereId($id)->first();
        
        return response()->json(['success' => $department], $this->successStatus);
    }
}
