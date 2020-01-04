<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anonce imo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('images/img')}}">

</head>

<body>

 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">SAMA KEUR</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Se-connecter</a>
          </li>
          <span class="input-group-btn">
        <button class="btn btn-danger" type="button"><a href="{{route('deconnexion')}}">deconnexion</a></button>
      </span>
          <li class="nav-item">
            <a class="nav-link" href="/register">Inscription</a>
          </li>
          </li>
          <li class="nav-item">
          <span class="input-group-btn">
            <a href="contact">contact</a>
      </span>
      <span class="input-group-btn">
        <button class="btn btn-danger" type="button"><a href="/propriete/create">Publier</a></button>
      </span>
      </li>
        </ul>
      </div>
    </div>
  </nav>

 

      <!-- Sidebar Widgets Column -->
   

       
    <!-- /.row -->

  </div>
  @yield('contenu_de_la_page')


  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>