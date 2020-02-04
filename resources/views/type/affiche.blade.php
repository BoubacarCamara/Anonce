@extends('layout.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Demende</title>
</head>
<body>
   <table class="table">
  <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
      <th scope="col">type_propriete</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($anonce as $type_anonces)
    <tr>
                <td>{{$type_anonces->id}}</td>             
                <td>{{$type_anonces->typ}}</td>
        <td><a href="{{route('editer_anonce_type',['id'=>$type_anonces->id])}}" class="btn btn-primary" name="edit">editer</a></td>
       <td> <form action="type/{{$type_anonces->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></td>
    </tr>         
    @endforeach
  </tbody>
</table>
</html>
