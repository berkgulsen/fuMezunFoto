<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function fotoIndex(){
        return view('admin.foto.index');
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
