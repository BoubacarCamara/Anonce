@extends('layout.app')
@section("contenu_de_la_page")
 <!-- Right Side Of Navbar -->
 <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./images/img7.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Bienvenu</h3>
            <h2>Publier votre gratuitement </h2>
            <p>Monanonce.com</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/img7.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Bienvenu</h3>
            <p>Monanonce.com</p>
          </div>
         <button btn-indigo><a href="/propreite/create">Publier</a></button>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/img7.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Bienvenu</h3>
            <p>Monanonce.com</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


<!-- Page Content -->

<div class="container">



<!-- /.row -->

<!-- Portfolio Section -->
<h2></h2>

@foreach($propriete as $proprietes)

<div class="row">
  <div class="col-lg-4 col-sm-6 col-md-4 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
        <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->localisation}}<br>{{$proprietes->prix_max}}FCFA</a>
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
  <div class="col-lg-4 col-sm-6 col-md-4 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
        <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->localisation}}<br>{{$proprietes->prix_max}}FCFA</a>
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
  <div class="col-lg-4 col-sm-6  col-md-4 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
        <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->localisation}}<br>{{$proprietes->prix_max}}FCFA</a>
        </h4>
        <div class="card-body">
           <h4 class="card-title">
               <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->type_anonce}}</a>
               
           </h4>
           <p class="card-text">{!! \Illuminate\Support\Str::words($proprietes->description, 1000,'....')  !!}</p>
       </div>
       </div>
  
        </div>
    </div>
    <div>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    </div>
   
 
  @endforeach
  
@endsection