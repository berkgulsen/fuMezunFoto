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
        </div>
    </div>
@endsection
