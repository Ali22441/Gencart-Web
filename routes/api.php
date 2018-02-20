<?php

use Illuminate\Http\Request;

// use App\Http\Controllers\Api as Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/***************Auth Api's *************/
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::post('social_login', 'API\UserController@social_login');
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::post('imagetest','API\UserController@convert_image');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('profile', 'API\UserController@details');
    
    Route::post('update_profile', 'API\UserController@update');
    
    
    Route::POST('/stores', 'Api\StoreController@all');
    
    Route::POST('/create_store', 'Api\StoreController@store');
    
    Route::PUT('/update_store/{store}', 'Api\StoreController@update');
    
    Route::DELETE('/delete_store/{id}', 'Api\StoreController@destroy');
    
    Route::GET('/get_store/{store}', 'Api\StoreController@getStore');
    
    Route::GET('/get_orders/{store}', 'Api\StoreController@getOrders');

    Route::GET('/search_store/{search}/{offset}/{limit}', 'Api\StoreController@search');
    

    Route::POST('/create_product', 'Api\ProductController@store');

    Route::POST('/create_department', 'Api\DepartmentController@store');
    
    Route::PUT('/update_department/{department}', 'Api\DepartmentController@update');
    
    Route::DELETE('/delete_department/{id}', 'Api\DepartmentController@destroy');

    Route::GET('/get_department/{id}', 'Api\DepartmentController@getDepartment');

    
    Route::GET('/categories', 'Api\CategoryController@all');
    
    Route::POST('/get_stores_by_category', 'Api\CategoryController@getStores');
    

    Route::POST('/storeBulk/{store}', 'Api\ProductController@storeBulk');

    Route::GET('/product_details/{product}', 'Api\ProductController@details');

    Route::POST('/order', 'Api\OrderController@store');

    Route::DELETE('/order_delete/{order}', 'Api\OrderController@destroy');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**********   Store's Api's **********/

Route::middleware('auth:api')->get('/stores/{id}', 'Api\StoreController@getStore');// Get Specific Store
Route::middleware('auth:api')->get('/categories', 'Api\CategoryController@all');
Route::middleware('auth:api')->get('/categories/{category}/stores', 'Api\CategoryController@getStores');
// Route::middleware('auth:api')->get('/stores/{id}', 'Api\StoreController@getStore');

/********** Driver's Api's ***********/

/********** Admin    Api's ***********/