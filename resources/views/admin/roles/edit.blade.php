@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.roles.index') }}" title="Rollere Dön" class="btn btn-primary btn-block">Geri Dön</a>
            </div>
            <form method="POST" action=" {{ route('admin.roles.update',$role->id) }}" class="mb-3">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h3 class="col-4">Rol Adı</h3>
                    <input id="name" name="name" placeholder="Rol" value="{{ $role->name }}" type="text" class="form-control col-4">
                    @error('name') <span > {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </form>
            <div class="mb-3">
                <h3 class="col-4">Rol İzinleri</h3>
                <div class="mb-3 d-flex flex-row">
                    @if($role->permissions)
                        @foreach($role->permissions as $role_permission)
                            <form method="POST" action=" {{ route('admin.roles.permissions.revoke',[$role->id, $role_permission->id]) }}" class="p-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Sil" class="btn btn-info"> {{ $role_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div>
                    <form method="POST" action=" {{ route('admin.roles.permissions',$role->id) }}" class="mb-3">
                        @csrf
                        <div class="form-group mb-3">
                            <h3 class="col-4">İzin Ekleme</h3>
                            <div>
                                <select id="permission" name="permission" class="custom-select col-4">
                                    @foreach($permissions as $permission)
                                        <option value=" {{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('name') <span > {{ $message }}</span> @enderror
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
