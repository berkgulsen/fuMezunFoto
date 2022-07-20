@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.roles.index') }}" title="Rollere Dön" class="btn btn-primary btn-block">Geri Dön</a>
            </div>
            <form method="POST" action=" {{ route('admin.roles.store') }}">
                @csrf
                <div class="form-group">
                    <input id="name" name="name" placeholder="Rol" type="text" class="form-control">
                    @error('name') <span > {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Oluştur</button>
                </div>
            </form>
        </div>
    </div>
@endsection
