<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for=""></label>
            <select class="form-select" id="akademi" aria-label="">
                <option></option>
            @foreach($akademis as $akademi)
                <option value="{{$akademi->id}}">{{$akademi->akademi_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3" id="akademiSub">
            <label class="form-label" for="newField3">D</label>
            <select class="form-select" id="sub" aria-label="New Field 3">
                <option value="1">1</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">New Field 5</label>
            <select class="form-select" id="department" aria-label="New Field 5">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mezuniyetYili">Mezuniyet Yılı</label>
            <select class="form-select" id="mezuniyetYili" aria-label="Mezuniyet Yılı">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
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

</script>
</body>
</html>
