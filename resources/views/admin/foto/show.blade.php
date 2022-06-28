@extends('layouts.admin')

@section('content')


    <!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotoğraflar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script>
    function myFunction() {
        var x = document.getElementById("desc");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

</head>
<body>
@if((count($data['fotos']))>0)
<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Fotoğraf</th>
        <th scope="col">Bölüm Adı</th>
        <th scope="col">İşlemler</th>
    </tr>
    </thead>
    <tbody>
    <?php $count = 0 ?>
    @foreach($data['fotos'] as $foto)
    <tr>
        <th scope="row"></th>
        <td>
            <img src="{{asset('/uploads/'.$foto->imagePath.'.png')}}"  width="150px" alt="resim">
        </td>
        <td>Otto</td>
        <td>
            <a href="{{route('foto-single',[$foto->id])}}" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
            <button type="button" title="Düzenle" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal{{$count}}">
                <i class="fa fa-edit"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$count}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form id="desc" action="{{url('foto-edit/'.$foto->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{$foto->id}}
                                <div class="col-md-12">
                                    <input type="file" class="form_control" name="image">
                                </div>
                                <input type="submit" value="Upload">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submimt" value="Upload" class="btn btn-primary">Yükle</button>
                        </div>
                    </div>
            </form>
                </div>
            </div>
            <?php $count++; ?>
            <a href="{{url('foto-delete/'.$foto->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@else
    <script>
        window.location.replace("{{route('foto-sil')}}");
    </script>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

@endsection
