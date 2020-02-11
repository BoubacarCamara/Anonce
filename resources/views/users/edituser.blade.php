
@extends('layout.app')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monannonce.com</title>
</head>
<body>
<div class="container">
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif
<form action="{{route('edit_users',['id'=>$utilisateur->id ?? ''])}} " method="post" enctype="multipart/form-data"><div>
@csrf
@method('patch')
                <div class="row">
                <div class="form-group col-md-4"> 
                   <input type="text" name="name" class="form-control" placeholder="nom" value={{$utilisateur->name}} >
               </div>
             
               <div class="form-group col-md-4">
                   <input type="text" name="prenom" class="form-control" placeholder="prenom" value={{$utilisateur->prenom}}>
               </div>
               <div class="form-group col-md-4">
                   <input type="text" name="status" class="form-control" placeholder="role" value={{$utilisateur->status}}>
               </div>
               </div>
               <div class="row">
               <div class="form-group col-md-4"> 
                   <input type="number" name="telephone" class="form-control" placeholder="telephone" value={{$utilisateur->telephone}}>
               </div>
               <div class="form-group col-md-4">
                   <input type="text" name="email" class="form-control" placeholder="email" value={{$utilisateur->email}}>
               </div>
               </div>
               
<button class="btn btn-primary" type="submit">Enregistrer</button>

</form>
</body>
</html>