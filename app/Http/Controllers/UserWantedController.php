<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Auth;
use App\Models\User;
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
use App\Models\Ghat;
use App\Models\Division;
use App\Models\Distric;
use App\Models\Thana;
class UserWantedController extends Controller
{
    //
    function post_ghat(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_ghat',compact('lists','divisions','districs','thanas'));
    }
    function post_picnic(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_picnicspot',compact('lists','divisions','districs','thanas'));
    }
    function post_building(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_building',compact('lists','divisions','districs','thanas'));
    }
    function post_bilboard(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_bilboard',compact('lists','divisions','districs','thanas'));
    }
    function list_billboard(){
      $paginate=Bilboard::latest()->simplePaginate(15);
      $lists=Bilboard::where('user_id', auth()->id())->get();
      return view('wanted.list_billboard',compact('lists','paginate'));
    }
    function post_room(){
      $lists=User::where('id',auth()->id())->get();
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      return view('wanted.post_room',compact('lists','divisions','districs','thanas'));
    }
    function list_room(){
      $paginate=Room::latest()->simplePaginate(15);
      $lists=Room::where('user_id', auth()->id())->get();
      return view('wanted.list_room',compact('lists','paginate'));
    }
    function post_hostel(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_hostel',compact('lists','divisions','districs','thanas'));
    }
    function list_hostel(){
      $paginate=Hostel::latest()->simplePaginate(15);
      $lists=Hostel::where('user_id', auth()->id())->get();
      return view('wanted.list_hostel',compact('lists','paginate'));
    }
    function post_hotel(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_hotel',compact('lists','divisions','districs','thanas'));
    }
    function list_hotel(){
      $paginate=Hotel::latest()->simplePaginate(15);
      $lists=Hotel::where('user_id', auth()->id())->get();
      return view('wanted.list_hotel',compact('lists','paginate'));
    }
    function post_flat(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_flat',compact('lists','divisions','districs','thanas'));
    }
    function list_flat(){
      $paginate=Flat::latest()->simplePaginate(15);
      $lists=Flat::where('user_id', auth()->id())->get();
      return view('wanted.list_flat',compact('lists','paginate'));
    }
    function post_resort(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_resort',compact('lists','divisions','districs','thanas'));
    }
    function list_resort(){
      $paginate=Restaurant::latest()->simplePaginate(15);
      $lists=Restaurant::where('user_id', auth()->id())->get();
      return view('wanted.list_resort',compact('lists','paginate'));
    }
    function post_parking_spot(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_parking_spot',compact('lists','divisions','districs','thanas'));
    }
    function list_parking_spot(){
      $paginate=Parking_Spot::latest()->simplePaginate(15);
      $lists=Parking_Spot::where('user_id', auth()->id())->get();
      return view('wanted.list_parking_spot',compact('lists','paginate'));
    }
    function post_office(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_office',compact('lists','divisions','districs','thanas'));
    }
    function list_office(){
      $paginate=Office::latest()->simplePaginate(15);
      $lists=Office::where('user_id', auth()->id())->get();
      return view('wanted.list_office',compact('lists','paginate'));
    }
    function post_community(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_community',compact('lists','divisions','districs','thanas'));
    }
    function list_community(){
      $paginate=Community_Center::latest()->simplePaginate(15);
      $lists=Community_Center::where('user_id', auth()->id())->get();
      return view('wanted.list_community',compact('lists','paginate'));
    }
    function post_warehouse(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_warehouse',compact('lists','divisions','districs','thanas'));
    }
    function list_warehouse(){
      $paginate=Warehouse::latest()->simplePaginate(15);
      $lists=Warehouse::where('user_id', auth()->id())->get();
      return view('wanted.list_warehouse',compact('lists','paginate'));
    }
    function post_land(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_land',compact('lists','divisions','districs','thanas'));
    }
    function list_land(){
      $paginate=Land::latest()->simplePaginate(15);
      $lists=Land::where('user_id', auth()->id())->get();
      return view('wanted.list_land',compact('lists','paginate'));
    }
    function post_pond(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_pond',compact('lists','divisions','districs','thanas'));
    }
    function list_pond(){
      $paginate=Pond::latest()->simplePaginate(15);
      $lists=Pond::where('user_id', auth()->id())->get();
      return view('wanted.list_pond',compact('lists','paginate'));
    }
    function post_swimmingpool(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_swimmingpool',compact('lists','divisions','districs','thanas'));
    }
    function list_swimmingpool(){
      $paginate=Swimming_Pool::latest()->simplePaginate(15);
      $lists=Swimming_Pool::where('user_id', auth()->id())->get();
      return view('wanted.list_swimmingpool',compact('lists','paginate'));
    }
    function post_playground(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_playground',compact('lists','divisions','districs','thanas'));
    }
    function list_playground(){
      $paginate=Play_ground::latest()->simplePaginate(15);
      $lists=Play_ground::where('user_id', auth()->id())->get();
      return view('wanted.list_playground',compact('lists','paginate'));
    }
    function post_shooting(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_shooting',compact('lists','divisions','districs','thanas'));
    }
    function list_shooting(){
      $paginate=Shooting_Spot::latest()->simplePaginate(15);
      $lists=Shooting_Spot::where('user_id', auth()->id())->get();
      return view('wanted.list_shooting',compact('lists','paginate'));
    }
    function post_exhibution(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_exhibution',compact('lists','divisions','districs','thanas'));
    }
    function list_exhibution(){
      $paginate=Exibution_Center::latest()->simplePaginate(15);
      $lists=Exibution_Center::where('user_id', auth()->id())->get();
      return view('wanted.list_exhibution',compact('lists','paginate'));
    }
    function post_rooftop(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_rooftop',compact('lists','divisions','districs','thanas'));
    }
    function list_rooftop(){
      $paginate=Rooftop::latest()->simplePaginate(15);
      $lists=Rooftop::where('user_id', auth()->id())->get();
      return view('wanted.list_rooftop',compact('lists','paginate'));
    }
    function post_factory(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_factory',compact('lists','divisions','districs','thanas'));
    }
    function list_factory(){
      $paginate=Factory::latest()->simplePaginate(15);
      $lists=Factory::where('user_id', auth()->id())->get();
      return view('wanted.list_factory',compact('lists','paginate'));
    }
    function post_shop(){
      $divisions=Division::all();
      $districs=Distric::all();
      $thanas=Thana::all();
      $lists=User::where('id',auth()->id())->get();
      return view('wanted.post_shop',compact('lists','divisions','districs','thanas'));
    }
    function list_shop(){
      $paginate=Shop::latest()->simplePaginate(15);
      $lists=Shop::where('user_id', auth()->id())->get();
      return view('wanted.list_shop',compact('lists','paginate'));
    }
}
