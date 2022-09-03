<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PAPI\RegisterController;
use App\Http\Controllers\PAPI\ProductController;
use App\Http\Controllers\Api\ApiController;
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
//service profile
Route::get('service/profile/{id}', [ApiController::class, 'service_profile']);
//end service_profile

//login_register api
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('sendotp', [RegisterController::class, 'sendOtp']);
Route::post('loginWithOtp', [RegisterController::class, 'loginWithOtp']);
Route::post('logout',[RegisterController::class, 'logout']);
Route::post('auth/check',[RegisterController::class, 'auth_check']);
//end login_register api

//profile_info
Route::get('profile/info/{id}',[ApiController::class, 'api_list_user'])->name('api_list_user');
Route::get('user/room/service/list/{id}',[ApiController::class, 'api_user_service_list']);
//end profile_info
//search
Route::get('/hostel/custom/search',[ApiController::class, 'hostel_search'])->name('hostel_search');
Route::get('/room/custom/search',[ApiController::class, 'room_search'])->name('room_search');
Route::get('/parking/custom/search',[ApiController::class, 'parking_spot_search'])->name('parking_spot_search');
Route::get('/restaurant/custom/search',[ApiController::class, 'restaurant_search'])->name('restaurant_search');
Route::get('/office/custom/search',[ApiController::class, 'office_search'])->name('office_search');
Route::get('/shop/custom/search',[ApiController::class, 'shop_search'])->name('shop_search');
Route::get('/community/custom/search',[ApiController::class, 'community_search'])->name('community_search');
Route::get('/factory/custom/search',[ApiController::class, 'factory_search'])->name('factory_search');
Route::get('/warehouse/custom/search',[ApiController::class, 'warehouse_search'])->name('warehouse_search');
Route::get('/land/custom/search',[ApiController::class, 'land_search'])->name('land_search');
Route::get('/pond/custom/search',[ApiController::class, 'pond_search'])->name('pond_search');
Route::get('/swimmingpool/custom/search',[ApiController::class, 'swimmingpool_search'])->name('swimmingpool_search');
Route::get('/playground/custom/search',[ApiController::class, 'playground_search'])->name('playground_search');
Route::get('/shootingspot/custom/search',[ApiController::class, 'shootingspot_search'])->name('shootingspot_search');
Route::get('/exibution/custom/search',[ApiController::class, 'exibution_search'])->name('exibution_search');
Route::get('/rooftop/custom/search',[ApiController::class, 'rooftop_search'])->name('rooftop_search');
Route::get('/bilboard/custom/search',[ApiController::class, 'bilboard_search'])->name('bilboard_search');
Route::get('/flat/custom/search',[ApiController::class, 'flat_search'])->name('flat_search');
Route::get('/hotel/custom/search',[ApiController::class, 'hotel_search'])->name('hotel_search');

//end search
//service post api


//end service post api

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});
//post api route
Route::post('room/post',[ApiController::class, 'api_post_room'])->name('api_post_room');
Route::post('room/update',[ApiController::class, 'room_update'])->name('room_update');
Route::post('land/post',[ApiController::class, 'api_post_land'])->name('api_post_land');
Route::post('community/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_community'])->name('api_post_community');
Route::post('shooting/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_shooting'])->name('api_post_shooting');
Route::post('shop/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_shop'])->name('api_post_shop');
Route::post('factory/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_factory'])->name('api_post_factory');
Route::post('warehouse/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_warehouse'])->name('api_post_warehouse');
Route::post('pond/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_pond'])->name('api_post_pond');
Route::post('swimmingpool/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_swimmingpool'])->name('api_post_swimmingpool');
Route::post('bilboard/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_bilboard'])->name('api_post_bilboard');
Route::post('rooftop/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_rooftop'])->name('api_post_rooftop');
Route::post('resort/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_resort'])->name('api_post_resort');
Route::post('exibution/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_exibution'])->name('api_post_exibution');
Route::post('playground/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_playground'])->name('api_post_playground');
Route::post('hotel/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_hotel'])->name('api_post_hotel');
Route::post('flat/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_flat'])->name('api_post_flat');
Route::post('parking/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_parking'])->name('api_post_parking');
Route::post('building/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_building'])->name('api_post_building');
//hostel
Route::post('hostel/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_hostel'])->name('api_post_hostel');
Route::get('/hostel/edit/{id}',[App\Http\Controllers\Api\ApiController::class, 'api_hostel_edit'])->name('hostel_edit');
Route::PATCH('/hostel/update',[App\Http\Controllers\Api\ApiController::class, 'hostel_update'])->name('hostel_update');
Route::DELETE('/hostel/delete/{id}',[App\Http\Controllers\Api\ApiController::class, 'hostel_delete'])->name('hostel_delete');
//end hostel
Route::post('office/post',[App\Http\Controllers\Api\ApiController::class, 'api_post_office'])->name('api_post_office');

//get api route
Route::get('/user',[ApiController::class, 'createapi_user_registration'])->name('createapi_user_registration');
Route::get('/room',[ApiController::class, 'createapi_room'])->name('createapi_room');
Route::get('/hotel',[ApiController::class, 'createapi_hotel'])->name('createapi_hotel');
Route::get('/hostel',[ApiController::class, 'createapi_hostel'])->name('createapi_hostel');
Route::get('/bilboard',[ApiController::class, 'createapi_bilboard'])->name('createapi_bilboard');
Route::get('/community',[ApiController::class, 'createapi_community'])->name('createapi_community');
Route::get('/flat',[ApiController::class, 'createapi_flat'])->name('createapi_flat');
Route::get('/garage',[ApiController::class, 'createapi_parking'])->name('createapi_parking');
Route::get('/factory',[ApiController::class, 'createapi_factory'])->name('createapi_factory');
Route::get('/shop',[ApiController::class, 'createapi_shop'])->name('createapi_shop');
Route::get('/warehouse',[ApiController::class, 'createapi_warehouse'])->name('createapi_warehouse');
Route::get('/exhibution',[ApiController::class, 'createapi_exhibution'])->name('createapi_exhibution');
Route::get('/pond',[ApiController::class, 'createapi_pond'])->name('createapi_pond');
Route::get('/rooftop',[ApiController::class, 'createapi_rooftop'])->name('createapi_rooftop');
Route::get('/shooting',[ApiController::class, 'createapi_shooting'])->name('createapi_shooting');
Route::get('/playground',[ApiController::class, 'createapi_playground'])->name('createapi_playground');
Route::get('/swimmingpool',[ApiController::class, 'createapi_swimmingpool'])->name('createapi_swimmingpool');
Route::get('/restaurant',[ApiController::class, 'createapi_restaurant'])->name('createapi_restaurant');
Route::get('/shop',[ApiController::class, 'createapi_shop'])->name('createapi_shop');
Route::get('/exhibution',[ApiController::class, 'createapi_exhibution'])->name('createapi_exhibution');
Route::get('/land',[ApiController::class, 'createapi_land'])->name('createapi_land');
Route::get('/office',[ApiController::class, 'createapi_office'])->name('createapi_office');
Route::get('/resort',[ApiController::class, 'createapi_resort'])->name('createapi_resort');
