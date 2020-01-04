@extends('layout.app')
@section("contenu_de_la_page")

<div class="col-md-12">

<!-- Search Widget -->
<div class="card mb-4">
  

  <h5 class="card-header">Search</h5>
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
        <button class="btn btn-danger" type="button">recherche</button>
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

<h1 class="my-4">Welcome </h1>


<!-- /.row -->

<!-- Portfolio Section -->
<h2></h2>
@foreach($propriete as $proprietes)
<div class="row">
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
        <a href="/propriete/{{$proprietes->id}}/show">{{$proprietes->localisation}}</a>
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
          <a href="#">Project Two</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Three</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Four</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Five</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Six</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- /.row -->

<!-- Features Section -->
<div class="row">
  <div class="col-lg-6">
    <h2>Modern Business Features</h2>
    <p>The Modern Business template by Start Bootstrap includes:</p>
    <ul>
      <li>
        <strong>Bootstrap v4</strong>
      </li>
      <li>jQuery</li>
      <li>Font Awesome</li>
      <li>Working contact form with validation</li>
      <li>Unstyled page elements for easy customization</li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
  </div>
  <div class="col-lg-6">
  <a href="#"><img class="card-img-top" src="{{$proprietes->image ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a></div>
<!-- /.row -->

<hr>

<!-- Call to Action Section -->
<div class="row mb-4">
  <div class="col-md-8">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
  </div>
  <div class="col-md-4">
    <a class="btn btn-lg btn-success btn-block" href="#">Appellez nous</a>
  </div>
  
</div>

</div>

<!-- /.container -->
  <!-- /.container -->

  <!-- Footer -->
  
@endsection