@extends('layout.app')
<div>
</div>
<div>
</div>
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
   <table class="table">
  <thead class="thead-dark">
  <tr>
    <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Status</th>
      <th scope="col">Tlephone</th>
      <th scope="col">Email</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($perso as $proprietes)
    <tr>
                <td>{{$users->id}}</td>             
                <td>{{$users->name}}</td>
               <td>{{$users>prenom}}</td>
               <td>{{$users>status}}</td>
               <td>{{$users>telephone}}</td>
               <td>{{$users->email}}</td>
               <td><a href="{{route('edit_users',['id'=>$users->id])}}" class="btn btn-primary" name="edit">editer</a></td>
       <td> <form action="propriete/{{$users->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></td>
       </tr>         
    @endforeach
  </tbody>
</table>
       </th>
   </tr>
</html>
