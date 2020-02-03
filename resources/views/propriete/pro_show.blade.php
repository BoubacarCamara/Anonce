  
  @extends('layout.app')
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>Mes proprietes</title>
  </head>
  <body>
  
  <table class="table">
  <thead class="thead-dark">
  <tr>
    <!-- <th scope="col">id</th> -->
      <th scope="col">localisation</th>
      <th scope="col">Prixmin</th>
      <th scope="col">prixmax</th>
      <th scope="col">chambremin</th>
      <th scope="col">chambremax</th>
      <th scope="col">salle_bain</th>
      <th scope="col">superficie</th>
      <th scope="col">type_anonce</th>
      <th scope="col">Cathegorie</th>
      <th scope="col">Description</th>
      <th scope="col">photo</th>
    </tr>
  </thead>
  
  <tbody>
  
  @foreach($propriete as $proprietes)
  
    <tr>
  
                    
                <td>{{$proprietes->localisation}}</td>
               <td>{{$proprietes->prix_min}}</td>
               <td>{{$proprietes->prix_max}}</td>
               <td>{{$proprietes->nombre_chambre_min}}</td>
               <td>{{$proprietes->nombre_chambre_max}}</td>
               <td>{{$proprietes->salle_de_bain}}</td>
               <td>{{$proprietes->superficie}}</td>
               <td>{{$proprietes->Type_anonce->type}}</td>
               <td>{{$proprietes->Type_de_proprietes->nom}}</td>
               <td>{{$proprietes->description}}</td>
               <td><img src="{{$proprietes->image ? asset($proprietes->image) : asset('uploads/images/default.png')}}" alt="{{$proprietes->name}}" width="50"></td>
       </tr>         
       @endforeach
  </tbody>
  
</table>
       </th>
   </tr>
      
  </body>
  </html>