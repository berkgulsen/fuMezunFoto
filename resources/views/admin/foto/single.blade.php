@extends('layouts.admin')

@section('content')
    <img src="{{asset('uploads/'.$foto->imagePath.'.jpg')}}"  width="800px" alt="resim">


@endsection
