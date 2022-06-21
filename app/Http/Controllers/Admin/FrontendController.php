<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function panel(){
        return view('admin.foto.index');
    }
    public function list(){
        return view('admin.list');
    }
}
