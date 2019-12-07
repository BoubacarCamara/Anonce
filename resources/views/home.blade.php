
@extends('layout.app')
@section("contenu_de_la_page")
<div class="recherche" >
      <div class="sectioncontainer" data-parentid="62"  id="65" style=""><div class="component filters" data-parentid="65" id="67"  style="">
          <div class="filters-tab-container row fullscreen align-items-center justify-content-center">
          <div class="filters-container filter-content col-lg-12 col-md-12">
          <div class="search-field bg-brand">
          <form class="search-form loadingspinner clearfix" action="/search" data-culture="/">
          <div class="row">
          <div class="col-sm-4col-xs-4 col-md-3 ">
          <select aria-label="Mandate Type" class="custom-select-inverse mandateType" data-placeholder="Type" id="type_id" name="type_id" style="width:100%; height:36px;"><option selected="selected" value="1">&#192; Vendre</option>
          <option value="2">&#192; Louer par Mois</option>
          <option value="3">&#192; Louer par Jour</option>
          </select>
          </div>
          <script>
            var SEARCH_SHAPE_DATA = {};
          </script>
          <div class="filter-search col-sm-12 col-xs-12 col-md-9">
          <div id="locationHolder">
          <input type="text" name="filterversion" value="" placeholder="localisation" />
          </div>
          </div>
          <div class="col-sm-12 col-xs-12 col-md-3">
          <select aria-label="Category" class="custom-select inputoffset" data-placeholder="Catégorie" id="category" name="category"><option value="">Cat&#233;gorie</option>
          <option value="16">Appartements (654)</option>
          <option value="1"> -- Studios (100)</option>
          <option value="14">Maisons (310)</option>
          <option value="29"> -- Villas (208)</option>
          <option value="17">Terrains (236)</option>
          <option value="13">Propri&#233;t&#233;s Commerciales (122)</option>
          <option value="27">Chambres (51)</option>
          </select>
          </div>
          <div class="col-sm-6 col-xs-6 col-md-2">
          <select aria-label="Chambres &#224; coucher" name="minbeds" class="custom-select inputoffset">
          <option value="" data-display="Chambres &#224; coucher">Chambres &#224; coucher</option>
          <option value="1">1+ Chambre</option>
          <option value="2">2+ Chambres &#224; coucher</option>
          <option value="3">3+ Chambres &#224; coucher</option>
          <option value="4">4+ Chambres &#224; coucher</option>
          <option value="5">5+ Chambres &#224; coucher</option>
          </select>
          </div>
          <div class="col-sm-6 col-xs-6 col-md-2">
          <select aria-label="Salles de bain" name="bathrooms" class="custom-select inputoffset">
          <option value="" data-display="Salles de bain">Salles de bain</option>
          <option value="1">1+ Salle de bain</option>
          <option value="2">2+ Salles de bain</option>
          <option value="3">3+ Salles de bain</option>
          <option value="4">4+ Salles de bain</option>
          <option value="5">5+ Salles de bain</option>
          </select>
          </div>
          <div class="col-sm-12 col-xs-12 col-md-3">
          <input type="text" class="custom-input inputoffset priceformat" aria-label="maxprice" id="maxprice" name="maxprice" placeholder='Prix max.' data-number-delimiter="," />
          </div>
          <div class="col-sm-12 col-xs-12 col-md-2">
          <button type="submit" class="btn btn-danger btn-block search-listings expand"><span class="glyphicon glyphicon-search"></span> <strong>Rechercher</strong></button>
          </div>
          </div>
          </form>
          </div>
          </div>
          </div>
    </div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
    <!-- Portfolio Section -->
    <h2>Portfolio Heading</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project One</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Three</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
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
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->

@endsection