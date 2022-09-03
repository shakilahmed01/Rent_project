<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Carbon\Carbon;
class PaymentController extends Controller
{
    //
    public function post_payment(Request $request){
      $payment=Payment::create([
        'user_id'=>$request->user_id,
        'service_type'=>$request->service_type,
        'package_type'=>$request->package_type,
        'amount'=>$request->amount,
        'duration'=>$request->duration,
        'isverified'=>1,
        'created_at'   =>Carbon::now()
      ]);
      

      return redirect()->route('index');
    }

    function form_payment(){
      return view('form_payment');
    }
}
