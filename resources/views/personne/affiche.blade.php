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
<!-- <table class="table table-striped">
      
       @foreach($perso as $personne)
           <tr>
               <th>#</th>
               <td>{{$personne->nom}}</td>
               <td>{{$personne->prenom}}</td>
               <td>{{$personne->adress}}</td>
               <td>{{$personne->telephone}}</td>
               <th></th>
           </tr>
       @endforeach
   </table> -->

  
   <table class="table">
  <thead class="thead-dark">
  <tr>
    <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adress</th>
      <th scope="col">Telephne</th>
      <th scope="col">Email</th>
      <th scope="col">status</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($perso as $personne)
    <tr>
                <td>{{$personne->id}}</td>             
                <td>{{$personne->nom}}</td>
               <td>{{$personne->prenom}}</td>
               <td>{{$personne->adress}}</td>
               <td>{{$personne->telephone}}</td>
               <td>{{$personne->email}}</td>
               <td>{{$personne->status}}</td>
              
        <td><a href="{{route('editer_personne',['id'=>$personne->id])}}" class="btn btn-primary" name="edit">editer</a></td>
       <td> <form action="personne/{{$personne->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></td>

    </tr>         
    @endforeach
  </tbody>
</table>
</html>
