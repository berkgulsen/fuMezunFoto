@extends('layouts.admin')

@section('content')
    <div class="card">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="card-header">
        </div>
        <div class="card-body">
            <form method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{url('/foto-sil-onay')}}" class="mb-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="akademi" class="col-4 col-form-label">Akademi</label>
                    <div class="col-8">
                        <select id="akademi" name="akademi" class="custom-select">
                            @foreach($akademis as $akademi)
                                <option value="{{$akademi->id}}">{{$akademi->akademi_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sub" class="col-4 col-form-label">Sub</label>
                    <div class="col-8">
                        <select id="sub" name="sub" class="custom-select">
                            @foreach($subs as $sub)
                                <option value="{{$sub->id}}">{{$sub->sub_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="department" class="col-4 col-form-label">Bölüm</label>
                    <div class="col-8">
                        <select id="department" name="department" class="custom-select">
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mezuniyetYili" class="col-4 col-form-label">Mezuniyet Yılı</label>
                    <div class="col-8">
                        <select id="mezuniyetYili" name="mezuniyetYili" class="custom-select">
                            @foreach($years as $year)
                                <option value="{{$year->id}}">{{$year->year}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>

            $('#akademi')[0].addEventListener("change", function(){
                var id = $(this).find(':selected')[0].value;
                $.ajax({
                    type:'GET',
                    url:'{{route('subs')}}',
                    data:{'id':id},
                    success:function(response){
                        var sub = document.getElementById('sub');
                        $(sub).empty();
                        var department = document.getElementById('department');
                        $(department).empty();
                        for (var i = 0; i < response.response.length; i++) {
                            $(sub).append('<option id=' + response.response[i].id + ' value=' + response.response[i].id + '>' + response.response[i].sub_name + '</option>');
                        }
                    }
                });
            });

            $('#sub')[0].addEventListener("change", function(){
                var id = $(this).find(':selected')[0].value;
                $.ajax({
                    type:'GET',
                    url:'{{route('departments')}}',
                    data:{'id':id},
                    success:function(response){
                        var department = document.getElementById('department');
                        $(department).empty();
                        for (var i = 0; i < response.response.length; i++) {
                            $(department).append('<option id=' + response.response[i].id + ' value=' + response.response[i].id + '>' + response.response[i].department_name + '</option>');
                        }
                    }
                });
            });

        </script>
    </div>
    </div>

@endsection
