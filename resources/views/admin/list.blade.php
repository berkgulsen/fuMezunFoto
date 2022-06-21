@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <img src="{{asset('assets/uploads/category/'.$item->image)}}" class="cate-image" alt="Image not found">
                        </td>
                        <td>
                            <a href="{{url('edit-item/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-item/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
