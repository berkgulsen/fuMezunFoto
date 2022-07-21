@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.permissions.index') }}" title="İzinlere Dön" class="btn btn-primary btn-block">Geri Dön</a>
            </div>
            <form method="POST" action=" {{ route('admin.permissions.update',$permission) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input id="name" name="name" placeholder="İzin" value="{{ $permission->name }}" type="text" class="form-control">
                    @error('name') <span > {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </form>
            <div class="mb-3">
                <h3 class="col-4">Roller</h3>
                <div class="mb-3 d-flex flex-row">
                    @if($permission->roles)
                        @foreach($permission->roles as $permission_role)
                            <form method="POST" action=" {{ route('admin.permissions.roles.remove',[$permission->id, $permission_role->id]) }}" class="p-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Sil" class="btn btn-info"> {{ $permission_role->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div>
                    <form method="POST" action=" {{ route('admin.permissions.roles',$permission->id) }}" class="mb-3">
                        @csrf
                        <div class="form-group mb-3">
                            <h3 class="col-4">Rol Ekle</h3>
                            <div>
                                <select id="role" name="role" class="custom-select col-4">
                                    @foreach($roles as $role)
                                        <option value=" {{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role') <span > {{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary">İzin Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
