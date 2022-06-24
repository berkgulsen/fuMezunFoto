<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use App\Models\ImagePath;
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
        $data['fotos']=ImagePath::whereAkademi_id($request->akademi)
                                ->whereSub_id($request->sub)
                                ->whereDepartment_id($request->department)->get();
        dd($data['fotos']);
        return view('front.homepagelist',compact('request','data'));
    }
}
