@extends('layout.app')
@section("contenu_de_la_page")
 <!-- Right Side Of Navbar -->
 
 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                      
<div class="col-md-12">

<!-- Search Widget -->
<div class="card mb-4">
  

  <h5 class="card-header">Recherchez une propriete</h5>
  <div class="card-body">
<div class="row">
  <div class="input-group col-md-3">
  <label for="validationTooltip04">type anonce</label>
      <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">A vendre</option>
        <option>A louer</option>
      </select>
      </div>
    <div class="input-group col-md-6">
      <input type="text" class="form-control" placeholder="Search for...">
     
    </div>
    <span class="input-group-btn">
        <button class="btn btn-danger" type="button" name="submite"> <a href="#">recherche</a> </button>
      </span>
</div>
  </div>
  <div class="form-row">
  <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Categorie</label>
      <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">maison</option>
        <option>appartement</option>
        <option>chambre</option>
        <option>terrain</option>
      </select>
      <div class="invalid-tooltip">
        selectionnez une categirie svp!!!.
      </div>

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Chambre</label>
      <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">1+chambre</option>
        <option>2+chambres</option>
        <option>3+chambres</option>
        <option>4+chambres</option>
        <option>5+chambres</option>
        <option>6+chambres</option>
      </select>
      <div class="invalid-tooltip">
        selection nombre de chambres svp!!.
      </div>

    </div>
    <div class="col-md-3">
  <label for="validationTooltip04">Salle de bain</label>
      <select class="custom-select" id="validationTooltip04" required>
        <option selected disabled value="">1+salle de bain</option>
        <option>2+salle de bain</option>
      </select>
      </div>
      <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Prix max</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
      selection le prix max svp!!..
      </div>
    </div>
  </div>
  </div>
</form>
  </div>
</div>
<!-- Page Content -->

<div class="container">

<marquee dirction="left"><mark><h1>Bienvenu  sur monanonce.com</h1></mark></marquee>


<!-- /.row -->

<!-- Portfolio Section -->
<h2></h2>
@foreach($propriete as $proprietes)

<div class="row">
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
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
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
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
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
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
<!-- /.row -->

<!-- Features Section -->

<!-- /.row -->



<!-- Call to Action Section -->




<!-- /.container -->
  <!-- /.container -->

  <!-- Footer -->
  
@endsection