@extends('layouts.admin')

@section('content')
    <img src="{{asset('uploads/'.$foto->imagePath.'.png')}}"  width="800px" alt="resim">


@endsection
