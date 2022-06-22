<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagePath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class fotoController extends Controller
{
    public function insert(Request $request){
        $imagePath = new ImagePath();
        $akademi = $request->akademi;
        $subAkademi = $request->subAkademi;
        $bolum = $request->bolum;
        $tarih = $request->tarih;
        $i = 1;
        while($files=$request->file('image')){
            $k = 0;
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $akademi.$subAkademi.$bolum.$tarih.str_pad($i, 4, '0', STR_PAD_LEFT).'.'.$ext;
            $path =  'uploads'.$filename;
            while($k == 0){
                if(File::exists($path)){
                    $i++;
                }else{
                    $file->move('uploads', $filename);
                    $imagePath->imagePath = $filename;
                    $imagePath->save();
                    $k = 1;
                }
            }
        }

        return redirect('admin-listele')->with('status',"Foto eklendi!");
    }

    public function edit(){
        return view('admin.foto.add');
    }

    public function update(Request $request, $id){
        $foto = foto::find($id);
        while ($request->hasFile('image')){
            $path = 'assets/uploads/category/'.$foto->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $foto->image = $filename;
        }
        return redirect('dashboard')->with('status',"Item updated!");
    }

    public function delete($id){
        $foto = foto::find($id);
        while($foto->image){
            $path = 'assests/uploads/category/'.$foto->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $foto->delete();
        return redirect('categories')->with('status',"Item deleted!");
    }
}
