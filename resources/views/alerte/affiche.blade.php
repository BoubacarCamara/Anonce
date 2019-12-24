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
    <th scope="col">id</th>
      <th scope="col">Date</th>
      <th scope="col">Personne</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alert as $alertes)
    <tr>
                <td>{{$alertes->id}}</td>             
                <td>{{$alertes->date}}</td>
               <td>{{$alertes->personnes_id->id ?? ''}}</td>
               <td><a href="{{route('edit_alert',['id'=>$alertes->id])}}" class="btn btn-primary" name="edit">editer</a></td>
       <td> <form action="alert/{{$alertes->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></td>
         </div>
       </tr>         
    @endforeach
  </tbody>
</table>
       </th>
   </tr>
</html>
