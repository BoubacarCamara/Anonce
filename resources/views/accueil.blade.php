@extends('layout.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sama Keur</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img7.jpeg" alt="">
      </div>
      <div class="col-lg-6">
        <h2>A propos Sama Keur</h2>
        <p>Nous somme une entreprise qui aident les personnes desirant louer des appartement,vendre des terrains, vendre des maison .
            Nous leurs facilitons la tache en leur donnant locasion de publier leur annonces .
            Les client aussi peuvent visiter le site et demander la maison ou l'appartement qu'il veulent acheter ou louer
            Merci de votre attention nous sommes la pour vous!!!
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
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
  

  <!-- /.container -->

  <!-- Footer -->
  <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
