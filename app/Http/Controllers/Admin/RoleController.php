<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        //$roles = Role::whereNotIn('name',['superAdmin'])->get(); superAdmin dışındaki rolleri indexe göndermek için
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        $validated = $request->validate(['name'=>['required','min:3']]);
        Role::create($validated);
        return to_route('admin.roles.index')->with('message','Rol başarıyla oluşturuldu');
    }

    public function edit(Role $role){
        $permissions = Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Role $role, Request $request){
        $validated = $request->validate(['name'=>['required','min:3']]);
        $role->update($validated);
        return to_route('admin.roles.index')->with('message','Rol başarıyla güncellendi.');
    }

    public function destroy(Role $role){
        $role->delete();
        return to_route('admin.roles.index')->with('message','Rol silindi');
    }

    public function givePermission(Request $request, Role $role){
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','İzin zaten var');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message','İzin eklendi');
    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('message','İzin ilgili rolden silindi');
        }
        return back()->with('message','Rol bu izne sahip değil');
    }
}
