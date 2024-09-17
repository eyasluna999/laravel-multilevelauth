<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        return view ('admin.dashboard');


    }


    public function view_users(){

        $users = User::all();

        return view ('admin/dashboard', compact('users'));
    }


    public function edit_users($id){
        $data = User::find($id);

        return view('admin/update_users',compact('data'));
    }


    public function update_users(Request $request,$id){
        $users = User::find($id);
        $users->name =  $request->name;
        $users->email =  $request->email;
        $users->usertype =  $request->usertype;
        $users->street =  $request->street;
        $users->city = $request->city;
        $users->state = $request-> state;
        $users->contactNum = $request -> contactNum;



        $users->save();
        return redirect('view_users');
    }

    public function delete_users($id){
        $data = User::find($id);
        $data->delete();

        return redirect()->back();
    }



}

