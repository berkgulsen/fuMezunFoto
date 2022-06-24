<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;


class FrontendController extends Controller
{

    public function fotoIndex(){
        $data['akademis']=Akademi::first()->get();
        $data['years']=Year::first()->get();
        return view('admin.foto.index',$data);
    }

    public function adminIndex(){
        return view('admin.admin.index');
    }

    public function list(){
        $user = User::all();
        return view('admin.super.add',compact('user'));
    }

    public function listFoto(){
        return view('admin.add.index');
    }

}
