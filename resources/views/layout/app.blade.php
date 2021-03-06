<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Monanonce.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('images/img')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-secondary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/home">MonAnonce.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">A propos</a>
          </li> -->
           <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        <li class="nav-item">
                          <a class="nav-link" href="/sendemail">Contact</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="/accueil">Accueil</a>
                        </li>
                       
                      
                        @guest
                      
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscrivez-vous') }}</a>
                                </li>

                            @endif
      
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
    
                        @endguest
                        <li class="nav-item dropdown">
                              <button class="btn btn-danger" type="button"><a href="/propriete/create">Publier</a></button>
                            </li>
                    </ul>
         
      <!-- <span class="input-group-btn">
        <button class="btn btn-danger" type="button"><a href="/propriete/create">Publier</a></button>
      </span> -->
      <!-- </li>
        </ul> -->
      </div>
    </div>
    
  </nav>

 

      <!-- Sidebar Widgets Column -->
   

       
    <!-- /.row -->

  </div>
  @yield('contenu_de_la_page')


  <footer class="py-5 bg-secondary with=100% ">
    <div class="container">
    <div class="row text-white">
    <div col-md-6 col-sm-6>  
    <i class="fab fa-instagram"></i>
    </div>
    &nbsp; &nbsp;&nbsp;
   <div col-md-6 col-sm-6 >
   <i class="fab fa-facebook"></i>   </div>
      </div>
    <p class="m-0 text-center text-white">Tout droit réservé &copy; www.monanonce.com 2019</p>

  </footer>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>