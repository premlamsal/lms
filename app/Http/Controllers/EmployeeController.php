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
    public function makeOrder($id){
        $user=Auth::user();

        $today= date('Y-m-d');

        $checkOrderToday=Order::where('user_id',$user->id)->whereDate('date', $today)->get();
       
        if($checkOrderToday->count()>0){
           
             print_r("You have already order lauch for today.<br>");

             print_r("<a href='/dashboard' class='btn btn-success'>Go Back</a>");
             // return redirect('/dashboard')->with('error',$error);;
        }
        else{
            // print_r("You can place order");
            $order=new Order();
            $order->user_id=$user->id;
            $order->food_id=$id;//get food id from url
            $order->status='n';
            $order->date=$today;
            $order->save();
            return redirect('/dashboard');
        }

    }
}
