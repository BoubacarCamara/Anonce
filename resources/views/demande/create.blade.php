<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="container">
       
       <div class="container">
           <form action="{{route('ajouter_demande')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="date" class="form-control" placeholder="la date de la demande">
               </div>
               <div>
                   <input type="text" name="proprietes_id" class="form-control" placeholder="La propriete">
               </div>
               <div>
                   <input type="text" name="personnes_id" class="form-control" placeholder="La personne">
               </div>
               <div>
                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
</body>
</html>