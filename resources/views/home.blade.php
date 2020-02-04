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
        <div class="carousel-item" style="background-image: url('./images/imo.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Bienvenu</h3>
            <p>Monanonce.com</p>
          </div>
        
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/app.jpg')">
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
  </header> <br>
  <div class="button-group flex-nowrap btn-btn-primary">
  <div class="button-group-prepend">
    <marquee behavior="" direction="left"><span class="button-group-text" id="addon-wrapping">Recherche une annonce</span></marquee>
  </div>
</div>
  <form  method="POST" action="{{route('recherche')}}">
  @csrf
  <div class="input-group mb-3">
  
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Categorie</label>
  </div>
   <select name="Type_de_proprietes_id" id="Type_de_proprietes_id" class="form-control" >
                    <option value="">type de proprietes</option>
                    @foreach($type_de_propriete as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
</div>
<div>
<select name="Type_anonce_id" id="Type_anonce_id" class="form-control" >
                    <option value="">type anonce</option>
                    @foreach($anonce as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
</div>

  
  <div class="input-group-append">
    <button class="btn btn-outline-success" type="submit">recherche</button>
  </div>
  </form>
</div>

<!-- Page Content -->

<div class="container">



<!-- /.row -->

<!-- Portfolio Section -->
<h2></h2>

<div class="row">
@foreach($propriete as $propriete)
@csrf
  <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 portfolio-item ">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" style="height:200px;" src="{{$propriete->image ? asset($propriete->image): asset('/public/uploads/images/')}}" height="250" width="250" alt=""></a><div class="card-body"> 
    <h4 class="card-title">
               <a href="/propriete/{{$propriete->id}}/show">{{$propriete->Type_de_proprietes->nom}}</a>
               
           </h4>
        <h4 class="card-title">
        <a href="/propriete/{{$propriete->id}}/show">{{$propriete->localisation}}<br>{{$propriete->prix_max}}FCFA</a>
        </h4>
        <div class="card-body" style="height:60px;">
           <h4 class="card-title">
               <a href="/propriete/{{$propriete->id}}/show">{{$propriete->Type_anonce->type}}</a>
               
           </h4>
       </div>
        </div>
    </div>
  </div>
  @endforeach
    </div>
   
 
  
@endsection