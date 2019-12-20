<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Food;
use App\Snipp;
use App\Menu;

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

                    $snipp=Snipp::findOrFail(1);
                    $menu_of_day_id=$snipp->menu_of_day;

                    $foods=Food::where('status','1')->with('category')->get();

                    $menu_of_day=Menu::where('id',$menu_of_day_id)->where('status','1')->with('menuItems')->first();

                    // print_r($menu_of_day->name);

                    return view('home')->with(['orders'=>$orders,'foods'=>$foods,'menu_of_day'=>$menu_of_day]);
           
                }
                else{

                    return "User not defined!!";
                }


        }//end of isVerified User

        
    }
}
