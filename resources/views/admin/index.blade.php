@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{url('admin-ekle')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Kullanıcı adı
                            <input type="text" class="form_control" name="name">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email
                            <input type="text" class="form_control" name="email">
                        </label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Şifre
                            <input type="text" class="form_control" name="password">
                        </label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
