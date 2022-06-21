@extends('layouts.admin')

@section('content')
    <div class="card">
        <a href="{{url('admin-ekle')}}" class="btn btn-primary">Admin ekle</a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Kullanıcı Adı</th>
                    <th>Email</th>
                    <th>Şifre</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $list)
                    <tr>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->password}}</td>
                        <td>
                            <a href="{{url('admin-düzenle/'.$list->id)}}" class="btn btn-primary">Güncelle</a>
                            <a href="{{url('admin-sil/'.$list->id)}}" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
