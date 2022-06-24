<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use App\Models\Department;
use App\Models\ImagePath;
use App\Models\Sub;
use App\Models\Year;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $data['akademis']=Akademi::first()->get();
        $data['subs']=Sub::where('akademi_id',1)->get();
        $data['departments']=Department::where('sub_id',1)->get();
        $data['years']=Year::first()->get();
        //dd($data);
        return view('front.homepage',$data);
    }

    public function  show(Request $request){
        //dd($request);
        $data['fotos']=ImagePath::whereAkademi_id($request->akademi)
                                ->whereSub_id($request->sub)
                                ->whereDepartment_id($request->department)
                                ->whereYear_id($request->mezuniyetYili)->get();
        return view('front.homepagelist',compact('request','data'));
    }
}
