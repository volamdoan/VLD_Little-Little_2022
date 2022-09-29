<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\order;

class CheckoutController extends Controller
{
    public function checkout(Request $request){
        $qty= 0;
        $event=DB::table('events')
        ->select('*')
        ->where('id',$request->event_id)
        ->first();
        $name= $request->name;
        $hsd= $request->hsd;
        $phone= $request->phone;
        $email= $request->email;
        $qty=$request->quanti;
        $event_id=$request->event_id;
        $total= $event->price * (int)$qty;
        return view('checkout.checkout',compact('total','qty','name','hsd','phone','email','event_id'));
    }
    
}
