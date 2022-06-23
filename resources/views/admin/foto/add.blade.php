@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{url('/foto-ekle-onay')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">akademi
                    <input type="text" class="form_control" name="akademi">
                </label>
                <label for="">subAkademi
                    <input type="text" class="form_control" name="subAkademi">
                </label>
                <label for="">bolum
                    <input type="text" class="form_control" name="bolum">
                </label>
                <label for="">tarih
                    <input type="text" class="form_control" name="tarih">
                </label>
                <div class="col-md-12">
                    <input type="file" class="form_control" name="image[]" multiple>
                </div>
                <input type="submit" value="Upload">
            </form>
        </div>
    </div>
@endsection
