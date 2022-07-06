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
                    <div class="col-md-6 mb-3">
                        <label for="">Admin Tipi
                            <select name="role_as">
                                <option hidden value="0" @if($user->role_as==0) selected  @endif >Normal Admin</option>
                                <option value="1" @if($user->role_as==1)hidden selected  @endif >Super Admin</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
