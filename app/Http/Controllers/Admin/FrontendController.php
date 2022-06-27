<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use App\Models\Department;
use App\Models\Sub;
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

    public function fotoDelete(){
        $data['akademis']=Akademi::first()->get();
        $data['years']=Year::first()->get();
        $data['subs']=Sub::where('akademi_id',1)->get();
        $data['departments']=Department::where('sub_id',1)->get();
        return view('admin.foto.delete',$data);
    }

}
