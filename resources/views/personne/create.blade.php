<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> ajouter_personne</title>
</head>
<body>
    <h1>ajout de oersonne</h1>
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
           <form action="{{route('ajouter_personne')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="nom" class="form-control" placeholder="nom" >
               </div>
             
               <div>
                   <input type="text" name="prenom" class="form-control" placeholder="prenom">
               </div>
               <div>
                   <input type="text" name="adress" class="form-control" placeholder="adress">
               </div>
               </div>
               <div>
                   <input type="text" name="telephone" class="form-control" placeholder="telephone">
               </div>
               <div>
                   <input type="text" name="email" class="form-control" placeholder="email">
               </div>
               <div>
                   <input type="text" name="status" class="form-control" placeholder="status">
               </div>
               
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
</body>
</html>