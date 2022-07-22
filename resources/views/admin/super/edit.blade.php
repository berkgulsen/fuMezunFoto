@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{url('admin-güncelle/'.$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Kullanıcı Adı
                            <input type="text" value="{{$user->name}}" class="form_control" name="name">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email
                            <input type="email" value="{{$user->email}}" class="form_control" name="email">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Şifre
                            <input type="text" value="{{$user->password}}" class="form_control" name="password">
                        </label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                        <h3 class="col-4">Roller</h3>
                        <div class="mb-3 d-flex flex-row">
                            @if($user->roles)
                                @foreach($user->roles as $user_role)
                                    <form method="POST" action=" {{ route('admin.users.roles.remove',[$user->id, $user_role->id]) }}" class="p-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Sil" class="btn btn-info"> {{ $user_role->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div>
                            <form method="POST" action=" {{ route('admin.users.roles',$user->id) }}" class="mb-3">
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
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <h3 class="col-4">Rol İzinleri</h3>
                <div class="mb-3 d-flex flex-row">
                    @if($user->permissions)
                        @foreach($user->permissions as $user_permission)
                            <form method="POST" action=" {{ route('admin.users.permissions.revoke',[$user->id, $user_permission->id]) }}" class="p-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Sil" class="btn btn-info"> {{ $user_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div>
                    <form method="POST" action=" {{ route('admin.users.permissions',$user->id) }}" class="mb-3">
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
