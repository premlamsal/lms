<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class EmployeeController extends Controller
{
    public function deleteOrder($id){
    	$user=Auth::user();

    	$order=Order::where('id',$id)->where('user_id',$user->id);

    	if($order->delete()){

    		return redirect()->back();
    	}
    	else{

    		return "Order Can't be deleted";
    	}
    }
    public function myOrders(){
    	$user=Auth::user();
    	$orders=Order::where('user_id',$user->id)->get();
    	return view('myOrders')->with('orders',$orders);
    }
}
