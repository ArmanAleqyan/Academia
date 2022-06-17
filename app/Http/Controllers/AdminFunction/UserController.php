<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = User::OrderBy('id','DESC')->get();
    return view('admin.contentuser.user', compact('user'));
    }

    public function deletuser($id){
     
        $delet_user = User::where('id',$id)->delete();
        if($delet_user){
             return redirect()->back();
        }
    }

    public function oneuser($id){
        $user = User::where('id',$id)->get();
        return view('admin.contentuser.oneuser',compact('user'));
    }

    public function updateUser(Request $request){


       $update = User::where('id',$request->userid)->update([
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
       ]);


       if($update){
           return redirect()->back()->with('succses','succses');
       }
    }
}
