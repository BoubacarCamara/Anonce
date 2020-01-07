@extends('layout.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>www.monanonce.com</title>
</head>
<body>
    <h1>Bienvenu!</h1>
    <h5>Ici vous allez remplire les champs en donnant des renseignement  sur votre anonce.</h5>
<div class="container">
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif

       <div class="container">
       <form action="{{route('ajouter_propriete')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="col-md-4 mb-3">
                <select name="Type_de_proprietes_id" id="Type_de_proprietes_id" class="form-control" >
                    <option value="">type de proprietes</option>
                    @foreach($Type_de_propriete as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
                </div>
               <div class="row">
               <div lass="col-md-8 mb-3">
                   <input type="text" name="localisation" class="form-control" placeholder="localite" >
               </div>
            
           
               <div lass="col-md-4 mb-3">
                   <input type="text" name="prix_min" class="form-control" placeholder="prix_min">
               </div>
               </div>
               <div class="row">
               <div class="col-md-4 mb-3">
                   <input type="text" name="prix_max" class="form-control" placeholder="prix_max">
               </div>
               <div class="col-md-4 mb-3">
                   <input type="text" name="nombre_chambre_min" class="form-control" placeholder="nombre_chambre_min">
               </div>
               </div>
               <div class="row">
               <div class="col-md-4 mb-3">
                   <input type="text" name="nombre_chambre_max" class="form-control" placeholder="nombre_chambre_max">
               </div>
               <div class="col-md-4 mb-3">
                   <input type="text" name="salle_de_bain" class="form-control" placeholder="salle de bain">
               </div>
               </div>
               <div class="row">
               <div class="col-md-4 mb-3">
                   <input type="text" name="superficie" class="form-control" placeholder="superficie">
               </div>
               <input type="hidden" value="1" name="users_id">
               <div>
               </div>
               <div class="col-md-4 mb-3">
               <select name="type_anonce" id="type_anonce" class="form-control" >
                    <option value="">type anonce</option>
                        <option name="A_vendre">A vendre</option>
                        <option name="A_louer">A louer</option>
                </select>
                   <!-- <input type="text" name="type_anonce" class="form-control" placeholder="type d'anonce"> -->
               </div>
               </div>
               <div class="row">
               <div class="col-md-4 mb-3">
                   <input type="textarea" name="description" class="form-control" placeholder="description">
               </div> <br><br>
               <label for="">Ajouter une photo</label>
               <img src="/images/c.png" width="5%" alt="">
               <div class="col-md-4 mb-3"><input type="file" name="image"  class="form-control"></div>
               
            
               <div>
                   <button class="btn btn-success">Enregistrer</button>
               </div>
               
</div>
           </form>
</body>
</html>