<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
<div class="container px-5 my-5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{route('homepagepost')}}" class="mb-3">
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
                    @foreach($subs as $akademi)
                        <option value="{{$akademi->id}}">{{$akademi->sub_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="department" class="col-4 col-form-label">Bölüm</label>
            <div class="col-8">
                <select id="department" name="department" class="custom-select">
                    @foreach($departments as $akademi)
                        <option value="{{$akademi->id}}">{{$akademi->department_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="mezuniyetYili" class="col-4 col-form-label">Mezuniyet Yılı</label>
            <div class="col-8">
                <select id="mezuniyetYili" name="mezuniyetYili" class="custom-select">
                    <option selected  disabled>Seçiniz</option>
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
<div id="foto">

</div >
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
               //var akademiSub = document.getElementById('akademiSub');
               //$(akademiSub).append('<label class="form-label">' + sub.sub_name +'</label>')

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

   $('#mezuniyetYili')[0].addEventListener("change", function(){
       var yilid = $(this).find(':selected')[0].value;
       var depid = $('#department').find(':selected')[0].value;
       $.ajax({
           type:'GET',
           url:'{{route('fotos')}}',
           data:{'yilid':yilid,'depid':depid},

           success:function(response){
               var foto = document.getElementById('foto');
               $(foto).empty();
               for (var i = 0; i < response.response.length; i++) {
                   $(foto).append('<div  class="card mb-3" style="width: 18rem;"> <div class="card-body"> <img src=uploads/' + response.response[i].imagePath + '.jpg class="card-img-top" alt="resim"> </div> </div>');
               }
           }
       });
   });

</script>
</body>
</html>
