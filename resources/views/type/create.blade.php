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
    


       <div class="container">
       @if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif
@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif
       <h6>Bienvenu chez monanonce.com</h6>
    <h5>Ici vous allez remplire les champs en donnant des renseignement  sur votre anonce.</h5>
       <form action="{{route('ajouter_anonce_type')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
               
               <div class="col-md-4 mb-3">
               
              <input type="text" name="typ">
               <div>
                   <button class="btn btn-success">Enregistrer</button>
                </div>
                   @if(session('success'))
                   <div class="alert alert-success">{{session('success')}}</div>
                 @endif        
</div>
           