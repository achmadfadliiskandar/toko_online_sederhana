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
            //'password' => 'required|min:8',
        ]);

        $imgName = null;

        if ($request->gambar) {
            $imgName = $request->gambar->getClientOriginalName().'-'. time().'.'. $request->gambar->extension();
            $request->gambar->move(public_path('gambaruser'), $imgName);
        }

        User::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'gambar' => $imgName
        ]);
        return redirect('home')->with('status','berhasil di edit');
    }
}
