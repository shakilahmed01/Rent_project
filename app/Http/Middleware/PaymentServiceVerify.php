<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;
use Carbon\Carbon;
class PaymentServiceVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
        {


      $user = Payment::where('user_id', auth()->id())->first();
       if (empty($user)) {
         return redirect()->route('package');
       }
       else{
         $time=Carbon::now()->diffInDays($user->created_at);
         if($time >$user->duration){
           $user->update([
             'isverified' => 0
           ]);
         }

         $k=Payment::where('isverified', 0)->first();
         if($k){
           return redirect()->route('package');
         }else{
           return $next($request);
         }

       }

    }
}
