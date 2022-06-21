<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class adminController extends Controller
{
    public function insert(Request $request){
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('admin-listele')->with('status',"Admin eklendi!");
    }
    public function list(){
        $user = user::all();
        return view('admin.super.list',compact('user'));
    }

    public function edit($id){
        $user = user::find($id);
        return view('admin.super.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        return redirect('dashboard')->with('status',"Admin güncellendi!");
    }

    public function delete($id){
        $user = user::find($id);
        $user->delete();
        return redirect('admin-listele')->with('status',"Admin silindi!");
    }

}