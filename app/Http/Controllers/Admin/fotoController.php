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
    /**
     * @throws \Throwable
     */
    public function insert(Request $request)
    {
        $akademi = $request->akademi;
        $subAkademi = $request->sub;
        $bolum = $request->department;
        $tarih = $request->mezuniyetYili;
        $i = 1;
        if ($request->file('image')) {
            $destinationPath = 'uploads/';
            foreach ($request->file('image') as $image) {
                $size=getimagesize($image);
                $oran = array_values($size)[0]/768;
                $image=Image::make($image)->resize(768,(int)(array_values($size)[1]/$oran));
                do {
                    $filename = str_pad($akademi, 2, '0', STR_PAD_LEFT) . str_pad($subAkademi, 2, '0', STR_PAD_LEFT) . str_pad($bolum, 3, '0', STR_PAD_LEFT) . str_pad($tarih, 4, '0', STR_PAD_LEFT) . str_pad($i, 4, '0', STR_PAD_LEFT);
                    $fileCheck = $destinationPath.$filename.'.jpg';
                    $i++;
                }while(file_exists(public_path($fileCheck)));
                    $image->save($destinationPath.$filename.'.jpg',100);
                    $imagePath = new ImagePath();
                    $imagePath->imagePath = $filename;
                    $imagePath->akademi_id = $request->akademi;
                    $imagePath->sub_id = $request->sub;
                    $imagePath->department_id = $request->department;
                    $imagePath->year_id = $request->mezuniyetYili;
                    $imagePath->saveOrFail();

            }
        }
        return redirect('foto-ekle-akademik')->with('status',"Foto eklendi!");
    }

    /**
     * @throws \Throwable
     */
    public function edit(Request $request, $id){
        $id = ImagePath::find($id);
        $akademi = $id->akademi_id;
        $subAkademi = $id->sub_id;
        $bolum = $id->department_id;
        $tarih = $id->year_id;
        $image = $request->image;
        $filename = $id->imagePath;
        if ($image) {
            $size=getimagesize($image);
            $oran = array_values($size)[0]/768;
            $image=Image::make($image)->resize(768,(int)(array_values($size)[1]/$oran));
                        $path = 'uploads/'.$filename.'.jpg';
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    $id->delete();
                    $image->save($path);
                    $imagePath = new ImagePath();
                    $imagePath->imagePath = $filename;
                    $imagePath->akademi_id = $akademi;
                    $imagePath->sub_id = $subAkademi;
                    $imagePath->department_id = $bolum;
                    $imagePath->year_id = $tarih;
                    $imagePath->saveOrFail();
                }


       return redirect('/foto-sil')->with('status',"foto düzenlendi!");
    }

    public function  show(Request $request){
        //dd($request);
        $data['fotos']=ImagePath::whereAkademi_id($request->akademi)
            ->whereSub_id($request->sub)
            ->whereDepartment_id($request->department)
            ->whereYear_id($request->mezuniyetYili)->get();
        return view('admin.foto.show',compact('request','data'));
    }

    public function delete($id){
        $foto = ImagePath::find($id);
            $path = 'uploads/'.$foto->imagePath.'.jpg';
            if(File::exists($path)){
                File::delete($path);
            }
        $foto->delete();
        return redirect('/foto-sil')->with('status',"foto silindi!");
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
