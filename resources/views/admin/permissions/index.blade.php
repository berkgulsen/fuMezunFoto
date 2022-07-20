@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.permissions.create') }}" title="İzin Ekle" class="btn btn-primary btn-block">İzin ekle</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>İzin Adı</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td class="px-5">
                            <div>
                                {{$permission->name}}
                            </div>
                        </td>
                        <td class="px-1">
                            <a href=" {{ route('admin.permissions.edit',$permission->id) }}" title="Güncelle" class="btn btn-sm btn-primary">Güncelle</a>
                            <form method="POST" action=" {{ route('admin.permissions.destroy',$permission->id) }}">
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
