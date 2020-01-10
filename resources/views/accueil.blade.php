@extends('layout.app')
@section("contenu_de_la_page")
 <!-- Right Side Of Navbar -->
 
 
<!-- Page Content -->

<div class="container">

<!-- <marquee dirction="left"><mark><h1>Bienvenu  sur monanonce.com</h1></mark></marquee> -->


<!-- /.row -->

<!-- Portfolio Section -->
<h2></h2>
@foreach($propriete as $proprietes)

<div class="row">
  <div class="col-lg-4 col-sm-6  col-md-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a><div class="card-body">
        <h4 class="card-title">
        <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->localisation}}{{$proprietes->prix_max}}FCFA</a>
        </h4>
        <div class="card-body">
           <h4 class="card-title">
               <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->type_anonce}}</a>   
           </h4>
           <p class="card-text">{!! \Illuminate\Support\Str::words($proprietes->description, 25,'....')  !!}</p>
       </div>
        </div>
    </div>
  </div> 
  
@endforeach

    
@endsection