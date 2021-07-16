<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('User.index',compact('users'));
    }

    public function edit($id){
        $user = User::findorfail($id);
        return view('User.edit',compact('user'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            // 'gambar'=>'required',
            'password' => 'required|min:8',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->address = $request->address;
        if ($request->gambar == NULL) {
        // echo "null";
        }else {
            $user->gambar = $request->gambar;
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('home')->with('status','berhasil di edit');
    }
}
