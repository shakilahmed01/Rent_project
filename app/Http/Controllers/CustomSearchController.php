<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Play_ground;
use App\Models\Building;
use App\Models\Picnic_Spot;
use App\Models\Ghat;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class CustomSearchController extends Controller
{
  //auto fill search
  public function autocompleteSearch(Request $request){

  $room = Room::select('address')
            ->where('address','like', "%{$request->term}%")
            ->pluck('address')->toArray();
            $billboard = Bilboard::select('address')
                      ->where('address','like', "%{$request->term}%")
                      ->pluck('address')->toArray();
                      $community = Community_Center::select('address')
                                ->where('address','like', "%{$request->term}%")
                                ->pluck('address')->toArray();
                                $exhibution = Exibution_Center::select('address')
                                          ->where('address','like', "%{$request->term}%")
                                          ->pluck('address')->toArray();
                                          $flat = Flat::select('address')
                                                    ->where('address','like', "%{$request->term}%")
                                                    ->pluck('address')->toArray();
    $land = Land::select('address')
              ->where('address','like', "%{$request->term}%")
              ->pluck('address')->toArray();
              $factory = Factory::select('address')
                        ->where('address','like', "%{$request->term}%")
                        ->pluck('address')->toArray();
                        $office = Office::select('address')
                                  ->where('address','like', "%{$request->term}%")
                                  ->pluck('address')->toArray();
                                  $hotel = Hotel::select('location')
                                            ->where('location','like', "%{$request->term}%")
                                            ->pluck('location')->toArray();
                                            $hostel = Hostel::select('address')
                                                      ->where('address','like', "%{$request->term}%")
                                                      ->pluck('address')->toArray();
                                                      $parking = Parking_Spot::select('address')
                                                                ->where('address','like', "%{$request->term}%")
                                                                ->pluck('address')->toArray();
    $pond = Pond::select('address')
            ->where('address','like', "%{$request->term}%")
            ->pluck('address')->toArray();
            $buidling = Building::select('address')
                    ->where('address','like', "%{$request->term}%")
                    ->pluck('address')->toArray();
                    $ghat = Ghat::select('address')
                            ->where('address','like', "%{$request->term}%")
                            ->pluck('address')->toArray();
                            $picnic = Picnic_Spot::select('address')
                                    ->where('address','like', "%{$request->term}%")
                                    ->pluck('address')->toArray();
                                    $playground = Play_ground::select('address')
                                            ->where('address','like', "%{$request->term}%")
                                            ->pluck('address')->toArray();
    $rooftop = Rooftop::select('address')
            ->where('address','like', "%{$request->term}%")
            ->pluck('address')->toArray();
            $shooting = Shooting_Spot::select('address')
                    ->where('address','like', "%{$request->term}%")
                    ->pluck('address')->toArray();
                    $shop = Shop::select('address')
                            ->where('address','like', "%{$request->term}%")
                            ->pluck('address')->toArray();
                            $swimmingpool = Swimming_Pool::select('address')
                                    ->where('address','like', "%{$request->term}%")
                                    ->pluck('address')->toArray();
                                    $warehouse = Warehouse::select('address')
                                            ->where('address','like', "%{$request->term}%")
                                            ->pluck('address')->toArray();
  return array_merge($room, $billboard,$community,$exhibution,$flat,$land,$factory,$office,$hotel,$hostel,$parking,$pond,
  $playground,$rooftop,$shooting,$shop,$swimmingpool,$warehouse);
  }
//end auto search
//Custom search

//hostel
 function hostel_search(Request $request){
    // Get the search value from the request

            $array = QueryBuilder::for(Hostel::class)
               ->allowedFilters(['thana','address','date','title', 'price','attached_toilet','attached_varanda',
               'ac','wifi','parking','cable_tv','laundry','hot_water','furnished','room_size'])
               ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.hostel.custom_hostel_search', compact('array'));
    }

    function hostel_custom_details($id){
          $array= Hostel:: findOrFail($id);

          return view('Dashboard.search.custom_search.hostel.custom_hostel_details',compact('array'));
        }
//end hostel

//building
 function building_search(Request $request){
    // Get the search value from the request

            $array = QueryBuilder::for(Building::class)
               ->allowedFilters(['thana','title','date', 'price','parking','gas','water','electricity','date','building_size','fire_exit'])
               ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.building.custom_building_search', compact('array'));
    }
//end

//picnic
 function picnic_search(Request $request){
    // Get the search value from the request

            $array = QueryBuilder::for(Picnic_Spot::class)
               ->allowedFilters(['thana','date','title', 'price','shed','water','gas','electricity','dining','toilet','lift','parking'])
               ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.picnic.custom_picnic_search', compact('array'));
    }
//end

//Ghat
 function ghat_search(Request $request){
    // Get the search value from the request

            $array = QueryBuilder::for(Ghat::class)
               ->allowedFilters(['thana','date','toilet', 'price','parking'])
               ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.ghat.custom_ghat_search', compact('array'));
    }
//end

//bilboard
  function bilboard_search(Request $request){
    // Get the search value from the request
    $array = QueryBuilder::for(Bilboard::class)
   ->allowedFilters(['thana','electricity','date','size','price'])
   ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.billboard.custom_billboard_search', compact('array'));
    }

    function bilboard_custom_details($id){
          $array= Bilboard:: findOrFail($id);

          return view('Dashboard.search.custom_search.billboard.custom_billboard_details',compact('array'));
        }
//end bilboard
//flat
    function flat_search(Request $request){
       // Get the search value from the request
       $array = QueryBuilder::for(Flat::class)
      ->allowedFilters(['thana','address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
      'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','flat_size'])
      ->get();

           // Return the search view with the resluts compacted

           return view('Dashboard.search.custom_search.flat.custom_flat_search', compact('array'));
       }

       function flat_custom_details($id){
             $array= Flat:: findOrFail($id);

             return view('Dashboard.search.custom_search.flat.custom_flat_details',compact('array'));
           }
//end flat
//hotel
      function hotel_search(Request $request){
         // Get the search value from the request
         $array = QueryBuilder::for(Hotel::class)
        ->allowedFilters(['thana','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
        'cable_tv','laundry','hot_water','sports','dining','gym','fire_exit','lift','furnished','room_size'])
        ->get();

             // Return the search view with the resluts compacted

             return view('Dashboard.search.custom_search.hotel.custom_hotel_search', compact('array'));
         }

         function hotel_custom_details($id){
               $array= Hotel:: findOrFail($id);

               return view('Dashboard.search.custom_search.hotel.custom_hotel_details',compact('array'));
             }
//end hotel
//room
    function room_search(Request $request){
   // Get the search value from the request
   $min_price= 0;
         $max_price= 0;
          $min_size= 0;
         $max_size= 0;
         if($request->has('min_price')){
             $min_price = $request->get('min_price');
         }
       //dd($min_price);
         if($request->has('max_price')){
             $max_price = $request->get('max_price');
         }

         //dd($max_price);
         if($request->has('min_size')){
             $min_size = $request->get('min_size');
         }

         if($request->has('max_size')){
             $max_size = $request->get('max_size');
         }


         $array = QueryBuilder::for(Room::class)
        ->allowedFilters(['thana','address','date', 'price','attached_toilet','attached_varanda','ac','wifi','parking',
        'cable_tv','laundry','hot_water','gas','water','electricity','guest_count','lift','furnished','room_size'])
        ->get();

   // Return the search view with the resluts compacted


                 if (($min_price) && ($max_price)) {
             $array->whereBetween('price', [$min_price, $max_price]);
         }
         elseif (! is_null($min_price)) {
             $array->where('price', '>=', $min_price);
         }
         elseif (! is_null($max_price)) {
             $array->where('price', '<=', $max_price);
         }

         //room_size

         if (($min_size) && ($max_size)) {
             $array->whereBetween('room_size', [$min_size, $max_size]);
         }
         elseif (! is_null($min_size)) {
             $array->where('room_size', '>=', $min_size);
         }
         elseif (! is_null($max_size)) {
             $array->where('room_size', '<=', $max_size);
         }

       // Return the search view with the resluts compacted

       return view('Dashboard.search.custom_search.room.custom_room_search', compact('array'));
   }

   function room_custom_details($id){
         $array= Room:: findOrFail($id);
         return view('Dashboard.search.custom_search.room.custom_room_details',compact('array'));
       }
//end room
//parking Spot
    function parking_spot_search (){
      $array = QueryBuilder::for(Parking_Spot::class)
         ->allowedFilters(['address', 'price','vehicle_type','date'])
         ->get();

        return view('Dashboard.search.custom_search.parking_spot.custom_parking_search', compact('array'));
    }
    function parking_spot_custom_details($id){
          $array= Parking_Spot:: findOrFail($id);
          return view('Dashboard.search.custom_search.parking_spot.custom_parking_details',compact('array'));
        }
//end parking spot
//resort
    function restaurant_search (){
      $array = QueryBuilder::for(Restaurant::class)
         ->allowedFilters(['thana','address','date', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','attached_varanda','hot_water',
         'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool','room_size'])
         ->get();

        return view('Dashboard.search.custom_search.resort.custom_restaurant_search', compact('array'));
    }
    function restaurant_custom_details($id){
          $array= Restaurant:: findOrFail($id);
          return view('Dashboard.search.custom_search.resort.custom_restaurant_details',compact('array'));
        }
//end resort
//office
    function office_search (){
      $array = QueryBuilder::for(Office::class)
         ->allowedFilters(['thana', 'price','date','fire_exit','lift','water','gas','electricity','parking','floor_size'])
         ->get();

        return view('Dashboard.search.custom_search.office.custom_office_search', compact('array'));
    }
    function office_custom_details($id){
          $array= Office:: findOrFail($id);
          return view('Dashboard.search.custom_search.office.custom_office_details',compact('array'));
        }
//end office
//shop
    function shop_search (){

      $array = QueryBuilder::for(Shop::class)
         ->allowedFilters(['thana','date', 'price','fire_exit','lift','gas','water','electricity','parking','floor_size'])
         ->get();

        return view('Dashboard.search.custom_search.shop.custom_shop_search', compact('array'));
    }
    function shop_custom_details($id){

          $array= Shop:: findOrFail($id);
          return view('Dashboard.search.custom_search.shop.custom_shop_details',compact('array'));

        }
//end shop

//Community_Center
    function community_search(){

      $array = QueryBuilder::for(Community_Center::class)
         ->allowedFilters(['thana','date', 'price','fire_safety','lift','ac','parking','electricity','water','gas','floor_size'])
         ->get();

        return view('Dashboard.search.custom_search.community_hall.custom_community_search', compact('array'));
    }
    function community_custom_details($id){
          $array= Community_Center:: findOrFail($id);
          return view('Dashboard.search.custom_search.community_hall.custom_community_details',compact('array'));
        }
//end Community_Center



//factory
    function factory_search(){

      $array = QueryBuilder::for(Factory::class)
         ->allowedFilters(['thana','date','floor_size','ac', 'price','fire_safety','lift','parking','drainage_system','electricity','gas','water'])
         ->get();

        return view('Dashboard.search.custom_search.factory.custom_factory_search', compact('array'));
    }
    function factory_custom_details($id){
          $array= Factory:: findOrFail($id);
          return view('Dashboard.search.custom_search.factory.custom_factory_details',compact('array'));
        }
//end factory

//Warehouse
    function warehouse_search(){

      $array = QueryBuilder::for(Warehouse::class)
         ->allowedFilters(['thana','date', 'price','floor_level','floor_size','ac','drainage_system','fire_safety','lift','parking','gas','water','electricity'])
         ->get();

        return view('Dashboard.search.custom_search.warehouse.custom_warehouse_search', compact('array'));
    }
    function warehouse_custom_details($id){
          $array= Warehouse:: findOrFail($id);
          return view('Dashboard.search.custom_search.warehouse.custom_warehouse_details',compact('array'));
        }
//end Warehouse

//Land
    function land_search(){

      $array = QueryBuilder::for(land::class)
         ->allowedFilters(['thana','date','size', 'price','land_area','electricity','gas','water','drainage_system','parking'])
         ->get();

        return view('Dashboard.search.custom_search.land.custom_land_search', compact('array'));
    }
    function land_custom_details($id){
          $array= Land:: findOrFail($id);
          return view('Dashboard.search.custom_search.land.custom_land_details',compact('array'));
        }
//end Land

//pond
    function pond_search(){

      $array = QueryBuilder::for(Pond::class)
         ->allowedFilters(['thana','date', 'price','pond_area','size'])
         ->get();

        return view('Dashboard.search.custom_search.pond.custom_pond_search', compact('array'));
    }
    function pond_custom_details($id){
          $array= Pond:: findOrFail($id);
          return view('Dashboard.search.custom_search.pond.custom_pond_details',compact('array'));
        }
//end pond

//swimmingpool
    function swimmingpool_search(){

      $array = QueryBuilder::for(Swimming_Pool::class)
         ->allowedFilters(['thana','date', 'price','wifi','laundry','toilet','parking','shed','change_room','size'])
         ->get();

        return view('Dashboard.search.custom_search.swimmingpool.custom_swimmingpool_search', compact('array'));
    }
    function swimmingpool_custom_details($id){
          $array= Swimming_Pool:: findOrFail($id);
          return view('Dashboard.search.custom_search.swimmingpool.custom_swimmingpool_details',compact('array'));
        }
//end swimmingpool

//playground
    function playground_search(){

      $array = QueryBuilder::for(Play_ground::class)
         ->allowedFilters(['thana','date', 'price','shed','toilet','change_room','sports',
         'parking','gym','size'])
         ->get();

        return view('Dashboard.search.custom_search.playground.custom_playground_search', compact('array'));
    }
    function playground_custom_details($id){
          $array= Play_ground:: findOrFail($id);
          return view('Dashboard.search.custom_search.playground.custom_playground_details',compact('array'));
        }
//end playground

//shootingspot
    function shootingspot_search(){

      $array = QueryBuilder::for(Shooting_Spot::class)
         ->allowedFilters(['thana','date', 'price','water','gas','electricity','toilet','lift','change_room',
         'parking','size','dining'])
         ->get();

        return view('Dashboard.search.custom_search.shooting_spot.custom_shootingspot_search', compact('array'));
    }
    function shootingspot_custom_details($id){
          $array= Shooting_Spot:: findOrFail($id);
          return view('Dashboard.search.custom_search.shooting_spot.custom_shootingspot_details',compact('array'));
        }
//end shootingspot

//exibution center
    function exibution_search(){

      $array = QueryBuilder::for(Exibution_Center::class)
         ->allowedFilters(['thana','date', 'price','fire_exit','lift','toilet','parking','room_size'])
         ->get();

        return view('Dashboard.search.custom_search.exibution.custom_exibution_search', compact('array'));
    }
    function exibution_custom_details($id){
          $array= Exibution_Center:: findOrFail($id);
          return view('Dashboard.search.custom_search.exibution.custom_exibution_details',compact('array'));
        }
//end exibution center

//Rooftop
    function rooftop_search(){

      $array = QueryBuilder::for(Rooftop::class)
         ->allowedFilters(['thana','date', 'price','toilet','lift','shed','parking','electricity','water','floor_area','p_protection'])
         ->get();

        return view('Dashboard.search.custom_search.rooftop.custom_rooftop_search', compact('array'));
    }
    function rooftop_custom_details($id){
          $array= Rooftop:: findOrFail($id);
          return view('Dashboard.search.custom_search.rooftop.custom_rooftop_details',compact('array'));
        }
//end Rooftop
//end custom search
}
