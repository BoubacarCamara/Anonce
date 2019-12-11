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
      <th scope="col">localisation</th>
      <th scope="col">Prix min</th>
      <th scope="col">prix max</th>
      <th scope="col">nombre de chambre min</th>
      <th scope="col">nombre de chambre max</th>
      <th scope="col">salle de bain</th>
      <th scope="col">superficie</th>
      <th scope="col">type type_anonce</th>
      <th scope="col">type propriete</th>
      <th scope="col">photo</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($perso as $proprietes)
    <tr>
                <td>{{$proprietes->id}}</td>             
                <td>{{$proprietes->localisation}}</td>
               <td>{{$proprietes->prix_min}}</td>
               <td>{{$proprietes->prix_max}}</td>
               <td>{{$proprietes->nombre_chambre_min}}</td>
               <td>{{$proprietes->nombre_chambre_max}}</td>
               <td>{{$proprietes->salle_de_bain}}</td>
               <td>{{$proprietes->superficie}}</td>
               <td>{{$proprietes->type_anonce}}</td>
               <td>{{$proprietes->description}}</td>
               <td>{{$proprietes->Type_de_proprietes_id->nom ?? ''}}</td>
               <td><img src="{{$proprietes->image ? asset($proprietes->image) : asset('uploads/images/default.png')}}" alt="{{$proprietes->name}}" width="50"></td>
               <td><a href="{{route('update_propriete',['id'=>$proprietes->id])}}" class="btn btn-primary" name="edit">editer</a></td>
       <td> <form action="proprietes/{{$proprietes->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></td>

               <!-- <div class="row">
   <div class="col-6 text-right"><img src="{{asset($proprietes->images)}}" alt="{{$proprietes->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div> -->
</div>

    </tr>         
    @endforeach
  </tbody>
</table>
</html>