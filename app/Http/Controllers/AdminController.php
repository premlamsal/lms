<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function employees(){

    	$users=User::where('user_type','e')->get();

    	return view('employees')->with('users',$users);
    }

    public function kitchenStaffs(){

    	$users=User::where('user_type','k')->get();

    	return view('kitchenStaffs')->with('users',$users);
    }
    public function addKitchenStaff(){

    	return view('addKitchenStaff');
    }
    public function createKitchenStaff(Request $request){

    	$user=new User();
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=Hash::make($request->password);
    	$user->status=$request->status;
    	$user->isVerified=$request->isVerified;
    	$user->user_type='k';
    	$user->save();
    	if($user->save()){
    		return redirect()->route('admin.kitchenStaffs');
    	}
    }
    public function editKitchenStaff($id){
        $user=User::findOrFail($id);

    	return view('editKitchenStaff')->with('user',$user);
    }
    public function updateKitchenStaff(Request $request){
    	$id=$request->id;
    	$user=User::findOrFail($id);
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=Hash::make($request->password);
    	$user->status=$request->status;
    	$user->isVerified=$request->isVerified;
    	$user->user_type='k';
    	$user->save();
    	if($user->save()){
    		return redirect()->route('admin.kitchenStaffs');
    	}
    }
    public function deleteKitchenStaff($id){
    	$user=User::findOrFail($id);
    	$user->status='0';
    	if($user->save()){
    		return redirect()->route('admin.kitchenStaffs');
    	}
    }



    public function addEmployee(){

        return view('addEmployee');
    }
    public function createEmployee(Request $request){

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->status=$request->status;
        $user->isVerified=$request->isVerified;
        $user->user_type='e';
        $user->save();
        if($user->save()){
            return redirect()->route('admin.employees');
        }
    }
    public function editEmployee($id){
        $user=User::findOrFail($id);

        return view('editemployee')->with('user',$user);
    }
    public function updateEmployee(Request $request){
        $id=$request->id;
        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->status=$request->status;
        $user->isVerified=$request->isVerified;
        $user->user_type='e';
        $user->save();
        if($user->save()){
            return redirect()->route('admin.employees');
        }
    }
    public function deleteEmployee($id){
        $user=User::findOrFail($id);
        $user->status='0';
        if($user->save()){
            return redirect()->route('admin.employees');
        }
    }
}
