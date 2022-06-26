<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagePath;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class  fotoController extends Controller
{
    public function insert(Request $request)
    {
        $akademi = $request->akademi;
        $subAkademi = $request->sub;
        $bolum = $request->department;
        $tarih = $request->mezuniyetYili;
        $i = 1; $c = 0; $v = 0;
        if ($request->file('image')) {
            $destinationPath = 'uploads/';
            foreach ($request->file('image') as $image) {
                $bool = 0;
                $size = File::size($image);
                $size = $size/1000000;
                if($size>1){
                    $bool = 1;
                }
                do {
                    $filename = str_pad($akademi, 2, '0', STR_PAD_LEFT) . str_pad($subAkademi, 2, '0', STR_PAD_LEFT) . str_pad($bolum, 3, '0', STR_PAD_LEFT) . str_pad($tarih, 4, '0', STR_PAD_LEFT) . str_pad($i, 4, '0', STR_PAD_LEFT);
                    $fileCheck = $destinationPath.$filename . '.' . 'png';
                    $i++;
                }while(file_exists(public_path($fileCheck)));
                if($bool==1){
                    $c++;
                }else{
                    $image = Image::make($image);
                    $image->resize(400, 400, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $image->save($destinationPath. $filename . '.' . 'png');
                    $imagePath = new ImagePath();
                    $imagePath->imagePath = $filename;
                    $imagePath->akademi_id = $request->akademi;
                    $imagePath->sub_id = $request->sub;
                    $imagePath->department_id = $request->department;
                    $imagePath->year_id = $request->mezuniyetYili;
                    $imagePath->save();
                    $v++;
                }
            }
        }
        return redirect('foto-ekle-akademik')->with('status',$v."Foto eklendi!  ". $c. "Foto eklenemedi, dosya boyutu çok büyük!");
    }

    public function edit(){
        return view('admin.foto.add');
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

    public function userEdit($id){
        $user = user::find($id);
        return view('admin.foto.kullanici', compact('user'));
    }

    public function userUpdate(Request $request, $id){
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->update();
        return redirect('dashboard')->with('status',"Admin güncellendi!");
    }

}
