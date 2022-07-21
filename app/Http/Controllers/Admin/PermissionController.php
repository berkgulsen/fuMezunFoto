<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissions.index',compact('permissions'));
    }

    public function create(){
        return view('admin.permissions.create');
    }

    public function store(Request $request){
        $validated = $request->validate(['name'=>['required','min:3']]);
        Permission::create($validated);
        return to_route('admin.permissions.index')->with('message','Rol başarıyla oluşturuldu');
    }

    public function edit(Permission $permission){
        $roles = Role::all();
        return view('admin.permissions.edit',compact('permission','roles'));
    }

    public function update(Permission $permission, Request $request){
        $validated = $request->validate(['name'=>['required','min:3']]);
        $permission->update($validated);
        return to_route('admin.permissions.index')->with('message','Rol başarıyla güncellendi.');
    }

    public function destroy(Permission $permission){
        $permission->delete();
        return to_route('admin.permissions.index')->with('message','İzin silindi');
    }

    public function assignRole(Request $request, Permission $permission){
        if ($permission->hasRole($request->role)){
            return back()->with('message','Rol zaten var');
        }
        $permission->assignRole($request->role);
        return back()->with('message','İzin eklendi');
    }

    public function removeRole(Permission $permission, Role $role){
        if ($permission->hasRole($role)){
            $permission->removeRole($role);
            return back()->with('message','Rolün izni kaldırıldı.');
        }
        return back()->with('message','Rol bu izne sahip değil');

    }
}
