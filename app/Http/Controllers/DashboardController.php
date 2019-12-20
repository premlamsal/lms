<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Food;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_id=$user->id;
        if($user->isVerified=='0'){
            
            return 'Your account is not Verified.';
        }
        else{
               

                $user_type=Auth::user()->user_type;
                if($user_type=='a'){
                     $orders=Order::with('user')->with('food')->get();//get all orders
                     // return "User Admin!!";
                    return view('home')->with(['orders'=>$orders]);     
                }
                elseif($user_type=='k'){
                      // return "User Kitchen Staff!!";
                  
                    $orders=Order::with('user')->with('food')->get();//get all orders
                    return view('home')->with(['orders'=>$orders]);
                }
                elseif($user_type=='e'){
                      // return "User Employee!!";
                    $orders=Order::where('user_id',$user_id)->with('user')->with('food')->get();//get all orders

                    $foods=Food::where('status','1')->with('category')->get();

                    return view('home')->with(['orders'=>$orders,'foods'=>$foods]);
                }
                else{

                    return "User not defined!!";
                }


        }//end of isVerified User

        
    }
}
