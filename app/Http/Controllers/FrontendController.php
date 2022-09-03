<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Building;
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
use App\Models\Payment;
use App\Models\Advertise;
use Auth;
class FrontendController extends Controller
{
    //

    function index(){
        $lists=Room::all();
        return view('frontend.service_item',compact('lists'));
    }
    function registration(){
        return view('frontend.registration');
    }
    function single_header_added(){
        return view('frontend.single_header_added');
    }
    function header(){
        return view('frontend.header');
    }
    function footer(){
        return view('frontend.footer');
    }
    function faq(){
        return view('frontend.faq');
    }
    function report_contact_us(){
        return view('frontend.report_contact_us');
    }
    function advertise(){
      $listss=Advertise::all();
        return view('frontend.advertise',compact('listss'));
    }
    function after_login_home(){
        return view('frontend.after_login_home');
    }
    function profile(){
      $lists=Room::all();
      $payments=Payment::where('user_id', auth()->id())->get();
      $users=User::where('id', auth()->id())->get();
      $rooms=Room::where('user_id', auth()->id())->get();
      $bilboards=Bilboard::where('user_id', auth()->id())->get();
      $communities=Community_Center::where('user_id', auth()->id())->get();
      $exibutions=Exibution_Center::where('user_id', auth()->id())->get();
      $factories=Factory::where('user_id', auth()->id())->get();
      $flats=Flat::where('user_id', auth()->id())->get();
      $hostels=Hostel::where('user_id', auth()->id())->get();
      $hotels=Hotel::where('user_id', auth()->id())->get();
      $offices=Office::where('user_id', auth()->id())->get();
      $playgrounds=Play_ground::where('user_id', auth()->id())->get();
      $ponds=Pond::where('user_id', auth()->id())->get();
      $retaurants=Restaurant::where('user_id', auth()->id())->get();
      $rooftops=Rooftop::where('user_id', auth()->id())->get();
      $shootings=Shooting_Spot::where('user_id', auth()->id())->get();
      $shops=Shop::where('user_id', auth()->id())->get();
      $swimmings=Swimming_Pool::where('user_id', auth()->id())->get();
      $lands=Land::where('user_id', auth()->id())->get();
      $warehouses=Warehouse::where('user_id', auth()->id())->get();
      $parkings=Parking_Spot::where('user_id', auth()->id())->get();
      $buildings=Building::where('user_id', auth()->id())->get();

      return view('frontend.profile',compact('users','rooms','bilboards','buildings','communities','exibutions','factories','flats','hostels','hotels','offices','playgrounds','ponds','retaurants','rooftops','shootings','shops','swimmings','lands','warehouses','parkings','payments','lists'));

    }
    public function user_room_edit($id){
      $list=Room::findOrFail($id);
      return view('user.room.single_room_list',compact('list'));
    }
    public function user_bilboard_edit($id){
      $list=Bilboard::findOrFail($id);
      return view('user.bilboard.single_bilboard_list',compact('list'));
    }
    public function user_building_edit($id){
      $list=Building::findOrFail($id);
      return view('user.building.single_building_list',compact('list'));
    }
    public function user_community_edit($id){
      $list=Community_Center::findOrFail($id);
      return view('user.community.single_community_list',compact('list'));
    }
    public function user_exhibution_edit($id){
      $list=Exibution_Center::findOrFail($id);
      return view('user.exhibution.single_exhibution_list',compact('list'));
    }
    public function user_factory_edit($id){
      $list=Factory::findOrFail($id);
      return view('user.factory.single_factory_list',compact('list'));
    }
    public function user_flat_edit($id){
      $list=Flat::findOrFail($id);
      return view('user.flat.single_flat_list',compact('list'));
    }
    public function user_hostel_edit($id){
      $list=Hostel::findOrFail($id);
      return view('user.hostel.single_hostel_list',compact('list'));
    }
    public function user_hotel_edit($id){
      $list=Hotel::findOrFail($id);
      return view('user.hotel.single_hotel_list',compact('list'));
    }
    public function user_office_edit($id){
      $list=Office::findOrFail($id);
      return view('user.office.single_office_list',compact('list'));
    }
    public function user_playground_edit($id){
      $list=Play_ground::findOrFail($id);
      return view('user.playground.single_playground_list',compact('list'));
    }
    public function user_pond_edit($id){
      $list=Pond::findOrFail($id);
      return view('user.pond.single_pond_list',compact('list'));
    }
    public function user_resort_edit($id){
      $list=Restaurant::findOrFail($id);
      return view('user.resort.single_resort_list',compact('list'));
    }
    public function user_rooftop_edit($id){
      $list=Rooftop::findOrFail($id);
      return view('user.rooftop.single_rooftop_list',compact('list'));
    }
    public function user_shooting_edit($id){
      $list=Shooting_Spot::findOrFail($id);
      return view('user.shooting.single_shooting_list',compact('list'));
    }
    public function user_shop_edit($id){
      $list=Shop::findOrFail($id);
      return view('user.shop.single_shop_list',compact('list'));
    }
    public function user_swimming_edit($id){
      $list=Swimming_Pool::findOrFail($id);
      return view('user.swimming.single_swimming_list',compact('list'));
    }
    public function user_land_edit($id){
      $list=Land::findOrFail($id);
      return view('user.land.single_land_list',compact('list'));
    }
    public function user_warehouse_edit($id){
      $list=Warehouse::findOrFail($id);
      return view('user.warehouse.single_warehouse_list',compact('list'));
    }
    public function user_parking_edit($id){
      $list=Parking_Spot::findOrFail($id);
      return view('user.garage.single_parking_list',compact('list'));
    }
    function profile_info(){
        return view('frontend.profile_info');
    }
    function room(){
        $lists=Room::all();
        return view('frontend.room',compact('lists'));
    }
    function flat(){
        $lists=Room::all();
        return view('frontend.flat',compact('lists'));
    }
    function building(){
        $lists=Room::all();
        return view('frontend.building',compact('lists'));
    }
    function parking(){
        $lists=Room::all();
        return view('frontend.parking',compact('lists'));
    }
    function hotel(){
        $lists=Room::all();
        return view('frontend.hotel',compact('lists'));
    }
    function hostel(){
        $lists=Room::all();
        return view('frontend.hostel',compact('lists'));
    }
    function resort(){
        $lists=Room::all();
        return view('frontend.resort',compact('lists'));
    }
    function office(){
        $lists=Room::all();
        return view('frontend.office',compact('lists'));
    }
    function shop(){
        $lists=Room::all();
        return view('frontend.shop',compact('lists'));
    }
    function community_hall(){
        $lists=Room::all();
        return view('frontend.community_hall',compact('lists'));
    }
    function factory(){
        $lists=Room::all();
        return view('frontend.factory',compact('lists'));
    }
    function warehouse(){
        $lists=Room::all();
        return view('frontend.warehouse',compact('lists'));
    }
    function land(){
        $lists=Room::all();
        return view('frontend.land',compact('lists'));
    }
    function pond(){
         $lists=Room::all();
        return view('frontend.pond',compact('lists'));
    }
    function swimming_pool(){
        $lists=Room::all();
        return view('frontend.swimming_pool',compact('lists'));
    }
    function playground(){
        $lists=Room::all();
        return view('frontend.playground',compact('lists'));
    }
    function shooting_spot(){
        $lists=Room::all();
        return view('frontend.shooting_spot',compact('lists'));
    }
    function exhibition_center(){
        $lists=Room::all();
        return view('frontend.exhibition_center',compact('lists'));
    }
    function rooftop(){
        $lists=Room::all();
        return view('frontend.rooftop',compact('lists'));
    }
    function bilboard(){
        $lists=Room::all();
        return view('frontend.bilboard',compact('lists'));
    }
    function login_form(){
        return view('frontend.login_form');
    }
    function single_pg(){
        return view('frontend.single_pg');
    }
    function my_shortlist(){
        return view('frontend.my_shortlist');
    }
    function slider_section(){
        $rooms=Room::all();
        return view('frontend.include.slider_section',compact('rooms'));
    }
    function service_item(){
        return view('frontend.service_item');
    }
    function icon(){
        return view('frontend.icon');
    }
    function slider_section_slick(){
        return view('frontend.slider_section_slick');
    }
    function picnic_spot(){
        $lists=Room::all();
        return view('frontend.picnic_spot',compact('lists'));
    }
    function ghat(){
        $lists=Room::all();
        return view('frontend.ghat',compact('lists'));
    }
    function package(){
        return view('frontend.package');
    }

}
