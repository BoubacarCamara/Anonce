@extends('layout.app')

@section('contenu_de_la_page')

   <div class="container mt-5" style="width: 60vw">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">
               <p><img class="img-fluid rounded mb-4 mb-lg-0" src="{{$propriete->image ?? asset('uploads/images/default.png')}}" alt=""></p>
               <h3 class="font-weight-light">{{$propriete->localisation}}</h3><br>
               <p>{{$propriete->prix_min.'FCFA' ?? ''}}</p><br>
               <hr>
               <div class="seller-div">
                   <h3>Infos du proprietaire</h3>
                   <strong>{{$propriete->users->name}}</strong><br><br>
                   <strong><i class="fa fa-home"></i>Adresse email:</strong>{{$propriete->users->email}}<br><br>
                   <strong><i class="fa fa-phone-alt"></i> telephone:</strong> <button classe="btn btn-danger">{{$propriete->users->telephone}}</button> <br>
               </div>
           </div>
           <!-- /.col-lg-8 -->
           <div class="col-lg-7">
               <p>{!!$propriete->description!!}</p>
               <a class="btn btn-primary" href="/propriete/{{$propriete->id}}/show">Contactez moi</a>
           </div>
           <!-- /.col-md-4 -->
       </div>
   </div>
   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>www.monanonce.com</title>
  </head>
  <body>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
