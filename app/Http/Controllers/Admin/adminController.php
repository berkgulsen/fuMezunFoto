<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akademi;
use App\Models\Department;
use App\Models\Fakulte;
use App\Models\ImagePath;
use App\Models\Sub;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function insert(Request $request){
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('admin-listele')->with('status',"Admin eklendi!");
    }
    public function list(){
        $user = user::all();
        return view('admin.super.list',compact('user'));
    }

    public function edit($id){
        $user = user::find($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.super.edit', compact('user','roles','permissions'));
    }

    public function update(Request $request, $id){
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_as = $request->role_as;
        $user->update();
        return redirect('admin-listele')->with('status',"Admin güncellendi!");
    }

    public function delete($id){
        $user = user::find($id);
        $user->delete();
        return redirect('admin-listele')->with('status',"Admin silindi!");
    }

    public function getSub(Request $request){
        $id=$request->id;
        $subs=Sub::where('akademi_id',$id)->get();
        return response()->json(['response' => $subs]);
    }
    public function getDepartment(Request $request){
        $id=$request->id;
        $departments=Department::where('sub_id',$id)->get();
        return response()->json(['response' => $departments]);
    }
    public function getFotos(Request $request){
        $fotos=ImagePath::whereDepartment_id($request->depid)
                        ->whereYear_id($request->yilid)->get();
        return response()->json(['response' => $fotos]);
    }

    public function assignRole(Request $request, User $user){
        if ($user->hasRole($request->role)){
            return back()->with('message','Rol zaten var');
        }
        $user->assignRole($request->role);
        return back()->with('message','İzin eklendi');
    }

    public function removeRole(User $user, Role $role){
        if ($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('message','Kullanıcının rolü kaldırıldı.');
        }
        return back()->with('message','Kullanıcı bu role sahip değil');
    }

    public function givePermission(Request $request, User $user){
        if($user->hasPermissionTo($request->permission)){
            return back()->with('message','İzin zaten var');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message','İzin eklendi');
    }

    public function revokePermission(User $user, Permission $permission){
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return back()->with('message','İzin ilgili kullanıcıdan silindi');
        }
        return back()->with('message','Kullanıcı bu izne sahip değil');
    }
}
