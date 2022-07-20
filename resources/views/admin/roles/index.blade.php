@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.roles.create') }}" title="Rol Ekle" class="btn btn-primary btn-block">Rol ekle</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Rol Adı</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td class="px-5">
                            <div>
                                {{$role->name}}
                            </div>
                        </td>
                        <td class="px-1">
                            <a href=" {{ route('admin.roles.edit',$role->id) }}" title="Güncelle" class="btn btn-sm btn-primary">Güncelle</a>
                            <form method="POST" action=" {{ route('admin.roles.destroy',$role->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Sil" class="btn btn-sm btn-danger">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
