<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  

<form action="{{route('editer_personne',['id'=>$perso->id])}}" method="post">
   @csrf
   @method('patch')
   <h1>Edition</h1>
   <div><input type="text" name="nom" class="form-control" placeholder="le nom du personne" value="{{$perso->nom}}"></input></div>
   <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$perso->prenom}}"></input> </div>
   <div> <input type="text" name="adress" class="form-control" id="description"  class="adress" placeholder="adess" value="{{$perso->adress}} "></input> </div>
   <div> <input type="text" name="telephone" class="form-control" id="description"  class="telephone" placeholder="tel:" value="{{$perso->telephone}}"></input> </div>
   <div> <input type="text" name="email" class="form-control" id="description" class="email" placeholder="La description" value="{{$perso->email}}"></input> </div>
   <div> <input type="text" name="status" class="form-control" id="description"  class=status placeholder="La description" value="{{$perso->status}}"></input> </div>

  <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>


</body>
</html>