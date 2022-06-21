<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class fotoController extends Controller
{
    public function insert(Request $request){
        $foto = new foto();
        while($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads', $filename);
            $foto->image = $filename;
        }
        $foto->save();
        return redirect('admin-listele')->with('status',"Foto eklendi!");
    }

    public function edit($id){
        $foto = foto::find($id);
        return view('admin.category.edit', compact('foto'));
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
