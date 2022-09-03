<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PAPI\BaseController as BaseController;
use Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\Hostel;
use App\Models\Bilboard;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Community_Center;
use App\Models\Office;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Exibution_Center;
use App\Models\Pond;
use App\Models\Rooftop;
use App\Models\Shooting_Spot;
use App\Models\Play_ground;
use App\Models\Swimming_Pool;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Land;
use App\Models\Building;
use App\Models\Payment;
use Carbon\Carbon;
use Image;
use Spatie\QueryBuilder\QueryBuilder;
class ApiController extends BaseController
{
    //
    function service_profile($id){
      $lists=Room::all();
      $payments=Payment::where('user_id', $id)->get()->toArray();
      $users=User::where('id', $id)->get()->toArray();
      $rooms=Room::where('user_id', $id)->get()->toArray();
      $bilboards=Bilboard::where('user_id',$id)->get()->toArray();
      $communities=Community_Center::where('user_id', $id)->get()->toArray();
      $exhibutions=Exibution_Center::where('user_id', $id)->get()->toArray();
      $factories=Factory::where('user_id', $id)->get()->toArray();
      $flats=Flat::where('user_id', $id)->get()->toArray();
      $hostels=Hostel::where('user_id', $id)->get()->toArray();
      $hotels=Hotel::where('user_id', $id)->get()->toArray();
      $offices=Office::where('user_id', $id)->get()->toArray();
      $playgrounds=Play_ground::where('user_id', $id)->get()->toArray();
      $ponds=Pond::where('user_id', $id)->get()->toArray();
      $retaurants=Restaurant::where('user_id', $id)->get()->toArray();
      $rooftops=Rooftop::where('user_id', $id)->get()->toArray();
      $shootings=Shooting_Spot::where('user_id',$id)->get()->toArray();
      $shops=Shop::where('user_id', $id)->get()->toArray();
      $swimmings=Swimming_Pool::where('user_id', $id)->get()->toArray();
      $lands=Land::where('user_id', $id)->get()->toArray();
      $warehouses=Warehouse::where('user_id', $id)->get()->toArray();
      $parkings=Parking_Spot::where('user_id', $id)->get()->toArray();
      $buildings=Building::where('user_id', $id)->get()->toArray();
      if($id == null){
        return $this->sendError($error, 'no data found');
      }else{
        return array_merge($rooms, $bilboards,$communities,$exhibutions,$flats,$lands,$factories,$offices,$hotels,$hostels,$parkings,
        $ponds,$playgrounds,$rooftops,$shootings,$shops,$swimmings,$warehouses,$buildings);
      }



    }
    public function createapi_user_registration(){
      $user=user::all();
      return $user;
    }

    public function createapi_room(){

      $success = Room::all();

      return $this->sendResponse($success, 'room information get successfully.');

    }

    public function createapi_hotel(){
      $success = Hotel::all();

      return $this->sendResponse($success, 'Hotel information get successfully.');
    }

    public function createapi_hostel(){
      $success = Hostel::all();

      return $this->sendResponse($success, 'Hostel information get successfully.');
    }

    public function createapi_bilboard(){
      $success = Bilboard::all();

      return $this->sendResponse($success, 'Bilboard information get successfully.');
    }

    public function createapi_community(){
      $success = Community_Center::all();

      return $this->sendResponse($success, 'Community Center information get successfully.');
    }

    public function createapi_flat(){
     $success = Flat::all();

      return $this->sendResponse($success, 'Flat information get successfully.');
    }

    public function createapi_parking(){
      $success = Parking_Spot::all();

      return $this->sendResponse($success, 'parking Spot information get successfully.');
    }

    public function createapi_factory(){
      $success = Factory::all();

      return $this->sendResponse($success, 'factory  information get successfully.');
    }

    public function createapi_warehouse(){
      $success = Warehouse::all();

      return $this->sendResponse($success, 'Warehouse information get successfully.');
    }

    public function createapi_exhibution(){
      $success = Exibution_Center::all();

      return $this->sendResponse($success, 'Exibution_Center information get successfully.');
    }

    public function createapi_pond(){
      $success = Pond::all();

      return $this->sendResponse($success, 'pond information get successfully.');
    }

    public function createapi_rooftop(){
      $success = Rooftop::all();

      return $this->sendResponse($success, 'Rooftop information get successfully.');
    }

    public function createapi_shooting(){
      $success = Shooting_Spot::all();

      return $this->sendResponse($success, 'Shooting_Spot information get successfully.');
    }

    public function createapi_playground(){
      $success = Play_ground::all();

      return $this->sendResponse($success, 'Play_ground information get successfully.');
    }

    public function createapi_swimmingpool(){
      $success = Swimming_Pool::all();

      return $this->sendResponse($success, 'Swimming_Pool information get successfully.');
    }

    public function createapi_restaurant(){
      $success = Restaurant::all();

      return $this->sendResponse($success, 'Restaurant information get successfully.');
    }

    public function createapi_shop(){
      $success = Shop::all();

      return $this->sendResponse($success, 'Shop information get successfully.');
    }

    public function createapi_office(){
      $success = Office::all();

      return $this->sendResponse($success, 'Office information get successfully.');
    }

    public function createapi_land(){
      $success = Land::all();

      return $this->sendResponse($success, 'Land information get successfully.');
    }

      public function createapi_resort(){
      $success = Restaurant::all();

      return $this->sendResponse($success, 'Restaurant information get successfully.');
    }


      public function api_list_user($id){

      return User::find($id);

    }

    public function api_user_service_list($id){

    $success=Room::where('user_id',$id)->get();

    return $this->sendResponse($success, 'User room service list get successfully.');

  }

//search

//hostel
function hostel_search(Request $request){
   // Get the search value from the request
        $address = $request->input('address');
        $attached_toilet = $request->input('attached_toilet');
        $attached_varanda = $request->input('attached_varanda');
        $hot_water = $request->input('hot_water');
        $ac = $request->input('ac');
        $wifi = $request->input('wifi');
        $laundry = $request->input('laundry');
        $lift = $request->input('lift');
        $furnished = $request->input('furnished');
        $cable_tv = $request->input('cable_tv');
        $parking = $request->input('parking');
       // Search in the title and body columns from the posts table
           $success = Hostel::query()

            ->where('address', 'LIKE', "%{$address}%")
            ->where('attached_toilet', 'LIKE', "%{$attached_toilet}%")
            ->where('attached_varanda', 'LIKE', "%{$attached_varanda}%")
            ->where('hot_water', 'LIKE', "%{$hot_water}%")
            ->where('ac', 'LIKE', "%{$ac}%")
            ->where('wifi', 'LIKE', "%{$wifi}%")
            ->where('laundry', 'LIKE', "%{$laundry}%")
            ->where('lift', 'LIKE', "%{$lift}%")
            ->where('furnished', 'LIKE', "%{$furnished}%")
            ->where('cable_tv', 'LIKE', "%{$cable_tv}%")
            ->where('parking', 'LIKE', "%{$parking}%")

           ->get();

       // Return the search view with the resluts compacted

      return $this->sendResponse($success, 'Hostel Search information get successfully.');

   }
//end hostel
   //room
   function room_search(Request $request){
   // Get the search value from the request

      $success = QueryBuilder::for(Room::class)
     ->allowedFilters(['address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
     'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','room_size'])
     ->get();
       return $this->sendResponse($success, 'Room Search information get successfully.');
      }
   //end room
   //parking Spot
       function parking_spot_search (){
         $success = QueryBuilder::for(Parking_Spot::class)
            ->allowedFilters(['address', 'price','vehicle_type'])
            ->get();

           return $this->sendResponse($success, 'parkinf spot information get successfully.');
       }

   //end parking spot
   //resort
       function restaurant_search (){
         $success = QueryBuilder::for(Restaurant::class)
            ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','attached_varanda','hot_water',
            'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool'])
            ->get();

           return $this->sendResponse($success, 'restaurant information get successfully.');
       }

   //end resort
   //office
       function office_search (){
         $success = QueryBuilder::for(Office::class)
            ->allowedFilters(['address', 'price','fire_safety','lift','emergency_lift','utilities','parking'])
            ->get();

           return $this->sendResponse($success, 'office information get successfully.');
       }

   //end office
   //shop
       function shop_search (){

         $success = QueryBuilder::for(Shop::class)
            ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking'])
            ->get();

           return $this->sendResponse($success, 'Shop information get successfully.');
       }

   //end shop
   //Community_Center
       function community_search(){

         $success = QueryBuilder::for(Community_Center::class)
            ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
            ->get();

           return $this->sendResponse($success, 'Community Center information get successfully.');
       }

   //end Community_Center
   //factory
       function factory_search(){

         $success = QueryBuilder::for(Factory::class)
            ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
            ->get();

           return $this->sendResponse($success, 'factory information get successfully.');
       }

   //end factory
   //Warehouse
       function warehouse_search(){

         $success = QueryBuilder::for(Warehouse::class)
            ->allowedFilters(['address', 'price','type','floor_level','floor_size','road_width','drainage_system','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
            ->get();

           return $this->sendResponse($success, 'land information get successfully.');
       }

   //end Warehouse
   //Land
       function land_search(){

         $success = QueryBuilder::for(land::class)
            ->allowedFilters(['address', 'price','land_area','vegetations','road_width'])
            ->get();

           return $this->sendResponse($success, 'Land information get successfully.');
       }

   //end Land
   //pond
       function pond_search(){

         $success = QueryBuilder::for(Pond::class)
            ->allowedFilters(['address', 'price','land_area','vegetations','road_width'])
            ->get();

           return $this->sendResponse($success, 'Pond information get successfully.');
       }

   //end pond
   //swimmingpool
       function swimmingpool_search(){

         $success = QueryBuilder::for(Swimming_Pool::class)
            ->allowedFilters(['address', 'price','wifi','laundry','toilet','parking'])
            ->get();

           return $this->sendResponse($success, 'swimmingpool information get successfully.');
       }

   //end swimmingpool
   //playground
       function playground_search(){

         $success = QueryBuilder::for(Play_ground::class)
            ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
            'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool'])
            ->get();

           return $this->sendResponse($success, 'playground information get successfully.');
       }

   //end playground
   //shootingspot
       function shootingspot_search(){

         $success = QueryBuilder::for(Shooting_Spot::class)
            ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
            'laundry','ac','cable_tv','parking','cooking'])
            ->get();

           return $this->sendResponse($success, 'Shooting information get successfully.');
       }

   //end shootingspot
   //exibution center
       function exibution_search(){

         $success = QueryBuilder::for(Exibution_Center::class)
            ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
            'laundry','ac','cable_tv','parking','cooking'])
            ->get();

           return $this->sendResponse($success, 'exhibution information get successfully.');
       }

   //end exibution center
   //Rooftop
       function rooftop_search(){

         $success = QueryBuilder::for(Rooftop::class)
            ->allowedFilters(['address', 'price','utilities','lift','shed','parking'])
            ->get();

           return $this->sendResponse($success, 'rooftop information get successfully.');
       }

   //end Rooftop
   //Ghat
       function ghat_search(){

         $success = QueryBuilder::for(Ghat::class)
            ->allowedFilters(['address', 'price'])
            ->get();

           return $this->sendResponse($success, 'ghat information get successfully.');
       }

   //end Ghat
   //bilboard
     function bilboard_search(Request $request){
       // Get the search value from the request
       $success = QueryBuilder::for(Bilboard::class)
      ->allowedFilters(['address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
      'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','room_size'])
      ->get();

           // Return the search view with the resluts compacted
           return $this->sendResponse($success, 'billboard information get successfully.');
       }


   //end bilboard
   //flat
       function flat_search(Request $request){
          // Get the search value from the request
          $success = QueryBuilder::for(Flat::class)
         ->allowedFilters(['address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
         'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','room_size'])
         ->get();

              // Return the search view with the resluts compacted

              return $this->sendResponse($success, 'flat information get successfully.');
          }


   //end flat
   //hotel
         function hotel_search(Request $request){
            // Get the search value from the request
            $success = QueryBuilder::for(Hotel::class)
           ->allowedFilters(['address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
           'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','room_size'])
           ->get();

                // Return the search view with the resluts compacted

                return $this->sendResponse($success, 'hotel information get successfully.');
            }


   //end hotel
//end search

//post function start

//building
  public function api_post_building(Request $request){
    $success=Building::create([
      'user_id'=>$request->user_id,
      'post_type'=>$request->post_type,
      'title'=>$request->title,
      'date'=>$request->date,
      'phone'=>$request->phone,
      'price'=>$request->price,
      'building_name'=>$request->building_name,
      'building_size'=>$request->building_size,
      'description'=>$request->description,
      'address'=>$request->address,
      'gas'=>$request->gas,
      'water'=>$request->water,
      'electricity'=>$request->electricity,
      'lift'=>$request->lift,
      'parking'=>$request->parking,
      'fire_exit'=>$request->fire_exit,
      'address'=>$request->address,
      'photo'=>$request->photo,
      'photo1'=>$request->photo1,
      'photo2'=>$request->photo2,
      'photo3'=>$request->photo3,
      'photo4'=>$request->photo4,
      'photo5'=>$request->photo5,
      'photo6'=>$request->photo6,
      'video'=>$request->video,
      'active'=>1,
      'created_at'   =>Carbon::now()
    ]);
    if($request->file('photo')){
     $file= $request->file('photo');
     $filename= date('YmdHi').$file->getClientOriginalName();
     $file-> move(public_path('uploads/buildings/'), $filename);
     $success['photo']= $filename;
          }
    $success->save();
         if($request->file('photo1')){
       $file= $request->file('photo1');
       $filename= date('YmdHi').$file->getClientOriginalName();
       $file-> move(public_path('uploads/buildings/'), $filename);
       $success['photo1']= $filename;
     }
          $success->save();
                if($request->file('photo2')){
           $file= $request->file('photo2');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/'), $filename);
           $success['photo2']= $filename;
         }
          $success->save();
          if($request->file('photo3')){
           $file= $request->file('photo3');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/'), $filename);
           $success['photo3']= $filename;
         }
          $success->save();
          if($request->file('photo4')){
           $file= $request->file('photo4');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/'), $filename);
           $success['photo4']= $filename;
         }
          $success->save();
          if($request->file('photo5')){
           $file= $request->file('photo5');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/'), $filename);
           $success['photo5']= $filename;
         }
          $success->save();
          if($request->file('photo6')){
           $file= $request->file('photo6');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/'), $filename);
           $success['photo6']= $filename;
         }
          $success->save();
          if($request->file('video')){
           $file= $request->file('video');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/buildings/videos'), $filename);
           $success['video']= $filename;
         }
          $success->save();

          return $this->sendResponse($success, 'Building information added successfully.');
  }
//end building


    public function api_post_room(Request $request)

    {
       $success = Room::create([
        'user_id'=>$request->user_id,
        'date'=>$request->date,
        's_charge'=>$request->s_charge,
        'description'=>$request->description,
        'post_type'=>$request->post_type,
        'title'=>$request->title,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'room_size'=>$request->room_size,
        'attached_toilet'=>$request->attached_toilet,
        'gas'=>$request->gas,
        'water'=>$request->water,
        'electricity'=>$request->electricity,
        'attached_varanda'=>$request->attached_varanda,
        'common_varanda'=>$request->common_varanda,
        'common_toilet'=>$request->common_toilet,
        'hot_water'=>$request->hot_water,
        'laundry'=>$request->laundry,
        'ac'=>$request->ac,
        'cable_tv'=>$request->cable_tv,
        'wifi'=>$request->wifi,
        'lift'=>$request->lift,
        'furnished'=>$request->furnished,
        'parking'=>$request->parking,
        'price'=>$request->price,
        'photo'=>$request->photo,
        'photo1'=>$request->photo1,
        'photo2'=>$request->photo2,
        'photo3'=>$request->photo3,
        'photo4'=>$request->photo4,
        'photo5'=>$request->photo5,
        'photo6'=>$request->photo6,
        'video'=>$request->video,
        'active'=>1,
        'created_at'   =>Carbon::now()
      ]);

                 if($request->file('photo')){
                  $file= $request->file('photo');
                  $filename= date('YmdHi').$file->getClientOriginalName();
                  $file-> move(public_path('uploads/rooms/'), $filename);
                  $success['photo']= $filename;
                       }
                 $success->save();
                      if($request->file('photo1')){
                    $file= $request->file('photo1');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('uploads/rooms/'), $filename);
                    $success['photo1']= $filename;
                  }
                       $success->save();
                             if($request->file('photo2')){
                        $file= $request->file('photo2');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/'), $filename);
                        $success['photo2']= $filename;
                      }
                       $success->save();
                       if($request->file('photo3')){
                        $file= $request->file('photo3');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/'), $filename);
                        $success['photo3']= $filename;
                      }
                       $success->save();
                       if($request->file('photo4')){
                        $file= $request->file('photo4');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/'), $filename);
                        $success['photo4']= $filename;
                      }
                       $success->save();
                       if($request->file('photo5')){
                        $file= $request->file('photo5');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/'), $filename);
                        $success['photo5']= $filename;
                      }
                       $success->save();
                       if($request->file('photo6')){
                        $file= $request->file('photo6');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/'), $filename);
                        $success['photo6']= $filename;
                      }
                       $success->save();
                       if($request->file('video')){
                        $file= $request->file('video');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/rooms/videos'), $filename);
                        $success['video']= $filename;
                      }
                       $success->save();


       return $this->sendResponse($success, 'Room information added successfully.');
   }

      function room_update(Request $request){

         $success=Room::findOrFail($request->id)->update([
        'user_id'=>$request->user_id,
        'date'=>$request->date,
        's_charge'=>$request->s_charge,
        'description'=>$request->description,
        'post_type'=>$request->post_type,
        'title'=>$request->title,
        'address'=>$request->address,
        'room_size'=>$request->room_size,
        'attached_toilet'=>$request->attached_toilet,
        'gas'=>$request->gas,
        'water'=>$request->water,
        'electricity'=>$request->electricity,
        'attached_varanda'=>$request->attached_varanda,
        'common_varanda'=>$request->common_varanda,
        'common_toilet'=>$request->common_toilet,
        'hot_water'=>$request->hot_water,
        'laundry'=>$request->laundry,
        'ac'=>$request->ac,
        'cable_tv'=>$request->cable_tv,
        'wifi'=>$request->wifi,
        'lift'=>$request->lift,
        'furnished'=>$request->furnished,
        'parking'=>$request->parking,
        'price'=>$request->price,



         ]);

         if ($request->hasFile('photo')) {
                    $photo = $request->photo;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }

             if ($request->hasFile('photo1')) {
                    $photo = $request->photo1;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo1' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }

             if ($request->hasFile('photo2')) {
                    $photo = $request->photo2;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo2' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }
             if ($request->hasFile('photo3')) {
                    $photo = $request->photo3;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo3' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }

             if ($request->hasFile('photo4')) {
                    $photo = $request->photo4;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo4' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }

             if ($request->hasFile('photo5')) {
                    $photo = $request->photo5;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo5' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }

             if ($request->hasFile('photo6')) {
                    $photo = $request->photo6;
                    $photoName = $request->id.'.'.$photo->getClientOriginalExtension();
                    if (Room::findOrFail($request->id)) {
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                        Room::findOrFail($request->id)->update([
                            'photo6' => $photoName,
                        ]);
                    }
                    else {
                        unlink(base_path("public/uploads/rooms/".$photoName));
                        Image::make($photo)->resize(400, 450)->save(base_path( "public/uploads/rooms/" . $photoName),100);
                    }
             }
        return $this->sendResponse($success, 'Room Information have been successfully Updated.');
   }

//end room

   function api_post_land(Request $request){

         $land=Land::create([
           'user_id'=>$request->user_id,
           'post_type'=>$request->post_type,
           'address'=>$request->address,
           'land_area'=>$request->land_area,
           'vegetations'=>$request->vegetations,
           'road_width'=>$request->road_width,
           'price'=>$request->price,
           'photo'=>$request->photo,
           'created_at'   =>Carbon::now()
         ]);
         if ($request->hasFile('photo')) {
             $photo_upload     =  $request ->photo;
             $photo_extension  =  $photo_upload -> getClientOriginalExtension();
             $photo_name       =  "toletx_land_image_". $land . "." . $photo_extension;
             Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/lands/'.$photo_name),100);
             Land::find($land)->update([
             'photo'          => $photo_name,
                 ]);
               }

               $success['token'] =  $land->createToken('MyApp')->accessToken;
               $success['post_type'] =  $land->post_type;

               return $this->sendResponse($success, 'land post successfully.');
   }

//end land

    function api_post_community(Request $request){

      $success=Community_Center::create([
        'user_id'=>$request->user_id,
        'post_type'=>$request->post_type,
        'title'=>$request->title,
        'date'=>$request->date,
        'phone'=>$request->phone,
        'description'=>$request->description,
        'community_name'=>$request->community_name,
        'address'=>$request->address,
        'floor_level'=>$request->floor_level,
        'floor_size'=>$request->floor_size,
        'road_width'=>$request->road_width,
        'utilities'=>$request->utilities,
        'interior_condition'=>$request->interior_condition,
        'fire_safety'=>$request->fire_safety,
        'lift'=>$request->lift,
        'wifi'=>$request->wifi,
        'garden'=>$request->garden,
        'cooking'=>$request->cooking,
        'sitting'=>$request->sitting,
        'parking'=>$request->parking,
        'gas'=>$request->gas,
        'water'=>$request->water,
        'electricity'=>$request->electricity,
        'price'=>$request->price,
        's_charge'=>$request->s_charge,
        'photo'=>$request->photo,
        'photo1'=>$request->photo1,
        'photo2'=>$request->photo2,
        'photo3'=>$request->photo3,
        'photo4'=>$request->photo4,
        'photo5'=>$request->photo5,
        'photo6'=>$request->photo6,
        'video'=>$request->video,
        'active'=>1,
        'created_at'   =>Carbon::now()
      ]);
      if($request->file('photo')){
       $file= $request->file('photo');
       $filename= date('YmdHi').$file->getClientOriginalName();
       $file-> move(public_path('uploads/communities/'), $filename);
       $success['photo']= $filename;
            }
      $success->save();
           if($request->file('photo1')){
         $file= $request->file('photo1');
         $filename= date('YmdHi').$file->getClientOriginalName();
         $file-> move(public_path('uploads/communities/'), $filename);
         $success['photo1']= $filename;
       }
            $success->save();
                  if($request->file('photo2')){
             $file= $request->file('photo2');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/'), $filename);
             $success['photo2']= $filename;
           }
            $success->save();
            if($request->file('photo3')){
             $file= $request->file('photo3');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/'), $filename);
             $success['photo3']= $filename;
           }
            $success->save();
            if($request->file('photo4')){
             $file= $request->file('photo4');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/'), $filename);
             $success['photo4']= $filename;
           }
            $success->save();
            if($request->file('photo5')){
             $file= $request->file('photo5');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/'), $filename);
             $success['photo5']= $filename;
           }
            $success->save();
            if($request->file('photo6')){
             $file= $request->file('photo6');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/'), $filename);
             $success['photo6']= $filename;
           }
            $success->save();
            if($request->file('video')){
             $file= $request->file('video');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/communities/videos'), $filename);
             $success['video']= $filename;
           }
            $success->save();

            return $this->sendResponse($success, 'community post successfully.');
   }
//end community
        function api_post_shooting(Request $request){

          $shooting=Shooting_Spot::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'shooting_name'=>$request->shooting_name,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'building_condition'=>$request->building_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'wifi'=>$request->wifi,
            'garden'=>$request->garden,
            'cooking'=>$request->cooking,
            'sitting'=>$request->sitting,
            'parking'=>$request->parking,
            'vegetations'=>$request->vegetations,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/shootings/'), $filename);
           $shooting['photo']= $filename;
                }
          $shooting->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/shootings/'), $filename);
             $shooting['photo1']= $filename;
           }
                $shooting->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/'), $filename);
                 $shooting['photo2']= $filename;
               }
                $shooting->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/'), $filename);
                 $shooting['photo3']= $filename;
               }
                $shooting->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/'), $filename);
                 $shooting['photo4']= $filename;
               }
                $shooting->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/'), $filename);
                 $shooting['photo5']= $filename;
               }
                $shooting->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/'), $filename);
                 $shooting['photo6']= $filename;
               }
                $shooting->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/shootings/videos'), $filename);
                 $shooting['video']= $filename;
               }
                $shooting->save();

                return $this->sendResponse($shooting, 'shooting post successfully.');
        }
//end shooting

      function api_post_shop(Request $request){

        $success=Shop::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'title'=>$request->title,
          'date'=>$request->date,
          'phone'=>$request->phone,
          'description'=>$request->description,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'parking'=>$request->parking,
          'electricity'=>$request->electricity,
          'gas'=>$request->gas,
          'water'=>$request->water,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'photo1'=>$request->photo1,
          'photo2'=>$request->photo2,
          'photo3'=>$request->photo3,
          'photo4'=>$request->photo4,
          'photo5'=>$request->photo5,
          'photo6'=>$request->photo6,
          'video'=>$request->video,
          'active'=>1,
          'created_at'   =>Carbon::now()
        ]);
        if($request->file('photo')){
         $file= $request->file('photo');
         $filename= date('YmdHi').$file->getClientOriginalName();
         $file-> move(public_path('uploads/shops/'), $filename);
         $success['photo']= $filename;
              }
        $success->save();
             if($request->file('photo1')){
           $file= $request->file('photo1');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/shops/'), $filename);
           $success['photo1']= $filename;
         }
              $success->save();
                    if($request->file('photo2')){
               $file= $request->file('photo2');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/'), $filename);
               $success['photo2']= $filename;
             }
              $success->save();
              if($request->file('photo3')){
               $file= $request->file('photo3');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/'), $filename);
               $success['photo3']= $filename;
             }
              $success->save();
              if($request->file('photo4')){
               $file= $request->file('photo4');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/'), $filename);
               $success['photo4']= $filename;
             }
              $success->save();
              if($request->file('photo5')){
               $file= $request->file('photo5');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/'), $filename);
               $success['photo5']= $filename;
             }
              $success->save();
              if($request->file('photo6')){
               $file= $request->file('photo6');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/'), $filename);
               $success['photo6']= $filename;
             }
              $success->save();
              if($request->file('video')){
               $file= $request->file('video');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/shops/videos'), $filename);
               $success['video']= $filename;
             }
              $success->save();

              return $this->sendResponse($success, 'shop post successfully.');
      }
//end shop

      function api_post_factory(Request $request){

        $success=Factory::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'title'=>$request->title,
          'date'=>$request->date,
          'phone'=>$request->phone,
          'description'=>$request->description,
          'factory_name'=>$request->factory_name,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'drainage_system'=>$request->drainage_system,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'photo1'=>$request->photo1,
          'photo2'=>$request->photo2,
          'photo3'=>$request->photo3,
          'photo4'=>$request->photo4,
          'photo5'=>$request->photo5,
          'photo6'=>$request->photo6,
          'video'=>$request->video,
          'active'=>1,
          'created_at'   =>Carbon::now()
        ]);
        if($request->file('photo')){
         $file= $request->file('photo');
         $filename= date('YmdHi').$file->getClientOriginalName();
         $file-> move(public_path('uploads/factories/'), $filename);
         $success['photo']= $filename;
              }
        $success->save();
             if($request->file('photo1')){
           $file= $request->file('photo1');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/factories/'), $filename);
           $success['photo1']= $filename;
         }
              $success->save();
                    if($request->file('photo2')){
               $file= $request->file('photo2');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/'), $filename);
               $success['photo2']= $filename;
             }
              $success->save();
              if($request->file('photo3')){
               $file= $request->file('photo3');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/'), $filename);
               $success['photo3']= $filename;
             }
              $success->save();
              if($request->file('photo4')){
               $file= $request->file('photo4');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/'), $filename);
               $success['photo4']= $filename;
             }
              $success->save();
              if($request->file('photo5')){
               $file= $request->file('photo5');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/'), $filename);
               $success['photo5']= $filename;
             }
              $success->save();
              if($request->file('photo6')){
               $file= $request->file('photo6');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/'), $filename);
               $success['photo6']= $filename;
             }
              $success->save();
              if($request->file('video')){
               $file= $request->file('video');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/factories/videos'), $filename);
               $success['video']= $filename;
             }
              $success->save();

              return $this->sendResponse($success, 'factory post successfully.');
      }
//end factory

        function api_post_warehouse(Request $request){

          $success=Warehouse::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'type'=>$request->type,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'building_condition'=>$request->building_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'interior_condition'=>$request->interior_condition,
            'drainage_system'=>$request->drainage_system,
            'parking'=>$request->parking,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/warehouses/'), $filename);
           $success['photo']= $filename;
                }
          $success->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/warehouses/'), $filename);
             $success['photo1']= $filename;
           }
                $success->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/'), $filename);
                 $success['photo2']= $filename;
               }
                $success->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/'), $filename);
                 $success['photo3']= $filename;
               }
                $success->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/'), $filename);
                 $success['photo4']= $filename;
               }
                $success->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/'), $filename);
                 $success['photo5']= $filename;
               }
                $success->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/'), $filename);
                 $success['photo6']= $filename;
               }
                $success->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/warehouses/videos'), $filename);
                 $success['video']= $filename;
               }
                $success->save();

                return $this->sendResponse($success, 'warehouse post successfully.');
        }

//end warehouse

      function api_post_pond(Request $request){

        $pond=Pond::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'address'=>$request->address,
          'purpose'=>$request->purpose,
          'pond_area'=>$request->pond_area,
          'water_level'=>$request->water_level,
          'road_width'=>$request->road_width,
          'drainage_system'=>$request->drainage_system,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_pond_image_". $pond . "." . $photo_extension;
            Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/ponds/'.$photo_name),100);
            Pond::find($pond)->update([
            'photo'          => $photo_name,
                ]);
              }

              $success['token'] =  $pond->createToken('MyApp')->accessToken;
              $success['post_type'] =  $pond->post_type;

              return $this->sendResponse($success, 'pond post successfully.');
      }
//end pond

        function api_post_swimmingpool(Request $request){

          $swimmingpool=Swimming_Pool::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'type'=>$request->type,
            'address'=>$request->address,
            'size'=>$request->size,
            'toilet'=>$request->toilet,
            'wifi'=>$request->wifi,
            'laundry'=>$request->laundry,
            'change_room'=>$request->change_room,
            'parking'=>$request->parking,
            'laundry'=>$request->laundry,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_swimmingpool_image_". $swimmingpool . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/swimmingpools/'.$photo_name),100);
              Swimming_Pool::find($swimmingpool)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $swimmingpool->createToken('MyApp')->accessToken;
                $success['post_type'] =  $swimmingpool->post_type;

                return $this->sendResponse($success, 'swimmingpool post successfully.');
        }
//end swimmingpool

        function api_post_bilboard(Request $request){

          $bilboard=Bilboard::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'type'=>$request->type,
            'address'=>$request->address,
            'size'=>$request->size,
            'hieght'=>$request->hieght,
            'electricity'=>$request->electricity,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/billboards/'), $filename);
           $bilboard['photo']= $filename;
                }
          $bilboard->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/billboards/'), $filename);
             $bilboard['photo1']= $filename;
           }
                $bilboard->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/'), $filename);
                 $bilboard['photo2']= $filename;
               }
                $bilboard->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/'), $filename);
                 $bilboard['photo3']= $filename;
               }
                $bilboard->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/'), $filename);
                 $bilboard['photo4']= $filename;
               }
                $bilboard->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/'), $filename);
                 $bilboard['photo5']= $filename;
               }
                $bilboard->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/'), $filename);
                 $bilboard['photo6']= $filename;
               }
                $bilboard->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/billboards/videos'), $filename);
                 $bilboard['video']= $filename;
               }
                $bilboard->save();

                return $this->sendResponse($bilboard, 'bilboard post successfully.');
        }
//end bilboard

          function api_post_rooftop(Request $request){

            $rooftop=Rooftop::create([
              'user_id'=>$request->user_id,
              'post_type'=>$request->post_type,
              'title'=>$request->title,
              'date'=>$request->date,
              'phone'=>$request->phone,
              'description'=>$request->description,
              'address'=>$request->address,
              'floor_area'=>$request->floor_area,
              'utilities'=>$request->utilities,
              'shed'=>$request->shed,
              'protection'=>$request->protection,
              'lift'=>$request->lift,
              'interior_condition'=>$request->interior_condition,
              'parking'=>$request->parking,
              'price'=>$request->price,
              'photo'=>$request->photo,
              'photo1'=>$request->photo1,
              'photo2'=>$request->photo2,
              'photo3'=>$request->photo3,
              'photo4'=>$request->photo4,
              'photo5'=>$request->photo5,
              'photo6'=>$request->photo6,
              'video'=>$request->video,
              'active'=>1,
              'created_at'   =>Carbon::now()
            ]);
            if($request->file('photo')){
             $file= $request->file('photo');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/rooftops/'), $filename);
             $rooftop['photo']= $filename;
                  }
            $rooftop->save();
                 if($request->file('photo1')){
               $file= $request->file('photo1');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/rooftops/'), $filename);
               $rooftop['photo1']= $filename;
             }
                  $rooftop->save();
                        if($request->file('photo2')){
                   $file= $request->file('photo2');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/'), $filename);
                   $rooftop['photo2']= $filename;
                 }
                  $rooftop->save();
                  if($request->file('photo3')){
                   $file= $request->file('photo3');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/'), $filename);
                   $rooftop['photo3']= $filename;
                 }
                  $rooftop->save();
                  if($request->file('photo4')){
                   $file= $request->file('photo4');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/'), $filename);
                   $rooftop['photo4']= $filename;
                 }
                  $rooftop->save();
                  if($request->file('photo5')){
                   $file= $request->file('photo5');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/'), $filename);
                   $rooftop['photo5']= $filename;
                 }
                  $rooftop->save();
                  if($request->file('photo6')){
                   $file= $request->file('photo6');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/'), $filename);
                   $rooftop['photo6']= $filename;
                 }
                  $rooftop->save();
                  if($request->file('video')){
                   $file= $request->file('video');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/rooftops/videos'), $filename);
                   $rooftop['video']= $filename;
                 }
                  $rooftop->save();

                  return $this->sendResponse($rooftop, 'rooftop post successfully.');
          }
//end rooftop


        function api_post_exibution(Request $request){

          $exibution_center=Exibution_Center::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'exibution_center_name'=>$request->exibution_center_name,
            'address'=>$request->address,
            'room_size'=>$request->room_size,
            'room_type'=>$request->room_type,
            'attached_toilet'=>$request->attached_toilet,
            'utilities'=>$request->utilities,
            'attached_varanda'=>$request->attached_varanda,
            'hot_water'=>$request->hot_water,
            'laundry'=>$request->laundry,
            'ac'=>$request->ac,
            'cable_tv'=>$request->cable_tv,
            'wifi'=>$request->wifi,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'parking'=>$request->parking,
            'dining'=>$request->dining,
            'sports'=>$request->sports,
            'gym'=>$request->gym,
            'spa'=>$request->spa,
            'swimmingpool'=>$request->swimmingpool,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/exhibutions/'), $filename);
           $exibution_center['photo']= $filename;
                }
          $exibution_center->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/exhibutions/'), $filename);
             $exibution_center['photo1']= $filename;
           }
                $exibution_center->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/'), $filename);
                 $exibution_center['photo2']= $filename;
               }
                $exibution_center->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/'), $filename);
                 $exibution_center['photo3']= $filename;
               }
                $exibution_center->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/'), $filename);
                 $exibution_center['photo4']= $filename;
               }
                $exibution_center->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/'), $filename);
                 $exibution_center['photo5']= $filename;
               }
                $exibution_center->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/'), $filename);
                 $exibution_center['photo6']= $filename;
               }
                $exibution_center->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/exhibutions/videos'), $filename);
                 $exibution_center['video']= $filename;
               }
                $exibution_center->save();

                return $this->sendResponse($exibution_center, 'exibution_center post successfully.');
        }
//end exhibution

        function api_post_playground(Request $request){

          $playground=Play_ground::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'address'=>$request->address,
            'type'=>$request->type,
            'attached_toilet'=>$request->attached_toilet,
            'utilities'=>$request->utilities,
            'laundry'=>$request->laundry,
            'change_room'=>$request->change_room,
            'wifi'=>$request->wifi,
            'furnished'=>$request->furnished,
            'ac'=>$request->ac,
            'parking'=>$request->parking,
            'dining'=>$request->dining,
            'sports'=>$request->sports,
            'gym'=>$request->gym,
            'spa'=>$request->spa,
            'swimmingpool'=>$request->swimmingpool,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/playgrounds/'), $filename);
           $playground['photo']= $filename;
                }
          $playground->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/playgrounds/'), $filename);
             $playground['photo1']= $filename;
           }
                $playground->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/'), $filename);
                 $playground['photo2']= $filename;
               }
                $playground->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/'), $filename);
                 $playground['photo3']= $filename;
               }
                $playground->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/'), $filename);
                 $playground['photo4']= $filename;
               }
                $playground->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/'), $filename);
                 $playground['photo5']= $filename;
               }
                $playground->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/'), $filename);
                 $playground['photo6']= $filename;
               }
                $playground->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/playgrounds/videos'), $filename);
                 $playground['video']= $filename;
               }
                $playground->save();

                return $this->sendResponse($playground, 'playground post successfully.');
        }
//end playground

//hotel

        function api_post_hotel(Request $request){

          $success=Hotel::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            's_charge'=>$request->s_charge,
            'description'=>$request->description,
            'hotel_name'=>$request->hotel_name,
            'division'=>$request->division,
            'district'=>$request->district,
            'thana'=>$request->thana,
            'location'=>$request->location,
            'room_size'=>$request->room_size,
            'wifi'=>$request->wifi,
            'bathroom'=>$request->bathroom,
            'cctv'=>$request->cctv,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'security'=>$request->security,
            'parking'=>$request->parking,
            'ac'=>$request->ac,
            'laundry'=>$request->laundry,
            'price'=>$request->price,
            'gym'=>$request->gym,
            'sports'=>$request->sports,
            'dining'=>$request->dining,
            'fire_exit'=>$request->fire_exit,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/hotels/'), $filename);
           $success['photo']= $filename;
                }
          $success->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/hotels/'), $filename);
             $success['photo1']= $filename;
           }
                $success->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/'), $filename);
                 $success['photo2']= $filename;
               }
                $success->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/'), $filename);
                 $success['photo3']= $filename;
               }
                $success->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/'), $filename);
                 $success['photo4']= $filename;
               }
                $success->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/'), $filename);
                 $success['photo5']= $filename;
               }
                $success->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/'), $filename);
                 $success['photo6']= $filename;
               }
                $success->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hotels/videos'), $filename);
                 $success['video']= $filename;
               }
                $success->save();

                return $this->sendResponse($success, 'hotel post successfully.');
        }
//end hotel

          function api_post_flat(Request $request){

            $success=Flat::create([
              'user_id'=>$request->user_id,
              'post_type'=>$request->post_type,
              'title'=>$request->title,
              'date'=>$request->date,
              'phone'=>$request->phone,
              's_charge'=>$request->s_charge,
              'description'=>$request->description,
              'address'=>$request->address,
              'division'=>$request->division,
              'district'=>$request->district,
              'thana'=>$request->thana,
              'flat_size'=>$request->flat_size,
              'description'=>$request->description,
              'attached_toilet'=>$request->attached_toilet,
              'utilities'=>$request->utilities,
              'attached_varanda'=>$request->attached_varanda,
              'hot_water'=>$request->hot_water,
              'laundry'=>$request->laundry,
              'ac'=>$request->ac,
              'cable_tv'=>$request->cable_tv,
              'wifi'=>$request->wifi,
              'lift'=>$request->lift,
              'furnished'=>$request->furnished,
              'parking'=>$request->parking,
              'gas'=>$request->gas,
              'water'=>$request->water,
              'electricity'=>$request->electricity,
              'price'=>$request->price,
              'photo'=>$request->photo,
              'photo1'=>$request->photo1,
              'photo2'=>$request->photo2,
              'photo3'=>$request->photo3,
              'photo4'=>$request->photo4,
              'photo5'=>$request->photo5,
              'photo6'=>$request->photo6,
              'video'=>$request->video,
              'active'=>1,
              'created_at'   =>Carbon::now()
            ]);
            if($request->file('photo')){
             $file= $request->file('photo');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/flats/'), $filename);
             $success['photo']= $filename;
                  }
             $success->save();
                 if($request->file('photo1')){
               $file= $request->file('photo1');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/flats/'), $filename);
               $success['photo1']= $filename;
             }
                  $success->save();
                        if($request->file('photo2')){
                   $file= $request->file('photo2');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/'), $filename);
                   $success['photo2']= $filename;
                 }
                  $success->save();
                  if($request->file('photo3')){
                   $file= $request->file('photo3');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/'), $filename);
                   $success['photo3']= $filename;
                 }
                  $success->save();
                  if($request->file('photo4')){
                   $file= $request->file('photo4');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/'), $filename);
                   $success['photo4']= $filename;
                 }
                  $success->save();
                  if($request->file('photo5')){
                   $file= $request->file('photo5');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/'), $filename);
                   $success['photo5']= $filename;
                 }
                  $success->save();
                  if($request->file('photo6')){
                   $file= $request->file('photo6');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/'), $filename);
                   $success['photo6']= $filename;
                 }
                  $success->save();
                  if($request->file('video')){
                   $file= $request->file('video');
                   $filename= date('YmdHi').$file->getClientOriginalName();
                   $file-> move(public_path('uploads/flats/videos'), $filename);
                   $success['video']= $filename;
                 }
                  $success->save();

                  return $this->sendResponse($success, 'flat post successfully.');
          }
//end flat

//Garage

        function api_post_parking(Request $request){

          $success=Parking_Spot::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'address'=>$request->address,
            'price'=>$request->price,
            'floor_level'=>$request->floor_level,
            'floor_height'=>$request->floor_height,
            'vehicle_type'=>$request->vehicle_type,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/garages/'), $filename);
           $success['photo']= $filename;
                }
          $success->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/garages/'), $filename);
             $success['photo1']= $filename;
           }
                $success->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/'), $filename);
                 $success['photo2']= $filename;
               }
                $success->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/'), $filename);
                 $success['photo3']= $filename;
               }
                $success->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/'), $filename);
                 $success['photo4']= $filename;
               }
                $success->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/'), $filename);
                 $success['photo5']= $filename;
               }
                $success->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/'), $filename);
                 $success['photo6']= $filename;
               }
                $success->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/garages/videos'), $filename);
                 $success['video']= $filename;
               }
                $success->save();

                return $this->sendResponse($success, 'parking post successfully.');
        }
//end garage

        function api_post_hostel(Request $request){

          $success=Hostel::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'hostel_name'=>$request->hostel_name,
            'address'=>$request->address,
            'room_size'=>$request->room_size,
            'room_type'=>$request->room_type,
            'attached_toilet'=>$request->attached_toilet,
            'utilities'=>$request->utilities,
            'attached_varanda'=>$request->attached_varanda,
            'hot_water'=>$request->hot_water,
            'laundry'=>$request->laundry,
            'ac'=>$request->ac,
            'cable_tv'=>$request->cable_tv,
            'wifi'=>$request->wifi,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'parking'=>$request->parking,
            'gym'=>$request->gym,
            'sports'=>$request->sports,
            'dining'=>$request->dining,
            'fire_exit'=>$request->fire_exit,
            'price'=>$request->price,
            's_charge'=>$request->s_charge,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/hostels/'), $filename);
           $success['photo']= $filename;
                }
          $success->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/hostels/'), $filename);
             $success['photo1']= $filename;
           }
                $success->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/'), $filename);
                 $success['photo2']= $filename;
               }
                $success->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/'), $filename);
                 $success['photo3']= $filename;
               }
                $success->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/'), $filename);
                 $success['photo4']= $filename;
               }
                $success->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/'), $filename);
                 $success['photo5']= $filename;
               }
                $success->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/'), $filename);
                 $success['photo6']= $filename;
               }
                $success->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/hostels/videos'), $filename);
                 $success['video']= $filename;
               }
                $success->save();

                return $this->sendResponse($success, 'hostel post successfully.');
        }

        function api_hostel_edit($id){
          $list=Hostel::findOrFail($id);
          return $list;
        }

        function hostel_delete($id){
            $list=Hostel::findOrFail($id)->delete();
            return back();
          }

        function hostel_update(Request $request){

                $hostel=Hostel::findOrFail($request->id)->update([
                  'user_id'=>$request->user_id,
                  'post_type'=>$request->post_type,
                  'hostel_name'=>$request->hostel_name,
                  'address'=>$request->address,
                  'room_size'=>$request->room_size,
                  'room_type'=>$request->room_type,
                  'attached_toilet'=>$request->attached_toilet,
                  'utilities'=>$request->utilities,
                  'attached_varanda'=>$request->attached_varanda,
                  'hot_water'=>$request->hot_water,
                  'laundry'=>$request->laundry,
                  'ac'=>$request->ac,
                  'cable_tv'=>$request->cable_tv,
                  'wifi'=>$request->wifi,
                  'lift'=>$request->lift,
                  'furnished'=>$request->furnished,
                  'parking'=>$request->parking,
                  'price'=>$request->price,

                ]);


                if ($request->hasFile('photo')) {

                    $photo_upload     =  $request ->photo;
                    $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                    $photo_name       =  "toletx_hostel_image_". $hostel . "." . $photo_extension;
                    Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/hostels/'.$photo_name),100);
                    Hostel::find($hostel)->update([
                    'photo'          => $photo_name,
                        ]);


                      }

                    return $hostel;
          }
//end hostel

        function api_post_office(Request $request){

          $success=Office::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'title'=>$request->title,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'division'=>$request->division,
            'district'=>$request->district,
            'thana'=>$request->thana,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'interior_condition'=>$request->interior_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'emergency_lift'=>$request->emergency_lift,
            'parking'=>$request->parking,
            'electricity'=>$request->electricity,
            'gas'=>$request->gas,
            'water'=>$request->water,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'photo5'=>$request->photo5,
            'photo6'=>$request->photo6,
            'video'=>$request->video,
            'active'=>1,
            'created_at'   =>Carbon::now()
          ]);
          if($request->file('photo')){
           $file= $request->file('photo');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('uploads/offices/'), $filename);
           $success['photo']= $filename;
                }
          $success->save();
               if($request->file('photo1')){
             $file= $request->file('photo1');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('uploads/offices/'), $filename);
             $success['photo1']= $filename;
           }
                $success->save();
                      if($request->file('photo2')){
                 $file= $request->file('photo2');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/'), $filename);
                 $success['photo2']= $filename;
               }
                $success->save();
                if($request->file('photo3')){
                 $file= $request->file('photo3');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/'), $filename);
                 $success['photo3']= $filename;
               }
                $success->save();
                if($request->file('photo4')){
                 $file= $request->file('photo4');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/'), $filename);
                 $success['photo4']= $filename;
               }
                $success->save();
                if($request->file('photo5')){
                 $file= $request->file('photo5');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/'), $filename);
                 $success['photo5']= $filename;
               }
                $success->save();
                if($request->file('photo6')){
                 $file= $request->file('photo6');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/'), $filename);
                 $success['photo6']= $filename;
               }
                $success->save();
                if($request->file('video')){
                 $file= $request->file('video');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/offices/videos'), $filename);
                 $success['video']= $filename;
               }
                $success->save();

                return $this->sendResponse($success, 'office post successfully.');
        }
//end office

//resort
      function api_post_resort(Request $request){

              $success=Restaurant::create([
                'user_id'=>$request->user_id,
                'post_type'=>$request->post_type,
                'title'=>$request->title,
                'date'=>$request->date,
                'phone'=>$request->phone,
                'description'=>$request->description,
                'resort_name'=>$request->resort_name,
                'address'=>$request->address,
                'room_size'=>$request->room_size,
                'room_type'=>$request->room_type,
                'star_rating'=>$request->star_rating,
                'attached_toilet'=>$request->attached_toilet,
                'utilities'=>$request->utilities,
                'attached_varanda'=>$request->attached_varanda,
                'hot_water'=>$request->hot_water,
                'laundry'=>$request->laundry,
                'ac'=>$request->ac,
                'cable_tv'=>$request->cable_tv,
                'wifi'=>$request->wifi,
                'lift'=>$request->lift,
                'furnished'=>$request->furnished,
                'parking'=>$request->parking,
                'dining'=>$request->dining,
                'sports'=>$request->sports,
                'gym'=>$request->gym,
                'spa'=>$request->spa,
                'swimmingpool'=>$request->swimmingpool,
                'price'=>$request->price,
                's_charge'=>$request->s_charge,
                'photo'=>$request->photo,
                'photo1'=>$request->photo1,
                'photo2'=>$request->photo2,
                'photo3'=>$request->photo3,
                'photo4'=>$request->photo4,
                'photo5'=>$request->photo5,
                'photo6'=>$request->photo6,
                'video'=>$request->video,
                'active'=>1,
                'created_at'   =>Carbon::now()
              ]);
              if($request->file('photo')){
               $file= $request->file('photo');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('uploads/restaurants/'), $filename);
               $success['photo']= $filename;
                    }
              $success->save();
                   if($request->file('photo1')){
                 $file= $request->file('photo1');
                 $filename= date('YmdHi').$file->getClientOriginalName();
                 $file-> move(public_path('uploads/restaurants/'), $filename);
                 $success['photo1']= $filename;
               }
                    $success->save();
                          if($request->file('photo2')){
                     $file= $request->file('photo2');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/'), $filename);
                     $success['photo2']= $filename;
                   }
                    $success->save();
                    if($request->file('photo3')){
                     $file= $request->file('photo3');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/'), $filename);
                     $success['photo3']= $filename;
                   }
                    $success->save();
                    if($request->file('photo4')){
                     $file= $request->file('photo4');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/'), $filename);
                     $success['photo4']= $filename;
                   }
                    $success->save();
                    if($request->file('photo5')){
                     $file= $request->file('photo5');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/'), $filename);
                     $success['photo5']= $filename;
                   }
                    $success->save();
                    if($request->file('photo6')){
                     $file= $request->file('photo6');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/'), $filename);
                     $success['photo6']= $filename;
                   }
                    $success->save();
                    if($request->file('video')){
                     $file= $request->file('video');
                     $filename= date('YmdHi').$file->getClientOriginalName();
                     $file-> move(public_path('uploads/restaurants/videos'), $filename);
                     $success['video']= $filename;
                   }
                    $success->save();

                  return $this->sendResponse($success, 'resort post successfully.');
                  }
//end resort

}
