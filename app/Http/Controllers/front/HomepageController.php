<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $data['akademis']=Akademi::first()->get();
        //dd($data);
        return view('front.homepage',$data);
    }

    public function  show(Request $request){
        //dd($request);
        return view('front.homepagelist');

    }
}
