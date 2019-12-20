<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Category;
use Auth;
use App\Food;
use App\Menu;

class KitchenStaffController extends Controller
{
    public function orders(){

    	$orders=Order::with('user')->with('food')->get();//get all orders
    	// print_r($orders);
    	return view('orders')->with('orders',$orders);
    }

     public function orderReady($id){
    	$order=Order::findOrFail($id);
    	$order->status='r';
    	if($order->save()){
    		return redirect()->back();
    	}
    }
    public function orderPreparing($id){
    	$order=Order::findOrFail($id);
    	$order->status='p';
    	if($order->save()){
    		return redirect()->back();
    	}

    }
    public function orderNotReady($id){
    	$order=Order::findOrFail($id);
    	$order->status='n';
    	if($order->save()){
    		return redirect()->back();
    	}

    }

    public function foods(){

    $user_id=Auth::user()->id;

    $foods=Food::where('user_id',$user_id)->where('status','1')->with('category')->get();

     return view('foods')->with('foods',$foods);
    // dd($foods);

    }

   public function addFood(){

   	$categories=Category::all();
   	return view('addFood')->with('categories',$categories);
   }

   public function createFood(Request $request){

   	$userID=Auth::user()->id;

   	$food=new Food();
   	$food->name=$request->name;
   	$food->description=$request->description;
   	$food->cat_id=$request->cat_id;
   	$food->user_id=$userID;
   	$food->status='1';
   	if($food->save()){
    		return redirect('/dashboard/foods');
    	}

   }
   public function editFood($id){
  
   	$food=Food::findOrFail($id);
   	$categories=Category::all();
   	return view('editFood')->with(['categories'=>$categories,'food'=>$food]);
   }
   public function updateFood(Request $request){

   	$userID=Auth::user()->id;
   	$foodID=$request->id;

   	$food=Food::findOrFail($foodID);
   	$food->name=$request->name;
   	$food->description=$request->description;
   	$food->cat_id=$request->cat_id;
   	$food->user_id=$userID;
   	$food->status='1';
   	if($food->save()){
    		return redirect('/dashboard/foods');
    	}
   }
   public function deleteFood($id){
	
	  $userID=Auth::user()->id;

   	$food=Food::findOrFail($id);
   	$food->status='0';
   	if($food->save()){
      return redirect('/dashboard/foods');
    }

   }
   public function menus(){

    $menus=Menu::with('menuItems')->get();

    return view('menus')->with('menus',$menus);
   
   }
   public function addMenu(){

   }

   public function createMenu(){
    
    $userID=Auth::user()->id;

    $menu=new Menu();
    $menu->name=$request->name;
    $menu->status=1;
    $menu->user_id=$userID;
    $menu->save();

    return redirect()->back();
   }
   public function editMenu($id){

    $menus=Menu::with('menuItems')->get();
   }

    public function updateMenu(Request $request){

    $menuId=$request->id;

    $userID=Auth::user()->id;

    $menu=Menu::findOrFail($id);
    $menu->name=$request->name;
    $menu->status=1;
    $menu->user_id=$userID;
    $menu->save();

    return redirect()->back();


   }
    public function deleteMenu($id){

    $menuId=$request->id;

    $userID=Auth::user()->id;

    $menu=Menu::where('id',$menuId)->where('status',1);
    $menu->status=0;
    $menu->save();

    return redirect()->back();


   }

}
